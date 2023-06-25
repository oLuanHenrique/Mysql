<?php
session_start();
include_once("Conect.php");

$busca_produto_nome = $_POST['busca_nome'];
$busca_produto_descricao = $_POST['busca_descricao'];

$resultado = "select * from Clientes where Nome = '$busca_produto_nome' and Sobrenome = '$busca_produto_descricao'";
$b_lista = mysqli_query($connect,$resultado);
if(mysqli_num_rows($b_lista) > 0){
while($rowdata = $b_lista->fetch_array()){
    $b_id =  $rowdata['ID'].'<br>';
    $b_nome = $rowdata['Nome'].'<br>';
    $b_descricao = $rowdata['Descrição'].'<br>';
    $b_preco = $rowdata['Preço'].'<br>';
    $b_data_atualizado =  $rowdata['Data_atualizado'].'<br>';
    
    $_SESSION['Busca_pro'] = "<b>ID: </b>". $b_id.'<br>'."<b>Nome: </b>". $b_nome.'<br>'."<b>Descrição: </b>". $b_descricao.'<br>'.
    "<b>Preço: </b>". $b_preco.'<br>'."<b>Data_atualizado: </b>". $b_data_atualizado.'<br>';
    header("location: Index.php");
 
}
}else{
    $_SESSION['Busca_pro'] = " <center><b style = 'color:red';>Produto não encontrado!</b></center>";
    header("location: Index.php");
}

?>