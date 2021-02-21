<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class TransportController extends Controller
{
    public function index()
    {
        return view('cms.transport.index');
    }

    public function create()
    {
        return view('cms.transport.create');
    }
}
