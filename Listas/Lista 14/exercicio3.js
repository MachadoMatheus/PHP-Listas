function escrever(texto) {
    let colunasDireitas = document.getElementsByClassName("colunaDireita");
    let colunaDireita = colunasDireitas[0];
    let bloco = document.createElement("div");
    bloco.classList.add("bloco", "containerCentralizado");
    bloco.innerHTML = texto;
    colunaDireita.appendChild(bloco);
}

function escreverTabuada() {
    let num = parseInt(window.prompt("Informe um número"));
    let texto = "";
    for (let i = 1; i <= 10; i++) {
        texto += num + " X " + i + " = " + num * i + "<br>";
    }

    escrever(texto);
}