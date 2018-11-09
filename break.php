<?php

$numeroInicial = 1;
$numeroFinal = 100;
$numeroX = 7;

for($numeroInicial=1;$numeroInicial<=100;$numeroInicial++){
    $div = $numeroInicial % $numeroX;
   
    if($div==0){
        echo $numeroInicial;    
        echo "<br>";
        
    }
}
