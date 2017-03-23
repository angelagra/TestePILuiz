<?php

$db_host = "10.135.0.53\sqledutsi";
$db_name = "Kanino";
$user = "TSI";
$password = "SistemasInternet123";
$dsn = "Driver={SQL Server};Server=$db_host;Port=1433;Database=$db_name;";

//---------------------------------------------CADASTRAR USUARIO----------------------------------------------------------------------
               
if($db = odbc_connect(	$dsn, $user, $password)){
	
	if(odbc_exec($db, "INSERT INTO Usuario
						(loginUsuario,
						senhaUsuario,
						nomeUsuario,
						tipoPerfil,
						usuarioAtivo) 
					VALUES 
						('GOGO@OLAMUNDO.COM.BR',
						'123456',
						'GOGO MALUCO',
						'A',
						1)")){
		echo "Usu&aacute;rio cadastrado com sucesso<br><br>";					
	}else{
		echo "Erro ao cadastrar o usu&aacute;rio";
	}
	
}else{
	
	echo ":-( N&atilde;o deu certo";
	
}


//---------------------------------ATUALIZAR USUARIO-------------------------------------------------------------------------------

if(odbc_exec($db, "UPDATE Usuario SET loginUsuario = 'ola@gmail.com', tipoPerfil = 'P' WHERE loginUsuario =  'GOGO@OLAMUNDO.COM.BR'")){
		echo "<br>Usuario Atualizado com Sucesso!!<br><br>";
	}else{
		echo "Erro ao Atualizar o Usuario";
}

//--------------------------------------DELETAR USUARIO---------------------------------------------------------------------------
/*
if(odbc_exec($db, "DELETE FROM Usuario WHERE loginUsuario = 'GOGO@OLAMUNDO.COM.BR'")){
	echo "<br>Usuario deletado com Sucesso!!<br><br>";
}else{
	echo "Erro ao deletar o Usuario";
}
*/
//-------------------------------------------------------------------------------------------------------------------------------

/*$query = odbc_exec($db, "SELECT * FROM Usuario");

$result = odbc_fetch_array($query);

echo "ID: {$result['idUsuario']} Nome: {$result['nomeUsuario']}<br>";



while($result = odbc_fetch_array($query)){
		flush();
		ob_flush();
		sleep(1);

		echo "ID: {$result['idUsuario']} Nome: {$result['nomeUsuario']}<br>";
}*/
//-------------------------------------------------------------------------------------------------------------------------------

$query = odbc_exec($db, "SELECT idUsuario, nomeUsuario FROM Usuario WHERE tipoPerfil = 'A' and nomeUsuario LIKE 'A%'");


while($result = odbc_fetch_array($query)){
	echo "ID: {$result['idUsuario']} Nome: {$result['nomeUsuario']}<br>";

}



?>
