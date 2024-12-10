<?php

/*Agora chegou a sua vez! Implemente um sistema simples de conta bancária em PHP,
 com as opções de consultar saldo, sacar e depositar dinheiro, como foi mostrado no vídeo.
 Utilize um loop do-while para manter o programa em execução até que o usuário escolha a
 opção de sair e também fgets(STDIN) para ler as operações de entrada do usuário para realizar
  as operações de saque e depósito.*/

$titular = "Gustavo de Freitas Vitorino";
$saldo = 1000.00;

echo "*************************\n";
echo "Titular: $titular\n";
echo "Saldo Atual: $saldo\n";
echo "*************************\n";

do{ 

    $menu ="
    1. Consultar saldo atual
    2. Sacar Valor
    3. Depositar Valor
    4. Sair
    ";

    echo $menu;
    $opcao = (int) fgets(STDIN);

    switch($opcao) {
        case 1:
            echo "*************************\n";
            echo "Titular: $titular\n";
            echo "Saldo Atual: $saldo\n";
            echo "*************************\n";
            break;

        case 2:
            echo "Digite o valor que deseja sacar:\n";
            $saque = (float) fgets(STDIN);
            if ($saque > $saldo){
                echo "saldo insuficiente\n";
            } else {
                $saldo -= $saque;
            }
            break;

        case 3:
            echo "Digite o valor que deseja depositar:\n";
            $deposito = (float) fgets(STDIN);
            if ($deposito > 0){           
                $saldo += $deposito;
            } else {
                echo "Depósiito inválido!";
            }
            break;

        case 4:
            echo "Volte sempre!\n";
            break;

        default:
            echo "Opção inválida\n";
            break;
    }
} while ($opcao != 4);

?>

