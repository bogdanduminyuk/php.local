<?php
	$im = imageCreateTrueColor(100, 50);
	$black = imageColorAllocate($im, 255, 255, 255);
	
	imageTtfText($im, 15, -5, 15, 30, $black,"C://Windows/fonts/verdana.ttf", "qwerty");
	imagePng($im, "1.png");
	
	imagedestroy($im);
?>