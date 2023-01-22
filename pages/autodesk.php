<?php
//siempre poner session_start() para recuperar la sesión si está iniciada
session_start();
if(!isset($_SESSION['nombre']))
{
    echo "No hay sesión activa";

}else{
    echo "Sesion Activa: " .$_SESSION['nombre'];
}

include("header.php");//Creo un página para la cabecera y con include la uso
include ("../funciones/IF_ELSE.php"); //Para poder usar la funcion que presenta el siguiente formulario si hemos seleccionado Autodesk
include("../funciones/Do_While.php"); //Prar poder usar las funciones que presentan las licencias de revit y autocad
?>
    <!--
    form: fomulario
    POST: Cuando pulsamos el boton de submit mediante una forma transparente PREFERIBLE USAR POST
    GET: Cuando pulsamos el boton de submit se manda unidos con simbolo &
    -->
    <form method="post"> <!-- -->
        <h1>Licencias de Autodesk</h1>
        <label for="lang">Programa</label>
        <select name="model" id="lang">
            <option value="selecciona">Selecciona un Programa de Autodesk</option>
            <option value="Autocad">Autocad</option>
            <option value="Revit">Revit</option>
        </select>
        <BR>
        <BR>
        <BR>
        <button class="btn btn-dark" type="submit" name="submit">Consultar</button>
    </form>

<?php
if (isset($_POST['submit'])) {
    $model = $_POST['model'];
    autodesk($model); //funcion en IF-ELSE para poder presentar el formulario siguiente
}

if (isset($_POST['SubmitA'])) {
    $type = $_POST['type'];
    $modelA = $_POST['model'];
    versionAutodesk($type, $modelA); //funcion en Do-While para poder presentar el formulario siguiente
}

?>
<?php
include("footer.php"); //Creo un página para el pie de página y con include la uso
?>