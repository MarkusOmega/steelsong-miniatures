<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Setting;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Home()
    {
        $banner = Setting::where('type', 'main-banner')->first();

        $newsHiglights = News::where('highlight', true)->orderBy('order', 'asc')->take(3)->get();

        $newsItems = News::where('highlight', false)->orderBy('order', 'asc')->take(9)->get();

        return view('welcome', compact('banner', 'newsHiglights', 'newsItems'));
    }
}
