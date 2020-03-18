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
<form action="{{ route('storeStep3',[$property->id])}}" method="POST">
    @method('put')
    @csrf
    <div class="form-row">
      <div class="form-group col-sm-3">
        <label for="numquarto">Núm. Quartos</label>
        <input type="number" class="form-control" id="numquarto" name="numquarto" step="1">
      </div>
      <div class="form-group col-sm-3">
        <label for="numsuite">Núm. Suites</label>
        <input type="number" class="form-control" id="numsuite" name="numsuite" step="1">
      </div>
      
      <div class="form-group col-sm-3">
          <label for="numbanheiro">Núm. Banheiros</label>
          <input type="number" class="form-control" id="numbanheiro" name="numbanheiro" step="1">
      </div>
      <div class="form-group col-sm-3">
        <label for="numgaragem">Garagem Coberta</label>
        <select name="numgaragem" id="numgaragem" class="form-control" required>
          <option value="" selected>-- Selecione --</option>
          <option value="0">Não</option>
          <option value="1">Sim</option>
        </select>
      </div>
    </div>
      <div class="form-row">
        <div class="form-group col-md-2">
          <label for="condominio">Condomínio</label>
          <select name="condominio" id="condominio" class="form-control" required>
            <option value="" selected>-- Selecione --</option>
            <option value="0">Não</option>
            <option value="1">Sim</option>
          </select>
        </div>
        <div class="form-group col-md-10">
          <label for="equipamentos">Equipamentos</label>
          <input type="text" class="form-control" id="equipamentos" name="equipamentos">
        </div>
        <div class="form-group col-md-12">
          <label for="obs">Obs</label>
          <textarea class="form-control" id="obs" name="obs"></textarea>
        </div>
      </div>

      <div class="form-group col-12 text-right">
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
</form>