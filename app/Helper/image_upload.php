<?php

use Illuminate\Http\UploadedFile;
use Intervention\Image\Drivers\Gd\Driver as GdDriver; // Or use Imagick\Driver as ImagickDriver
use Intervention\Image\Format;
use Intervention\Image\ImageManager;


if (!function_exists('imageUpload')) {
    function imageUpload(UploadedFile $file, int $width, int $height, string $directory)
    {
        if ($file) {
            $directoryPath = public_path($directory);

            if (!file_exists($directoryPath)) {
                mkdir($directoryPath, 0777, true);
            }
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $manager = ImageManager::usingDriver(GdDriver::class);
            $image = $manager->decodePath($file->getRealPath());
            $image->scale(width: $width, height: $height);

            $encoded = $image->encodeUsingFormat(Format::PNG);
            $encoded->save($directoryPath . '/' . $filename);
            return asset($directory . '/' . $filename);
        }

        return null;
    }
}
