<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First DB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class = "container my-5">
        <h2>Lista de clientes:</h2>
        <br>
        <a class="btn btn-primary" href="/create.php" role="button">Agregar cliente</a>
        <br>
        <p>By Rocky Barrios</p>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CED</th>
                    <th>NOMBRE</th>
                    <th>EMAIL</th>
                    <th>TELEFONO</th>
                    <th>DIRECCION</th>
                    <th>CREADO EL</th>
                    <th>EDITAR/BORRAR</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $servername = "sql205.epizy.com";
                    $username = "epiz_33916601";
                    $password = "0pXNIt7hjGDnQ";
                    $database = "epiz_33916601_myfirstdb";

                    // Create connection
                    $connection = new mysqli($servername,$username,$password,$database);
                    
                    // Check connection
                    if ($connection->connect_error){
                        die("Conexión fallida: " . $connection->connect_error);
                    }
                    // Leer base de datos
                    $sql = "SELECT * FROM clients";
                    $result = $connection->query($sql);

                    if (!$result){
                        die("Búsqueda inválida: " . $connection->error);
                    }

                    // Leer cada fila
                    while($row = $result->fetch_assoc()){
                        echo "
                        <tr>
                            <td>$row[id]</td>
                            <td>$row[ced]</td>
                            <td>$row[name]</td>
                            <td>$row[email]</td>
                            <td>$row[phone]</td>
                            <td>$row[address]</td>
                            <td>$row[created_at]</td>
                            <td>
                                <a class='btn btn-primary btn-sm' href='/edit.php?id=$row[id]'>Editar</a>
                                <a class='btn btn-danger btn-sm' href='/delete.php?id=$row[id]'>Borrar</a>
                            </td>
                        </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>