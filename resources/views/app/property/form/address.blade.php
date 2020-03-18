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
      <div class="form-group col-md-2">
        <label for="postal_code">CEP</label>
        <input type="text" class="form-control" id="postal_code" name="postal_code">

      </div>
      <div class="form-group col-md-1">
        <button type="button" class="btn btn-primary" style="margin-top:21px;">Buscar</button>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="address">Endereço</label>
        <input type="text" class="form-control" id="address" name="address">
      </div>
      <div class="form-group col-md-1">
        <label for="number">Número</label>
        <input type="text" class="form-control" id="number" name="number">
      </div>
      <div class="form-group col-md-4">
        <label for="district">Bairro</label>
        <input type="text" class="form-control" id="district" name="district">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="city">Cidade</label>
        <input type="text" class="form-control" id="city" name="city">
      </div>
      <div class="form-group col-md-6">
        <label for="state">Estado</label>
        <input type="text" class="form-control" id="state" name="state">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="complement">Complemento</label>
        <input type="text" class="form-control" id="complement" name="complement">
      </div>
    </div>

    <div class="form-group col-12 text-right">
      <button type="submit" class="btn btn-primary">Avançar</button>
    </div>
  </form>
