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
                        <li><a href="#">Sair</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    SIGAVA
                </div>
            </li>
            <li class="active">
                <a href="{{ url('/sigava') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Home</span></a>
            </li>
            <li class="">
                <a href="{{ url('/sigava') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Calcular</span></a>
            </li>
            <li class="">
                <a href="{{ url('/sigava/minor') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Histórico</span> </a>
            </li>
        </ul>

    </div>
</nav>
