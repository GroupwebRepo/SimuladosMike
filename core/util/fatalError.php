<?php
function fatalError($msg){
		sendEmail(EMAIL_DEVS, $msg);
		echo jsonResponse(false, 'O sistema está passando por uma manutenção no momento, por favor tente acessar mais tarde.');
}
?>
