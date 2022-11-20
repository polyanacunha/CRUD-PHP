<?php 

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'cadastroprod');

    $conexao = new MySQLi(HOST,USER,PASS,BASE);

    if($conexao->error)
	{
    	die("<pre>"."Não foi possível conectar-se ao MySQL. Favor contactar o Administrador !!!!". $conexao->error);
	}
?>