<?php
//Funcion para validar la entrada a la web mediante un do While
//Con Do me aseguro que como mínimo entra una vez al bucle para meter un dato a validar

function validar_catcha_do($catcha)
{

    do {
        if ($catcha != 13) {

            print <<<HERE
            <!-- Para usar la hoja de estilos de  Bootstrap -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <!-- FIN hoja de estilos de  Bootstrap -->
            
            <div class="p-3 mb-2 bg-danger text-white">Error en la validación, prueba sumar correctamente</div>


HERE;
            return ("./index.php");//Le mando al index.php hasta que el coincidida el catcha con 13;

        }
    } while ($catcha != 13);

    return include("pages/header.php");//Creo un página para la cabecera y con include la uso;
}