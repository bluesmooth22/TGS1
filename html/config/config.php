<?php
	
	####################################
	#   Conexão com o Banco de dados   #
	####################################
	
	define('DB_HOSTNAME','localhost'); 
	define('DB_USERNAME','root'); 
	define('DB_PASSWORD','_jimboyilok123'); 
	define('DB_DATABASE','db_account'); 
	define('DB_CHARSET','utf8');
	date_default_timezone_set("America/Sao_Paulo");
	
	$conexao = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die (mysqli_connect_error());
	mysqli_set_charset($conexao, DB_CHARSET) or die (mysqli_error($conexao));

	####################################
	#   Conexão com o Banco de dados   #
	####################################
	
	define('DB_HOSTNAME_DB','localhost'); 
	define('DB_USERNAME_DB','root'); 
	define('DB_PASSWORD_DB','_jimboyilok123'); 
	define('DB_DATABASE_DB','db_forb'); 
	
	$conexao_dbforb = mysqli_connect(DB_HOSTNAME_DB, DB_USERNAME_DB, DB_PASSWORD_DB, DB_DATABASE_DB) or die (mysqli_connect_error());		

?>



