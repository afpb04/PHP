<?php 

header("Content-Type: image/png");

$image = imageCreate(256,256);

$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Fatima Barobsa", $red);

imagepng($image);

imagedestroy($image);

?>