<?php

$db_host = "10.135.0.53\sqledutsi";
$db_name = "Kanino";
$user = "TSI";
$password = "SistemasInternet123";
$dsn = "Driver={SQL Server};Server=$db_host;Port=1433;Database=$db_name;";

if ($db = odbc_connect($dsn, $user, $password)) {
	
	if (odbc_exec($db, "INSERT INTO Produto
									(nomeProduto,
									descProduto, 
									precProduto,
									idCategoria, 
									ativoProduto)
						VALUES ('ColoProd', 'DescoPr', 20.58, 1, 1)")){

		echo "Produto Cadatrado com Sucesso<br>";
	
	}else{
		echo "Erro ao Cadastrar Produto";
	}
}

?>