<?php

// Construir um programa que receba 2 números em variáveis e efetue a adição. 
//Caso o valor somado seja maior que 20, este deverá ser apresentando somando-se a ele mais 8; 
//caso o valor somado seja menor ou igual a 20, este deverá ser apresentado 
//subtraindo-se 5. (IFRN)

$x = 4;
$y = 3;

$soma = $x+$y;

if($soma <= 20){
    echo "A soma entre os números x e y resultou em número menor ou igual a 20. Subtraiu-se 5 e o resultado foi  ";
    echo $soma -=5;
    

    }else{
    echo "A soma entre os números x e y resultou em número maior que 20. Adicinou-se 8 à soma e o resultado foi  ";  
    echo $soma +=8;

}
