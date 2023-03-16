<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformacionController;

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

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/datos', function () {
    return view('datos.index');
});
Route::get('/datos/create',[InformacionController::class,'create']);
*/

Route::resource('datos',InformacionController::class);

