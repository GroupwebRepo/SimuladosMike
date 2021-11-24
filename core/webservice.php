<?php
if(isset($_REQUEST['action'])){
	include('actions/'.$_REQUEST['action'].'.php');
}
?>
