<?php

$name =  '/\w+\.(jpg|png|gif)/';
$s = 'img99.png img6543.iuygdvc img.jpeg im44.gif img1.png 2.png';
if (preg_match_all($name, $s, $arr1)) {
    print_r($arr1);
}