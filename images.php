<?php
$arr = ["IMG_2341.jpg", "images/IMG_2342.jpg", "IMG_23234564.png", "IMG_232.jpg", "IMG_256789032/png", "IMG_256789032.pndfgh", "IMG_23.gif"];
$reg_img='/^IMG_\d+\.(jpg|png|gif)/';
for ($i = 0; $i < count($arr); $i++) {
    if (preg_match($reg_img, $arr[$i], $matches)) {
    echo $arr[$i]." Correct \n";
}
else {
    echo $arr[$i]." Not correct \n";
}
print_r($matches);
}