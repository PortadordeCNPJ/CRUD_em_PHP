<?php 

//criação de conecção para o arquivo config.php

define('HOST', 'localhost'); //Onde o servidor está sendo hospedado
define('USER', 'root'); //O nome do usuário do servidor
define('PASS', ''); // A senha do servidor
define('BASE', 'cadastro'); // O nome do banco

//Aqui é feita a variável de conecção com o banco 
$conn = new MySQLi(HOST, USER, PASS, BASE);
?>