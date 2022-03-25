<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>@yield('titulo', "UPTECMS") | {{env('APP_NAME')}}</title>
    <link rel="icon" href="{{asset('favicon.png')}}" type="image/png"/>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"/>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}"/>
    <!-- IonIcons -->
    <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/ionicons.min.css")}}"/>
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}"/>
    @yield('styles')
  </head>
<body class="hold-transition login-page bg-gradient-dark">
  {{-- style body --}}
            {{-- style=" background: url({{asset("assets/img/background.png")}}); 
            background-repeat: no-repeat; background-position: center center; 
            background-attachment: fixed; background-size: cover; background-color: #28235d;" --}}
  @yield('contenido')

  <script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
  <script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
</body>
</html>

