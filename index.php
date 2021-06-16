<?php

require_once('config.php');
require_once('../../init.php');

$images = 'images/small/*.jpg';
$image_count = count(glob($images));

$data = [];

for ($i = 1; $i <= $image_count; $i++) {

    $data[$i]['id'] = $i;

}

$slider_images = new ListTemplate('slider_images', $data);
$gallery_images = new ListTemplate('gallery_images', $data);
$buttons = new ListTemplate('buttons', $data);
$thumbnails = new ListTemplate('thumbnails', $data);

$placeholders = [
    'slider_images' => $slider_images->getHtml(),
    'gallery_images' => $gallery_images->getHtml(),
    'buttons' => $buttons->getHtml(),
    'thumbnails' => $thumbnails->getHtml(),
];

$layout = new Template('index', $placeholders, 'layout');

echo $layout->getHtml();