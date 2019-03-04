<?php
require "./vendor/autoload.php";
require "./src/MyImage.php";

$image = new MyImage();
try {
    if ($image->getImage()) {
        echo "Image is saved!";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
