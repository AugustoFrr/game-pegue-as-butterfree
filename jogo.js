var largura = 0;
var altura = 0;
var coracao = 1;
var tempo = 20;
var endless = false;
var spawn = 1500;

var song = 'sounds/easy.mp3';
var count = 0;

var dif = (window.location.search).replace("?", "");

switch (dif) {
    case "easy":
        spawn = 1500
        song = 'sounds/easy.mp3';
        break;

    case "normal":
        spawn = 1200
        song = 'sounds/normal.mp3';
        break;

    case "hard":
        spawn = 900
        song = 'sounds/hard.mp3';
        break;

    case "deus_gamer":
        spawn = 750;
        song = 'sounds/deus.mp3';
        break;

    case "infinite":
        endless = true;
        song = 'sounds/infinite.mp3';
        break;
}


function tamanhoTela() { 
    altura = window.innerHeight;
    largura = window.innerWidth;
}

tamanhoTela();

var crono = setInterval(function () {
    tempo -= 1;

    if (!endless) {
        if (tempo < 0) {
            clearInterval(crono);
            clearInterval(inicio);
            window.location.href = 'victory.php';
        } else {
            document.getElementById("tempoId").innerHTML = tempo;
        }
    } else {
        document.getElementById('tempoId').innerHTML = "∞";

    }

}, 1000)

function criarRandom() {

    if (document.getElementById("butterfreeId")) {
        document.getElementById("butterfreeId").remove();

        if (coracao > 3) {
            
            window.location.href = 'gameover.php';

        } else {
            document.getElementById("v" + coracao).src = "imagens/coracao_vazio.png";
        }

        coracao++;
    }

    var posicaoX = Math.floor(Math.random() * largura) - 200;
    var posicaoY = Math.floor(Math.random() * altura) - 200;

    posicaoX = posicaoX < 0 ? 0 : posicaoX;
    posicaoY = posicaoY < 0 ? 0 : posicaoY;

    var butterfree = document.createElement('img');
    butterfree.src = "imagens/butterfree.png";
    butterfree.className = tamanhoButterfree() + " " + ladoButterfree();
    butterfree.style.left = posicaoX + 'px';
    butterfree.style.top = posicaoY + 'px';
    butterfree.style.position = "absolute";
    butterfree.id = "butterfreeId"

    document.getElementById('soundId').play();

    butterfree.onclick = function () {
        document.getElementById('catchId').play();
        count++;
        sessionStorage.setItem("pegos", count);
        this.remove();

        if (endless) {
            if (count == 15) {
                clearInterval(inicio);
                clearInterval(increase);
                spawnar(1200);
            } else if (count == 30) {
                clearInterval(increase);
                spawnar(1000);
            } else if (count == 45) {
                clearInterval(increase);
                spawnar(900);
            } else if (count == 60) {
                clearInterval(increase);
                spawnar(750);
            }
        }
    }
    document.body.appendChild(butterfree);
}


function tamanhoButterfree() {
    var classe = Math.floor(Math.random() * 3);

    switch (classe) {
        case 0:
            return 'butterfree'
        case 1:
            return 'butterfree1'
        case 2:
            return 'butterfree2'
    }
}

function ladoButterfree() {
    var classe = Math.floor(Math.random() * 2);

    switch (classe) {
        case 0:
            return 'esquerda'
        case 1:
            return 'direita'
    }
}

