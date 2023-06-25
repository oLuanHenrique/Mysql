<?php
session_start();
include_once("Conect.php");
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$idade = $_POST['idade'];


$cadastro = "Insert into Clientes (nome, sobrenome, email, idade) values ('$nome', '$sobrenome', '$email', '$idade')";
$cadastro = mysqli_query($connect, $cadastro);

if(mysqli_insert_id($connect)){
    $_SESSION['Retorno'] = " <center><b style = 'color: Green;'>Usuario cadastrado com sucesso!</b></center>";
    header("location: Index.php");
}else{
    $_SESSION['Retorno'] = "Erro ao realizar o cadastro!";
    header("location: Index.php");
}

?>