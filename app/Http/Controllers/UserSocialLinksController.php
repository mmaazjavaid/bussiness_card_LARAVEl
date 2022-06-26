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
        UserSocialLinks::create([
            "user_id"=>Auth::id(),
            "social_id"=>$request->link_id,
            "link_url"=>$request->link_url
        ]);
        return redirect()->route('social_network_form');
    }
}
