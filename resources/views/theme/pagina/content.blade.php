@if ($message = Session::get('success'))
    <div id="toastsContainerTopRight" class="alert toasts-top-right fixed mt-3 mr-2">
        <div class="toast bg-success fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="mr-auto">Completado</strong>
                <small></small>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">{{ $message }}</div>
        </div>
    </div>
@endif
@if ($message = Session::get('info'))
    <div id="toastsContainerTopRight" class="alert toasts-top-right fixed mt-3 mr-2">
        <div class="toast bg-info fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="mr-auto">Alerta</strong>
                <small></small>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">{{ $message }}</div>
        </div>
    </div>
@endif
@if ($message = Session::get('error'))
    <div id="toastsContainerTopRight" class="alert toasts-top-right fixed mt-3 mr-2">
        <div class="toast bg-danger fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="mr-auto">Error</strong>
                <small></small>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">{{ $message }}</div>
        </div>
    </div>
@endif
@yield('contenido')