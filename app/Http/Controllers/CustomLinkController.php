<?php

namespace App\Http\Controllers;

use App\Models\CustomLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomLinkController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create_link(Request $request)
    {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        CustomLink::create([
            "user_id" => Auth::id(),
            "title" => $request->title,
            "image" => $imageName,
            "link_url"=>$request->link_url
        ]);
        return redirect()->route('admin_panel');
    }
    public function delete_custom(Request $request){
        CustomLink::where([
            ["user_id","=",Auth::id()],
            ["id","=",$request->custom_id]
        ])->delete();
        return redirect()->route('admin_panel');
    }
}
