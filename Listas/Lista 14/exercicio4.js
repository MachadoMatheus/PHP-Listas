function escrever(texto) {
    let colunasDireitas = document.getElementsByClassName("colunaDireita");
    let colunaDireita = colunasDireitas[0];
    let bloco = document.createElement("div");
    bloco.classList.add("bloco", "containerCentralizado");
    bloco.innerHTML = texto;
    colunaDireita.appendChild(bloco);
}

const VAL_DESC = 15.85/100;

function escreverDesconto() {
    let num = parseFloat(window.prompt("Informe sua altura em metros").replace(",", "."));

    let desconto = VAL_DESC * num;

    let valorDescontado = num - desconto;

    escrever("<strike><h3>De: " + num + "</strike></h3><h1>Por " + valorDescontado + "</h1>");
}