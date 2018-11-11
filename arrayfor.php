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

for($contador=0;$contador < count($frutas);$contador++){
    echo $frutas[$contador];    
    echo "<br>";

}
   
