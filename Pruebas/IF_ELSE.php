<?php

function validar_catcha($catcha)
{

    if ($catcha == 13) {
        return include("pages/header.php");//Creo un página para la cabecera y con include la uso;
    } else {
       echo "Error no sabes Sumar";
    }
}