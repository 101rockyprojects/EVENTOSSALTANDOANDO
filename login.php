<?php
session_start();
include 'connection.php';
$errorMessage = '';
if ($_POST) {
    if (($_POST['email'] == "rocky@gmail.com") && ($_POST['password'] == "incorrecta")) {
        echo "<script>alert('Logeado correctamente')</script>";
        $_SESSION['user'] = "Rocky";
        header("location:index.php");
    } else {
        $errorMessage = "<div class='alert alert-danger'>Usuario o contraseña incorrecta</div>";
    }
}

?>

<?php include 'header.php'; ?>
<div class="container p-3 mt-5">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 mt-5">
            <div class="card bg-light">
                <div class="card-header text-white readex" style="background-color:#9548b9">
                    <h2>Acceder</h2>
                </div>
                <div class="card-body">
                    <form action="login.php" method="post">
                        Correo: <input class="form-control" type="text" name="email" id="" required>
                        <br>
                        Contraseña: <input class="form-control" type="password" name="password" id="" required>
                        <br>
                        <?php
                        if(!empty($errorMessage)) echo $errorMessage;
                        ?>
                        <div class="d-flex justify-content-center">
                            <button class="btn text-white px-5 readex" style="background-color:#f86d6d" type="submit" name="login">Iniciar Sesión</button>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="register.php">¿Aún no tienes cuenta?</a>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-muted" style="background-color:#9548b9">
                </div>
            </div>

        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>

</html>