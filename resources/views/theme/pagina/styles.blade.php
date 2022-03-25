<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('titulo', "UPTECMS") | {{env('APP_NAME')}}</title>
<link rel="icon" href="{{asset('favicon.png')}}" type="image/png"/>
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{asset("assets/$theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
<!-- IonIcons -->
<link rel="stylesheet" href="{{asset("assets/$theme/dist/css/ionicons.min.css")}}">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{asset("assets/$theme/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css")}}">
<!-- Toastr -->
<link rel="stylesheet" href="{{asset("assets/$theme/plugins/toastr/toastr.min.css")}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
<link rel="stylesheet" href="{{asset('css/pagina.css')}}">
@yield('styles')