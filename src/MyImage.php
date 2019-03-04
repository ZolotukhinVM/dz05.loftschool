<?php

use Intervention\Image\ImageManagerStatic as Image;

class MyImage
{
    const IMAGE_DIR = "." . DIRECTORY_SEPARATOR . "images";
    protected $original = self::IMAGE_DIR . DIRECTORY_SEPARATOR . "original.jpg";
    protected $result = self::IMAGE_DIR . DIRECTORY_SEPARATOR . "new.jpg";

    public function getImage()
    {
        Image::make($this->original)
            ->resize(200, null, function ($image) {
                $image->aspectRatio();
            })
            ->rotate(45)
            ->insert(self::IMAGE_DIR . '/watermark.png', 'center')
            ->save($this->result);
        return true;
    }
}
