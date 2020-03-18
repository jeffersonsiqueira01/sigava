<div class="col-lg-6">
    <div class="ibox mt-4">
        <div class="ibox-title">
            <h5>Acabamentos</h5>
            <div class="ibox-tools">
            <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
            </a>
            <a class="close-link">
                <i class="fa fa-times"></i>
            </a>
        </div>
    </div>


        <div class="ibox-content">

            <div class="row">
                
                <div class="col-sm-12">
                    <!-- begin form create -->
                    <form action="{{ route('acabamento.store')}}" method="POST" id="form_add_acab">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="classificacao" id="classificacao" placeholder="Classificação">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="number" class="form-control" name="estado" placeholder="Estado" min="0" max="100" step="1" required >
                            </div>
                            <div class="form-group col-md-4">
                                <input type="number" class="form-control" name="cub" placeholder="CUB." min="0" max="10000" step="0.01" required>
                            </div>
                        </div>
                        
                        <div class="row text-right">
                            <div class="col-sm-12 text-right">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i>&nbsp;Salvar</button>
                                <button class="btn btn-warning" type="button" onclick="exibirformacab()"><i class="fa fa-times"></i>&nbsp;Cancelar</button>
                            </div>
                        </div>
                      </form>
                
                
                
                
                    <!-- end form create -->
                </div>

                <div class="col-sm-12">
                    <!-- begin form edit -->
                    <form action="{{ route('acabamento.update',1)}}" method="POST" id="form_edt_acab">
                        @csrf
                        @method('PUT')
                        <div class="row">
                          <div class="form-group col-md-12">
                            <input type="text" class="form-control" name="descricao" placeholder="Descrição">
                          </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="classificacao" id="classificacao" placeholder="Classificação">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="number" class="form-control" name="estado" placeholder="Estado" min="0" max="10" step="0.5" required >
                            </div>
                            <div class="form-group col-md-4">
                                <input type="number" class="form-control" name="cub" placeholder="Cub." min="0" max="100000" step="0.01" required>
                            </div>
                        </div>
                        
                        <div class="row text-right">
                            <div class="col-sm-12 text-right">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i>&nbsp;Salvar</button>
                                <button class="btn btn-warning" type="button" onclick="exibirform()"><i class="fa fa-times"></i>&nbsp;Cancelar</button>
                            </div>
                        </div>
                      </form>
                
                
                
                
                    <!-- end form edit -->
                </div>
                <div class="col-sm-12" id="div_btn_acab">
                    <div class="row">
                        <div class="col-sm-7">
                            <input type="text" name="buscar" id="" class="form-control" placeholder="Digite sua busca">
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="#"><button class="btn btn-warning" type="button"><i class="fa fa-paste"></i>&nbsp;Buscar</button></a>
                            <button class="btn btn-primary" type="button" id="btn_acab_add" onclick="exibirformacab()"><i class="fa fa-plus-square"></i>&nbsp;Incluir</button>
                        </div>

                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>CLASSIFICAÇÃO</th>
                                    <th>ESTADO</th>
                                    <th>COEF.</th>
                                    <th>AÇÕES</th>
                                </tr>
                            </thead>
                            
                            <tbody>    
                                @foreach ($acabamentos->sortByDesc('cub') as $a)
                                <tr>
                                    <td>{{ $a->classificacao }}</td>
                                    <td>{{ $a->estado }}</td>
                                    <td>{{ $a->cub }}</td>
                                    <td><a onclick="exibirformacabedt()"><i class="fa fa-plus-square"></i>&nbsp;Edit</a></td>
                                </tr>
                                @endforeach                          
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>