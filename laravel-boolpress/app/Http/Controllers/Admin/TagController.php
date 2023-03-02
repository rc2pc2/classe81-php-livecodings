<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::paginate(10);
        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create', [ 'tag' => new Tag() ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'name' => 'required|string|max:255|min:1|unique:tags,name',
            'accent_color' => 'required',
            'bg_color' => 'required',
        ]);

        // dd($data);

        $data['slug'] = Str::slug($data['name']);
        $tag = new Tag();
        $tag->fill($data);
        $tag->save();
        $tag->slug = $tag->slug . '-' . $tag->id;
        $tag->update();

        return redirect()->route('admin.tags.show', compact('tag'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        return view('admin.tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit',  compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $data = $request->validate([
            'name' => ['required','string', 'max:255', 'min:3', Rule::unique('categories')->ignore($tag->id)],
            'accent_color' => 'required',
            'bg_color' => 'required',
        ]);

        $data['slug'] = Str::slug($data['name']."-$tag->id");
        $tag->update($data);

        return redirect()->route('admin.tags.show', compact('tag'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->posts()->sync([]);
        $tag->delete();

        return redirect()->route('admin.tags.index')->with('message', "The tag  \"$tag->name\" has been removed correctly")->with('message_class', 'danger');
    }
}
