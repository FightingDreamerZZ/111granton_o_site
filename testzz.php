<?php
/**
 * Created by PhpStorm.
 * User: AGT John
 * Date: 2018-11-26
 * Time: 4:57 PM
 */

$photo = imagecreatefromjpeg('img/promo/promo201808.jpg');
//imagealphablending($photo, true);
//$fontsize = 20;
//$font = '../times.ttf';
$fontcolor = imagecolorallocate($photo, 0, 0, 0);
//$angle = 0;
//$x = 100;
//$y = 100;
//$text = 'THIS IS A BLOB OF TEXT YO!';
//imagettftext($photo, $fontsize, $angle, $x, $y, $fontcolor, $font, $text);
//imagegif($photo, 'test.gif');

//imagegif($photo);
$str="";
ob_start();
imagejpeg($photo,'haha.jpg');
$str=ob_get_contents();

ob_end_clean();

echo microtime(true)."\r\n";
echo microtime(true);

echo sha1(substr(round(microtime(true) * 1000),0, -2));

echo sha1(substr(round(microtime(true) * 1000),0, -2));
echo sha1(substr(round(microtime(true) * 1000),0, -2))."<br/><br/><br/><br/><br/>";


echo microtime(true).microtime(true)."\n<br/>";
echo microtime(true).time()."\n<br/>";

$max = ceil(10 / 32);
$random = '';
for ($i = 0; $i < $max; $i ++) {
    $random .= md5(microtime(true).mt_rand(10000,90000));
}
echo substr($random, 0, 10)."\n<br/>";

$random = '';
for ($i = 0; $i < $max; $i ++) {
    $random .= md5(microtime(true).mt_rand(10000,90000));
}
echo substr($random, 0, 10)."\n<br/>"."\n<br/>"."\n<br/>";

echo microtime(true).mt_rand(10000,90000)."<br/>";

for($i=0;$i<50;$i++)
    echo mt_rand(100000,999999)."<br/>";

?>
