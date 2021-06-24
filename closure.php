<?php

// $greet = function ($name) // varuable que requiere lógica
// {
//     return "Hola, $name";
// };

// echo $greet('Italo');

function greet(Closure $lang, $name)
{
    return $lang($name);
}

$es = function ($name) {
    return "Hola, $name";
};

$en = function ($name) {
    return "Hello, $name";
};

echo greet($en, 'Lynda');
