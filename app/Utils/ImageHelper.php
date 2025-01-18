<?php

namespace App\Utils;

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ImageHelper
{
    /**
     * Handle the image upload, crop it, and store it in the specified directory.
     *
     * @param \Illuminate\Http\UploadedFile $image
     * @param string $folder
     * @param int $width
     * @param int $height
     * @return string $path
     */
    public static function handleImageUpload($image, $folder, $width = 500, $height = 500)
    {
        // Create the folder if it doesn't exist
        $folderPath = public_path("uploads/tours/{$folder}");
        if (!File::exists($folderPath)) {
            File::makeDirectory($folderPath, 0775, true);
        }

        // Resize and crop the image
        $croppedImage = Image::make($image)->fit($width, $height);

        // Generate a unique filename for the image
        $filename = time() . '.' . $image->getClientOriginalExtension();

        // Save the image in the folder
        $croppedImage->save($folderPath . '/' . $filename);

        // Return the image path
        return "uploads/tours/{$folder}/" . $filename;
    }
}
