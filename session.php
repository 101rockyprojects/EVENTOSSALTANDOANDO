<?php
    session_start();

    if(isset($_SESSION["nombre"])){
        $_SESSION["nombre"] = $_POST['nombre'];
        $_SESSION["status"] = 1;

        echo "Sesión iniciada <br>";
        echo "Usuario: ".$_SESSION["nombre"];
    } else {
        echo "No se ha iniciado sesión";
    }
    
?>