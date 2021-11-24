<?php
if (!isset($_REQUEST['data']['user']) || empty($_REQUEST['data']['user'])) {
	return jsonResponse(false, 'Usuário vazio.');
	exit();
}
if (!isset($_REQUEST['data']['pass']) || empty($_REQUEST['data']['pass'])) {
	return jsonResponse(false, 'Senha vazia.');
	exit();
}

$result = $mysql->query("SELECT * FROM usuarios WHERE user ='" . addslashes($_REQUEST['data']['user']) . "' and pass ='" . md5($_REQUEST['data']['pass']) . "' LIMIT 1");

if ($result->num_rows > 0) {
	$ObjUser = $result->fetch_assoc();
	$_SESSION = $ObjUser;
	return jsonResponse(true, $ObjUser);
	exit();
} else {
	return jsonResponse(false, 'Usuário ou senha incorretos.');
	exit();
}
