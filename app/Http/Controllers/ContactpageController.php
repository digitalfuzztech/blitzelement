<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ContactpageController extends Controller
{
    public function contact(): View
    {
        return view('contact.contact');
    }
}
