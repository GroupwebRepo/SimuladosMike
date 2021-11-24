<?php
function userExist($usuario){
    global $mysql;
    $result = $mysql->query("SELECT user FROM usuarios WHERE user = '" . addslashes($usuario) . "' ;");

    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function emailExist($email){
    global $mysql;
    $result = $mysql->query("SELECT user FROM usuarios WHERE email = '" . addslashes($email) . "' ;");

    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function buscarUsuario($array){
    global $mysql;

    if (empty($array['user']) ||
        empty($array["id"])) {
        return false;
    }

    $query = 'SELECT * FROM usuarios where user = ' . $array['user'];

    $result = $mysql->query($query);

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return false;
    }
}
