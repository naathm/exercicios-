<?php

$opcao = 1;

echo "Escolha uma das opções abaixo:<br>
<br>
 1)Lanche, batata e bebida;<br> 
 2)Lanche, salada e bebida;<br>
 3)Arroz, feijão, bife e batata frita;<br>
 4)Porção de batata frita;<br>
 5)Porção de mandioca frita;<br>
 6)Churrasco + 3 acompanhamentos;<br>
 <br>
 <br>";


switch($opcao){
    case(1);
    echo "Você escolheu: Lanche, batata e bebida";
    break;
    
    case(2);
    echo "Você escolheu: Lanche, salada e bebida";
    break;

    case(3);
    echo "Você escolheu: Arroz, feijão, bife e batata frita";
    break;

    case(4);
    echo "Você escolheu: Porção de batata frita";
    break;

    case(5);
    echo "Você escolheu: Porção de mandioca frita";
    break;

    case(6);
    echo "Você escolheu: Churrasco + 3 acompanhamentos";
    break;
}


