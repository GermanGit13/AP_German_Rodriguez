<?php
include('header.php');//Creo un página para la cabecera y con include la uso
include('../funciones/IF_ELSEIF.php');
$serial = '0';
?>
    <!--
    form: fomulario
    POST: Cuando pulsamos el boton de submit mediante una forma transparente PREFERIBLE USAR POST
    GET: Cuando pulsamos el boton de submit se manda unidos con simbolo &
    -->
    <form method="post"> <!-- SE ENVIARIAN LOS DATOS A POST_2.PHP QUE LOS RECOGE-->
        <h1>Licencias de Office</h1>
        <label for="lang">Versión</label>
        <select name="serial" id="lang">
            <option value="selecciona">Selecciona una Version</option>
            <option value="Todas">Todas</option>
            <option value="Office2016">Office 2016</option>
            <option value="Office2019">Office 2019</option>
            <option value="Office365">Office 365</option>
        </select>
        <BR>
        <BR>
        <BR>
        <button class="btn btn-dark" type="submit" name="enviar">Consultar</button>
    </form>

<?php
if (isset($_POST['enviar'])) { //verificamos que se ha pulsado el boton enviar
    $serial = $_POST['serial'];
    serial($serial);
}
?>



<?php
include("footer.php"); //Creo un página para el pie de página y con include la uso
?>