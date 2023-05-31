<?php
    $server="sql108.epizy.com";
    $user="epiz_34157372";
    $password="CbHVqWLCoF";
    $db="epiz_34157372_eventossa";

    try {
        $connection = new PDO("mysql:host=$server;dbname=$db",$user,$password);
        $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $error) {
        echo "No se pudo generar la conexión: <br>".$error;
    }
?>