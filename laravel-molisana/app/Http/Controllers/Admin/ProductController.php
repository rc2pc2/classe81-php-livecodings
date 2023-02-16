<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $defaultProduct = new Product();
        // $defaultProduct->weight = '500g';
        return view('admin.products.create', ['product' => $defaultProduct ]); //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            // 'title', 'type', 'cooking_time', 'weight', 'description', 'image_specific', 'image_package', 'image_raw'
            // ? chiave vuole il name di ogni attributo da controllare
            // § valore vuole l'insieme dei tipi di validazione da verificare su quella chiave
            'title' => 'required|min:2|max:100|unique:products,title|',
            'type' => 'required|string|min:2|max:50',
            'cooking_time' => 'string|nullable|max:50',
            'weight' => 'required|string|min:2|max:12',
            'description' => 'required|string|min:10',
            'image_specific' => 'required|url|min:2',
            'image_package' => 'required|url|min:2',
            'image_raw' => 'required|url|min:2',
        ],
        [
            'title.required' => 'Ao er titolo è obbligatorio, nun se ne esce',
            'weight.min' => 'Ma ce li voi mette du caratteri ner peso?'

        ]);

        // ? In nome del buon Marco: a manina!
        // $newProduct = new Product();
        // $newProduct->title = $data['title'];
        // $newProduct->type = $data['type'];
        // $newProduct->cooking_time = $data['cooking_time'];
        // $newProduct->weight = $data['weight'];
        // $newProduct->description = $data['description'];
        // $newProduct->image_specific = $data['image_specific'];
        // $newProduct->image_package = $data['image_package'];
        // $newProduct->image_raw = $data['image_raw'];
        // $newProduct->save();


        // § Usando i campi fillable
        $newProduct = new Product();
        $newProduct->fill($data);
        $newProduct->save();


        return redirect()->route('admin.products.show', $newProduct->id)->with('message', "$newProduct->title has been created")->with('alert-type', 'info');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.show', compact('product'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', [ 'product' => $product ]); //
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
        $data = $request->all();
        $product = Product::findOrFail($id); // il vecchio dato

        // $product->title = $data['title'];
        // $product->type = $data['type'];
        // $product->cooking_time = $data['cooking_time'];
        // $product->weight = $data['weight'];
        // $product->description = $data['description'];
        // $product->image_specific = $data['image_specific'];
        // $product->image_package = $data['image_package'];
        // $product->image_raw = $data['image_raw'];
        // $product->save();

        $request->validate([
            // 'title', 'type', 'cooking_time', 'weight', 'description', 'image_specific', 'image_package', 'image_raw'
            // ? chiave vuole il name di ogni attributo da controllare
            // § valore vuole l'insieme dei tipi di validazione da verificare su quella chiave
            'title' => 'required|min:2|max:100',
            'type' => 'required|string|min:2|max:50',
            'cooking_time' => 'string|nullable|max:50',
            'weight' => 'required|string|min:2|max:12',
            'description' => 'required|string|min:10',
            'image_specific' => 'required|url|min:2',
            'image_package' => 'required|url|min:2',
            'image_raw' => 'required|url|min:2',
        ],
        [
            'title.required' => 'Ao er titolo è obbligatorio, nun se ne esce',
            'weight.min' => 'Ma ce li voi mette du caratteri ner peso?'
        ]);


        $product->update($data);

        return redirect()->route('admin.products.show', $product->id)->with('message', "$product->title has been modified successfully")->with('alert-type', 'success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.products.index')->with('message', "$product->title has been deleted")->with('alert-type', 'danger');
    }
}
