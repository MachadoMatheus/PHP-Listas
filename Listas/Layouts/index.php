<?php

include './Layouts.php';
$layout = new Layouts();
$layout->cabecalho("TESTE", "TESTE", "./estiloIndex.css");
$layout->barra();

$layout->inicioEsquerda();
$layout->smile();
$layout->fimEsquerda();

$layout->inicioDireita();
$layout->smile();
$layout->fimDireita();

$layout->rodape();