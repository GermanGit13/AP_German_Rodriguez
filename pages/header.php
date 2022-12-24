<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Para usar la hoja de estilos de  Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- FIN hoja de estilos de  Bootstrap -->
    <!--Para incrustar las fuente desde google-->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;900&display=swap" rel="stylesheet">
    <!--FIN incrustar las fuente desde google-->

    <nav class="navbar navbar-dark bg-dark">
        <form class="form-inline">
            <img class="mb-4" src="/img/logo.png" width="2000" height="125"> <!-- Podemos asignarle un tamaño alt="" width="72" height="57" si queremos -->
<!--            <a href="newUser.jsp" class="btn btn-outline-success" type="button">Registrar Incidencia</a> -->
<!--            <a href="/AP_German_Rodriguez/Licencias.php" class="btn btn-outline-success" type="button">Ver Incidencias </a>-->
            <a href="/AP_German_Rodriguez/pages/newLicencia.php" class="btn btn-outline-success" type="button">Crear Licencia</a> <!-- a href convertimos un botón en un hipervinculo al pulsarlo -->
            <a href="/AP_German_Rodriguez/pages/Licencias.php" class="btn btn-outline-success" type="button">Ver Licencias</a>

            <!-- <a href="newUser.jsp" class="btn btn-warning" type="submit">Iniciar / Cerrar Sesión </a>-->
            <!-- <a href="newUser.jsp" class="btn btn-warning" type="submit">Registrarse</a>-->
         </form>
     </nav>
 </head>

