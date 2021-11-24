<?php

$query = "UPDATE usuarios
    SET user = '" . addslashes($_REQUEST['data']["user"]) . "',
    email = '" . addslashes($_REQUEST['data']["email"]) . "',
    celular = '" . addslashes($_REQUEST['data']["celular"]) . "',
    linkedin = '" . addslashes($_REQUEST['data']["linkedin"]) . "',
    estado = " . addslashes($_REQUEST['data']["estado"]) . ",
    cidade = '" . addslashes($_REQUEST['data']["cidade"]) . "',
    logradouro = '" . addslashes($_REQUEST['data']["logradouro"]) . "',
    numero = " . addslashes($_REQUEST['data']["numero"]) . "
    WHERE id = " . $_REQUEST['data']["id"] . ";";

$result = $mysql->query($query);

if (isset($_FILES["imagem_perfil"]["name"])) {
    $retorno = uploadImagemPerfil('usuario', $_REQUEST['data']["id"], $_FILES["imagem_perfil"]);
}

if ($result) {
    return jsonResponse(true, 'Usuário atualizado com sucesso!');
    exit();
} else {
    return jsonResponse(false, 'Erro ao atualizar usuário.');
    exit();
}
