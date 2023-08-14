<?php 

//criação de conecção para o arquivo config.php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'cadastro');


$conn = new MySQLi(HOST, USER, PASS, BASE);
?>