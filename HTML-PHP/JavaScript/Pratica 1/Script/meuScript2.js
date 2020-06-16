const elemento = document.getElementById("alunosList");

let novoAluno = document.createElement("li");

novoAluno.innerHTML = "Leoncio";

elemento.appendChild(document.createElement("li")).innerHTML = "Leoncio"; // Forma resumida

const remove = document.getElementById("alunosList").children[0];
if (remove.parentNode) {
    remove.parentNode.removeChild(remove);
}