<nav class="navbar p-2 rounded-3 bg-purple mt-4">
  <div class="container-fluid">
    <a class="navbar-brand text-white nav-link readex" href="index.php">
      EVENTOS SALTANDO ANDO
    </a>
    <?php
    session_start();
    // if (isset($_SESSION['user']) == "Admin") {
    //   echo "<a class='btn btn-outline-light p-2' href='evento.php'>Agregar evento</a>";
    // }
    if (isset($_SESSION['user']) != null) {
      echo "<span class='navbar-brand text-white nav-link readex'>Bienvenid@ Rocky Steven Barrios Parra</span> <a class='btn btn-outline-dark' href='close_session.php'>Cerrar Sesión</a>";
    } else {
      echo "<a class='btn btn-outline-dark p-2' href='login.php'>Acceder</a>";
    }
    ?>
  </div>
</nav>