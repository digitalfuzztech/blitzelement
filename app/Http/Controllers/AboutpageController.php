<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AboutpageController extends Controller
{
    public function about(): View
    {
        return view('about.about');
    }
}
