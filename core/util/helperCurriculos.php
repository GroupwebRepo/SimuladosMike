<?php

function cadastrarExperienciaProfissional($nomeEmpresa, $cargo, $nivelHierarquicoId, $usuarioId){
    global $mysql;

    $query = "INSERT INTO experiencia_profissional (nomeEmpresa,cargo,nivelHierarquico_id,usuario_id) 
    VALUES('" . addslashes($nomeEmpresa) . "' , '" . addslashes($cargo) . "' , " . addslashes($nivelHierarquicoId) . " , " . addslashes($usuarioId) . ");";

    $result = $mysql->query($query);

    if ($result) {
        return true;
    } else {
        return false;
    }
}

function cadastrarFormacaoAcademica($nomeInstituicao, $curso, $nivelGraduacaoId, $situacaoCursoId, $usuarioId){
    global $mysql;

    $query = "INSERT INTO formacao_academica (nomeInstituicao,curso,nivelGraduacao_id,situacaoCurso_id,usuario_id) 
    VALUES('" . addslashes($nomeInstituicao) . "' , '" . addslashes($curso) . "' , " . addslashes($nivelGraduacaoId) . " , " . addslashes($situacaoCursoId) . " , " . addslashes($usuarioId) . ");";

    $result = $mysql->query($query);

    if ($result) {
        return true;
    } else {
        return false;
    }
}

function cadastrarAreasInteresse($areas, $idusuario){
    global $mysql;

    $query = $mysql->prepare("INSERT INTO areas_interesse (area_id, usuario_id) VALUES (?,?)");
    $query->bind_param("ii", $area, $id);
    foreach ($areas as $n) {
        $area = $n;
        $id = $idusuario;
        $query->execute();
    }

    if ($query) {
        return true;
    } else {
        return false;
    }
}
