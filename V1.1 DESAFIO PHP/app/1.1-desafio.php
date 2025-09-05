<?php
//  \n = não tem no meu teclado pt1
//  | = não tem no meu teclado pt2

require __DIR__ . "/src/funcoes.php";

$nomes = criarConta(); 
$saldo = 1000;

    echo "\n***********************************************\n\n";
        echo "TITULAR : $nomes\n";
        echo "SALDO ATUAL: R$$saldo\n";
    echo "\n***********************************************\n\n";

menuBancario($saldo, $nomes);