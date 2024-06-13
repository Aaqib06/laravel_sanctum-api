<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\userController;
use App\Http\Middleware\validUser;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// // route::view('/','show');
// route::get('/',[homeController::class,'show'])->name('/');



// route::controller(homeController::class)->group(function(){
//   route::view('/register','register')->name('register');
//   route::post('/register','register')->name('register');
  
//     route::get('/edit/{id}','edit')->name('edit');
  
//    route::post('/edit/{id}','update')->name('edit');
//    route::view('/login','login')->name('login');
//    route::post('/login','login')->name('login');
//    route::get('/logout','logout')->name('logout');
//    route::get('/delete{id}','delete')->name('delete');
// });



// route::middleware(['validUser'])->group(function(){
//   route::get('/dashboard',[homeController::class,'dashboard'])->name('dashboard');
//   route::get('/',[homeController::class,'show'])->name('/');
// });

route::resource('user',userController::class);

