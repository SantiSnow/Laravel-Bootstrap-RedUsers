<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdministradorController;
use App\Models\Compra;
use App\Models\User;
use App\Models\Departamento;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=> 'auth'], function (){ 
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/ventas', function () {
        return view('ventas');
    });
    
    Route::get('/compras', [AdministradorController::class, 'getCompras']);

    Route::post('/nueva-compra', [AdministradorController::class, 'nuevaCompra']);
    
    Route::get('/usuarios', [AdministradorController::class, 'getUsuarios']);
    
    Route::get('/departamentos', [AdministradorController::class, 'getDepartamentos']);
    
    Route::get('/exportes', function () {
        return view('exportes');
    });
    
    Route::get('/perfil', function () {
        $user = auth()->user();
        return view('perfil', compact('user'));
    });

    //exportes
    Route::get('/exportar-compras', function () {
        $compras = Compra::all();
        return view('exportes.compras', compact('compras'));
    });

    Route::get('/exportar-ventas', function () {
        return view('exportes.ventas');
    });

    Route::get('/exportar-usuarios', function () {
        return view('exportes.usuarios');
    });

    Route::get('/exportar-departamentos', function () {
        return view('exportes.departamentos');
    });
});

require __DIR__.'/auth.php';
