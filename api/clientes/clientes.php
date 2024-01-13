<?php

// Verifica se a API chamada é 'clientes'.
if ($api === 'clientes') {
    
    // Verifica se o método HTTP utilizado é GET.
    if ($method === "GET") {
        
        // Caso não haja ação definida e nenhum parâmetro passado, retorna um erro JSON.
        if ($acao === '' && $param === '') {
            echo json_encode(['ERRO' => 'Caminho não encontrado!']);
        }
        if ($acao === 'lista' && $param === '') {
					// Conecta ao banco .
            $db = DB::connect(); 

						// seleciona todos os clientes ordenados por nome.
            $rs = $db->prepare("SELECT * FROM clientes ORDER BY nome"); 
            $rs->execute(); 

						 // Busca todos os resultados como um array.
            $obj = $rs->fetchAll(PDO::FETCH_ASSOC);
            
            // converte-os para JSON e os retorna, se não exibe msg de errro.
            if ($obj) {
                echo json_encode(['dados' => $obj]);
            } else {
                echo json_encode(['dados' => 'Não existem dados para retornar']);
            }
        }
      
        if ($acao === 'lista' && $param !== '') {
					// Conecta ao banco de dados.
            $db = DB::connect(); 
						
            // Prepara a consulta para selecionar um cliente específico pelo ID
            $rs = $db->prepare("SELECT * FROM clientes WHERE id={$param}"); 
            $rs->execute();

						// Busca o resultado como um objeto.
            $obj = $rs->fetchObject(); 
            
            // converte-os para JSON e os retorna, se não exibe msg de errro.
            if ($obj) {
                echo json_encode(['dados' => $obj]);
            } else {
                echo json_encode(['dados' => 'Não existem dados para retornar']);
            }
        }
    }
}
?>
