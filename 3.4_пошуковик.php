<?php
$text = "I have a cat and I have a dog. He has two cats, but he doesn't have a dog.";
// $pattern = '/\w+/';
$keywords = preg_split('/\s+/', $text);
$result = array_unique($keywords);
print_r($result);
