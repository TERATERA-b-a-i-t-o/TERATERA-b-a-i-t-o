<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" type="text/css" href="styleB.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCRIMER</title>
</head>

<body>
    <div class="contenedor">

        <div class="fondo">
            <img src="images/mario.gif" alt="" width="900">
        </div>
        <div class="rectangle-4">
            <button class="rectangle-6" onclick="press()"><span id="dot" class="material-symbols-outlined">
                    more_vert
                </span></button>

            <div class="rectangle-7" id="barra">
                <button class="bb" onclick="getback()"></button>
                <span class="material-symbols-outlined" id="baku">
                    reply
                </span>

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


    </div>
</body>
<script>
    var a = 1;

    function press() {

        a++;
        console.log(a);
        document.querySelector("#barra").style.animation = "movesin 0.8s";
        document.querySelector("#barra").style.transform = "translateX(0px)"
    }

    function getback() {
        a++;
        console.log(a);
        document.querySelector("#barra").style.animation = "movesout 0.8s";
        document.querySelector("#barra").style.transform = "translateX(-300px)";

    }
</script>

</html>