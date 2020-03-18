<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                            <strong class="font-bold">{{ Auth::user()->name }}</strong>
                            </span> <span class="text-muted text-xs block">Opções<b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Perfil</a></li>
                        <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Sair') }}
     </a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    SIGAVA
                </div>
            </li>
            <li class="@yield('home')">
                <a href="{{ url('/sigava') }}"><i class="fa fa-tachometer"></i> <span class="nav-label">Home</span></a>
            </li>
            <li class="">
                <a href="{{ url('/sigava') }}"><i class="fa fa-bullseye"></i> <span class="nav-label">Calcular</span></a>
            </li>
            <li class="@yield('imoveis')">
                <a href="{{ url('/sigava/imovel') }}"><i class="fa fa-database"></i> <span class="nav-label">Imóveis</span></a>
            </li>
            <li class="@yield('contato')">
                <a href="{{ url('/sigava/contato') }}"><i class="fa fa-address-book-o"></i> <span class="nav-label">Contatos</span> </a>
            </li>
            <li class="@yield('parametros')">
                <a href="{{ url('/sigava/parametros') }}"><i class="fa fa-sliders"></i> <span class="nav-label">Parâmetros</span> </a>
            </li>
            <li class="">
                <a href="{{ url('/sigava/minor') }}"><i class="fa fa-history"></i> <span class="nav-label">Histórico</span> </a>
            </li>
            
        </ul>

    </div>
</nav>
