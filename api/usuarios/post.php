<?php

	if ($acao === '' && $param === '') {
 		echo json_encode(['ERRO' => 'Caminho não encontrado!']);
 }
	if($acao == 'login' & $param == '') {
		Usuarios:: login($_POST['login'], $_POST['senha']);
		exit;
	}
	
?>
