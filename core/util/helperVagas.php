<?php
function buscarVagas($arrayFields){
  global $mysql;

	$where = '1=1 ';
	if(is_array($arrayFields)){
		foreach($arrayFields as $field => $value){
			$where .= 'AND '.$field.' = "'.addslashes($value).'" ';
		}
	}

  $query = 'SELECT vagas.id as vaga_id, vagas.vaga as vaga, empresas.nome as nome_empresa, empresas.imagem as empresa_imagem, DATE_FORMAT(vagas.updated_at, "%d/%m/%Y") as vaga_criado, estados.uf as estado
	FROM vagas vagas
	INNER JOIN empresas empresas on empresas.id = vagas.empresa_id
	INNER JOIN estados estados on estados.id = vagas.estado_id
	where '.$where;

  $result = $mysql->query($query);

  if ($result->num_rows > 0) {
    return $result;
  } else {
    return false;
  }
}

function buscarVaga($vagaId){
  global $mysql;

  $query = 'SELECT vagas.id as vaga_id, vagas.vaga as vaga, empresas.nome as nome_empresa, empresas.imagem as empresa_imagem, DATE_FORMAT(vagas.updated_at, "%d/%m/%Y") as vaga_criado, estados.uf as estado, vagas.cargo as vaga_cargo, areas.nome as vaga_area
	FROM vagas vagas
	INNER JOIN empresas empresas on empresas.id = vagas.empresa_id
	INNER JOIN estados estados on estados.id = vagas.estado_id
	INNER JOIN areas areas on areas.id = vagas.area_id
	where vagas.id = "'.addslashes($vagaId).'"';

  $result = $mysql->query($query);

  if ($result->num_rows > 0) {
    return $result;
  } else {
    return false;
  }
}

function salvarMatch($usuarioId, $empresaId, $vagaId){
  global $mysql;

  $query = 'INSERT INTO match (usuario_id,empresa_id,vaga_id) VALUES( ' . $usuarioId . ' , ' . $empresaId . ' , ' . $vagaId . ' )';
  $result = $mysql->query($query);

  if ($result) {
    return true;
  } else {
    return false;
  }
}

function cadastrarVaga($empresaId, $estadoId, $cidade, $cargoId, $areaId, $descricao, $oculto){
  global $mysql;

  $query = "INSERT INTO vagas (empresa_id,estado,cidade,cargo,area,oculto,descricao) VALUES( '" . $empresaId . "' , '" . $estadoId . "' , '" . $cidade . "' , '" . $cargoId . "' , '" . $areaId . "' , '" . $oculto . "' , '" . $descricao . "' )";

  $result = $mysql->query($query);

  if ($result) {
    return true;
  } else {
    return false;
  }
}

function atualizarVagas($vagaId, $empresaId, $estadoId, $cidade, $cargoId, $areaId, $descricao, $oculto){
    global $mysql;

    $query = " UPDATE vagas
                SET empresa_id = " . addslashes($empresaId) . ",
                    estado = " . addslashes($estadoId) . ",
                    cidade = '" . addslashes($cidade) . "',
                    cargo = " . addslashes($cargoId) . ",
                    area = " . addslashes($areaId) . ",
                    oculto = " . addslashes($oculto) . ",
                    descricao = '" . addslashes($descricao) . "'
                    WHERE id = " . addslashes($vagaId) . ";";

    $result = $mysql->query($query);

    if ($result) {
        return true;
        exit();
    } else {
        return false;
        exit();
    }
}
