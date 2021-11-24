<?php
function jsonResponse($status, $response){

	echo json_encode(array('status'=>$status,'data'=>$response));
}
 ?>
