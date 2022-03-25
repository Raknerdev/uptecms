<div class="banner bg-white row">
    <div class="col-12">
        <img src="{{asset("assets/img/banner-l.png")}}" class="banner-img">
        <img src="{{asset("assets/img/banner-r.png")}}" class="banner-img float-right">
    </div>
</div>
<nav class="navbar navbar-expand-md navbar-dark bg-gradient-dark elevation-1">
    <a class="navbar-brand p-1 ml-3" href="{{ route('page.inicio') }}">
        <img src="{{asset('favicon.png')}}" width="60" height="60" class="d-inline-block align-top" alt="{{env('APP_NAME')}}">
    </a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        {{-- Menu Izquierda --}}
        <div class="navbar-nav mr-auto">
        </div>
        {{-- Menu Derecha --}}
        <div class="navbar-nav my-2 my-lg-0 mr-3">
            <a class="nav-link active" href="{{ route('page.inicio') }}">
                <i class="fas fa-home mr-1"></i>Inicio
            </a>
            <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Select
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('page.inicio') }}">Action</a>
                <a class="dropdown-item" href="{{ route('page.inicio') }}">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('page.inicio') }}">Something else here</a>
              </div>
            </div>
            <a class="nav-link" href="{{ route('page.inicio') }}">Menu</a>
            <a class="nav-link" href="{{ route('page.inicio') }}">Menu</a>
            <a class="nav-link" href="{{ route('page.inicio') }}">Menu</a>
        </div>
    </div>
</nav>