<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<div class="row align-items-md-stretch justify-content-center my-3">
    <div class="col-md-12">
        <div class="pt-3 px-4 pb-1 text-black bg-light rounded-3">
            <h2>EVENTOS DESTACADOS</h2>
            <p>Entérate de los mejores eventos en <strong>Cúcuta</strong></p>
        </div>
    </div>
</div>

<body class="container bg-dark">

    <div class="d-flex flex-wrap justify-content-between">
        <div class="ticket ticket-1 m-3">
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

            <form method="post" action="reserva.php">
                <input type="text" style="display:none" name="e" value="1"></input>
                <div class="cta">
                    <button class="buy" type="submit">COMPRAR TICKET</button>
                </div>
            </form>

        </div>

        <div class="ticket ticket-2 m-3" style="background-image: url(src/burguerfest.jpg);">

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

            <div class="rip">
            </div>

            <form method="post" action="reserva.php">
                <input type="text" style="display:none" name="e" value="2"></input>
                <div class="cta">
                    <button class="buy" type="submit">COMPRAR TICKET</button>
                </div>
            </form>

        </div>
        <div class="ticket ticket-3 m-3" style="background-image: url(src/cringe.jpg);">
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

            <div class="rip">
            </div>

            <form method="post" action="reserva.php">
                <input type="text" style="display:none" name="e" value="3"></input>
                <div class="cta">
                    <button class="buy" type="submit">COMPRAR TICKET</button>
                </div>
            </form>

        </div>
        <div class="cta">
            <span class="title-1">EVENTOS SALTANDO ANDO</span>
            <br>
            <span class="title-2">EVENTOS SALTANDO ANDO</span>
            <br>
            <span class="title-3">EVENTOS SALTANDO ANDO</span>
        </div>
    </div>

    </div>

</body>

</html>