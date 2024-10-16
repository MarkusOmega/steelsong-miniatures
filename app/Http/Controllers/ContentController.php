<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContentRequest;
use App\Models\Category;
use App\Models\Content;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $Contents = Content::Paginate(15);

        return view('admin.contents.index', compact('Contents'));
    }

    public function create()
    {
        $products = Product::select('id', 'name')->get();

        return view('admin.contents.create', compact('products'));
    }

    public function store(ContentRequest $request)
    {
        $requestData = $request->all();

        Content::create($requestData);

        return redirect()->route('contents.index')
            ->with('success','Content item created successfully.');
    }

    public function edit(Content $content)
    {
        $products = Product::select('id', 'name')->get();

        return view('admin.contents.edit', compact('content', 'products'));
    }

    public function update(ContentRequest $request, $Content)
    {
        $requestData = $request->all();

        $Content->update($requestData);

        return redirect()->route('contents.index')
            ->with('success','Content updates successfully.');
    }

    public function destroy(Content $Content)
    {
        $Content->delete();

        return redirect()->route('contents.index')
            ->with('success','Content deleted successfully');
    }

    public function frontendIndex(Request $request)
    {
        $contents = Content::paginate(15);

        $categories = Category::all();

        $category = !empty($request->input('category')) ? $request->input('category') : '';

        $banner = Setting::where('type', 'shop-banner')->first();

        return view('content.index', compact('contents', 'categories', 'category', 'banner'));
    }
}
