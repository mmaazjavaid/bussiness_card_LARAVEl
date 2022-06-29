<?php

namespace App\Http\Controllers;

use App\Models\UserSocialLinks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSocialLinksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store_link(Request $request){
        $link=UserSocialLinks::where('social_id',$request->link_id)->get();
        if(count($link)>0){
            UserSocialLinks::where([
                ["user_id","=",Auth::id()],
                ["social_id","=",$request->link_id]
            ])->update([
                "user_id"=>Auth::id(),
                "social_id"=>$request->link_id,
                "link_url"=>$request->link_url
            ]);
        }else{
            UserSocialLinks::create([
                "user_id"=>Auth::id(),
                "social_id"=>$request->link_id,
                "link_url"=>$request->link_url
            ]);
        }
        
        return redirect()->route('admin_panel');
    }
    public function delete_link(Request $request){
        UserSocialLinks::where([
            ["user_id","=",Auth::id()],
            ["social_id","=",$request->social_id]
        ])->delete();
        return redirect()->route('admin_panel');
    }
    public function update_social(Request $request){
        UserSocialLinks::where([
            ["user_id","=",Auth::id()],
            ["social_id","=",$request->prev_social_id]
        ])->update([
            "social_id"=>$request->link_name,
            "link_url"=>$request->link_url
        ]);
        return redirect()->route('social_network_form');
    }
}
