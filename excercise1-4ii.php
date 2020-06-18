<?php
header("Content-type: image/png");

//image dimensions
$image_width = 800;
$image_height = 800;

//create image
$image = imagecreatetruecolor($image_width,$image_height);

//fillup image
$white = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $white);

$black = imagecolorallocate($image, 0, 0, 0);
$red   = imagecolorallocate($image, 255, 0, 0);
$green = imagecolorallocate($image, 0, 255, 0);


imagepolygon($image,array(
    100, 200, // Point 1 (x, y) 
    0, 300, // Point 2 (x, y) 
    100, 400, // Point 3 (x, y) 
    300, 400, // Point 4 (x, y) 
    400, 300, // Point 5 (x, y) 
    300, 200  // Point 5 (x, y) 
),6,$black);

imageellipse($image, 200, 300, 150, 150, $green);

imagepolygon($image,array(
    200, 250, // Point 1 (x, y) 
    150, 300, // Point 2 (x, y) 
    200, 350, // Point 3 (x, y) 
    250, 300, // Point 4 (x, y) 
),4,$red);
 
imagepng($image);