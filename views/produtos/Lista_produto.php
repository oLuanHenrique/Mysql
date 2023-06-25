<?php

include_once("Conect.php");
$Lista_pro_cadastrados = "select * from Produtos";
$Full_list = mysqli_query($connect,$Lista_pro_cadastrados);

?>