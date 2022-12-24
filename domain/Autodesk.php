<?php

class Autodesk
{

    //Variables de la clase siempre usar var
    var $model;
    var $version;
    var $serial;

//    //Declaro un array para guardar los objetos creados como autodesk
//    public $autodesk = array();


    //Clase Constructor  para crear el objeto en php se pone __construct como nombre para el constructor de la clase
    function __construct($model, $version, $serial)
    {
        $this->model = $model; //usamos this y -> para acceder a las variables de nuestra clase
        $this->version = $version; //usamos this y -> para acceder a las variables de nuestra clase
        $this->serial = $serial; //usamos this y -> para acceder a las variables de nuestra clase

        echo "Licencia creada satisfatoriamente.". "<br>";
        echo "Tipo de Licencia: "  . $model . "<br>";
        echo "Versión: "  . $version . "<br>";
        echo " Número de serie: " .  $serial . "<br>";
        echo '<br>';
    }


//    function addLicencia($autodesk) {
//        $this->autodesk[]=$autodesk;
//    }
//
//    function getAutodesk(){
//        var_dump($this->autodesk);
//    }

}

//$unOffice = new Office('2016', '111111111');
//$unOffice ->addLicencia($unOffice);
//$unOffice ->getOffice();
//
//$unOffice2 = new Office('2019', '22222222');
//$unOffice2 ->addLicencia($unOffice2);
//$unOffice2 ->getOffice();