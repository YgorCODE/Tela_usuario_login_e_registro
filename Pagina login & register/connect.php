<?php

$host="localhost";
$user="root";
$pass="";
$db="login";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Falha ao conectar ao banco de dados: ".$conn->connect_error;
}

?>
