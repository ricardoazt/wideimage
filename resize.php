<?php
require 'lib/WideImage.php';
header('Content-type: image/jpeg');
$path = $_GET['path'];
$width = $_GET['width'];
$height = $_GET['height'];
$img = WideImage::load($path);
$resize = $img->resize($width, $height, 'inside');
$resize->output('jpg', 100);