<?php

//Entrar com um número, através de variáveis, e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes. 

//Caso ele seja divisível por apenas um dos números ou dois dos números mostre pelos quais ele é divisível.

$x = 25;
$div1 = 10;
$div2 = 5;
$div3 = 2;

if($x % $div1 == 0 && $x % $div2 == 0 && $x % $div3 == 0){
    echo "O número  " . $x . " é divisível pelo(s) número(s):  " . $div1. ", " .$div2. ", " .$div3. " ..."  ;

}elseif($x % $div1 == 0){
    echo "O número  " . $x . " é divisível pelo número  " . $div1. " ";

}elseif($x % $div2 == 0){
    echo "O número  " . $x . " é divisível pelo número  " . $div2. " ";

}elseif($x % $div3 == 0){
    echo "O número  " . $x . " é divisível pelo número  " . $div3. " ";

}else{
    echo "Esse número não é divisível por nenhuma das variáveis apresentadas.";

}


