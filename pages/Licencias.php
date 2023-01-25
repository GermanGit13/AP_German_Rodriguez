<?php
setcookie("user", "german", time() + 900);
//siempre poner session_start() para recuperar la sesión si está iniciada
session_start();
if(!isset($_SESSION['nombre']))
{
    echo "No hay sesión activa";

}else{
    echo "Sesion Activa: " .$_SESSION['nombre'];
}

include("header.php");//Creo un página para la cabecera y con include la uso
include("../funciones/Switch.php");//Creo un página para la cabecera y con include la uso
$licencia = '0';
?>

    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../img/logoAutodesk.png" alt="Logo" width="60" height="44" class="d-inline-block align-text-top">
                Software de diseño en 2D y 3D para las industrias de manufacturas, infraestructuras, construcción, <br>
                medios y entretenimiento y datos transmitidos vía inalámbrica.
                Autodesk es mayormente conocida por sus softwares como Autocad, Revit, entre otros.
            </a>
            <a class="navbar-brand" href="#">
                <img src="../img/logoOffice.jpg" alt="Logo" width="60" height="44" class="d-inline-block align-text-top">
                Microsoft Office fue una suite ofimática de aplicaciones para computadoras de escritorio, <br>
                servidores y servicios para los sistemas operativos Microsoft Windows, Mac OS X, iOS, Android y Linux
            </a>
        </div>
    </nav>

    <!--
    form: fomulario
    POST: Cuando pulsamos el boton de submit mediante una forma transparente PREFERIBLE USAR POST
    GET: Cuando pulsamos el boton de submit se manda unidos con simbolo &
    <input type="text" name="nombre"/><br/> Para cajas de texto
    <input type="submit" name="submit"/><br/>
    -->
    <form method="post"> <!-- SE ENVIARIAN LOS DATOS A POST_2.PHP QUE LOS RECOGE-->
        <label for="lang">SELECCIONA EL TIPO DE LICENCIA QUE DESEAS CONSULTAR</label>
        <BR>
        <input type="checkbox" name="licencia" value="1"/> Office<br/>
        <input type="checkbox" name="licencia" value="2"/> Autodesk<br/>
        <input type="submit" name="submit"/><br/> <!-- -->
        <BR>
    </form>

<?php
if (isset($_POST['submit'])) { //verificamos que se ha pulsado el boton enviar
   $licencia = $_POST['licencia'];
   validar_licencia($licencia); //Nos lleva a Switch.php
}
?>

<?php
include("footer.php"); //Creo un página para el pie de página y con include la uso
?>