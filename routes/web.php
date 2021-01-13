<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Profile\ProController;
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;


use function Ramsey\Uuid\v1;



Route::get('/', function () {
    return view('welcome');
});
// Route::get('/login', [MyController::class, 'Login']);
// Route::get('/signpu', [MyController::class, 'Signup']);


//Route::view('/home','home.home',['name'=>'Hasan']);

Route::get('/login',[MyController::class, 'Login']);
Route::get('/showe',[MyController::class, 'Show']);

Route::any('/home',[MyController::class, 'Home'])->name('home');

Route::prefix('web')->name('site.')->group(function(){
    Route::get('/bangla-by',[MyController::class, 'Bangla'])->name('bangla');
});


//optional send data name?
//Route::get('show/{id}/{name?}',[MyController::class, 'Show'])->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);
Route::get('show/{id}/{name?}',[MyController::class, 'Show'])->whereNumber('id')->whereAlpha('name');

//Route::resource('posts',MyController::class);

Route::resource('admin/test',PostController::class)->only('show');

Route::get('/test',[PostController::class, 'index']);
Route::get('/foreach',[MyController::class, 'forEach']);

//profile................
Route::get('/prohome',[ProController::class,'home']);