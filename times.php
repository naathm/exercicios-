<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$times = array(
    "Palmeiras",
    "Vasco",
    "Fluminense",
    "Internacional",
    "Grêmio",
    "Flamengo",
    "Atlético Mineiro",
    "Atlético-PR",
    "Cruzeiro",
    "Botafogo",
    "São Paulo",
    "Sport Recife",
    "Ceará SC",
    "Bahia",
    "EC Vitória",
    "Corinthians",
    "Santos",
    "Chapecoense",
    "América-MG",
    "Paraná"

);

$jogos = array(
    "Palmeiras",
    "Vasco",
    "Fluminense",
    "Internacional",
    "Grêmio",
    "Flamengo",
    "Atlético Mineiro",
    "Atlético-PR",
    "Cruzeiro",
    "Botafogo",
    "São Paulo",
    "Sport Recife",
    "Ceará SC",
    "Bahia",
    "EC Vitória",
    "Corinthians",
    "Santos",
    "Chapecoense",
    "América-MG",
    "Paraná"

);



foreach($times as $time){
    foreach($jogos as $jogo){
        if($time==$jogo){
            continue;
        }
        echo $time ." vs " .$jogo. "<br>";
    }
}
   