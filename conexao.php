<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "filipi";
$port = 3306;

try{
    $conn = new PDO("mysql:host=$host;port=$
    port;dbname=" . $dbname, $user, $pass);

    //echo "Conexão com o banco de dados realizada com sucesso!";

} catch(PDOException $err){
    echo "Erro: Conexão com o banco de dados não realizada com sucesso. Erro gerado" . $err->getMessage();
}