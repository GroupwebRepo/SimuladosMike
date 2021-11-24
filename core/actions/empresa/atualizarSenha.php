<?php

if (!isset($_REQUEST['data']['pass']) || empty($_REQUEST['data']["pass"])) {
    return jsonResponse(false, 'campo senha vazio.');
    exit();
}

$query = "UPDATE empresas
    SET pass = '" . md5($_REQUEST['data']["pass"]) . "'
    WHERE id = " . $_REQUEST['data']["id"] . ";";

$result = $mysql->query($query);

if ($result) {
    return jsonResponse(true, 'Senha atualizada com sucesso!');
    exit();
} else {
    return jsonResponse(false, 'Erro ao atualizar senha.');
    exit();
}
