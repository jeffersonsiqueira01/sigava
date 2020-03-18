<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGAVA - @yield('title') </title>


    <link rel="stylesheet" href="{!! asset('app/css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('app/css/app.css') !!}" />

    <!-- FooTable Bootstrap CSS -->
    <link rel="stylesheet" href="{!! asset('/footable/css/footable.bootstrap.min.css') !!}">

    <!-- Adicionando Javascript -->
    <script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    function exibirformacab()
    {

        var form = document.getElementById('form_add_acab');
        var div = document.getElementById('div_btn_acab');

        if(form.style.display != 'block') {
            form.style.display = 'block';
            div.style.display = 'none';
            return;
        }else{
        form.style.display = 'none';
        div.style.display = 'block';
        }
    };

    function exibirformcons()
    {

        var form = document.getElementById('form_add_cons');
        var div = document.getElementById('div_btn_cons');

        if(form.style.display != 'block') {
            form.style.display = 'block';
            div.style.display = 'none';
            return;
        }else{
        form.style.display = 'none';
        div.style.display = 'block';
        }
    };
    function exibirformacabedt()
    {

        var form = document.getElementById('form_edt_acab');
        var div = document.getElementById('div_btn_acab');

        if(form.style.display != 'block') {
            form.style.display = 'block';
            div.style.display = 'none';
            return;
        }else{
        form.style.display = 'none';
        div.style.display = 'block';
        }
    };

    function exibirformconsedt()
    {

        var form = document.getElementById('form_edt_cons');
        var div = document.getElementById('div_btn_cons');

        if(form.style.display != 'block') {
            form.style.display = 'block';
            div.style.display = 'none';
            return;
        }else{
        form.style.display = 'none';
        div.style.display = 'block';
        }
    };

    </script>
</head>
<body class="mini-navbar">

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @include('app.layouts.navigation')

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            @include('app.layouts.topnavbar')

            <!-- Main view  -->
            @yield('content')

            <!-- Footer -->
            @include('app.layouts.footer')

        </div>
        <!-- End page wrapper-->

    </div>

<!-- Mainly scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/app/js/popper.min.js"></script>
    <script src="/app/js/bootstrap.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('/app/js/app.js') }}"></script>

    <script src="{!! asset('/footable/js/footable.js') !!}"></script>

    <script>
        FooTable.MyFilteringStatus = FooTable.Filtering.extend({
            construct: function(instance){
                this._super(instance);
                this.statuses = ['Active','Disabled','Suspended'];
                this.def = 'Any Status';
                this.$status = null;
            },
            $create: function(){
                this._super();
                var self = this,
                    $form_grp = $('<div/>', {'class': 'form-group'})
                        .append($('<label/>', {'class': 'sr-only', text: 'Status'}))
                        .prependTo(self.$form);
        
                self.$status = $('<select/>', { 'class': 'form-control' })
                    .on('change', {self: self}, self._onStatusDropdownChanged)
                    .append($('<option/>', {text: self.def}))
                    .appendTo($form_grp);
        
                $.each(self.statuses, function(i, status){
                    self.$status.append($('<option/>').text(status));
                });
            },
            _onStatusDropdownChanged: function(e){
                var self = e.data.self,
                    selected = $(this).val();
                if (selected !== self.def){
                    self.addFilter('status', selected, ['status']);
                } else {
                    self.removeFilter('status');
                }
                self.filter();
            },
            draw: function(){
                this._super();
                var status = this.find('status');
                if (status instanceof FooTable.Filter){
                    this.$status.val(status.query.val());
                } else {
                    this.$status.val(this.def);
                }
            }
        });
        
        FooTable.components.register('filtering', FooTable.MyFilteringStatus);


        jQuery(function($){
            $('.table-property').footable({
                components: {
                    filtering: FooTable.MyFilteringStatus
                }
            });
        });
        
            
    </script>
   
@section('scripts')
@show

</body>
</html>
