<?php

$nome = "Ana Bolena";
$salario = "10000000";

if($salario <= 1000){
    echo "Uau! Você não paga nadinha de imposto!";
}
    elseif($salario <= 1500){
        echo "Poxa, você paga imposto! Mas apenas 10% dos seus rendimentos vão para o Leão, não é tão ruim assim, né?";
    }
    elseif($salario <= 2000){
        echo "Poxa, você paga imposto! 15% dos seus rendimentos vão para o Leão, organize-se financeiramente!";
    }
else($salario >2001){
    echo "Eita! Você paga 20% de imposto! É bom começar a economizar!";
    }