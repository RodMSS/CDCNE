<?php

$baseDatos="sistema_loginids";
$usuario="root";
$contrasena="";
$servidor="localhost";

$conex=mysqli_connect($servidor, $usuario, $contrasena, $baseDatos);

try {
  $conn = new PDO("mysql:host=$servidor;dbname=$baseDatos;", $usuario, $contrasena);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>