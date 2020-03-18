<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <div class="minimalize-styl-info ">
                <b>CLIENTE: </b>{{ strtoupper(Auth::user()->name) }} {{ strtoupper(Auth::user()->sobrenome) }} <br/>
                <b>AMBIENTE:</b> VERSÃO DE TESTE

            </div>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>

                <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i>  {{ __('Sair') }}
                </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </li>
        </ul>
    </nav>
</div>
