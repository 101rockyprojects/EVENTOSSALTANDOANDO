<?php
session_start();
if (!isset($_SESSION['user']) == "Rocky") {
    header("location:index.php");
}

?>

<?php include 'header.php'; ?>

<div class="row mt-5">
    <div class="col-8">
        <h2 class="text-white">EVENTO</h2>
        <?php
        if ($_POST) {
            $evento = $_POST['e'];
            switch ($evento) {
                case 1:
                    echo '
                    <div class="ticket ticket-1" id="ticket1">
                        <div class="date">
                            <span class="day">31</span>
                            <span class="month-and-time">OCT</br><span class="small">8PM</span></span>
                        </div>

                        <div class="artist">
                            <span class="name">OCTAVA NOTA</span>
                            </br>
                            <span class="small">CONCIERTO</span>
                        </div>

                        <div class="location">
                            <span>COLISEO TOTTO HERNANDEZ</span>
                            </br>
                            <span class="small"><span>Av.2 #1a-75, Prados Este</span>
                        </div>

                        <div class="rip"></div>
                    </div>';
                    break;
                case 2:
                    echo '
                    <div class="ticket ticket-2" style="background-image: url(src/burguerfest.jpg);" id="ticket2">

                        <div class="date">
                            <span class="day">24</span>
                            <span class="month-and-time">MAY</br><span class="small">8PM</span></span>
                        </div>

                        <div class="artist">
                            <span class="name">AMERICAN FEST</span>
                            </br>
                            <span class="small">Feria de hamburguesas</span>
                        </div>

                        <div class="location">
                            <span>TODA CÚCUTA</span>
                            </br>
                            <span class="small"><span>Caobos, centros comerciales, etc</span>
                </div>

                        <div class="rip"></div>
                    </div>';
                    break;
                case 3:
                    echo '
                    <div class="ticket ticket-3" style="background-image: url(src/cringe.jpg);" id="ticket3">
                        <div class="date">
                            <span class="day">10</span>
                            <span class="month-and-time">JUN</br><span class="small">10AM</span></span>
                        </div>

                        <div class="artist">
                            <span class="name">ANIMECON</span>
                            </br>
                            <span class="small">Convención de otakus</span>
                        </div>

                        <div class="location">
                            <span>BIBLIOTECA PÚBLICA</span>
                            </br>
                            <span class="small"><span>Av.1ra #12-5, La Playa</span>
                </div>

                        <div class="rip"></div>
                    </div>';
                    break;
            }
        }
        ?>
    </div>
    <div class="col-4">
        <h2 class="text-white">RESERVAR</h2>
        <form method="post" action="pago.php">
            <div class="form-row">
                <div class="col-10 mb-3">
                    <input type="text" style="display:none" name="e" id="e"></input>
                    <label class="text-white" for="price">Precio</label>
                    <input type="text" class="form-control" id="price" name="p" required disabled>
                    <label class="text-white" for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="n" required disabled>
                    <label class="text-white" for="telefono">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="t" disabled required maxlength="10">
                    <label class="text-white" for="fechaActual">Fecha</label>
                    <input type="date" class="form-control" id="fechaActual" name="f" required>
                </div>
                <div class="custom-control custom-radio mb-3">
                    <input type="radio" class="custom-control-input" id="nequi" name="radio-stacked" required onclick="myFunction('nequi','txt2','txt1')">
                    <label class="custom-control-label text-white" for="nequi">Nequi</label>
                    <p id="txt1" class="text-white" style="display:none">+57 555-5555555</p>
                </div>
                <div class="custom-control custom-radio mb-3">
                    <input type="radio" class="custom-control-input" id="bancolombia" name="radio-stacked" required onclick="myFunction('bancolombia','txt1','txt2')">
                    <label class="custom-control-label text-white" for="bancolombia">Bancolombia</label>
                    <p id="txt2" class="text-white" style="display:none">888-8888-8888 Débito</p>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" >Pagar</button>
        </form>
    </div>
</div>
</div>

</body>
<script>
    document.getElementById('nombre').value = "Rocky Steven Barrios Parra";
    document.getElementById('telefono').value = "5555555555";
    if (document.getElementById('ticket1')) {
        document.getElementById('fechaActual').value = "2023-10-31";
        document.getElementById('fechaActual').disabled = "true";
        document.getElementById('price').value = "70000";
        document.getElementById('e').value = "OCTAVA NOTA";
    }
    if (document.getElementById('ticket2')) {
        document.getElementById('fechaActual').value = "2023-05-24";
        document.getElementById('fechaActual').min = "2023-05-24";
        document.getElementById('fechaActual').max = "2023-05-31";
        document.getElementById('price').value = "GRATIS";
        document.getElementById('e').value = "AMERICAN FEST";
    }
    if (document.getElementById('ticket3')) {
        document.getElementById('fechaActual').value = "2023-06-10";
        document.getElementById('fechaActual').min = "2023-06-10";
        document.getElementById('fechaActual').max = "2023-06-12";
        document.getElementById('price').value = "15000";
        document.getElementById('e').value = "ANIMECON";
    }

    function myFunction(s,o,t) {
        var radio = document.getElementById(s);
        var text1 = document.getElementById(t);
        var text2 = document.getElementById(o);
        if (radio.checked == true) {
            text1.style.display = "block";
            text2.style.display = "none";
        }
    }
</script>

</html>