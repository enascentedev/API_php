<?php

	if ($acao == '' && $param == '') {echo json_encode(['ERRO' => 'Caminho não encontrado!']); }
	if ($acao == 'delete' && $param == '') {echo json_encode(['ERRO' => 'É necessário informar um cliente']); }
	if($acao == 'delete' & $param != '') {
		
		$db = DB::connect();
		$rs = $db->prepare("DELETE FROM clientes WHERE id={$param}");
		$exec = $rs->execute();

		if ($exec){
			echo json_encode(["dados" => 'Dados foram inseridos com sucesso.']);
		} else{
			echo json_encode( ["dados" => 'Dados foram inseridos com sucesso.']);
		}
	}
	
?>
