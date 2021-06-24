<?php

// * valores
// function greet($name)
// {
//     return "Hola, $name";
// }

// echo greet('Italo');

// * referencias
// $course = 'PHP';
// function path(&$course)
// {
//     $course = 'Laravel';
//     echo $course; // Laravel
// }

// path($course);
// echo $course; // Laravel

// * predeterminado
function greet($name = 'Italo')
{
    return "Hola, $name";
}

echo greet();
echo greet('Abel');
