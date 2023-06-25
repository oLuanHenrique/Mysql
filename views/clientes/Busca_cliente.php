<?php
session_start();
include_once("Conect.php");

$busca_cliente_nome = $_POST['busca_nome'];
$busca_cliente_sobrenome = $_POST['busca_sobrenome'];

$resultado = "select * from Clientes where Nome = '$busca_cliente_nome' and Sobrenome = '$busca_cliente_sobrenome'";
$b_lista = mysqli_query($connect,$resultado);
if(mysqli_num_rows($b_lista) > 0){
while($rowdata = $b_lista->fetch_array()){
    $b_id =  $rowdata['ID'].'<br>';
    $b_nome = $rowdata['Nome'].'<br>';
    $b_sobrenome = $rowdata['Sobrenome'].'<br>';
    $b_email = $rowdata['Email'].'<br>';
    $b_idade =  $rowdata['Idade'].'<br>';
    
    $_SESSION['Busca_cli'] = "<b>ID: </b>". $b_id.'<br>'."<b>Nome: </b>". $b_nome.'<br>'."<b>Sobrenome: </b>". $b_sobrenome.'<br>'.
    "<b>E-mail: </b>". $b_email.'<br>'."<b>Idade: </b>". $b_idade.'<br>';
    header("location: Index.php");
 
}
}else{
    $_SESSION['Busca_cli'] = " <center><b style = 'color:red';>Cliente não encontrado!</b></center>";
    header("location: Index.php");
}



?>