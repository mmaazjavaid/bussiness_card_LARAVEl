<?php

use App\Http\Controllers\CustomLinkController;
use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\UserSocialLinksController;
use App\Models\CustomLink;
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
Route::get('/createUser',function(){
dd('ok');
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


///////////////////////////Social icons adder/////////////////////////////


Route::get("/social_icon_adder",function(){
    $links=SocialLink::orderBy('id')->get();
    $user_links=UserSocialLinks::where('user_id',Auth::id())->get();
    return view('social_icon_adder',[
        "links"=>$links,
        "user_links"=>$user_links
    ]);
})->name('social_icon_adder');

///////////////////////SAVE SOCIAL NETWORK///////////////////////

// Route::get('/submit_about',[UserSocialLinksController::class,'store_link']);
Route::post('/submit_link',[UserSocialLinksController::class,'store_link'])->name('submit_link');


///////////////////////DELETE SOCIAL/////////////////////////////


Route::get('/delete-social',[UserSocialLinksController::class,'delete_link'])->name('delete-social');



//////////////////////UPDATE SOCIAL ///////////////////////////////


Route::get('/update_link',[UserSocialLinksController::class,'update_social'])->name('update_link');



//////////////////////////////CUSTOM FORM//////////////////////////////////

Route::get('/custom_network_form',function(){
    return view('custom_link_form');
})->name('custom_network_form');

////////////////////////////Custom link submit////////////////////////////


Route::post('/custom_link_submit',[CustomLinkController::class,"create_link"])->name('custom_link_submit');


////////////////////////Custom link delete//////////////////////////////

Route::get('/delete_custom_link',[CustomLinkController::class,"delete_custom"])->name('delete_custom_link');


//////////////////////CUSTOM LINK UPDATE form/////////////////////////////////


Route::get('/custom_link_update_form',[CustomLinkController::class,"update_form"])->name('custom_link_update_form');


//////////////////////////Custom link update//////////////////////////////////


Route::post('/custom_link_update',[CustomLinkController::class,"custom_link_update"])->name('custom_link_update');


////////////////////////////live profile view//////////////////////////////


Route::get('/live_preview',function(Request $request){
    $userDetails=UserDetail::where('user_id',$request->id)->first();
    $userlinks=UserSocialLinks::where('user_id',$request->id)->get();
    // $userLinksArray=[];
    // foreach ($userlinks as $singlelink) {
    //     $key = array('value');
    //     $single_value=array_fill_keys($key, $singlelink->link_url);
    //     $key_2 = array('name');
    //     $second_value=array_fill_keys($key_2, $singlelink->link_name);
    //     $data=$single_value+$second_value;        
    //     array_push($userLinksArray,$data);
    // }
    
    // // array_push($data,$userDetails->email);
    // $keys = array('email');
    // $keys_2=array('Links');
    // $a = array_fill_keys($keys, $userDetails->email);
    // $b=array_fill_keys($keys_2,$userLinksArray);
    // $new_array=$a+$b;
    // dd (json_encode($new_array));
    $customlinks=CustomLink::where('user_id',$request->id)->get();
    $custom_count=CustomLink::where('user_id',$request->id)->get();
    
    $links=[];
    foreach ($userlinks as $userlink) {
        $link=SocialLink::where('id',$userlink->social_id)->first();
        array_push($links,$link);
    }
    return view('public_view',[
        "userDetails"=>$userDetails,
        "userlinks"=>$userlinks,
        "customlinks"=>$customlinks,
        "links"=>$links,
        "custom_count"=>count($custom_count)
    ]);
})->name('live_preview');





///////////////////////////////////Login//////////////////////////////

Route::get('/mylogin',function(){
    return view('auth.mylogin');
});
Route::get('/mysignup',function(){
    return view('auth.mysignup');
});


