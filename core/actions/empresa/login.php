<?php
if (!isset($_REQUEST['data']['user']) || 
empty($_REQUEST['data']['user'])) {
	return jsonResponse(false, 'Usuário vazio.');
	exit();
}
if (!isset($_REQUEST['data']['pass']) || 
empty($_REQUEST['data']['pass'])) {
	return jsonResponse(false, 'Senha vazia.');
	exit();
}

$result = $mysql->query("SELECT * FROM empresas WHERE email ='" . addslashes($_REQUEST['data']['user']) . "' and pass ='" . md5($_REQUEST['data']['pass']) . "' LIMIT 1");

if ($result->num_rows > 0) {
	return jsonResponse(true, $result->fetch_assoc());
    exit();
} else {
	return jsonResponse(false, 'Usuário ou senha incorretos.');
    exit();
}
