<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', function() {
 return view('auth.login');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
Route::get('/usuarios', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/usuarios','UserController@index');
Route::resource('/orders_detail', 'Orders_detailController');
Route::resource('/order', 'OrderController');
Route::get('/file_PDF','FileController@index');
Route::post('/file_PDF','FileController@store')->name('files.store');
});
