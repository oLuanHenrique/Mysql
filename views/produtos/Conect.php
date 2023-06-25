<?php
$servername = "localhost";
$username = "root";
$passoword = "";
$db_name = "express";

$connect = mysqli_connect($servername, $username, $passoword, $db_name);
mysqli_set_charset($connect, "utf8");

if (mysqli_connect_error()){
    echo "Erro de conexao ".mysqli_connect_error();
}

?>