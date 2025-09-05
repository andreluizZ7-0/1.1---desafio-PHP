<?php 
//  \n = não tem no meu teclado pt1
//  | = não tem no meu teclado pt2

function criarConta(){

$autenticado = false;

do{
    echo "\nOQUE VOCÊ QUER FAZER?\n\n";
        echo "1 - ENTRAR NA CONTA\n";
        echo "2 - CRIAR UMA CONTA\n\n";

switch ($acao = (int) fgets(STDIN)) {
    case 1: echo "Digite seu nome!\n";
                $nome = trim(fgets(STDIN));
            echo "Digite sua senha!\n";
                $senha = trim(fgets(STDIN));

        $arquivo = fopen("users.txt", "r");

while ($linha = fgets($arquivo)) {
    $dados = explode(",", trim($linha));

    if ($nome == $dados[0] && $senha == $dados[1]){
        $autenticado = true;
        break;
    }  
} 
    if (!$autenticado){
            echo "Nome ou Senha incorretos!!\n";
}
        break;

    case 2: echo "Digite seu nome!\n";
                $nome = trim(fgets(STDIN));
            echo "Digite sua senha!\n";
                $senha = trim(fgets(STDIN));
        $arquivo = fopen("users.txt", "a");
            fwrite($arquivo, "$nome,$senha\n");
            fclose($arquivo);
        break;
    
    default: echo "Selecione uma opção valida\n\n";
        break;

}   }while(!$autenticado);
        return $nome;
}

function menuBancario($saldo, $nome) {

    do{
echo "ESCOLHA UMA AÇÂO A SER TOMADA :\n\n";
    echo "1 - CONSULTAR SALDO ATUAL\n";
    echo "2 - REALIZAR SAQUE\n";
    echo "3 - REALIZAR DEPOSITO\n";
    echo "4 - SAIR\n";

switch ($escolha = (int) fgets(STDIN) ) {

    case 1:     echo "***********************************************\n\n";
                echo "TITULAR : $nome\n";
                echo "SALDO ATUAL: R$$saldo\n\n";
                echo "***********************************************\n\n";
        break;

    case 2:  echo "Qual valor deseja sacar?\n\n";

    $saque = (float) fgets(STDIN);

        if ($saque > $saldo) {
            echo "\nEsse saque não foi possivel, devido a falta de saldo\n\nSeu saldo atual é $saldo\n\n";
        } else {    $saldo -= $saque;
            echo "\nSaque realizado com sucesso!!\n\n";
        }
        break;

    case 3:  echo "Qual valor deseja depositar?\n";
            $saldo += $saque = (float) fgets(STDIN);
            echo "\nValor depositado com sucesso!!\n";
        break;

    case 4: echo "Até outro dia ^_^\n";
        break;

    default: echo "nenhuma ação foi tomada!!\n";
        break;

    }} while ($escolha != 4);

}