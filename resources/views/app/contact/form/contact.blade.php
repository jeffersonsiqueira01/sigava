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
<form action="{{ route('contato.store')}}" method="POST">
  @csrf
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="name">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-7">
      <label for="tel">Telefone</label>
      <input type="text" class="form-control" name="tel" id="dataInicial">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-7">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Ex. contato@sigava.com.br" required>
  </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="status" id="status" value="I">
      <label class="form-check-label" for="status">
        Inativo
      </label>
    </div>
  </div>
  <div class="row text-right">
    <div class="form-group col-md-7">
      <a href="/sigava/contato">
        <button type="button" class="btn btn-warning">Cancelar</button>
      </a>
      <button type="submit" class="btn btn-primary">Gravar</button>
    </div>
  </div>
</form>