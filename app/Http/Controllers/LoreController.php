<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoreRequest;
use App\Models\Lore;

class LoreController extends Controller
{
    public function index()
    {
        $lores = Lore::Paginate(15);

        return view('admin.lores.index', compact('lores'));
    }

    public function create()
    {
        return view('admin.lores.create');
    }

    public function store(LoreRequest $request)
    {
        $requestData = $request->all();

        Lore::create($requestData);

        return redirect()->route('lores.index')
            ->with('success','Lore item created successfully.');
    }

    public function edit()
    {
        return view('admin.lores.edit');
    }

    public function update(LoreRequest $request, $lore)
    {
        $requestData = $request->all();

        $lore->update($requestData);

        return redirect()->route('lores.index')
            ->with('success','Lore updates successfully.');
    }

    public function destroy($lore)
    {
        $lore->delete();

        return redirect()->route('lores.index')
            ->with('success','Lore deleted successfully');
    }
}
