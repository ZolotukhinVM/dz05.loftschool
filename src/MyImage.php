<?php

use Intervention\Image\ImageManagerStatic as Image;

class MyImage
{
    const IMAGE_DIR = "./images";
    protected $original = self::IMAGE_DIR . DIRECTORY_SEPARATOR . "original.jpg";
    protected $result = self::IMAGE_DIR . DIRECTORY_SEPARATOR . "new.jpg";
    protected $test;

    public function getImage()
    {

        Image::make($this->original)
            ->resize(200, null, function ($image) {
                $image->aspectRatio();
            })
            ->rotate(45)
            ->insert(self::IMAGE_DIR . '/watermark.png', 'center')
            ->save($this->result);
        echo "Save new image";
    }
}
