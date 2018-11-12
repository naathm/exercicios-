<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$cidades = array(
    "nome" => "São Paulo",
    "aniversário" => "25 de Janeiro",
    "fundação" => "1554",
    "gentílico" => "Paulistano",
    "lema" => "Non dvcor, dvco.",
    "padroeiro" => "São Paulo",
    "prefeito"=> "Bruno Covas"
);

foreach($cidades as $cidade){
    echo $cidade. "<br>";
}