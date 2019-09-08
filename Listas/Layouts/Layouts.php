<?php

define("CAMINHO_ESTILO", "https://MachadoMatheus.github.io/globalLayout.css");
define("NOME_PROJETO", "Servidor");
define("GITHUB", "http://github.com/MachadoMatheus");

class Layouts {

    public function cabecalho($tituloPagina = NOME_PROJETO, $tituloCabecalho = NOME_PROJETO, $caminhoEstilo = CAMINHO_ESTILO) {

        if (basename($_SERVER['PHP_SELF'], ".php") == "index") {
            $paginaInicial = "./";
        } else {
            $paginaInicial = "../";
        }

        Layouts::escreverHead($tituloPagina, $caminhoEstilo);
        Layouts::escreverCabecalho($paginaInicial, $tituloCabecalho);
    }

    private function escreverCabecalho($paginaInicial, $tituloCabecalho) {
        echo "<body> "
        . "<a href='$paginaInicial'>
                <div class='cabecalho'>
                    <h1>$tituloCabecalho</h1>
                </div>"
        . "</a>"
        ;
    }

    private function escreverHead($tituloPagina, $caminhoEstilo) {
        echo "<!DOCTYPE html><html lang='pt-br'><head><title>$tituloPagina</title>"
        . "<link href='http://MachadoMatheus.github.io/favicon.ico'"
        . "rel='shortcut icon' type='image/x-icon' />"
        . "<link rel='stylesheet' type='text/css' href='$caminhoEstilo'>"
        . "<link href='https://fonts.googleapis.com/css?family=Oswald:300|Indie+Flower&display=swap' rel='stylesheet'>"
        . "<meta charset='utf-8'>"
        . "</head>";
    }

    public function barra(array $links = null) {
        $barra = "<div class='barra'><a href=" . GITHUB . " target='blank'>GitHub</a>";

        if (!is_Null($links)) {
            foreach ($links as $nomePagina => $link) {
                if (is_link($link)) {
                    $barra = $barra . "<a href='$link''>$nomePagina</a>";
                }
            }
        }
        echo $barra . "</div>";
        Layouts::inicioCorpo();
    }

    public function inicioCorpo() {
        echo "<div class='corpo'>";
    }

    public function fimCorpo() {
        echo "</div>";
    }

    public function inicioEsquerda() {
        echo "<div class='colunaEsquerda'>"
        . "<div class='bloco'>";
    }

    public function fimEsquerda() {
        echo "</div>"
        . "</div>";
    }

    public function inicioDireita() {
        echo "<div class='colunaDireita'>"
        . "<div class='bloco'>";
    }

    public function fimDireita() {
        echo "</div>"
        . "</div>";
    }

    public function inicioOutroBloco() {
        echo "<div class='bloco'>";
    }

    public function fimOutroBloco() {
        echo "</div>";
    }

    public function smile() {
        echo "<div class='bloco' align='center'><img src='https://machadomatheus.github.io/Vetores/Feitos/carvao.svg' height='123px'></div>";
    }

    public function rodape() {
        echo Layouts::fimCorpo();
        echo
        "<div class='rodape'>
            <div style='width: 10%; float: left;''><img src='https://machadomatheus.github.io/Vetores/Achados/logoUFSM.svg'></div>
            <div style='width: 80%; float: left;vertical-align: center;'>
		<h3><br>Matheus Machado<br>423 - 2019</h3>
            </div>
            <div style='width: 10%; float: left;''><img src='https://machadomatheus.github.io/Vetores/Achados/logoCTISM.svg'></div>
        </div>
    </body>
</html>";
    }

}
