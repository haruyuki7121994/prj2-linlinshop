<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        $uploadedFile = $request->file('file');
        $filename = time().$uploadedFile->getClientOriginalName();

        Storage::disk('local')->putFileAs(
            'public/files',
            $uploadedFile,
            $filename
        );

        return env('APP_URL') . 'files/' . $filename ;
    }
}
