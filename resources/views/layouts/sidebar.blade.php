<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PT Candi Arta</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pekerja" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pekerja</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pelanggan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pelanggan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/supplier" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/bibit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bibit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/lahan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lahan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/sawit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sawit</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="/user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <li class="nav-item">
                <a href="/tanam" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tanam</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/perawatan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perawatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/panen" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Panen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pembelian" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembelian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/penjualan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penjualan</p>
                </a>
              </li>
              
              {{-- <li class="nav-item">
                <a href="/pengeluaran" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Beban Pengeluaran</p>
                </a>
              </li> --}}
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/laporan/stok" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lap. Stok </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/laporan/pelanggan" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lap. Pelanggan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/laporan/supplier" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lap. Supplier</p>
              </a>
            </li> 
            <li class="nav-item">
              <a href="/laporan/pekerja" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lap. Pekerja</p>
              </a>
            </li> 
            <li class="nav-item">
              <a href="/laporan/tanam" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lap. Tanam</p>
              </a>
            </li> 
            <li class="nav-item">
              <a href="/laporan/perawatan" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lap. Perawatan</p>
              </a>
            </li> 
            <li class="nav-item">
              <a href="/laporan/panen" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lap. Panen</p>
              </a>
            </li> 
             {{-- <li class="nav-item">
              <a href="/laporan/pengeluaran" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lap. Pengeluaran</p>
              </a>
            </li> --}}
              <li class="nav-item">
                <a href="/laporan/penjualan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lap. Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/laporan/pembelian" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lap. Pembelian</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="/laporan/laba" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lap. Laba Rugi</p>
                </a>
              </li> --}}
            </ul>
          </li>
          <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="nav-icon fa fa-window-close"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>