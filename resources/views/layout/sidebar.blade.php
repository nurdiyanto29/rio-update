<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('dist/img/logo1.png') }}" alt="Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Andila Tani</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="fas fa-house-damage"></i>
                        <p>
                            &nbsp;&nbsp; Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-box-open"></i>
                        <p>&nbsp;&nbsp; Kelola Barang
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('barang.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Barang</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-money-bill"></i>
                        <p>&nbsp;&nbsp; Transaksi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('penjualan.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Penjualan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pembelian.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pembelian
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-backward"></i>
                        <p>&nbsp;&nbsp; Retur / Pengembalian
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('retur-jual.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Retur Jual
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('retur-beli.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Retur Beli
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                  <a href="{{ route('user.index') }}" class="nav-link">
                      <i class="fas fa-user"></i>
                      <p>
                          &nbsp;&nbsp; Pegawai
                      </p>
                  </a>
              </li>
               
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
