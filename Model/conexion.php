<?php
include 'config.php';
try {
    $dsn = "mysql:host=".SERVIDOR.";dbname=".BD;
	$pdo = new PDO($dsn, USER, PASSWORD);
	echo "<script>alert('Conexion Establecida')</script>";
} catch (PDOException $e){
    echo $e->getMessage();
}