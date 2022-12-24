<?php

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; //Datos permitidos para la generacion de una cadena Alfanúmerica

//En esta funcion le pasamos como parametros los caracteres permitidos y por defecto la lontuitud pero al declararla podemos asignar otra longuitud
function generate_string($input, $strength = 32) {

    $input_length = strlen($input); //uso la funcion strlen

    $random_string = ''; // inicializo la variable

    //recorro con un for hasta llenar la cantidad de caracteres puestos en $.trength en los parametros de la función
    for($i = 0; $i < $strength; $i++) {

        $random_character = $input[mt_rand(0, $input_length - 1)];

        $random_string .= $random_character;

    }

    return $random_string;
}
