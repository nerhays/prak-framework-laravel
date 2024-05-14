<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{ asset('/assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item @if($sb_menu == 'mahasiswa')menu-open @endif">
            <a href="{{ url('/page1') }}" class="nav-link @if($sb_menu == 'mahasiswa')active @endif">
              <i class="nav-icon fas fa-user-friend"></i>
              <p>
                Mahasiswa
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/mastermhs') }}" class="nav-link @if($sb_submenu == 'mastermahasiswa')active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Master Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/mastermk') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Master MK</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/masterkelas') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Master Kelas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/masterdosen') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Master Dosen</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item @if($sb_menu == 'perkuliahan')menu-open @endif">
            <a href="{{ url('/page2') }}" class="nav-link @if($sb_menu == 'perkuliahan')active @endif">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Perkuliahan
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">4</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/jdwlkuliah') }}" class="nav-link @if($sb_submenu == 'jadwalkuliah')active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jadwal Kuliah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/jdwlujian') }}" class="nav-link @if($sb_submenu == 'jadwalujian')active @endif" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jadwal Ujian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/absenmhs') }}" class="nav-link @if($sb_submenu == 'absenmahasiswa')active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Absen Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/nilaimhs') }}" class="nav-link @if($sb_submenu == 'nilaimahasiswa')active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai Mahasiswa</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>