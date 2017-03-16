<?php

$db_host = "10.135.0.53\sqledutsi";
$db_name = "Kanino";
$user = "TSI";
$password = "SistemasInternet123";
$dsn = "Driver={SQL Server};Server=$db_host;Port=1433;Database=$db_name;";
               
if($db = odbc_connect(	$dsn, $user, $password)){
	
	if(odbc_exec($db, "INSERT INTO Usuario
						(loginUsuario,
						senhaUsuario,
						nomeUsuario,
						tipoPerfil,
						usuarioAtivo) 
					VALUES 
						('luiz@gmail.com',
						'123456',
						'Luiz Fernando',
						'A',
						1)")){
		echo "Usu&aacute;rio cadastrado com sucesso";					
	}else{
		echo "Erro ao cadastrar o usu&aacute;rio";
	}
	
}else{
	
	echo ":-( N&atilde;o deu certo";
	
}



?>
