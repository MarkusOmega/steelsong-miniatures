<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {   
        $products = Product::Paginate(15);

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {   
        $request->validated();

        if($request->file('image')->isValid()) {
            $filePath = $request->file('image')->store('uploads' , 'public');
        };
       
        $requestData = $request->all();
        $requestData['image'] = $filePath;

        Product::create($requestData);

        return redirect()->route('products.index')
        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource on the fronted.
     */
    public function show(Product $product)
    {
        return view('products.detail', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $request->validated();

        if($request->file('image')->isValid()) {
            $filePath = $request->file('image')->store('uploads', 'public');
        };
       
        $requestData = $request->all();
        $requestData['image'] = $filePath;

        $product->update($requestData);

        return redirect()->route('products.index')
        ->with('success','Product updates successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
        ->with('success','Product deleted successfully');
    }

    /**
    * Display products on Frontend
    */
    public function frontendIndex(Request $request)
    {
        $products = Product::when(!empty($request->input('category')), function($q) use($request){
            $q->whereHas('categories', function($query) use($request) {
                $query->where('name', $request->input('category'));
            });
        } )->Paginate(15);

        $categories = Category::all();

        $category = !empty($request->input('category')) ? $request->input('category') : '';

        return view('products.index', compact('products', 'categories', 'category'));
    }
}
