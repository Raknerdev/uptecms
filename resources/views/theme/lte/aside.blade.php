<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('favicon.png') }}" alt="{{env('APP_NAME')}}">
      </div>
      <div class="info text-center m-auto">
        <h5 class="text-white-50">
          {{env('APP_NAME')}}
          <sup>
            <small>V-{{env('APP_VERSION')}}</small>
          </sup>
        </h5>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('admin.inicio') }}" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>Inicio</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('page.inicio') }}" class="nav-link">
            <i class="fas fa-file-invoice nav-icon"></i>
            <p>Opción</p>
          </a>
        </li>
        @can('permiso')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-store-slash nav-icon"></i>
              <p>Opción</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link menu-is-opening menu-open">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
              Opciones
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-barcode nav-icon"></i>
                  <p>Opción</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-utensils nav-icon"></i>
                  <p>Opción</p>
                </a>
              </li>
            </ul>
          </li>
        @endcan
        @role('root')
        <li class="nav-item">
          <a class="nav-link menu-is-opening menu-open">
            <i class="nav-icon fas fa-users-cog"></i>
            <p>
              Opciones
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-users nav-icon"></i>
                <p>Usuarios</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-tools nav-icon"></i>
                <p>Parametros</p>
              </a>
            </li>
          </ul>
        </li>
        @endrole
      </ul>
    </nav>
  </div>
</aside>