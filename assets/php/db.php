<?php
// Connection à la BDD
$dsn = "mysql:dbname=multibricolage;host=localhost;port=3307";
$user = "root";
$password = "";

$dbh = new PDO($dsn, $user, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
?>