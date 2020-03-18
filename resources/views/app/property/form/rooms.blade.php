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
          <label for="numquarto">Núm. Quartos</label>
          <input type="text" class="form-control" id="numquarto" name="numquarto">
        </div>
        <div class="form-group col-md-2">
          <label for="numsuite">Núm. Suites</label>
          <input type="text" class="form-control" id="numsuite" name="numsuite">
        </div>
        <div class="form-group col-md-2">
          <label for="numgaragem">Núm. Garagem</label>
          <input type="text" class="form-control" id="numgaragem" name="numgaragem">
        </div>
        <div class="form-group col-md-2">
            <label for="numbanheiros">Núm. Banheiros</label>
            <input type="text" class="form-control" id="numbanheiros" name="numbanheiros">
          </div>
      </div>
  
      <div class="form-group col-12 text-right">
        <button type="submit" class="btn btn-primary">Avançar</button>
      </div>
</form>