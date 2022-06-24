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
    public function admin_panel(){
        $id=Auth::id();
        $userDetails=UserDetail::where('user_id',$id)->first();
        return view('welcome',[
            "userDetails"=>$userDetails
        ]);
    }
}
