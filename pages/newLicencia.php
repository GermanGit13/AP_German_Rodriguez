<?php
//siempre poner session_start() para recuperar la sesión si está iniciada
session_start();
if(!isset($_SESSION['nombre']))
{
    echo "No hay sesión activa";

}else{
    echo "Sesion Activa: " .$_SESSION['nombre'];}

include("header.php");//Creo un página para la cabecera y con include la uso
include ("../domain/Office.php"); //Para poder crear el objeto Office
include ("../domain/Autodesk.php"); //Para poder crear el objeto Autodesk
$tipo = '';
?>

    <figure>
        <blockquote class="blockquote">
            <p>Gestión de nuevas Licencias.</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            Siga los pasos para dar de alta licencias de: <cite title="Source Title">Office o Autodesk</cite>
        </figcaption>
    </figure>
    <!--
    form: fomulario
    POST: Cuando pulsamos el boton de submit mediante una forma transparente PREFERIBLE USAR POST
    GET: Cuando pulsamos el boton de submit se manda unidos con simbolo &
    <input type="text" name="nombre"/><br/> Para cajas de texto
    <input type="submit" name="submit"/><br/>
    -->
    <form method="post"> <!-- SE ENVIARIAN LOS DATOS A POST_2.PHP QUE LOS RECOGE-->
        <label for="lang">Tipo de Licencia</label>
        <select name="tipo" id="lang">
            <option value="selecciona">Selecciona una Version</option>
            <option value="Office">Office</option>
            <option value="Autodesk">Autodesk</option>
        </select>
        <input type="submit" name="tipoLicencia"/><br/> <!-- -->
        <BR>
    </form>

        <?php
        if ($tipo == '' ) { //PAra poder jugar entre los dos formularios a presentar

            if (isset($_POST['tipoLicencia'])) {
                $tipo = $_POST['tipo'];
            }
        }

        if ($tipo == 'Office') {
            print <<<HERE
            <blockquote class="blockquote">
              <p>Registro de licencias de Office.</p>
            </blockquote>
        
            <form method="post"> <!-- SE ENVIARIAN LOS DATOS A POST_2.PHP QUE LOS RECOGE-->
                 <label for="lang">Versión</label>      
                 <BR>
                <select name="version" id="lang">
                    <option value="selecciona">Selecciona una Version</option>
                    <option value="Office2016">Office 2016</option>
                    <option value="Office2019">Office 2019</option>
                    <option value="Office365">Office 365</option>
                </select>
                <BR>
                <label for="lang">Serial</label>        
                <BR>
                <input type="text" name="serial"/><br/> <!-- -->
        
                <input type="submit" name="submitOffice"/><br/> <!-- -->

HERE;
        } elseif ($tipo == 'Autodesk') {
            print <<<HERE
            <blockquote class="blockquote">
              <p>Registro de licencias de Autodesk.</p>
            </blockquote>
                
            <form method="post"> <!-- SE ENVIARIAN LOS DATOS A POST_2.PHP QUE LOS RECOGE-->
                <label for="lang">Tipo</label>
                <BR>
                <input type="checkbox" name="model" value="Autocad"/> Autocad<br/>
                <input type="checkbox" name="model" value="Revit"/> Revit<br/>
                <label for="lang">Versión</label>
                <select name="version" id="lang">
                    <option value="selecciona">Selecciona una Version</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2022">2022</option>
                </select>
                <BR>
                <label for="lang">Serial</label>
                <input type="text" name="serial"/><br/> <!-- -->
        
                <input type="submit" name="submitAutodesk"/><br/> <!-- -->
            </form>
HERE;
    }
?>


<?php
if (isset($_POST['submitOffice'])) {
    $version = $_POST['version'];
    $serial = $_POST['serial'];
    $unOffice = new Office($version, $serial);
}

if (isset($_POST['submitAutodesk'])) {
    $model = $_POST['model'];
    $version = $_POST['version'];
    $serial = $_POST['serial'];
    $unAutodesk = new Autodesk($model, $version, $serial);
}
?>

<?php
include("footer.php"); //Creo un página para el pie de página y con include la uso
?>