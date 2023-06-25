<?php
session_start();
include_once("Conect.php");
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$data_atualizado = $_POST['data_atualizado'];


$cadastro = "Insert into Produto (nome, descricao, preco, data_atualizado) values ('$nome', '$descricao', '$preco', '$data_atualizado')";
$cadastro = mysqli_query($connect, $cadastro);

if(mysqli_insert_id($connect)){
    $_SESSION['Retorno'] = " <center><b style = 'color: Green;'>Produto cadastrado com sucesso!</b></center>";
    header("location: Index.php");
}else{
    $_SESSION['Retorno'] = "Erro ao cadastrar!";
    header("location: Index.php");
}

?>