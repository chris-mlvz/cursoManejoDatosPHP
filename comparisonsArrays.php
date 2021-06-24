<?php

$courses = ['javascript', 'php'];
$wishes = ['php', 'laravel', 'javascript', 'vuejs'];

echo '<pre>';
var_dump(array_diff($wishes, $courses));
echo '</pre>';

$arrayA = [1, 2, 3, 4, 5];
$arrayB = [3, 4, 5, 6, 7];

echo '<pre>';
var_dump(array_diff($arrayB, $arrayA));
echo '</pre>';


$courses2 = [
    'fronted' => 'javascript',
    'backend' => 'php'
];

$wishes2 = [
    'backend' => 'php',
    'framework' => 'laravel',
    'fronted' => 'javascript',
];

echo '<pre>';
var_dump(array_diff_assoc($wishes2, $courses2));
echo '</pre>';
