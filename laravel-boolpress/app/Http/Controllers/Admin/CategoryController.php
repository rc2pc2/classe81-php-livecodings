<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::paginate(15);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categories.create', [ 'category' => new Category() ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|min:3|unique:categories,name',
            'color' => 'required',
        ]);

        // dd($data);

        $data['slug'] = Str::slug($data['name']);
        $category = new Category();
        $category->fill($data);
        $category->save();
        $category->slug = $category->slug . '-' . $category->id;
        $category->update();

        return redirect()->route('admin.categories.show', compact('category'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {

        return view('admin.categories.edit',  compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $data = $request->validate([
            'name' => ['required','string', 'max:255', 'min:3', Rule::unique('categories')->ignore($category->id)],
            'color' => 'required',
        ]);

        $data['slug'] = Str::slug($data['name']."-$category->id");
        $category->update($data);

        return redirect()->route('admin.categories.show', compact('category'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //

        // dd($category);
        // TODO Eliminazione record

        $category->delete();

        return redirect()->route('admin.categories.index')->with('message', "The category  \"$category->name\" has been removed correctly")->with('message_class', 'danger');
    }
}
