<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContentRequest;
use App\Models\Content;

class ContentController extends Controller
{
    public function index()
    {
        $Contents = Content::Paginate(15);

        return view('admin.Contents.index', compact('Contents'));
    }

    public function create()
    {
        return view('admin.Contents.create');
    }

    public function store(ContentRequest $request)
    {
        $requestData = $request->all();

        Content::create($requestData);

        return redirect()->route('Contents.index')
            ->with('success','Content item created successfully.');
    }

    public function edit()
    {
        return view('admin.Contents.edit');
    }

    public function update(ContentRequest $request, $Content)
    {
        $requestData = $request->all();

        $Content->update($requestData);

        return redirect()->route('Contents.index')
            ->with('success','Content updates successfully.');
    }

    public function destroy($Content)
    {
        $Content->delete();

        return redirect()->route('Contents.index')
            ->with('success','Content deleted successfully');
    }
}
