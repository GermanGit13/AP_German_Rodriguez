<?php
include_once ("For.php"); //include_oncepara casos donde el mismo fichero podría ser incluido y evaluado más de una vez, evita problemas como la redefinición de funciones, reasignación de valores de variables, etc
include ("ForEach.php");

function serial($serial)
{
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; //Datos permitidos para la generacion de una cadena Alfanúmerica

    $office2016 = generate_string($permitted_chars, 32); //Uso la funcion creada en For.php
    $office2019 = generate_string($permitted_chars, 32);
    $office365 = generate_string($permitted_chars, 32);

    if ($serial == 'Todas') {

        showLicenciasOffice(); //Metodo para recorrer el Arrays y mostrarlo por pantalla

    } elseif ($serial =='Office2016') {

        // dentro de este PRINT podremos picar código HTML, y será interpretado sin problema
        print <<<HERE
        <div class="card" style="width: 18rem;">
          <img src="../img/office2016.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Licencia Office 2016</h5>
            <p class="card-text">$office2016</p>
            <a href="https://learn.microsoft.com/es-es/officeupdates/office-updates-msi" class="btn btn-primary">Detalles del producto</a>
          </div>
        </div>
HERE;

    } elseif ($serial == 'Office2019') {

        print <<<HERE
        <div class="card" style="width: 18rem;">
          <img src="../img/office2019.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Licencia Office 2019</h5>
            <p class="card-text">$office2019</p>
            <a href="https://support.microsoft.com/es-es/office/novedades-de-office-2019-5077cbbe-0d94-44cc-b30e-654e37629b0c" class="btn btn-primary">Detalles del producto</a>
          </div>
        </div>  
HERE;

    } elseif ($serial == 'Office365') {

        print <<<HERE
        <div class="card" style="width: 18rem;">
          <img src="../img/office365.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Licencia Office 2019</h5>
            <p class="card-text">$office365</p>
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
}