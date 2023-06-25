<?php
session_start();
include_once("Conect.php");


$alt_id = $_POST['alt_id'];
$alt_nome = $_POST['alt_nome'];
$alt_descricao = $_POST['alt_descricao'];
$alt_preco = $_POST['alt_preco'];
$alt_data_atualizado = $_POST['alt_data_atualizado'];
$alt_resultado = "select * from Produtos where ID = '$alt_id'";
$alt_cli_count = mysqli_query($connect,$alt_resultado);

$alt_cli = "update Produtos set 
Nome = '$alt_nome',
Descrição = '$alt_descricao',
Preço = '$alt_preco',
Data_atualizado = '$alt_data_atualizado'
where ID = '$alt_id'";
if(mysqli_num_rows($alt_cli_count) > 0){
    $cli_alterado = mysqli_query($connect,$alt_cli);
    $_SESSION['Alt_produto'] = "<center><b style = 'color:green'> Produto alterado com sucesso!</b></center>";
    header("location: Index.php");
    

}else{
    $_SESSION['Alt_produto'] = "<center><b style = 'Color:red';>Nenhum Produto encontrado com essa ID!</b></center>";
    header("location: Index.php");
}



?>