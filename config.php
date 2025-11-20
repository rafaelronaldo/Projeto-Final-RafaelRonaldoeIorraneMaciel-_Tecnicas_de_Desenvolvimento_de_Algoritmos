<?php 
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'banco_de_dados');

    $conn = new MySQLi(HOST, USER, PASS, BASE);
?>