<?php

class Office
{

    //Variables de la clase siempre usar var
    var $version;
    var $serial;


    //Clase Constructor  para crear el objeto en php se pone __construct como nombre para el constructor de la clase
    function __construct($version, $serial)
    {
        $this->version = $version; //usamos this y -> para acceder a las variables de nuestra clase
        $this->serial = $serial; //usamos this y -> para acceder a las variables de nuestra clase

        echo "Licencia creada satisfatoriamente.". "<br>";
        echo "Tipo de Licencia: "  . $version . "<br>";
        echo " Número de serie: " .  $serial . "<br>";
        echo '<br>';
    }


//    function addLicencia($unOffice) {
//        $this->office[]=$unOffice;
//    }

//    function getOffice(){
//        var_dump($this->office);
//    }

}

//$unOffice = new Office('2016', '111111111');
//$unOffice ->addLicencia($unOffice);
//$unOffice ->getOffice();
//
//$unOffice2 = new Office('2019', '22222222');
//$unOffice2 ->addLicencia($unOffice2);
//$unOffice2 ->getOffice();


