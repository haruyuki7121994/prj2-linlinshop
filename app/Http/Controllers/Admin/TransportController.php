<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Transport\CreateRequest;
use App\Http\Requests\Cms\Transport\UpdateRequest;
use App\Province;
use App\Transport;
use Illuminate\Http\Request;

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
        return Transport::create($request->validated())
        ? redirect()->route('cms.transport.index')->withSuccess('Create new transport is successful')
        : redirect()->route('cms.transport.index')->withErrors('Cannot create new transport');
    }
    public function edit(Transport $transport)
    {   
      
        $provinces = Province::IsActive()->get();
        return view('cms.transport.edit', compact('transport','provinces'));
    }
    public function update(Transport $transport, UpdateRequest $request)
    {
        return $transport->update($request->validated())
            ? redirect()->route('cms.transport.index')->withSuccess('Update transport is successful')
            : redirect()->route('cms.transport.index')->withErrors('Cannot create transport');
    }
    public function destroy(Transport $transport)
    {
        if (count($transport->productAttrs)>0) return redirect()->route('cms.transport.index')->withErrors('Cannot delete Province');
        return $transport->delete()
            ? redirect()->route('cms.transport.index')->withSuccess('Delete transport is successful')
            : redirect()->route('cms.transport.index')->withErrors('Cannot transport province');
    }
}
