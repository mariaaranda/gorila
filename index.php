<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gorila Music&Innovation Events</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;500;700;800;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b7c5f970d0.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;500;600;700;900&display=swap" rel="stylesheet">
    <link href="dist/hamburgers.css" rel="stylesheet">
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
    <section>
        <div class="cabecera">
            <video autoplay loop muted src="img/cabecera.mp4"></video>
            <div class="cabeceratexto">
                <div class="letras animate__animated animate__flash">
                    <img src="img/somosgorilatrazo.png" alt="">
                    <img src="img/somosgorilarelleno.png" alt="">
                </div>
                <div class="letras animate__animated animate__flash">
                    <img src="img/somosgorilatrazo.png" alt="">
                    <img src="img/somosgorilarelleno.png" alt="">
                </div>
            </div>
            <div class="cabeceratexto dos">
                <div class="letras animate__animated animate__flash">
                    <img src="img/somosgorilatrazo.png" alt="">
                </div>
            </div>           
        </div>
    </section>
    <section class="somos wrapper margenes">
            <div class="iconos flex">
                <div data-somos="play" class="caja">
                    <i class="far fa-play-circle activo"></i>
                </div>
                <div data-somos="bombilla" class="caja">
                    <i class="far fa-lightbulb"></i>
                </div>
                <div data-somos="rayo" class="caja">
                    <i class="fas fa-bolt"></i>
                </div>
            </div>
            <div class="infosomos">
                    <div id="play" class="textosomos activo animate__animated animate__bounceInRight">
                        <h1>música, experiencia</h1>
                        <p>Somos un colectivo con más de 10 años de experiencia en generar tendencias y experiencias en el sector musical. GORILA busca la innovación y el impulso de artistas emergentes que sean motor cultural. Somos un colectivo con más de 10 años de experiencia en generar tendencias y experiencias en el sector musical. </p>
                    </div>
                    <div id="bombilla" class="textosomos animate__animated animate__bounceInRight">
                        <h1>creatividad&innovación</h1>
                        <p>Somos un colectivo con más de 10 años de experiencia en generar tendencias y experiencias en el sector musical. GORILA busca la innovación y el impulso de artistas emergentes que sean motor cultural. Somos un colectivo con más de 10 años de experiencia en generar tendencias y experiencias en el sector musical. </p>
                    </div>
                    <div id="rayo" class="textosomos animate__animated animate__bounceInRight">
                        <h1>formación</h1>
                        <p>Somos un colectivo con más de 10 años de experiencia en generar tendencias y experiencias en el sector musical. GORILA busca la innovación y el impulso de artistas emergentes que sean motor cultural. Somos un colectivo con más de 10 años de experiencia en generar tendencias y experiencias en el sector musical. </p>
                    </div>
            </div>
    </section>
    <section class="noticias margenes">          
            <div class="titulo">
                <h1>noticias</h1>
            </div>
            <div class="fondonoticias"></div>
        <div class="columnas wrapper flex jbetween">
            <div class="col">                    
                        <img src="img/TheGrooves.jpg" alt="">
                <div class="texto">
                    <h3>THE GROOVES ESTRENAN NUEVO SINGLE "GIGANTES"</h3>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus omnis officiis porro autem veritatis ea.
                    </p>
                    <div class="btn">
                        <a href="#">VER MÁS</a>
                    </div> 
                </div>                      
            </div>
            <div class="col">                
                    <img src="img/paraiso.jpg" alt="">
                <div class="texto">
                    <h3>GORILA FEST CELEBRARÁ CICLOS DURANTE EL VERANO</h3>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus omnis officiis porro autem veritatis ea.
                    </p>
                    <div class="btn">
                        <a href="#">VER MÁS</a>
                    </div> 
                </div>                      
            </div>
            <div class="col">
                    <img src="img/yahaira.jpg" alt="">
                <div class="texto">
                    <h3>YAHAIRA: LA REINA DE LAS SESIONES HALEY DEL SPECKA</h3>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus omnis officiis porro autem veritatis ea.
                    </p>
                    <div class="btn">
                        <a href="#">VER MÁS</a>
                    </div> 
                </div>                      
            </div>            
        </div> 
    </section>
    <section>
        
    </section>
    <section class="videoclips">
        <div>
            <h1>videoclips</h1>
        </div>
        <div class="flex videos jbetween">           
            <iframe width="48%" height="400" src="https://www.youtube.com/embed/VrWGZWu5Hdo?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="48%" height="400" src="https://www.youtube.com/embed/1M2i9kOInNI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>
    <section class="brand margenes">
        <div class="textoservicios wrapper">
            <h1>GO brand</h1>
            <p> Creación, diseño y producción de experiencias que aportan beneficios más allá de la venta de entradas: generamos valor que se convierte en rentabilidad para las marcas. Creación, diseño y producción de experiencias que aportan beneficios más allá de la venta de entradas: generamos valor que se convierte en rentabilidad para las marcas.</p>
        </div>
        <div class="servicios flex jbetween wrapper">
            <div class="cajabr">
                <div class="aside">
                    <div>
                        <h1>creatividad</h1>
                    </div>
                </div>
                <div class="bside">
                    <div>
                        <h1>innovación</h1>
                    </div>
                </div>                      
            </div>
            <div class="cajabr">
                <div class="aside">
                    <div>
                        <h1>estrategia</h1>
                    </div>
                </div>
                <div class="bside">
                    <div>
                        <h1>comunicación</h1>
                    </div>
                </div>                      
            </div>
            <div class="cajabr">
                <div class="aside">
                    <div>
                        <h1>música</h1>
                    </div>
                </div>
                <div class="bside">
                    <div>
                        <h1>identidad</h1>
                    </div>
                </div>                      
            </div>
        </div>
        <div class="marcas">
            <img src="img/ballentines.jpeg" alt="">
        </div>    
    </section>
    <?php
        require("comp/footer.html"); 
    ?>
</body>
</html>