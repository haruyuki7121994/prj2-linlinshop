<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function contact()
    {
        return view('frontend.contact-us');
    }

    public function transport()
    {
        return view('frontend.transport');
    }

    public function term()
    {
        return view('frontend.term-of-use');
    }

    public function warranty()
    {
        return view('frontend.warranty-policy');
    }
}
