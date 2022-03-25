<nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    {{--  <li class="nav-item d-none d-sm-inline-block">
      <a href="/" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>  --}}
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto text-white">
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
      @csrf
      <a class="btn btn-transparent text-white" onclick="this.closest('form').submit();">
        <i class="fas fa-sign-out-alt"></i>
      </a>
    </form>
    
  </ul>
</nav>