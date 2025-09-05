<?php

namespace System\Service\Support\Upload;

use Intervention\Image\ImageManager;

class Upload
{
    private static $imageDriver = ['driver' => 'GD'];

    protected static function managingImageUploads($file, $name, $path, $width = 800, $height = 532)
    {
        $managing = new ImageManager(self::$imageDriver);
        $image = $managing->make($file['tmp_name']);
        $image->save($path.$name);
        return '/'.$path.$name;
    }
}
