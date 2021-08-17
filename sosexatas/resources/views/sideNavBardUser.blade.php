<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">S.O.S. EXATAS</span>
    </a>

    <!-- Barra lateral -->
    <div class="sidebar">
        <!-- Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Disciplinas<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        @foreach($disc_to_join as $disc)
                            <li class="nav-item">
                                <a href="/selecionaDisciplina/{{session()->get('idUsuario')}}/{{$disc->idDisc}}" onclick="return confirm('Deseja adicionar a disciplina {{$disc->nomeDisc}} + ?');" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{$disc->nomeDisc}}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/perfil" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Perfil<i class="right fas fa-angle-left"></i></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/logout" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Logout<i class="right fas fa-angle-left"></i></p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>