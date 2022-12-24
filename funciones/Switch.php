<?php

function validar_licencia($licencia) {

    switch ($licencia) :
        case "1":
            header("Location: ./office.php");
            die();
        case "2":
            header("Location: ./autodesk.php");
            die();
        default:
            echo "Introduzca un valor numérico correcto";
    endswitch;
}


