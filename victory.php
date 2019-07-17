<html>

<head>
    <meta charset="utf-8">
    <link rel="icon" href="imagens/icon.png">
    <title>
        PARABÉNS!
    </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="estilo.css" />
</head>

<body>

    <audio src="sounds/victory.mp3" type="audio/mpeg" autoplay loop></audio>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center">
                    <img src="imagens/vitoria.png" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center">
                    <h5>Você pegou <span class="span" id="contador1"> </span> Butterfree!</h5>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center">
                    <button onclick="window.location.href = 'index.php'" type="button"
                        class="btn btn-dark btn-large">Reiniciar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        var count = sessionStorage.getItem("pegos");
        document.getElementById("contador1").innerHTML = 0 + count;
        sessionStorage.clear();
    </script>
</body>

</html>