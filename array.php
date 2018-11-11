<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$frutas = array(
    "Mamão",
    "Abacate",
    "Pitaya",
    "Tamarindo",
    "Ameixa",
    "Jambu",
    "Açaí",
    "Cupuaçu",
    "Pequi",
);

$totaldeItensArray = count($frutas);
echo "Total de itens array: " .$totaldeItensArray . "<br><br>";

$contador = 0;
    do{
    echo $frutas[$contador] . "<br>";    
    $contador++; 
    }while($contador < $totaldeItensArray);

 
