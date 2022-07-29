<?php

$dsn = "mysql:dbname=hemolabma01;host=mysql.hemolabma.com.br";
$dbuser = "hemolabm01_add1";
$dbpass = "hemolab2016";

    try {
        $db = new PDO($dsn, $dbuser, $dbpass);
    } catch (PDOException $e) {
        echo "Falhou: " . $e->getMessage();
    }

?>