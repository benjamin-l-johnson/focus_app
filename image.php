<?php


/*http://catch404.net/2012/06/stripping-exif-data-from-images-in-php-using-gd-or-imagick/*/
$img = new Imagick('input.jpg');
$img->stripImage();
$img->writeImage('output-imagick.jpg');
$img->destroy();

?>