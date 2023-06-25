<?php

include_once("Conect.php");
$Lista_cli_cadastrados = "select * from Clientes";
$Full_list = mysqli_query($connect,$Lista_cli_cadastrados);

?>