<?php 
/**
 * @package imagerotate
 * @author Leonhardt Wille
 * @version 1.0
 */
/*
Plugin Name: ImageRotate
Plugin URI: http://wordpress.org/#
Description: Replacement for GD's imagerotate() function. Some parts of the code taken from PHP.NET.
Author: Leonhardt Wille
Version: 1.0
Author URI: http://www.riverlabs.de
*/

function rotateImage($img, $rotation) {
  $width = imagesx($img);
  $height = imagesy($img);
  
  switch($rotation) {
    case 90: $newimg= @imagecreatetruecolor($height , $width );break;
    case 180: $newimg= @imagecreatetruecolor($width , $height );break;
    case 270: $newimg= @imagecreatetruecolor($height , $width );break;
    case 0: return false;break;
    case 360: return false;break;
  }
  if($newimg) { 
    for($i = 0;$i < $width ; $i++) { 
      for($j = 0;$j < $height ; $j++) {
        $reference = imagecolorat($img,$i,$j);
        switch($rotation) {
          case 90: if(!@imagesetpixel($newimg, ($height - 1) - $j, $i, $reference )){return false;}break;
          case 180: if(!@imagesetpixel($newimg, $width - $i, ($height - 1) - $j, $reference )){return false;}break;
          case 270: if(!@imagesetpixel($newimg, $j, $width - $i, $reference )){return false;}break;
        }
      } 
    } return $newimg; 
  } 
  return false;
} 

function imagerotate($img, $angle, $bgd_color, $ignore_transparent=0)
{
  // we get the angle in counter-clockwise notation: -90° for a 90° clockwise rotation
  $newangle = (360 - intval($angle)) % 360; 
  return rotateImage($img, $newangle);
}
?>