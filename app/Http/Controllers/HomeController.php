<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total = DB::table('hibahs')->count();
        $count = DB::table('customers')->count();
        $calc = DB::table('receivers')->count();
        $RM = DB::table('customers')->count("jum_simpanan");
        return view('home',compact('total', 'count', 'calc', 'RM'));
    }
    public function userProfile()
    {
        return view('usermanagement.user_profile', array('user' => Auth::user() ));
    }
    public function updateAvatar(Request $request)
    {
        //handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        //change user details
        $user = Auth::user();
        $user->update($request->only('name', 'email', 'phone_number', 'address'));

        // save kan data lain pulak. ko hanya letak untuk gambar je

        return view('usermanagement.user_profile', array('user' => Auth::user() ));
    }
}
