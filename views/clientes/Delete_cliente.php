<?php
session_start();
include_once("Conect.php");

$del_id = $_POST['del_id'];
$del_cli = "Delete from Clientes where ID = '$del_id'";
$b_id  = "select * from Clientes where ID = '$del_id'";
$b_id_count = mysqli_query($connect,$b_id);
if(mysqli_num_rows($b_id_count) > 0){
    $cli_deltado = mysqli_query($connect,$del_cli);
    $_SESSION['Del_cliente'] = "<center><b style = 'color:green'> Delete realizado com sucesso!</b></center>";
    header("location: Index.php");
    

}else{
    $_SESSION['Del_cliente'] = "<center><b style = 'Color:red';>Nenhum cliente encontrado com essa ID!</b></center>";
    header("location: Index.php");
}




?>