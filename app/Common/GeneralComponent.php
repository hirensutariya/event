<?php

namespace App\Common;

use Intervention\Image\ImageManagerStatic as Image;


class GeneralComponent {

    public function imageResize($upload_files = null, $path, $width = 200, $height = 200, $filename = null) {

        if (empty($filename)) {
            $filename = date("d-m-Y-h-i-s") . "-" . rand(1000, 9999999) . "." . $upload_files->getClientOriginalExtension();
        }
        if (!empty($upload_files)) {
            $img = Image::make($upload_files->getRealPath());

// resize image to width*$height and keep the aspect ratio
            $img->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
            });
// Fill up the blank spaces with transparent color
            $img->resizeCanvas($width, $height, 'center', false, array(255, 255, 255, 0));

// pass the right full path to the file. Remember that $path is a path inside app/public !
            $img->save(storage_path('app/public/images/' . $path . '/' . $width . 'X' . $height . '/' . $filename));
        }

        return $filename;
    }

}
