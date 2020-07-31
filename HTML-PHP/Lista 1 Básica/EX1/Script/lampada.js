let status = true;
let nCliks = 0;
let botao = document.getElementById("idBotao").onclick = function () {
    acender();
    if (status == true) {
        document.getElementById("idBotao").src = "Image/btnLigado.jpg";
        status = false;
    } else {
        document.getElementById("idBotao").src = "Image/btnDesligado.jpg";
        status = true;
    }
};

const acender = () => {
    nCliks++;
    numeroCliques();
    if (nCliks <= 20) {
        if (status) {
            document.getElementById("idLampada").src = "Image/lampAcesa.jpg";
        } else {
            document.getElementById("idLampada").src = "Image/lampApagada.jpg";
        }
    } else {
        document.getElementById("idLampada").src = "Image/lampQueimada.jpg";
    }
}

const numeroCliques = () => document.getElementById("idClicks").innerHTML = nCliks;
