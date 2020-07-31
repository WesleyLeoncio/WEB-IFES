
document.getElementById("idCarro").onclick = function () {
    let comboBox = document.getElementById("idCarro");
    trocarCor(comboBox.options[comboBox.selectedIndex].value);

};

const trocarCor = (cor) => document.getElementById("idImagem").src = "Image/carro_" + cor + ".png";
