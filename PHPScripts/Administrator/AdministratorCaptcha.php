<?php
session_start();
$text = rand(10000,99999);
$_SESSION["captcha"] = $text;
$height = 30;
$width = 70;
$image_p = imagecreate($width, $height);
$black = imagecolorallocate($image_p, 78, 115, 223);
$white = imagecolorallocate($image_p, 255, 255, 255);
$font_size = 15;
imagestring($image_p, $font_size, 10, 7, $text, $white);
imagejpeg($image_p, null, 100);
?>