<?php

if (!isset($_REQUEST['data']['user']) || 
empty($_REQUEST['data']["user"])) {
    return jsonResponse(false, 'campo usuário vazio.');
    exit();
}

if (!isset($_REQUEST['data']['pass']) || 
empty($_REQUEST['data']["pass"])) {
    return jsonResponse(false, 'campo senha vazio.');
    exit();
}

if (!isset($_REQUEST['data']['email']) || 
empty($_REQUEST['data']["email"])) {
    return jsonResponse(false, 'campo email vazio.');
    exit();
}

if (!isset($_REQUEST['data']['celular']) || 
empty($_REQUEST['data']["celular"])) {
    return jsonResponse(false, 'campo celular vazio.');
    exit();
}

$retorno = userExist ($_REQUEST['data']['user']);

if ($retorno) {
    return jsonResponse(false, 'Usuário já cadastrado no sistema.');
    exit();
}

$query = "INSERT INTO usuarios (user,pass,email,celular,linkedin,foto) 
VALUES('" . addslashes($_REQUEST['data']["user"]) . "' , '" . md5($_REQUEST['data']["pass"]) . "' , '"
    . addslashes($_REQUEST['data']["email"]) . "' , '" . addslashes($_REQUEST['data']["celular"]) . "' , '"
    . addslashes($_REQUEST['data']["linkedin"]) . "' , '" . addslashes($_REQUEST['data']["foto"]) . "')";
$result = $mysql->query($query);

if ($result) {
    return jsonResponse(true, 'Usuário cadastrado com sucesso!');
    exit();
} else {
    return jsonResponse(false, 'Erro ao cadastrar usuário.');
    exit();
}
