<?php
// Verifica se a API chamada é 'clientes'.
if ($api === 'clientes') {
	// Verifica se o método HTTP utilizado é GET.
	if ($method === "GET") {
		include_once("get.php");
	}
	if ($method === "POST") {
		include_once("post.php");
	}
}
?>
