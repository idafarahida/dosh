<?php
use App\Http\Controllers\TestController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

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

/*route::get('/welcome',function() {
  return 'Welcome to Deparment of Occupational and Health';
});*/

Route::get('todos',[TodoController::class, 'index']);

Route::get('welcome', function () {
    return view('test');
});
