<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$capitais = array(
    "São Luis",
    "Salvador",
    "Terezina",
    "Fortaleza",
    "Natal",
    "João Pessoa",
    "Aracaju",
    "Maceió",
    "Belém",
    "Manaus",
    "Rio Branco",
    "Macapá",
    "Porto Velho",
    "Boa Vista",
    "Palmas",
    "Goiânia",
    "Cuiabá",
    "Campo Grande",
    "Vitória",
    "Rio de Janeiro",
    "Belo Horizonte",
    "São Paulo",
    "Curitiba",
    "Florianópolis",
    "Porto Alegre",
    "Distrito Federal - Brasília"
);

$cidade = "Salvador";
$ehCapital = in_array($cidade, $capitais);

    if($ehCapital){
        echo "Essa cidade é uma capital!";
    }else{
        echo "Essa cidade NÃO É uma capial!";
    }