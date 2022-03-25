<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

// Ubicado en vendor\laravel\ui\src\AuthRouteMethods.php 
// funcion auth()
Auth::routes();
// Ruta Login
Route::prefix('administracion')->group(function () {
    Route::get('/rdev-ingreso', function () {return view ('/auth/login');})->name('ingreso');
});
// Rutas Autenticadas
Route::middleware('auth')->group(function () {
    Route::prefix('administracion/rdev-admin/')->group(function () {
        Route::get('inicio', function () {return view ('/admin/inicio');})->name('admin.inicio');
    });
});

// Rutas Públicas
Route::get('/', function () {return view ('/page/inicio');})->name('page.inicio');



// Ejemplos redirección a ruta & redirección a funcion a controlador

// Route::get('/ingresar', function () { return redirect ('login');});
// Route::get('/home', 'App\Http\Controllers\FacturasController@index')->name('inicio');