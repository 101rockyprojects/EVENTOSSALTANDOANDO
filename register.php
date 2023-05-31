<?php
session_start();
include 'connection.php';
if ($_POST) {
    $_SESSION['user'] = "Rocky";
    header("location:index.php");
}

?>

<?php include 'header.php'; ?>
<div class="container p-3 mt-5">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card bg-light">
                <div class="card-header text-white readex" style="background-color:#02C39A">
                    <h2>Registro</h2>
                </div>
                <div class="card-body">
                    <form action="register.php" method="post">
                        Nombre: <input class="form-control" type="text" name="name" id="" required>
                        <br>
                        Telefono: <input class="form-control" type="text" name="password" id="" required maxlength="10">
                        <br>
                        Correo: <input class="form-control" type="text" name="email" id="" required>
                        <br>
                        Contraseña: <input class="form-control" type="password" name="password" id="" required>
                        <br>
                        <div class="d-flex justify-content-center">
                            <button class="btn text-white px-5 readex" style="background-color:#02C39A" type="submit" name="register">Crear cuenta</button>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="login.php">¿Ya tienes cuenta?</a>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-muted" style="background-color:#02C39A">
                </div>
            </div>

        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>

</html>