<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Test Admin</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                {{-- <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Starter Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Active Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inactive Page</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ route('beranda') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Beranda</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('akun') }}" class="nav-link {{ request()->is('akun') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Akun</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('area') }}" class="nav-link {{ request()->is('area') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Area</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('paket') }}" class="nav-link {{ request()->is('paket') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Paket</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pelanggan') }}"
                        class="nav-link {{ request()->is('pelanggan') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Pelanggan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pengguna') }}"
                        class="nav-link {{ request()->is('pengguna') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Pengguna</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tagihan') }}" class="nav-link {{ request()->is('tagihan') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Tagihan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('transaksi') }}"
                        class="nav-link {{ request()->is('transaksi') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Transaksi</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
