<?php

if (
    !isset($_REQUEST['data']['user']) ||
    empty($_REQUEST['data']["user"])
) {
    return jsonResponse(false, 'campo usuário vazio.');
    exit();
}

if (
    !isset($_REQUEST['data']['pass']) ||
    empty($_REQUEST['data']["pass"])
) {
    return jsonResponse(false, 'campo senha vazio.');
    exit();
}

if (
    !isset($_REQUEST['data']['email']) ||
    empty($_REQUEST['data']["email"])
) {
    return jsonResponse(false, 'campo email vazio.');
    exit();
}

if (
    !isset($_REQUEST['data']['cidade']) ||
    empty($_REQUEST['data']["cidade"])
) {
    return jsonResponse(false, 'campo cidade vazio.');
    exit();
}

if (
    !isset($_REQUEST['data']['estado']) ||
    empty($_REQUEST['data']["estado"])
) {
    return jsonResponse(false, 'campo estado vazio.');
    exit();
}

$retorno = empresaExist($_REQUEST['data']['user']);

if ($retorno) {
    return jsonResponse(false, 'Empresa já cadastrado no sistema.');
    exit();
}

$query = "INSERT INTO empresas (user,pass,email,cidade,estado)
VALUES('" . addslashes($_REQUEST['data']["user"]) . "' , '" . md5($_REQUEST['data']["pass"]) . "' , '"
    . addslashes($_REQUEST['data']["email"]) . "' , '" . addslashes($_REQUEST['data']["cidade"]) . "' , '"
    . addslashes($_REQUEST['data']["estado"]) . "' )";

$result = $mysql->query($query);

if ($result) {
    return jsonResponse(true, 'Empresa cadastrada com sucesso!');
    exit();
} else {
    return jsonResponse(false, 'Erro ao cadastrar empresa.');
    exit();
}
