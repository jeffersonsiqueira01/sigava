@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('imovel.store')}}" method="POST">
  @csrf
    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="usercoleta">Responsável pela Coleta</label>
        <input type="text" class="form-control" id="usercoleta" name="usercoleta" value="{{ Auth::user()->name }}">
      </div>
      <div class="form-group col-md-3">
        <label for="contact_id">Informante</label>
        <select name="contact_id" id="contact_id" class="form-control">
          <option value="" selected>-- Escolha um informante --</option>
          @foreach ($contacts as $c)
            <option value="{{$c->id}}">{{ $c->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="objetivo">Objetivo</label>
        <select class="form-control" id="objetivo" name="objetivo">
          <option value="1" selected>Venda</option>
          <option value="2">Oferta</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="vltotal">Valor Total</label>
        <input type="text" class="form-control" id="vltotal" name="vltotal">
      </div>
      <div class="form-group col-md-2">
        <label for="dtcoleta">Data Coleta</label>
        <input type="date" class="form-control" id="dtcoleta" name="dtcoleta">
      </div>
    </div>
    <div class="pt-5 border">  
      <h3>Endereço</h3>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2">
          <label for="cep">CEP *</label>
          <input type="text" class="form-control" id="cep" name="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" required />

        </div>
        <div class="form-group col-md-1">
          <button type="button" class="btn btn-primary" style="margin-top:21px;" onclick="pesquisacep();">Buscar</button>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="rua">Endereço</label>
          <input type="text" class="form-control" id="rua" name="rua" readonly>
        </div>
        <div class="form-group col-md-1">
          <label for="numero"><span class="small">Número*</span></label>
          <input type="text" class="form-control" id="numero" name="numero" required>
        </div>
        <div class="form-group col-md-2">
          <label for="bairro">Bairro</label>
          <input type="text" class="form-control" id="bairro" name="bairro" readonly>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-2">
          <label for="cidade">Cidade</label>
          <input type="text" class="form-control" id="cidade" name="cidade" readonly>
        </div>
        <div class="form-group col-md-1">
          <label for="uf">Estado</label>
          <input type="text" class="form-control" id="uf" name="uf" readonly>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12 hidden">
          <label for="ibge">ibge</label>
          <input type="text" class="form-control" id="ibge" name="ibge" readonly>
        </div>
        <div class="form-group col-md-12">
          <label for="complemento">Complemento</label>
          <input type="text" class="form-control" id="complemento" name="complemento">
        </div>
      </div>


    <div class="form-group col-12 text-right">
      <button type="submit" class="btn btn-primary">Avançar</button>
    </div>
  </form>



 