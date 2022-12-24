<?php
include("header.php");//Creo un página para la cabecera y con include la uso
include("../domain/Autodesk.php") //Para poder crear el objeto
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
        <label for="lang">Tipo</label>
        <BR>
        <input type="checkbox" name="tipo" value="Autodesk"/> Autodesk<br/>
        <input type="checkbox" name="tipo" value="Revit"/> Revit<br/>
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

        <input type="submit" name="submit"/><br/> <!-- -->
    </form>

<?php
if (isset($_POST['submit'])) {
    $tipo = $_POST['tipo'];
    $version = $_POST['version'];
    $serial = $_POST['serial'];
    $unAutodesk = new Autodesk($tipo, $version, $serial);

//    $unAutodesk ->addLicencia($unAutodesk);
//    $unAutodesk ->getOffice();
}
?>

<?php
include("footer.php"); //Creo un página para el pie de página y con include la uso
?>