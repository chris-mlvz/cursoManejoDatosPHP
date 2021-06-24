<?php

$fronted = [
    'a' => 'javascript'
];
$backend = [
    'a' => 'php',
    'c' => 'laravel'
];

echo '<pre>';
var_dump(array_merge_recursive($fronted, $backend));
echo '</pre>';


$courses = ['javascript', 'php', 'laravel'];
$categories = ['front', 'back', 'framework'];

echo '<pre>';
var_dump(array_combine($courses, $categories));
echo '</pre>';
