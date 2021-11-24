<?php

if (!isset($_REQUEST['data']['user']) || 
empty($_REQUEST['data']["user"])) {
    return jsonResponse(false, 'Informe o usuário.');
    exit();
}

$result = $mysql->query("SELECT pass FROM usuarios WHERE user = '" . addslashes($_REQUEST['data']["user"]) . "' ;");

if ($result->num_rows > 0) {
    return jsonResponse(true, $result->fetch_assoc());
    exit();
} else {
    return jsonResponse(false, 'Usuário não existe.');
    exit();
}
