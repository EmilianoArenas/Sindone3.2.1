<?php
//conectar base de datos
//include ('config.php');

$servidor = "mysql:dbname=".BD_SISTEMA.";host=".BD_SERVIDOR;

try{
    $pdo = new PDO($servidor, BD_USUARIO, BD_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    echo "<script>alert('Conexion a la base de datos exitosa');</script>";
} catch (PDOException $e) {
    echo "<script>alert('Conexion con la base de datos fallida');</script>";
}

