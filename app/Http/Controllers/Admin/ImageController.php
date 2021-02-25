<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ImageService;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        $uploadedFile = $request->file('file');
        $imageService = new ImageService();
        return $imageService->upload($uploadedFile, 'product');
    }
}
