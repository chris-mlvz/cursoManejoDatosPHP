<?php

$courses = [
    'fronted' => 'javascript',
    'framework' => 'laravel',
    'backend' => 'php'
];

// echo "<pre>";
// var_dump($courses);
// echo "</pre>";

// foreach ($courses as $key => $value) {
//     echo "$key: $value </br>";

// }

// foreach ($courses as $course) {
//     echo "$course </br>";
// }

// function upper($course, $key)
// {
//     echo strtoupper($course) . ": $key </br>";
// }

// array_walk($courses, 'upper');

/**
 * array_key_exists('fronted', $courses)
 * in_array('javascript', $courses);
 * array_keys($courses);
 * array_values($courses);
 */

echo "<pre>";
var_dump(array_key_exists('fronted', $courses));
echo "</pre>";

echo "<pre>";
var_dump(in_array('javascript', $courses));
echo "</pre>";

echo "<pre>";
var_dump(array_keys($courses));
echo "</pre>";

echo "<pre>";
var_dump(array_values($courses));
echo "</pre>";
