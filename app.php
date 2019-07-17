<html>

<head>
    <link rel="icon" href="imagens/icon.png">
    <title>
        Pegue as Butterfree!
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css">
    <script src="jogo.js"></script>
</head>

<body onresize="tamanhoTela()" class="disable-select">

    <iframe src="sounds/silence.mp3" allow="autoplay" id="audio" style="display:none"></iframe>

    <audio id='audioId' type="audio/mpeg" autoplay loop></audio>
    <audio id='soundId' src="sounds/cry.mp3" type="audio/mpeg"></audio>
    <audio id='catchId' src="sounds/catch.mp3" type="audio/mpeg"></audio>

    <div class="painel">
        <div class="life">
            <img id="v1" src="imagens/coracao_cheio.png" />
            <img id="v2" src="imagens/coracao_cheio.png" />
            <img id="v3" src="imagens/coracao_cheio.png" />
        </div>

        <div class="cronometro">
            Tempo restante: <span id="tempoId"></span>
        </div>
    </div>

    <script>
        var increase;
        document.getElementById("tempoId").innerHTML = tempo;
        document.getElementById('audioId').volume = 0.8;
        document.getElementById('audioId').src = song;

        var inicio = setInterval(function () {
            criarRandom();
        }, spawn);

        function spawnar(spawnSpeed) {
            increase = setInterval(function () {
                criarRandom();
            }, spawnSpeed);
        }
    </script>
</body>

</html>