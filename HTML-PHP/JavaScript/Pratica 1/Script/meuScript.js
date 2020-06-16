/*const elementos = document.getElementById("alunosList");// Utilizando document.getElementById("")

let tamanho = elementos.childElementCount; //chil filhos

//console.log(elementos);

for (let i = 0; i < tamanho; i++) {
    console.log(elementos.children[i].innerHTML);
}

*/

/*
const elementos = document.getElementsByTagName("li"); // Utilizando o document.getElementsByTagName("")

let tamanho = elementos.length;

for (let i = 0; i < tamanho; i++) {
    console.log(elementos[i].innerHTML);
}

*/

/*
const elementos = document.querySelector("#alunosList");

let tamanho = elementos.childElementCount;

for (let i = 0; i < tamanho; i++) {
    console.log(elementos.children[i].innerHTML);
}
*/

const elementos = document.querySelectorAll("li");

let tamanho = elementos.length;

for (let i = 0; i < tamanho; i++) {
    console.log(elementos[i].innerHTML);
}