<html>

<head>
    <meta charset="utf-8">
    <link rel="icon" href="imagens/icon.png">
    <title>
        Pegue as Butterfree!
    </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="estilo.css" />

    <script>
        function inciarJogo() {
            var dificuldade = document.getElementById('nivel').value;
            if (dificuldade == "") {
                alert("Escolha a dificuldade!");
                return false;
            }
            window.location.href = 'app.php?' + dificuldade;
        }
    </script>
</head>

<body>
    <audio src="sounds/indexSound.mp3" type="audio/mpeg" autoplay loop></audio>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center">
                    <img src="imagens/game.png" class="logoImg" id="logo" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center">
                    <div class="mb-2">
                        <select class="form-control" name="" id="nivel">
                            <option value="">--DIFICULDADE--</option>
                            <option value="easy">EASY</option>
                            <option value="normal">NORMAL</option>
                            <option value="hard">HARD</option>
                            <option value="deus_gamer">GOD</option>
                            <option value="infinite">INFINITE</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center">
                    <button onclick="inciarJogo()" type="button" class="btn btn-danger btn-large">Iniciar</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>