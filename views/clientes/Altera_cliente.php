<?php
session_start();
include_once("Conect.php");


$alt_id = $_POST['alt_id'];
$alt_nome = $_POST['alt_nome'];
$alt_sobrenome = $_POST['alt_sobrenome'];
$alt_email = $_POST['alt_email'];
$alt_idade = $_POST['alt_idade'];
$alt_resultado = "select * from Clientes where ID = '$alt_id'";
$alt_cli_count = mysqli_query($connect,$alt_resultado);

$alt_cli = "update Clientes set 
Nome = '$alt_nome',
Sobrenome = '$alt_sobrenome',
Email = '$alt_email',
Idade = '$alt_idade'
where ID = '$alt_id'";
if(mysqli_num_rows($alt_cli_count) > 0){
    $cli_alterado = mysqli_query($connect,$alt_cli);
    $_SESSION['Alt_cliente'] = "<center><b style = 'color:green'> Cliente alterado com sucesso!</b></center>";
    header("location: Index.php");
    

}else{
    $_SESSION['Alt_cliente'] = "<center><b style = 'Color:red';>Nenhum cliente encontrado com essa ID!</b></center>";
    header("location: Index.php");
}



?>