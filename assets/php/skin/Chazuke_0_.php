<?php
$image = file_get_contents('http://textures.minecraft.net/texture/7027caeead3a9ba0d14a4ffcd4f0bc024917fe4b4fc660f809a8fb81c32fd530');
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
