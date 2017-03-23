<?php

$db_host = "10.135.0.53\sqledutsi";
$db_name = "Kanino";
$user = "TSI";
$password = "SistemasInternet123";
$dsn = "Driver={SQL Server};Server=$db_host;Port=1433;Database=$db_name;";
    


if(odbc_exec($db, "UPDATE Usuario SET loginUsuario = 'if@gmail.com', tipoPerfil = 'P' WHERE loginUsuario =  'GOGO@OLAMUNDO.COM.BR'")){
		echo "<br>Usuario Atualizado com Sucesso!!";
}else{
	echo "Erro ao Atualizar o Usuario";
}  

else{
	
	echo ":-( N&atilde;o deu certo";
}



?>
