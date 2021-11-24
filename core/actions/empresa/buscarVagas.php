<?php
$result = buscarVagas($_REQUEST['data']['query']);

if($result->num_rows > 0) {
	while ($data = $result->fetch_assoc()){
	    $vagas[] = $data;
	}
	return jsonResponse(true, $vagas);
	exit();
} else {
	return jsonResponse(false, 'Nenhuma vaga encontrada.');
	exit();
}
