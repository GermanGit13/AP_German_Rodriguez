<?php
include_once ("For.php"); //include_once para casos donde el mismo fichero podría ser incluido y evaluado más de una vez, evita problemas como la redefinición de funciones, reasignación de valores de variables, etc

//Para poder pintar una card con todas las licencias disponibles
function showLicenciasOffice()
{
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; //Datos permitidos para la generacion de una cadena Alfanúmerica

    $ramdonSerial = generate_string($permitted_chars, 32); //Uso la funcion creada en For.php

    $offices = array(
        array(
            "version" => "2016",
            "serial" => $ramdonSerial
        ),
        array(
            "version" => "2016",
            "serial" => $ramdonSerial
        ),
        array(
            "version" => "2019",
            "serial" => $ramdonSerial
        ),
        array(
            "version" => "365",
            "serial" => $ramdonSerial
        ),
    );

    foreach ($offices as $office) {

        // dentro de este PRINT podremos picar código HTML, y será interpretado sin problema
        print <<<HERE
        <div class="card" style="width: 18rem;">
          <img src="../img/genericaOffice.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Licencia Office:   $office[version] </h5>
            <h5 class="card-title">Serial: $office[serial] </h5>
         
            <p class="card-text">  </p>
            <a href="https://learn.microsoft.com/es-es/officeupdates/office-updates-msi" class="btn btn-primary">Detalles del producto</a>
         </div>
        </div>
HERE;

    }
}

//Para poder pintar una card con todas las licencias disponibles
function showLicenciasAutodesk() {

    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; //Datos permitidos para la generacion de una cadena Alfanúmerica

    $ramdonSerial = generate_string($permitted_chars, 32); //Uso la funcion creada en For.php

    $autodesks = array(
        array(
            "tipo" => "Autodesk",
            "version" => "2019",
            "serial" => $ramdonSerial
        ),
        array(
            "tipo" => "Autodesk",
            "version" => "2019",
            "serial" => $ramdonSerial
        ),
        array(
            "tipo" => "Revit",
            "version" => "2019",
            "serial" => $ramdonSerial
        ),
        array(
            "tipo" => "Autodesk",
            "version" => "2022",
            "serial" => $ramdonSerial
        ),
    );

    foreach ($autodesks as $autodesk) {

                // dentro de este PRINT podremos picar código HTML, y será interpretado sin problema
                print <<<HERE
        <div class="card" style="width: 18rem;">
          <img src="../img/logoAutodesk.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tipo: $autodesk[tipo] </h5>
            <h5 class="card-title">Version:   $autodesk[version] </h5>
            <h5 class="card-title">Serial: $autodesk[serial] </h5>
         
            <p class="card-text">  </p>
            <a href="https://learn.microsoft.com/es-es/officeupdates/office-updates-msi" class="btn btn-primary">Detalles del producto</a>
         </div>
        </div>
HERE;

        }
}