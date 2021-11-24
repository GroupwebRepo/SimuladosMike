<?php
function exportarUsuarioExcel()
{
    global $mysql;

    $arquivo = 'usuarios-' . date("d.m.y") . '.xls';

    $html = '';
    $html .= '<table border="1">';
    $html .= '<tr>';
    $html .= '<td colspan="10" style="text-align: center">exportar usuários</tr>';
    $html .= '</tr>';

    $html .= '<tr>';
    $html .= '<td><b>id</b></td>';
    $html .= '<td><b>usuario</b></td>';
    $html .= '<td><b>email</b></td>';
    $html .= '<td><b>celular</b></td>';
    $html .= '<td><b>linkedin</b></td>';
    $html .= '<td><b>estado</b></td>';
    $html .= '<td><b>cidade</b></td>';
    $html .= '<td><b>logradouro</b></td>';
    $html .= '<td><b>numero</b></td>';
    $html .= '<td><b>data cadastro</b></td>';
    $html .= '</tr>';

    $query = 'SELECT us.id,us.user,us.email,us.celular,us.linkedin,us.cidade,us.logradouro,us.numero,us.created_at, es.uf
    FROM usuarios us
    LEFT JOIN estados es 
    ON us.estado = es.id;';

    $result = $mysql->query($query);

    while ($usuarios = mysqli_fetch_assoc($result)) {
        $html .= '<tr>';
        $html .= '<td>' . $usuarios["id"] . '</td>';
        $html .= '<td>' . $usuarios["user"] . '</td>';
        $html .= '<td>' . $usuarios["email"] . '</td>';
        $html .= '<td>' . $usuarios["celular"] . '</td>';
        $html .= '<td>' . $usuarios["linkedin"] . '</td>';
        $html .= '<td>' . $usuarios["uf"] . '</td>';
        $html .= '<td>' . $usuarios["cidade"] . '</td>';
        $html .= '<td>' . $usuarios["logradouro"] . '</td>';
        $html .= '<td>' . $usuarios["numero"] . '</td>';
        $data = date('d/m/Y', strtotime($usuarios["created_at"]));
        $html .= '<td>' . $data . '</td>';
        $html .= '</tr>';
    }

    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
    header("Cache-Control: no-cache, must-revalidate");
    header("Pragma: no-cache");
    header("Content-type: application/x-msexcel");
    header("Content-Disposition: attachment; filename=\"{$arquivo}\"");
    header("Content-Description: PHP Generated Data");
    return $html;
}

function exportarRelatorio()
{
    $arquivo = 'relatorio -' . date("d.m.y") . '.xls';

    $retornoUsuario = quantidadeUsuarios();
    $retornoVagas = quantidadeVagas();
    $retornoMatches = obterMatches();

    $retorno = $retornoMatches . '<br /><br />' . $retornoUsuario . '<br />' . $retornoVagas;

    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
    header("Cache-Control: no-cache, must-revalidate");
    header("Pragma: no-cache");
    header("Content-type: application/x-msexcel");
    header("Content-Disposition: attachment; filename=\"{$arquivo}\"");
    header("Content-Description: PHP Generated Data");
    return $retorno;
}

function quantidadeUsuarios()
{
    global $mysql;

    $html = '';
    $html .= '<table border="1">';
    $html .= '<tr>';
    $html .= '<td colspan="1" style="text-align: center">Quantidade de usuários</tr>';
    $html .= '</tr>';

    $query = 'SELECT COUNT(id) FROM usuarios';

    $result = $mysql->query($query);

    while ($usuarios = mysqli_fetch_assoc($result)) {
        $html .= '<tr>';
        $html .= '<td>' . $usuarios["COUNT(id)"] . '</td>';
        $html .= '</tr>';
    }
    return $html;
}

function quantidadeVagas()
{
    global $mysql;

    $html = '';
    $html .= '<table border="2">';
    $html .= '<tr>';
    $html .= '<td colspan="1" style="text-align: center">Quantidade de vagas</tr>';
    $html .= '</tr>';

    $query = 'SELECT COUNT(id) FROM vagas';

    $result = $mysql->query($query);

    while ($usuarios = mysqli_fetch_assoc($result)) {
        $html .= '<tr>';
        $html .= '<td>' . $usuarios["COUNT(id)"] . '</td>';
        $html .= '</tr>';
    }
    return $html;
}

function obterMatches()
{
    global $mysql;

    $html = '';
    $html .= '<table border="3">';
    $html .= '<tr>';
    $html .= '<td colspan="4" style="text-align: center">relatório de match</tr>';
    $html .= '</tr>';

    $html .= '<tr>';
    $html .= '<td><b>id match</b></td>';
    $html .= '<td><b>usuario</b></td>';
    $html .= '<td><b>Empresa</b></td>';
    $html .= '<td><b>Vaga</b></td>';
    $html .= '</tr>';

    $query = 'SELECT mc.id,us.user AS usuario,ep.user AS empresa,vg.descricao
    FROM `match` mc
    left JOIN usuarios us
    ON mc.usuario_id = us.id
    left JOIN empresas ep
    ON mc.empresa_id=ep.id
    left JOIN vagas vg
    ON mc.vaga_id=vg.id';

    $result = $mysql->query($query);

    while ($usuarios = mysqli_fetch_assoc($result)) {
        $html .= '<tr>';
        $html .= '<td>' . $usuarios["id"] . '</td>';
        $html .= '<td>' . $usuarios["usuario"] . '</td>';
        $html .= '<td>' . $usuarios["empresa"] . '</td>';
        $html .= '<td>' . $usuarios["descricao"] . '</td>';
        $html .= '</tr>';
    }
    return $html;
}
