<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gorila Music&Innovation Events</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="dist/hamburgers.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;700;900&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://kit.fontawesome.com/b7c5f970d0.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="media.js"></script>
</head>
<body>
    <?php
        require("comp/menu.html"); 
    ?>
    <section class="mgmt">
        <div class="tituloart wrapper">
            <h1>artistas</h1>
        </div>
        <div class="wrapper textoartistas animate__animated animate__bounceInRight">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia sapiente, a, iure sit dolores asperiores similique doloremque ducimus, ut ea doloribus magni officia excepturi nobis dicta eius odit. Laborum, qui?</p>
            <div class="fondonoticias"></div>
        </div>
        <div class="galeria wrapper">
            <div class="fila flex">
                <div class="cuadrado">
                    <img src="img/bleset.jpg" alt="">
                    <div class="nombre">
                        <p>Bleset</p>
                    </div>
                </div>
                <div class="cuadrado">
                    <img src="img/thegroovesheroica.jpeg" alt="">
                    <div class="nombre">
                        <p>The Grooves</p>
                    </div>
                </div>
            </div>
            <div class="fila flex">
                <div class="cuadrado">
                    <img src="img/Yahairadj.jpg" alt="">
                    <div class="nombre">
                        <p>Yahaira</p>
                    </div>
                </div>
                <div class="cuadrado">
                    <img src="img/fernanda-arrau.jpg" alt="">
                    <div class="nombre">
                        <p>Fernanda Arrau</p>
                    </div>
                </div>
            </div>
            <div class="fila flex">
                <div class="cuadrado">
                    <img src="img/kela.jpg" alt="">
                    <div class="nombre">
                        <p>Kela</p>
                    </div>
                </div>
                <div class="cuadrado">
                    <img src="img/monterrosa.jpg" alt="">
                    <div class="nombre">
                        <p>Monterrosa</p>
                    </div>
                </div>
            </div>    
        </div>
    </section>
    <?php
        require("comp/footer.html"); 
    ?>
</body>
</html>