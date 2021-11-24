<?php
function uploadImagemPerfil($tipoUsuario, $idUsuario, $arquivo)
{
    $pastaUsuario = 'C:/xampp/htdocs/NinjaDoExcelCurriculos/view/assets/uploads/';

    $extensao = strrchr($arquivo['name'], '.');

    if (preg_match('/(pjpeg|jpeg|png|gif|bmp|jpg)$/', $extensao)) {
        $local = $pastaUsuario . $tipoUsuario . '/' . base64_encode($idUsuario) . $extensao;

        $arquivoSalvo = move_uploaded_file($arquivo['tmp_name'], $local);

        if ($arquivoSalvo) {
            return true;
        }
    }
    return false;
}

function getImagemPerfil($idUsuario, $tipoUsuario)
{
    $idUsuario = base64_encode($idUsuario);
    $pastaUsuario = 'C:/xampp/htdocs/NinjaDoExcelCurriculos/view/assets/uploads/' . $tipoUsuario . '/' . $idUsuario;

    return glob($pastaUsuario . '*')[0];
}
