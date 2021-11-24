<?php
session_set_cookie_params('36000', '/');
if(!session_id())session_start();

define('DEV_MODE', false);
define('TITLE', 'Currículos Ninja');

if(DEV_MODE){
	define('API_URL', 'http://' . $_SERVER['SERVER_NAME'].'/GroupwebRepo/NinjaDoExcelCurriculos/core/core.php');
	define('VIEW_URL', 'http://'.$_SERVER['SERVER_NAME'].'/GroupwebRepo/NinjaDoExcelCurriculos/view');
}else{
	define('API_URL', 'http://' . $_SERVER['SERVER_NAME'].'/core/core.php');
	define('VIEW_URL', 'http://' . $_SERVER['SERVER_NAME'].'/view');
}

define('EMPRESAS_PROFILE_PATH', VIEW_URL.'/assets/img/empresas_profile/');

function verificaSessao(){
	if(!$_SESSION['id']){
		header('Location:'.VIEW_URL.'');
		exit();
	}
}

include('api.php');
?>
