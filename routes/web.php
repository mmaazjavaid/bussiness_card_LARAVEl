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




////////////////////////////////////USER CONTROLLER ROUTES/////////////////////////////////////



Route::get('/welcome',[UserDetailController::class,'admin_panel'])->name('admin_panel');


////////////////////////////HEADER FORM/////////////////////////////
Route::get('/header_form', function (Request $request) {
    return view('header_form', [
        'profileImg' => $request->profileImg,
        'name' => $request->name,
        'job' => $request->job
    ]);
})->name('header_form');

///////////////////////HEADER UPDATE/////////////////////////////

Route::post('/submit_header', [UserDetailController::class,'update_header'])->name("submit_header");


Route::post('/save_data',function(Request $request){
    $imageName = time().'.'.$request->image->extension();  
    $request->image->move(public_path('images'), $imageName);
    dd('done');
})->name("save_data");
