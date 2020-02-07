<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>AgroBRA - Um novo jeito de negociar!</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/estilo.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/mapa.css')}}">

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          Fale conosco: WhatsApp: +55 699 8441-0581
        </div>
        <div class="col-md-6 text-right">
          Você está em: Rondônia
        </div>
      </div>
    </div>
    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar" style="background-color: #034001;">

    <div class="container">
      <!-- Brand -->
      <a class="navbar-brand" href="/">
        <img src="{{asset('img/logo.png')}}" alt="" width="50%">
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons ml-md-auto d-md-flex text-center">

          <li class="nav-item mt-1 pl-1">
            <a href="{{ route('register') }}" class="nav-link"  style="color:white;">
              <i class="fab fa-github mr-2"></i><b>Cadastre-se</b>
            </a>
          </li>
          <li class="nav-item mt-1 pl-1">
            <a href="{{ route('login') }}" class="nav-link"
            style="color:white; border-radius: 10px; border: 2px solid white;">
            <b>Entrar</b>
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!-- Full Page Intro -->
  <div class="full-page-intro" style="background-color: white;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn mt-4 mb-5">
            <div class="col-12">

                <h3 class="h3 text-center mb-4 mt-2">Selecione o tipo de cadastro</h3>
            </div>
            <div class="col-sm-6 mt-1">
                    <a href="{{ route('cadastro', 'produtor')}}">
                        <div class="card tipo-cadastro"
                        style="background-color: #067302; color: white;">
                        <div class="card-body text-center">
                            <h5 class="card-title">PRODUTOR</h5>

                        </div>
                        </div>
                    </a>
                </div>
            <div class="col-sm-6 mt-1">
                <a href="{{ route('cadastro', 'empresa')}}">
                    <div class="card tipo-cadastro"
                    style="background-color: #067302; color: white;">
                      <div class="card-body text-center">
                          <h5 class="card-title">EMPRESA</h5>

                      </div>
                    </div>
                </a>
            </div>

        </div>
      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank" role="button">Download MDB
        <i class="fas fa-download ml-2"></i>
      </a>
      <a class="btn btn-outline-white" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Start free tutorial
        <i class="fas fa-graduation-cap ml-2"></i>
      </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/mdbootstrap" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/MDBootstrap" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
        <i class="fab fa-google-plus-g mr-3"></i>
      </a>

      <a href="https://dribbble.com/mdbootstrap" target="_blank">
        <i class="fab fa-dribbble mr-3"></i>
      </a>

      <a href="https://pinterest.com/mdbootstrap" target="_blank">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

      <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
        <i class="fab fa-github mr-3"></i>
      </a>

      <a href="http://codepen.io/mdbootstrap/" target="_blank">
        <i class="fab fa-codepen mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">

      <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank">© 2018 Copyright: agrobra.com </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

    <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script>
        $(document).ready(function(){
            //atribui a função de click em cima do botão
            $('#btn-empresa').on('click', function(){
                //o formulário irá mostrar ou esconder.
                $('#form-produtor').hide('slow');
                $('#form-empresa').show('slow');
            });
        });
        //quando o DOM tiver pronto
        $(document).ready(function(){
            //atribui a função de click em cima do botão
            $('#btn-produtor').on('click', function(){
                //o formulário irá mostrar ou esconder.
                $('#form-empresa').hide('slow');
                $('#form-produtor').show('slow');
            });
        });

    </script>
</body>
</html>
