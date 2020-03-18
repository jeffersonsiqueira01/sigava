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
          <label for="areaconstruida">Área Construida</label>
          <input type="text" class="form-control" id="areaconstruida">
        </div>
        <div class="form-group col-md-2">
          <label for="areaterreno">Área do Terreno</label>
          <input type="text" class="form-control" id="areaterreno" name="areaterreno">
        </div>
        <div class="form-group col-md-2">
          <label for="indicefiscal">Índice Físcal</label>
          <input type="text" class="form-control" id="indicefiscal" name="indicefiscal">
        </div>        
        <div class="form-group col-md-2">
            <label for="macrolocalizacao">Macrolocalização</label>
            <input type="text" class="form-control" id="macrolocalizacao" name="macrolocalizacao">
        </div>
        <div class="form-group col-md-2">
            <label for="distanciapolo">Distância Polo</label>
            <input type="text" class="form-control" id="distanciapolo" name="distanciapolo">
        </div>
      </div>
  
      <div class="form-group col-12 text-right">
        <button type="submit" class="btn btn-primary">Avançar</button>
      </div>
</form>