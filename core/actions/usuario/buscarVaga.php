<?php
$result = buscarVaga($_REQUEST['data']['id']);

if($result->num_rows > 0) {
	return jsonResponse(true, $result->fetch_assoc());
	exit();
} else {
	return jsonResponse(false, 'Nenhuma vaga encontrada.');
	exit();
}
