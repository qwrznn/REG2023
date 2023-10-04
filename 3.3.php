<?php
$arr = ["name0@gmail", "name_6@gmail.com", "name_6@gmail.comt", "name987654@yahoo.com", "NamE@gmai.com", "nnname", "name_.com", "name@qwerty.com"];
$reg_img='/^\w+\@(gmail|yahoo)\.com$/';
for ($i = 0; $i < count($arr); $i++) {
    if (preg_match($reg_img, $arr[$i], $matches)) {
    echo $arr[$i]." Correct \n";
}
else {
    echo $arr[$i]." Not correct \n";
}
print_r($matches);
}