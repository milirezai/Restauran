<?php

namespace System\Service\Support\Upload\Image;

use System\Service\Support\Upload\Upload;

class ImageUpload extends Upload
{
    public static function move($file, $path, $name, $width = null, $height = null)
    {
        $path = self::pathExists($path);
        $name = self::fullName($name, $file);
        $pathFile = self::managingImageUploads($file, $name, $path, $width, $height);
        return $pathFile;
    }
    public function fullName($name, $file)
    {
        return self::setName($name).self::extension($file);
    }
    public function setName($name)
    {
        return trim($name,"\/");
    }
    private static function extension($file)
    {
        return '.'.pathinfo($file['name'], PATHINFO_EXTENSION);
    }
    private static function pathExists($path)
    {
        $path = trim($path, "\/")."/";
        if (!is_dir($path))
        {
            if (!mkdir($path, 0777, true))
            {
                return true;
            }
        }
        return $path;
    }

    public static function delete($imagePath)
    {
        if(file_exists($imagePath))
        {
            unlink($imagePath);
            return true;
        }
        return false;
    }

}