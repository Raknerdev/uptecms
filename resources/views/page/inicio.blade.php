@extends("theme.$theme_pp.layout")
@section('titulo')
    Inicio
@stop
@section('styles')

@stop
@section('contenido')
<div class="content p-5 bg-gradient-white">
    <div class="row">
        <div class="col-md-7 mr-4 carrusel mb-4">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="{{asset("assets/img/img_1.png")}}" class="d-block w-100" alt="...">
                      <div class="card-img-overlay mt-3 ml-3 text-white w-50">
                        <h4 class="mt-3 mb-5">Titulo del Post o Destacado</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      </div>
                      <div class="carousel-caption text-left">
                        <a href="#" class="card-text mt-5 btn btn-transparent text-white">Continuar leyendo >></a>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset("assets/img/img.png")}}" class="d-block w-100" alt="...">
                    <div class="card-img-overlay mt-3 ml-3 text-white w-50">
                        <h5 class="mt-3 mb-5"><b>Titulo del Post o Destacado</b></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="carousel-caption text-left">
                      <a href="#" class="card-text mt-5 btn btn-transparent text-white">Continuar leyendo >></a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col ml-3 card bg-gradient-dark text-center">
            <div class="card-header">
                <h3 class="card-tittle">Ingresar Algo</h3>
            </div>
        </div>
    </div>
    <div class="row">
        @php
            $post=12;
        @endphp
        @for ($i = 0; $i < $post; $i++)    
        <div class="col-3">
            <div class="card bg-gradient-info">
                <div class="card-header">Titulo</div>
                <div class="card-body">Contenido</div>
                <div class="card-footer">
                    <a class="btn text-white float-right" href="{{ route('page.inicio', $i) }}">Saber más >></a>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>
@stop
@section('scripts')
<script>
    // javascript:window.print()
    // jQuery(window).on('load', function() {  
        // javascript:window.print()
    // });
</script>
@endsection