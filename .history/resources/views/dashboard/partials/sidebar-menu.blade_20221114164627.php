
<div class="wrapper">
  <nav id="sidebar">
    <div class="sidebar-header">
      <span class="brand-text font-weight-light">Ambulance Hebat Web<br>Admin</span>
      <img src="img/logo_pemkot.png" width="56px" alt="">
    </div>
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('img/user.png') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        @auth
        <a href="#" class="d-block">Halo, {{ auth()->user()->name }}</a>
        @endauth
      </div>
    </div>
    <ul class="list-unstyled components">
      <li class="nav-item menu-open">
        <a href="/" class="nav-link {{ Request::is('/') ? 'active':'' }}">
          <i class="nav-icon fa fa-duotone fa-house-blank"></i>
          <p>Beranda</p>
          {{-- <p>
            Beranda
          </p> --}}
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('posts.index') }}" class="nav-link {{ (request()->is('dashboard/posts/*')) ? 'active':'' }}">
          <i class="nav-icon fas fa-columns"></i>
          <p>
            Daftar Post
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('galeri.index') }}" class="nav-link {{ Request::is('dashboard/galeri/*') ? 'active':'' }}">
          <i class="nav-icon far fa-image"></i>
          <p>
            Foto Kegiatan
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="fa-duotone fa-users"></i>
          <p>
            Manajemen User
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="/daftar-feedback" class="nav-link {{ Request::is('daftar-feedback') ? 'active':'' }}">
          <i class="nav-icon far fa-envelope"></i>
          <p>
            Tanya dan Keluhan
          </p>
        </a>
      </li>
  </ul>
  </nav>
</div>


{{-- <aside class="main-sidebar sidebar-dark-primary">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
       <span class="brand-text font-weight-light">Ambulance Hebat Web<br>Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/user.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          @auth
          <a href="#" class="d-block">Halo, {{ auth()->user()->name }}</a>
          @endauth
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/" class="nav-link {{ Request::is('/') ? 'active':'' }}">
              <i class="nav-icon fa fa-duotone fa-house-blank"></i>
              <p>Beranda</p>
              {{-- <p>
                Beranda
              </p> --}}
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="/dashboard/posts/create" class="nav-link {{ Request::is('dashboard/posts/create') ? 'active':'' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Buat Post
              </p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="{{ route('posts.index') }}" class="nav-link {{ (request()->is('dashboard/posts/*')) ? 'active':'' }}">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Daftar Post
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('galeri.index') }}" class="nav-link {{ Request::is('dashboard/galeri/*') ? 'active':'' }}">
              <i class="nav-icon far fa-image"></i>
              <p>
                Foto Kegiatan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-duotone fa-users"></i>
              <p>
                Manajemen User
              </p>
            </a>
          </li>
  
          <li class="nav-item">
            <a href="/daftar-feedback" class="nav-link {{ Request::is('daftar-feedback') ? 'active':'' }}">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Tanya dan Keluhan
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside> --}}