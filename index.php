<?php
setcookie("user", "german", time() + 900);
//setcookie(name, value, expires, path, domain, secure, httponly)
//Para crearla: nombre de la cookie, descripción, tiempo de duración, path: ruta donde se guarda sino ponemos nada va a localhost
//luego va domain y subdominios, luego secure que fuerza la cookie si se ha establecido una conexión segura sino poner en false
//hhtpponly solo estaría disponible para http por ejemplo hjavasript no estaria disponible, si metemos javasript debemos poner esto en false

session_start(); //Inicializa la sesión en PHP
include("./funciones/IF_ELSE.php"); // Para incluir la validacion cathca creada para poder usar un IF-ELSE
include ("./funciones/While.php"); //Para poder usar la funcion de validar el catcha
function validar ($user, $pass) {
    $users = array("german" => "123456"); //usuario y contraseña
    //Comprobamos si dichos valores existen en nuestro array
    if (isset($users[$user])&& ($users[$user] == $pass)) {
        return true;
    } else {
        return false;
    }
}

//Siempre primero ejecutar el validar para ver si se manda a los header o no
//codigo principal de la validacion
//función header de PHP envia un mensaje en ventana emergente de autentificación requerida
//Los datos de usuario y contraseña que rellena el usuario se guardan en las variables predeterminadas PHP_AUTH_USER y PHP_AUTH_PW
//_SERVER -> VARIABLE SUPER GLOBAL-> DONDE SE ENCUENTRAN LOCALIZADAS LAS ANTERIORES VARIABLES
if (!validar($_SERVER['PHP_AUTH_USER'],$_SERVER['PHP_AUTH_PW'])) {
    header('WWW-Authenticate:Basic realm = "Mi zona Web"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Usuario y contraseña incorrectos";
    exit;
} else {
    echo "Bienvenido/a " .$_SERVER['PHP_AUTH_USER'];
}

$_SESSION["nombre"] = $_SERVER['PHP_AUTH_USER']; //guardo el inicio de usuario en una sesion

$catcha = 0; //Creamos la variable a 0 para poder realizar una simulación de rol y jugar con el if - else de abajo

if (isset($_POST['submit'])) { //Recogemos por Post gracias al name con el que identificamos la variable del boton
    $catcha = $_POST['catcha']; //igualo la variable a el dato recibido en el campo name del formulario
    validar_catcha_while($catcha); //Envio la variable a la función que está dentro de "funciones/IF_ELSE.php"
}

// Uso esta bifurcaciín de IF - ELSE para mostar en la web lo que quiero dependiendo del valor de la variable catcha "falso rol de permisos"
if ($catcha != 13) {

    // dentro de este PRINT podremos picar código HTML, y será interpretado sin problema
    print <<<HERE

    <div class="novedades">

        <form method="post"> <!-- Para enviar el formulario -->
            <h3 class="h3 mb-3 fw-normal">INGRESA El CATCHA PARA ENTRAR: La suma de 7 + 5 </h3>
            <div class="form-floating">
                <input type="text" name="catcha" class="form-control" id="floatingInput" placeholder="Catcha"> <!-- name: vital para poder acceder recibir los datos en el Post-->
                <label for="floatingInput">Catcha</label>
            </div>
    
            <button class="btn btn-dark" type="submit" name="submit">ENTRAR</button>
        </form>
    </div>

HERE;

} else {

    include("pages/header.php");//Creo un página para la cabecera y con include la uso;

    print <<<HERE

<BR>
<BR>

<figure>
<img src="img/Intranet.png"
  <figcaption>"Bienvenidos a la intranet en la cual podrás registrar o visualizar Licencias".</figcaption>
</figure>

<BR>
<BR>

HERE;

    include("./pages/footer.php"); //Creo un página para el pie de página y con include la uso
}



