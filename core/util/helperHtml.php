<?php
function listarEstados()
{
    global $mysql;

    $query = 'SELECT * FROM estados;';
    $result = $mysql->query($query);
    $stringHtml = '';

    while ($res = $result->fetch_array()) {
        $stringHtml .= '<option value=' . $res['id'] . '>' . $res['uf'] . '</option>';
    }

    return $stringHtml;
}

function listarAreas()
{
    global $mysql;

    $query = 'SELECT id,nome FROM areas;';
    $result = $mysql->query($query);
    $stringHtml = '';

    while ($res = $result->fetch_array()) {
        $stringHtml .= '<option value=' . $res['id'] . '>' . $res['nome'] . '</option>';
    }

    return $stringHtml;
}

function listarNivelHierarquico()
{
    global $mysql;

    $query = 'SELECT id,nome FROM nivel_hierarquico;';
    $result = $mysql->query($query);
    $stringHtml = '';

    while ($res = $result->fetch_array()) {
        $stringHtml .= '<option value=' . $res['id'] . '>' . $res['nome'] . '</option>';
    }

    return $stringHtml;
}

function listarNivelGraduacao()
{
    global $mysql;

    $query = 'SELECT id,nome FROM nivel_graduacao;';
    $result = $mysql->query($query);
    $stringHtml = '';

    while ($res = $result->fetch_array()) {
        $stringHtml .= '<option value=' . $res['id'] . '>' . $res['nome'] . '</option>';
    }

    return $stringHtml;
}

function listarSituacaoCurso()
{
    global $mysql;

    $query = 'SELECT id,nome FROM situacao_curso';
    $result = $mysql->query($query);
    $stringHtml = '';

    while ($res = $result->fetch_array()) {
        $stringHtml .= '<option value=' . $res['id'] . '>' . $res['nome'] . '</option>';
    }

    return $stringHtml;
}
