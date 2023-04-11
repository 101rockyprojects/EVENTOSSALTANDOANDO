<?php
    if (isset($_GET["id"])){
        $id = $_GET["id"];

        $servername = "sql205.epizy.com";
        $username = "epiz_33916601";
        $password = "0pXNIt7hjGDnQ";
        $database = "epiz_33916601_myfirstdb";

        // Create connection
        $connection = new mysqli($servername,$username,$password,$database);

        $sql = "DELETE FROM clients WHERE id=$id";
        $connection->query($sql);
    }

    header("location: /index.php");
    exit;
?>