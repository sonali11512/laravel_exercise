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

//first upper triangle
imagepolygon($image,array(
    150,0,
    100,50,
    200,50
 ),3,$black);

//second left triangle
imagepolygon($image,array(
    75,100,
    25,150,
    125,150
 ),3,$black);

 //third right triangle
imagepolygon($image,array(
    225,100,
    175,150,
    275,150
 ),3,$black);

 //line to connect first and second triangle
 imageline ( $image , 125,50,90,115,$black);

  //line to connect first and third triangle
  imageline ( $image , 175,50,210,115,$black);

  //line to connect second and third triangle
  imageline ( $image , 100,125,200,125,$black);

 
imagepng($image);