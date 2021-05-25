<?php


if(!is_numeric($_GET['tel'])){
    echo 'seu telefone nao é um numero';
}else{
    $tel = $_GET['tel'];
    echo $tel;
}

if(empty($_GET['nome_nome'])){
    echo 'o nome esta vazio';
}elseif(strlen($_GET['nome_nome']) < 4){
    echo 'o nome tem que ter mais de 3 caracteres';
}elseif(strlen($_GET['nome_nome']) > 20){
    echo 'o nome é muito extenso';
}else{
    $nome = $_GET['nome_nome'];
}
