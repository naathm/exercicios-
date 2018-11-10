<?php

// Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA. (IFRN)

$nome = Maria;
$sexo = feminino;
$idade = 12;

if($sexo = feminino && $idade<25){
    echo "Parabéns " . $nome. "! ACEITA!";

}else{
    echo "" . $nome . ": NÃO ACEITO.";
}