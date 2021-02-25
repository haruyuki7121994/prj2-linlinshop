<?php


namespace App\Services;


use Storage;

class ImageService
{
    public function upload($file, $dir) : string
    {
        try {
            $filename = time().$file->getClientOriginalName();

            Storage::disk('local')->putFileAs(
                "public/{$dir}",
                $file,
                $filename
            );

            return env('APP_URL') . "{$dir}/" . $filename ;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
