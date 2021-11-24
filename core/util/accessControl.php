<?php
if(!session_id())session_start();

if(!isset($_SESSION['usuario']['id'])){
		echo jsonResponse(false, 'Usuário não logado.');
}

function getPermissao($tipo,$acao){
	return true;
}
