<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function get(Request $request)
    {
        $transport = Transport::whereProvinceId($request->province)->first();
        return $transport
            ? response()->json(['stt' => 'success', 'msg' => $transport->price])
            : response()->json(['stt' => 'fail']);
    }
}
