<?php

$courses = [
    'backend' => 'php',
    'frontend' => 'javascript',
    'framework' => 'laravel'
];

// krsort($courses);

// echo "<pre>";
// var_dump($courses);
// echo "</pre>";

// echo "<pre>";
// var_dump(array_chunk($courses, 1));
// echo "</pre>";

// echo array_shift($courses);
// echo "<pre>";
// var_dump($courses);
// echo "</pre>";

// echo array_pop($courses);
// echo "<pre>";
// var_dump($courses);
// echo "</pre>";

// echo array_unshift($courses, 'python');
// echo "<pre>";
// var_dump($courses);
// echo "</pre>";

// echo array_push($courses, 'rust');
// echo "<pre>";
// var_dump($courses);
// echo "</pre>";

$courses_flip = array_flip($courses);
echo "<pre>";
var_dump($courses_flip);
echo "</pre>";
