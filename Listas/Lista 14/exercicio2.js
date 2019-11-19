function escrever(texto) {
    let colunasDireitas = document.getElementsByClassName("colunaDireita");
    let colunaDireita = colunasDireitas[0];
    let bloco = document.createElement("div");
    bloco.classList.add("bloco", "containerCentralizado");
    bloco.innerHTML = texto;
    colunaDireita.appendChild(bloco);
}

function escreverTabuada() {
    let num1 = parseInt(window.prompt("Informe um número"));
    let num2 = parseInt(window.prompt("Informe outro número"));
    let num3 = parseInt(window.prompt("Informe mais um número"));

    escrever("Num3 = " + num3 + " Num2 = " + num2 + " Num1 = " + num1);
}