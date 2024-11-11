<?php

namespace App\Helpers;

class ImageHelper{
    /**
     * image upload
     *
     * @param object $file
     * @param string $path
     * @return void
     */
    static function uploadDocument(?object $file, string $path): string
    {
        $fileName = 'INTRANET-'. time() . '-' . str_replace(' ','-',$file->getClientOriginalName());
        $file->storeAs("public/$path",$fileName);

        return $fileName;
    }

    /**
     * image delete
     *
     * @param string $image
     * @return void
     */
    static function deleteImage(?string $image)
    {
        $imageExists = file_exists($image);

        if ($imageExists) {
            @unlink($image);
        }
    }
}
