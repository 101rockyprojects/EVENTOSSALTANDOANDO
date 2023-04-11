<?php
    $servername = "sql205.epizy.com";
    $username = "epiz_33916601";
    $password = "0pXNIt7hjGDnQ";
    $database = "epiz_33916601_myfirstdb";
    // Create connection
    $connection = new mysqli($servername,$username,$password,$database);

    $id="";
    $ced="";
    $name="";
    $email="";
    $phone="";
    $address="";

    $errorMessage = "";
    $successMessage = "";

    if ($_SERVER['REQUEST_METHOD'] == 'GET'){

        if (!isset($_GET["id"])){
            header("location: /index.php");
            exit;
        }

        $id = $_GET["id"];

       // Leer los datos del seleccionado 
        $sql = "SELECT * FROM clients WHERE id=$id";
        $result = $connection->query($sql);
        $row = $result->fetch_assoc();

        if (!$row){
            header("location: /index.php");
            exit;
        }

        $id = $row["id"];
        $ced = $row["ced"];
        $name = $row["name"];
        $email = $row["email"];
        $phone = $row["phone"];
        $address = $row["address"];
    }
    else{
        // POST method

        $id = $_POST["id"];
        $ced = $_POST["ced"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];

        do {
            if( empty($ced) || empty($name) || empty($email)|| empty($phone)|| empty($address) ){
                $errorMessage = "Por favor, digita todos los datos";
                break;
            }

            // Actualizar datos del cliente

            $sql = "UPDATE clients " .
                   "SET ced = '$ced', name = '$name', email = '$email', phone = '$phone', address = '$address' " .
                   "WHERE id = $id";
            $result = $connection->query($sql);

            if(!$result){
                $errorMessage = "Búsqueda inválida: " . $connection->error;
                break;
            }

            $successMessage = "Datos Actualizados Correctamente";

        } while (false);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First DB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>Actualizar Datos Cliente</h2>
        <br>
        <?php
            if(!empty($errorMessage)){
                echo "
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>$errorMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Cerrar'></button>
                </div>
                ";
            } 
        ?>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Cédula</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="ced" value="<?php echo $ced?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nombre</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Teléfono</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo $phone?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Dirección</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo $address?>">
                </div>
            </div>
            
            <?php
                if(!empty($successMessage)){
                    echo "
                    <div class='row mb-3'>
                        <div class='col-sm-6 offset-sm-3'>
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <strong>$successMessage</strong>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='OK'></button>
                            </div>
                        </div>
                    </div>
                    ";
                } 
            ?>

            <div class="row mb-3">
                <div class="col-sm-3 offset-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-danger" href="/index.php" role="button">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>