<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::Paginate(15);

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $requestData = $request->all();

        Category::create($requestData);

        return redirect()->route('categories.index')
            ->with('success','Category created successfully.');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', ['category' => $category]);
    }

    public function update(CategoryRequest $request, $category)
    {
        $requestData = $request->all();

        $category->update($requestData);

        return redirect()->route('categories.index')
            ->with('success','Category updates successfully.');
    }

    public function destroy($category)
    {
        $category->delete();

        return redirect()->route('categories.index')
            ->with('success','Category deleted successfully');
    }
}
