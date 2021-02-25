<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Transport\CreateRequest;
use App\Province;
use App\Transport;

class TransportController extends Controller
{
    public function index()
    {
        $transports = Transport::paginate(5);
        return view('cms.transport.index', compact('transports'));
    }

    public function create()
    {
        $provinces = Province::IsActive()->get();
        return view('cms.transport.create', compact('provinces'));
    }

    public function store(CreateRequest $request)
    {
        dd($request->all());
    }
}
