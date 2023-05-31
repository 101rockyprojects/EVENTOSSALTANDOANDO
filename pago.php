<?php
if ($_POST) {
    $e = $_POST['e'];
    $price = $_POST['p'];
    $name = $_POST['n'];
    $tel = $_POST['t'];
    $date = $_POST['f'];
    echo $e;
    echo $price;
    echo $name;
    echo $tel;
    echo $date;
}
?>
<?php include 'header.php'; ?>
<div class="container p-3 mt-5">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card bg-light">
                <div class="card-header text-white readex" style="background-color:#02C39A">
                    <h2>PAGO REALIZADO CON EXITO</h2>
                </div>
                <div class="card-body">
                    <ul class="price readex">
                        <li class="header">Detalles</li>
                        <li class="grey"><?php echo $e?></li>
                        <li><?php echo $name?></li>
                        <li><?php echo $tel?></li>
                        <li><?php echo $date?></li>
                        <li class="grey">$<?php echo $price?></li>
                    </ul>
                        <div class="d-flex justify-content-center">
                            <a href="index.php" class="btn text-white px-5 readex">Volver al inicio</a>
                        </div>
                </div>
                <div class="card-footer text-muted" style="background-color:#02C39A">
                </div>
            </div>

        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>

<style>
* {
  box-sizing: border-box;
}

/* Create three columns of equal width */
.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

/* Style the list */
.price {
  list-style-type: none;
  border: 1px solid #02C39A;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

/* Add shadows on hover */
.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

/* Pricing header */
.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

/* List items */
.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

/* Grey list item */
.price .grey {
  background-color: #02C39A;
  font-size: 20px;
}

</style>
</html>