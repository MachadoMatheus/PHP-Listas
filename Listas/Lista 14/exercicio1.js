function escrever(texto) {
    let colunasDireitas = document.getElementsByClassName("colunaDireita");
    let colunaDireita = colunasDireitas[0];
    let bloco = document.createElement("div");
    bloco.classList.add("bloco", "containerCentralizado");
    bloco.innerHTML = texto;
    colunaDireita.appendChild(bloco);
}

function calcularIMC(altura, peso) {
    return peso / Math.pow(altura, 2);
}

function escreverIMC() {
    altura = parseFloat(window.prompt("Informe sua altura em metros").replace(",", "."));
    peso = parseFloat(window.prompt("Informe seu peso em quilogramas").replace(",", "."));

    escrever("Altura: " + altura + "<br>Peso: " + peso + "<br>IMC: " + calcularIMC(altura, peso));
}