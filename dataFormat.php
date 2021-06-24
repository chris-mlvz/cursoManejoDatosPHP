<?php

// * Alterar
$text = 'PHP es un LENGUAJE, año 2020, programación'; // slug
// echo strtolower($text);
// echo strtoupper($text);
// echo ucfirst($text);
// echo lcfirst($text);

// * Remplazar
$slug = str_replace(' ', '-', $text);
// echo strtolower($slug);

// * Modificación
$code = 39;
// echo str_pad($code, 8, "#", STR_PAD_LEFT);
// echo strip_tags($text);

echo strtoupper($text); // mono byte
echo mb_strtoupper($text); // multi byte
