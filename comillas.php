<?php

// echo 'Un texto de una línea
// varias lineas
// comilla simple \' backslash \\ continuar con más texto
// $variable <br/>';


// $name = 'italo';
// echo "Mi nombre es $name <br/>";

// $courses = ['backend' => 'PHP'];

// class User
// {
//     public $name = 'italo';
// }

// $user = new User;

// echo "$user->name quiere aprender $courses['backend']";

// $teacher = 'italo';
// $italo = 'Profesor de PHP';
// echo "$teacher es ${$teacher}";


function getTeacher()
{
    return 'teacher';
}

$teacher = 'Italo';

echo "{${getTeacher()}} enseña PHP";
