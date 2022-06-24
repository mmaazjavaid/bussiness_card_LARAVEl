<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index(Request $request){
        dd($request->all());
    }


    ///////////////////////////////Admin panel/////////////////////////////////////
    public function admin_panel(){
        $userDetails=UserDetail::where('user_id',Auth::id())->first();
        return view('welcome',[
            "userDetails"=>$userDetails
        ]);
    }


    //////////////////////////////Header update//////////////////////////////////


    public function update_header(Request $request){
        if(isset($request->image)){
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName); 
           UserDetail::where('user_id',Auth::id())->update([
            "profileImg"=>$imageName,
            "name"=>$request->name,
            "job"=>$request->job
           ]);
        }else{
            UserDetail::where('user_id',Auth::id())->update([
                "name"=>$request->name,
                "job"=>$request->job
               ]);
        }
        
       return redirect()->route("admin_panel");
    }
   
    //////////////////////////////About update//////////////////////////////////

    public function update_about(Request $request){
        UserDetail::where('user_id',Auth::id())->update([
            "bio"=>$request->about
        ]);
        return redirect()->route("admin_panel");
    }

}
