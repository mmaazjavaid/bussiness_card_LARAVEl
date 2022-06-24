<?php

use App\Http\Controllers\UserDetailController;
use Illuminate\Http\Request;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile',[UserDetailController::class,'index'])->name('profile');
Route::get('/welcome',function (){
    return view("welcome");
});
Route::get('/header_form',function (){
return view('header_form');
})->name('header_form');
Route::post('/save_data',function(Request $request){
    $imageName = time().'.'.$request->image->extension();  
    $request->image->move(public_path('images'), $imageName);
    dd('done');
})->name("save_data");
