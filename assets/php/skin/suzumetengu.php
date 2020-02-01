<?php
$image = file_get_contents('http://textures.minecraft.net/texture/4c7b0468044bfecacc43d00a3a69335a834b73937688292c20d3988cae58248d');
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
