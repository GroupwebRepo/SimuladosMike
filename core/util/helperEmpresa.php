<?php
function empresaExist($empresa){
    global $mysql;
    $result = $mysql->query("SELECT user FROM empresas WHERE user = '" . addslashes($empresa) . "' ;");

    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}