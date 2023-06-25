<?php
session_start();
include_once("Conect.php");

$del_id = $_POST['del_id'];
$del_pro = "Delete from Produtos where ID = '$del_id'";
$b_id  = "select * from Produtos where ID = '$del_id'";
$b_id_count = mysqli_query($connect,$b_id);
if(mysqli_num_rows($b_id_count) > 0){
    $pro_deltado = mysqli_query($connect,$del_pro);
    $_SESSION['Del_produto'] = "<center><b style = 'color:green'> Delete realizado com sucesso!</b></center>";
    header("location: Index.php");
    

}else{
    $_SESSION['Del_produto'] = "<center><b style = 'Color:red';>Nenhum produto encontrado com essa ID!</b></center>";
    header("location: Index.php");
}
?>