<?php
require "./vendor/autoload.php";
require "./src/MyImage.php";

$image = new MyImage();
echo $image->getImage();
