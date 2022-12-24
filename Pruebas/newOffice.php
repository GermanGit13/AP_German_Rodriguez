<?php
include("header.php");//Creo un página para la cabecera y con include la uso
include("../domain/Office.php") //Para poder crear el objeto
?>

<h1>Añadir nueva Licencia</h1>
<!--
form: fomulario
POST: Cuando pulsamos el boton de submit mediante una forma transparente PREFERIBLE USAR POST
GET: Cuando pulsamos el boton de submit se manda unidos con simbolo &
<input type="text" name="nombre"/><br/> Para cajas de texto
<input type="submit" name="submit"/><br/>
-->
<form method="post"> <!-- SE ENVIARIAN LOS DATOS A POST_2.PHP QUE LOS RECOGE-->
    <label for="lang">Versión</label>
    <select name="version" id="lang">
        <option value="selecciona">Selecciona una Version</option>
        <option value="Office2016">Office 2016</option>
        <option value="Office2019">Office 2019</option>
        <option value="Office365">Office 365</option>
    </select>
    <BR>
    <label for="lang">Serial</label>
    <input type="text" name="serial"/><br/> <!-- -->

    <input type="submit" name="submit"/><br/> <!-- -->
</form>

<?php
if (isset($_POST['submit'])) {
    $version = $_POST['version'];
    $serial = $_POST['serial'];
    $unOffice = new Office($version, $serial);

//    $unOffice ->addLicencia($unOffice);
//    $unOffice ->getOffice();
}
?>

<?php
include("footer.php"); //Creo un página para el pie de página y con include la uso
?>
