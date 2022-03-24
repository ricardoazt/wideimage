<?php
// Modelo de uso
// http://localhost/wideimage/resize.php?path=img/tenis.jpg&width=500&height=500
require 'lib/WideImage.php';
header('Content-type: image/jpeg');
$path = $_GET['path'];
$width = $_GET['width'];
$height = $_GET['height'];
$img = WideImage::load($path);
$resize = $img->resize($width, $height, 'inside');
$resize->output('jpg', 100);