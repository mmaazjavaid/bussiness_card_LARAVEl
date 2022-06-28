<?php

use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\UserSocialLinksController;
use App\Models\SocialLink;
use App\Models\UserDetail;
use App\Models\UserSocialLinks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

/////////////////////About Form/////////////////////////////////

Route::get('/submit_form',function(Request $request){
    
    return view('submit_form',[
        "about"=>$request->about
    ]);
})->name('submit_form');

////////////////////ABOUT UPDATE///////////////////////////////

Route::post('/submit_about',[UserDetailController::class,"update_about"])->name('submit_about');


//////////////////SOCIAL NETWORK FORM ////////////////////////

Route::get('/social_network_form',function(){
    $user_links_id=UserSocialLinks::where('user_id',Auth::id())->get();
    $user_links=[];
    $all_links=[];
    // foreach ($user_links_id as $user_link_id) {
    //     $link=SocialLink::where('id',$user_link_id['social_id'])->first();
    //     array_push($user_links,$link);
    // }
    $all_links=SocialLink::orderBy('id')->get();
    return view('social_network_form',[
        "user_links"=>$user_links_id,
        "all_links"=>$all_links
    ]);
})->name('social_network_form');


///////////////////////SAVE SOCIAL NETWORK///////////////////////

Route::get('/submit_about',[UserSocialLinksController::class,'store_link']);


///////////////////////DELETE SOCIAL/////////////////////////////


Route::get('/delete-social',[UserSocialLinksController::class,'delete_link'])->name('delete-social');



//////////////////////UPDATE SOCIAL ///////////////////////////////


Route::get('/update_link',[UserSocialLinksController::class,'update_social'])->name('update_link');