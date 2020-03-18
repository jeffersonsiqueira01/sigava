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
<form action="{{ route('storeStep2', $property->id) }}" method="POST">
    @method('put')
    @csrf
    <div class="form-row">
        <div class="form-group col-md-2">
          <label for="areaconstruida">Área Construida (m)</label>
          <input type="text" class="form-control" id="areaconstruida" name="areaconstruida">
        </div>
        <div class="form-group col-md-2">
          <label for="areaterreno">Área do Terreno (m)</label>
          <input type="text" class="form-control" id="areaterreno" name="areaterreno">
        </div>
        <div class="form-group col-md-2">
          <label for="indicefiscal">Índice Físcal</label>
          <input type="text" class="form-control" id="indicefiscal" name="indicefiscal">
        </div>
        <div class="form-group col-md-2">
            <label for="macrolocalizacao">Macrolocalização</label>
            <select class="form-control" id="macrolocalizacao" name="macrolocalizacao">
              <option value="" selected>-- Selecione --</option>
              <option value="1">1 - Periférica</option>
              <option value="2">2 - Não Central</option>
              <option value="3">3 - Central</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="distanciapolo">Distância Polo</label>
            <input type="text" class="form-control" id="distanciapolo" name="distanciapolo">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="acabamento_id">Padrão de Acabamento</label>
          <select class="form-control" id="acabamento_id" name="acabamento_id">
            <option value="" selected>-- Selecione --</option>
            @foreach ($acabamentos as $a)
            <option value="{{ $a->id }}">{{ $a->id}} - {{ $a->classificacao }}</option>
        @endforeach
          </select>
        </div>
        <div class="form-group col-md-3">
          <label for="conservacao_id">Estado de Conservação</label>
          <select class="form-control" id="conservacao_id" name="conservacao_id">
            <option value="" selected>-- Selecione --</option>
            @foreach ($conservacoes as $c)
                <option value="{{ $c->id }}">{{ $c->id}} - {{ $c->classificacao }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="idadeaparente">Idade Aparente</label>
          <input type="text" class="form-control" id="idadeaparente" name="idadeaparente">
        </div>
      </div>

      <div class="form-group col-12 text-right">
        <button type="submit" class="btn btn-primary">Avançar</button>
      </div>
</form>
