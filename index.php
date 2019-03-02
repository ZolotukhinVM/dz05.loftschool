<?php

require "./vendor/autoload.php";

use Intervention\Image\ImageManagerStatic as Image;

const IMAGE_DIR = "images";
Image::make('./' . IMAGE_DIR . '/original.jpg')
    ->resize(200, null, function ($image) {
        $image->aspectRatio();
    })
    ->rotate(45)
    ->insert('./' . IMAGE_DIR . '/watermark.png', 'center')
    ->save('./' . IMAGE_DIR . '/new.jpg');
echo "Save new image";
