<?php
 $server = 'localhost';
 $username = 'root';
 $password = '';
 $database = 'tienda';

 try{

    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);

 }catch(PDOException $e){

    die('Error:'.$e->getMessage());

 }
?>