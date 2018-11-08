<?php

$numeroInicial = 1;
$numeroFinal = 50;

$contador = $numeroInicial;

echo "São números pares: ";

while($contador <= $numeroFinal){
    $contador += 1;
    
    if($contador%2==0){
    echo "$contador, ";
    }
    

}