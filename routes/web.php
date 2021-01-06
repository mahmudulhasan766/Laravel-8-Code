<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;


use function Ramsey\Uuid\v1;

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
// Route::get('/login', [MyController::class, 'Login']);
// Route::get('/signpu', [MyController::class, 'Signup']);

//Route::view(uri:'/home',view:'home',['name'=>'hasan']);
//Route::view('/home','home.home',['name'=>'Hasan']);

Route::get('/login',[MyController::class, 'Login']);
Route::get('/bangla-by',[MyController::class, 'Bangla'])->name('bangla');
Route::get('/home',[MyController::class, 'Home'])->name('home');

