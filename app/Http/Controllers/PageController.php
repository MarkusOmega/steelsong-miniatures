<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Home()
    {
        $banner = Setting::where('type', 'main-banner')->first();

        return view('welcome', compact('banner'));
    }
}
