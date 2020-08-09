<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use MongoDB\Driver\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oPost = new Post();

        $allPosts = $oPost::all();

        return view('pages.index')->with('posts', $allPosts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, array(
            'title' => ['required', 'max:255'],
            'price' => ['required', 'integer'],
            'description' => ['required']
        ));

        $oPost = new Post();
        $oPost->user_id = 1;
        $oPost->title = $request->title;
        $oPost->description = $request->description;
        $oPost->price = $request->price;

        $oPost->save();

        return redirect()->route('ad.show', $oPost->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $user = User::find($post->user_id);

        return view('ad.show', ['post' => $post, 'user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('ad.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $this->validate($request, array(
            'title' => ['required', 'max:255'],
            'price' => ['required', 'integer'],
            'description' => ['required']
        ));

        $post_id = $request->input('id');

        $oPost = Post::find($post_id);
        $oPost->title = $request->input('title');
        $oPost->description = $request->input('description');
        $oPost->price = $request->input('price');

        $oPost->save();

        return redirect('/ad/'.$post_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);

        return redirect('/');
    }
}
