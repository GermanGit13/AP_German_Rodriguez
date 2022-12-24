<?php
//Funcion para validar la entrada a la web mediante un do While
//Con while verifico que si se cumple la condicion pasa al index y sino se queda introduciendo el catcha

function validar_catcha_while($catcha)
{

    while ($catcha == 13) {

        return ("./index.php");//Le mando al index.php hasta que el coincidida el catcha con 13;

    }

    print <<<HERE
            <!-- Para usar la hoja de estilos de  Bootstrap -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <!-- FIN hoja de estilos de  Bootstrap -->
            
            <div class="p-3 mb-2 bg-danger text-white">Error en la validación, prueba sumar correctamente</div>


HERE;

}