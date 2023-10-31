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
            <button class="rectangle-6" onclick="press()"></button>

            <div class="rectangle-7" " id="barra"><span class="material-symbols-outlined">
                    reply
                </span>
            </div>

            <input class="rectangle-5" type="text" value="" placeholder="Buscar">
            <h5 class="usuario">usuario de ejemplo</h5>
            <div class="account-circle-icon-1"><span id="baku" class="material-symbols-outlined">
                    account_circle
                </span></div>
        </div>
    </div>
</body>
<script>
    var a = 1;

    function press() {

        a++
        console.log(a)
        document.querySelector("#barra").style.animation = "movesin 0.8s";
        document.querySelector("#barra").style.transform = "translateX(0px)"
    }

    function bar() {

    }
</script>

</html>