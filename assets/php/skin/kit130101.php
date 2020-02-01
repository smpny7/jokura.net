<?php
$image = file_get_contents('http://textures.minecraft.net/texture/b3b203fc695b6bd44cf1e19e2553b04e900c6291d13c668f3efa4f9b3e7f464');
$size = 48;

$skin = imagecreatefromstring($image);
$head = ImageCreateTrueColor($size, $size);

$tmp = imagecrop($skin, array('x' => 8, 'y' => 8, 'width' => 8, 'height' => 8,));

imagecopy($tmp, $skin, 0, 0, 40, 8, 8, 8);

ImageCopyResized($head,$tmp,0,0,0,0,$size,$size,8,8);

ob_start();
imagepng($head,NULL,9);
$image = ob_get_clean();

imagedestroy($skin);
imagedestroy($tmp);
imagedestroy($head);

header("Content-type: image/png");
echo $image;
?>
