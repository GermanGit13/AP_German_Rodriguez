<?php
include_once ("ForEach.php");

function version($type, $version) {

    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; //Datos permitidos para la generacion de una cadena Alfanúmerica

    $autocad2019 = generate_string($permitted_chars, 32); //Uso la funcion creada en For.php
    $autocad2020 = 'yyyy-yyyyy-yyyyy-yyyy';
    $autocad2022 = 'ccccc-ccccc-ccccc-ccccc';
    $revit2019 = 'xxxx-xxxx-xxxx-xxxx';
    $revit2020 = 'yyyy-yyyyy-yyyyy-yyyy';
    $revit2022 = 'ccccc-ccccc-ccccc-ccccc';

    while ($type == 'Autocad') {

        if ($version == 'Todas') {

            echo "Entro en el while de Revit";
            showLicenciasAutodesk(); //Metodo para recorrer el Arrays y mostrarlo por pantalla

        } elseif ($version == 'Autocad2019') {

            // dentro de este PRINT podremos picar código HTML, y será interpretado sin problema
            print <<<HERE
            <div class="card" style="width: 18rem;">
              <img src="../img/office2016.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Licencia Autocad 2019</h5>
                <p class="card-text">$autocad2019</p>
                <a href="https://learn.microsoft.com/es-es/officeupdates/office-updates-msi" class="btn btn-primary">Detalles del producto</a>
              </div>
            </div>
HERE;

        } elseif ($version == 'Autocad2020') {

            print <<<HERE
            <div class="card" style="width: 18rem;">
              <img src="../img/office2019.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Licencia Autocad 2020</h5>
                <p class="card-text">$autocad2020</p>
                <a href="https://support.microsoft.com/es-es/office/novedades-de-office-2019-5077cbbe-0d94-44cc-b30e-654e37629b0c" class="btn btn-primary">Detalles del producto</a>
              </div>
            </div>  
HERE;

        } elseif ($version == 'Autocad2022') {

            print <<<HERE
            <div class="card" style="width: 18rem;">
              <img src="../img/office365.png" class="card-img-top" alt="...">
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
    }

    while ($type == 'Revit') {

        if ($version == 'Todas') {

            echo "Entro en el while de Revit";
            showLicenciasAutodesk(); //Metodo para recorrer el Arrays y mostrarlo por pantalla

        } elseif ($version == 'Revit2019') {

            // dentro de este PRINT podremos picar código HTML, y será interpretado sin problema
            print <<<HERE
        <div class="card" style="width: 18rem;">
          <img src="../img/office2016.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Licencia Revit 2019</h5>
            <p class="card-text">$revit2019</p>
            <a href="https://learn.microsoft.com/es-es/officeupdates/office-updates-msi" class="btn btn-primary">Detalles del producto</a>
          </div>
        </div>
HERE;

        } elseif ($version == 'Revit2020') {

            print <<<HERE
        <div class="card" style="width: 18rem;">
          <img src="../img/office2019.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Licencia Autocad 2020</h5>
            <p class="card-text">$revit2020</p>
            <a href="https://support.microsoft.com/es-es/office/novedades-de-office-2019-5077cbbe-0d94-44cc-b30e-654e37629b0c" class="btn btn-primary">Detalles del producto</a>
          </div>
        </div>  
HERE;

        } elseif ($version == 'Revit2022'){

            print <<<HERE
        <div class="card" style="width: 18rem;">
          <img src="../img/office365.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Licencia Autocad 2022</h5>
            <p class="card-text">$revit2022</p>
            <a href="https://support.microsoft.com/es-es/office/novedades-de-office-2019-5077cbbe-0d94-44cc-b30e-654e37629b0c" class="btn btn-primary">Detalles del producto</a>
          </div>
        </div>  
HERE;

        }
    }
}




//function revit($serial)
//{
//
//
//}
