<?php
include_once ("ForEach.php");

function versionAutodesk($type, $modelA) {

    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; //Datos permitidos para la generacion de una cadena Alfanúmerica

    $autocad2019 = generate_string($permitted_chars, 32); //Uso la funcion creada en For.php para generar números aleatorios de 32 caracteres
    $autocad2020 = generate_string($permitted_chars, 32);
    $autocad2022 = generate_string($permitted_chars, 32);
    $revit2019 = generate_string($permitted_chars, 32);
    $revit2020 = generate_string($permitted_chars, 32);
    $revit2022 = generate_string($permitted_chars, 32);

    do {
        if ($type == 'Autocad') { //If para saber si me llega la etiqueta Autocad o continua hasta el ELSEIF donde reviso la etiqueta Revit
            if ($modelA == 'Todas') {
//                echo "Entro en el if de Autocad dentro del do";
                showLicenciasAutodesk(); //Metodo para recorrer el Arrays y mostrarlo por pantalla dentro de las card ./Foreach.php

            } elseif ($modelA == 'Autocad2019') {
                // dentro de este PRINT podremos picar código HTML, y será interpretado sin problema
                print <<<HERE
                <div class="card" style="width: 18rem;">
                  <img src="../img/autocad.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Licencia Autocad 2019</h5>
                    <p class="card-text">$autocad2019</p>
                    <a href="https://learn.microsoft.com/es-es/officeupdates/office-updates-msi" class="btn btn-primary">Detalles del producto</a>
                  </div>
                </div>
HERE;
            } elseif ($modelA == 'Autocad2020') {
                print <<<HERE
                <div class="card" style="width: 18rem;">
                  <img src="../img/autocad.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Licencia Autocad 2020</h5>
                    <p class="card-text">$autocad2020</p>
                    <a href="https://support.microsoft.com/es-es/office/novedades-de-office-2019-5077cbbe-0d94-44cc-b30e-654e37629b0c" class="btn btn-primary">Detalles del producto</a>
                  </div>
                </div>  
HERE;
            } elseif ($modelA == 'Autocad2022') {
                print <<<HERE
                <div class="card" style="width: 18rem;">
                  <img src="../img/autocad.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Licencia Autocad 2022</h5>
                    <p class="card-text">$autocad2022</p>
                    <a href="https://support.microsoft.com/es-es/office/novedades-de-office-2019-5077cbbe-0d94-44cc-b30e-654e37629b0c" class="btn btn-primary">Detalles del producto</a>
                  </div>
                </div>  
HERE;
            } else {
                print <<<HERE
                <li class="list-group-item">No ha seleccionado ninguna a licencia a mostrar </li>
            </ul>
HERE;
            }

        } elseif ($type == 'Revit') { //ElseIf para verificar que recibo Revit
            if ($modelA == 'Todas') {

//                echo "Entro en el elseif de Revit dentro del do";
                showLicenciasAutodesk(); //Metodo para recorrer el Arrays y mostrarlo por pantalla dentro de las card ./Foreach.php

            } elseif ($modelA == 'Revit2019') {

                // dentro de este PRINT podremos picar código HTML, y será interpretado sin problema
                print <<<HERE
        <div class="card" style="width: 18rem;">
          <img src="../img/revit.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Licencia Revit 2019</h5>
            <p class="card-text">$revit2019</p>
            <a href="https://learn.microsoft.com/es-es/officeupdates/office-updates-msi" class="btn btn-primary">Detalles del producto</a>
          </div>
        </div>
HERE;

            } elseif ($modelA == 'Revit2020') {

                print <<<HERE
        <div class="card" style="width: 18rem;">
          <img src="../img/revit.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Licencia Autocad 2020</h5>
            <p class="card-text">$revit2020</p>
            <a href="https://support.microsoft.com/es-es/office/novedades-de-office-2019-5077cbbe-0d94-44cc-b30e-654e37629b0c" class="btn btn-primary">Detalles del producto</a>
          </div>
        </div>
HERE;

            } elseif ($modelA == 'Revit2022') {

                print <<<HERE
        <div class="card" style="width: 18rem;">
          <img src="../img/revit.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Licencia Autocad 2022</h5>
            <p class="card-text">$revit2022</p>
            <a href="https://support.microsoft.com/es-es/office/novedades-de-office-2019-5077cbbe-0d94-44cc-b30e-654e37629b0c" class="btn btn-primary">Detalles del producto</a>
          </div>
        </div>
HERE;
            }
        }
    } while ($type == '');
}
