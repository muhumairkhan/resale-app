<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

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
        $user = User::find(Auth::user()->id);

        $oPost = new Post();
        $posts = $oPost::all()->where('user_id', Auth::user()->id);

        return view('home')->with(['user' => $user, 'posts' => $posts]);
    }

    public function updateUser(Request $request)
    {
        $this->validate($request, array(
            'name' => ['required'],
            'phone' => ['required'],
            'address' => ['required']
        ));

        $user_id = $request->input('id');

        $oUser = User::find($user_id);
        $oUser->name = $request->input('name');
        $oUser->phone = $request->input('phone');
        $oUser->address = $request->input('address');

        $oUser->save();

        return redirect('/home');
    }

}
