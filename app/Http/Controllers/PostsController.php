<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\User;

use Auth;
use Validator;

class PostsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::latest()->paginate(10);
        $users = User::all();

        if($request->ajax()) {
            return view('posts.container', ['posts' => $posts]);
        }

        return view('posts.index' , ['posts' => $posts , 'users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'body'  => 'required'
        ];

        $validator = Validator::make($request->all() , $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $post = Post::create([
            'user_id'   => Auth::id(),
            'title'     => $request->title,
            'body'      => $request->body
        ]);

        if($request->ajax()) {
            return json_encode(['message' => 'Post successfully created']);
        }

        return redirect('/posts');
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

        return view('posts.show' , ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Post::destroy($id);
    }
}
