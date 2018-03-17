<?php
session_start();

$possible = '123456789abcdefghijklomnpqrstuvwxyz';
$text = '';
$i = 0;

while($i < 6){
			$text .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
			$i++;
			}

$_SESSION["vercode"] = $text;
$height = 40;
$width = 120;

$image_p = imagecreate($width,$height);

$white = imagecolorallocate($image_p, 254, 25, 0); 		//background color setting//
$white = imagecolorallocate($image_p, 255, 255, 255);  //foreground setting//

$font_size = 25;

imagestring($image_p, 56, 6, 8, $text, $white);
imagejpeg($image_p, null ,80);

?>
