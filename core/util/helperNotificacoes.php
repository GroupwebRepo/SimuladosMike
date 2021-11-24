<?php

function cadastrarNotificacoes($nome, $descricao, $icone){
    global $mysql;

    $query = "INSERT INTO xxxxx (nome,descricao,icone) 
              VALUES('" . $nome . "' , '" . $descricao . "' , '" . $icone . "')";

    $result = $mysql->query($query);

    if ($result) {
        return true;
    } else {
        return false;
    }
}

function getnotificacoes(){
    global $mysql;

    $query = 'SELECT id,tipo FROM xxxxx;';
    $result = $mysql->query($query);

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return false;
    }
}
