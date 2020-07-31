const listPersonagens = document.getElementById("idListPersonagens");

const novoPersonagem = (nome) => listPersonagens.appendChild(document.createElement("li")).innerHTML = nome;
carregarLista();
mostrarElemento();

function carregarLista() {
    novoPersonagem("Luffy");
    novoPersonagem("Nami")
    novoPersonagem("Zoro");
    novoPersonagem("Sanji")
}

document.getElementById("idBotaoAdd").onclick = function () {
    const nome = document.getElementById("idNome").value;
    novoPersonagem(nome);
    mostrarElemento();
};


document.getElementById("idBotaoRemover").onclick = function () {
    const nome = document.getElementById("idNome").value;
    for (let i = 0; i < listPersonagens.childElementCount; i++) {
        let aux = listPersonagens.children[i];
        if (nome == aux.innerHTML) {
            if (aux.parentNode) { aux.parentNode.removeChild(aux) }
            alert("Personagem: " + nome + " Removido com Sucesso!");
            break;
        }
    }
};


function mostrarElemento() {
    for (let i = 0; i < listPersonagens.childElementCount; i++) {
        listPersonagens.children[i].onclick = function () {
            document.getElementById("idNome").value = this.innerHTML;
        }
    }
}


