<?php


$dirname = "img/";
$images = glob($dirname."*.*");

foreach($images as $image) {
    echo '<img  width="200"  src="'.$image.'" />';
}
?>