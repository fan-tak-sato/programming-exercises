<?php

session_start();

if(!isset($_SESSION['captcha_id']))
	$str = 'ERROR!';
else
	$str = $_SESSION['captcha_id'];

header('Cache-control: no-cache');

$image = imagecreatefrompng('button.png');

$colour = imagecolorallocate($image, 183, 178, 152);

$font = '../fonts/Anorexia.ttf';

$rotate = rand(-15, 15);

imagettftext($image, 14, $rotate, 18, 30, $colour, $font, $str);

imagepng($image);
