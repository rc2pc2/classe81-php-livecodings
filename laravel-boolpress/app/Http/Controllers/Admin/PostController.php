<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PostController extends Controller
{

    protected $validationRules = [
        'title' => ['required', 'unique:posts' ],
        'post_date' => 'required',
        'content' => 'required'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create', ["post" => new Post()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate($this->validationRules);
        $data['author'] = Auth::user()->name;
        $data['slug'] = Str::slug($data['title']);
        $newPost = new Post();
        $newPost->fill($data);
        $newPost->save();

        return redirect()->route('admin.posts.index')->with('message', "Post $newPost->title has been created succesfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  Post $post the current post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', [ 'post' => $post] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        $data = $request->validate([
            'title' => ['required', Rule::unique('posts')->ignore($post->id) ],
            'post_date' => 'required',
            'content' => 'required'
        ]);
        $post->update($data);
        return redirect()->route('admin.posts.show', compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
