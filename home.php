<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" type="text/css" href="styleb.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCRIMER</title>
</head>

<body data-barba="wrapper">
    <div data-barba="container" data-barba-namespace="">

        <div class="contenedor">


            <img class="det" src="images/pixelh.png" alt="">
            <img class="det" src="images/star.png" alt="">
            <div class="fondo">
                <img src="images/mario.gif" alt="" width="900">
            </div>

            <div class="rectangle-4">
                <a class="linku" href="../login/login.php" rel="noopener noreferrer">inicia sesion</a>
                <button class="rectangle-6" onclick="press()"><span id="dot" class="material-symbols-outlined">
                        more_vert
                    </span></button>


                <div class="rectangle-7" id="barra">
                    <button class="bb" onclick="getback()"></button>
                    <span class="material-symbols-outlined" id="baku">
                        reply
                    </span>

                    <div class="selector">
                        <h5>
                            HOME<a href="../home/home.php"></a><span id="obj" class="material-symbols-outlined">
                                home
                            </span>
                        </h5>

                        <h5>
                            videojuegos<a href="#"></a><span id="obj1" class="material-symbols-outlined">
                                stadia_controller
                            </span>
                        </h5>

                        <h5>
                            peliculas<a href="#"></a><span id="obj2" class="material-symbols-outlined">
                                theaters
                            </span>
                        </h5>

                        <h5>
                            tendencias<a href="#"></a><span id="obj3" class="material-symbols-outlined">
                                trending_up
                            </span>
                        </h5>

                        <h5>
                            ranking<a href="#"></a><span id="obj" class="material-symbols-outlined">
                                star_half
                            </span>
                        </h5>
                    </div>
                    <div class="opciones">
                        <h5>
                            configuracion<a href="#"></a><span id="obj4" class="material-symbols-outlined">
                                settings
                            </span>
                        </h5>

                        <h5>
                            personalizacion<a href="#"></a><span id="obj5" class="material-symbols-outlined">
                                construction
                            </span>
                        </h5>
                    </div>

                </div>

                <input class="rectangle-5" type="text" name="buscador" placeholder="Buscar">

                <h5 class="usuario">usuario de ejemplo</h5>
                <div class="account-circle-icon-1"><span " class=" material-symbols-outlined">
                        account_circle
                    </span></div>
            </div>

            <div class="titulo">
                <h3>SCRIMER</h3>
            </div>
            <div class="next"> <span class="material-symbols-outlined">
                    navigate_next
                </span></div>


        </div>
    </div>
</body>
<!--<script type="text/javascript" src="js/barba.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script> !-->
<script>
    //var a = 1;

    function press() {

        //a++;
        //console.log(a);
        document.querySelector("#barra").style.animation = "movesin 0.8s";
        document.querySelector("#barra").style.transform = "translateX(0px)"
    }

    function getback() {
        //a++;
        //console.log(a);
        document.querySelector("#barra").style.animation = "movesout 0.8s";
        document.querySelector("#barra").style.transform = "translateX(-300px)";
    }
</script>

</html>