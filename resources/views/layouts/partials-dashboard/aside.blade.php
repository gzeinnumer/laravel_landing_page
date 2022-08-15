<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('wowsi.index') }}" class="brand-link">
        <img src="{{asset('asset/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">WOWSI 2022</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboardv2.index') }}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kelompok.index') }}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Kelompok
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tugas.index') }}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Tugas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>

                            User

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('penilaian.index') }}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>

                            Penilaian

                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>