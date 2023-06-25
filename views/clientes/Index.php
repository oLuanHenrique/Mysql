<?php
 session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <!-- pt br -->
    <meta charset="UTF-8">
    <!-- materialise-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- java script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    </head> 
 <body style="background-color: rgb(146, 202, 49);">
    <nav style="background-color: rgb(23, 49, 9);">
        <center><b style="font-size: 40px ;color: white;"> Clientes </b> </center>
    </nav>
    <div>
        <center><h4 style = "color:white"> Ultimo desafio back-End II</h4></center><br>
    </div>
    
       <div class = "row">
          <div class = "col s2"></div>
           <div class="col s8" style="background-color: rgb(244, 251, 234);">
            <center> <h5><b>Cadastre um novo cliente</b></h5></center><br>
           <form action="Cadastro_cliente.php" method="post">
           <b>Nome:</b><input type="text" name="nome" >
           <b>Sobrenome:</b> <input type="text" name="sobrenome">
           <b>E-mail:</b> <input type="email" name="email">
           <b>Idade:</b> <input type="text" name="idade">
           <center><b><button type="submit" style="background-color: rgb(18, 17, 17); color: white;"> Enviar</button></b></center>
           <br>
           <b > 
            <?php
             if(isset($_SESSION['Retorno'])){
                echo $_SESSION['Retorno'];
                unset($_SESSION['Retorno']);
             }
            ?>
           </b>
           </form>
          </div>
          <div class = "col s2"></div>
         </div>
        <div class = "row"> 
        <div class = "col s2"></div>
          <div class="col s8" style="background-color: rgb(244, 251, 234);">
            <center> <h5><b>localize um cliente cadastrado</b></h5></center><br>
            <form action = "Busca_cliente.php" method = "POST">
             <b>Digite um nome para Buscar:</b><input type="text" name="busca_nome" >
             <b>Digite um Sobrenome para Buscar:</b><input type="text" name="busca_sobrenome" >
             <center><b><button type="submit" style="background-color: rgb(18, 17, 17); color: white;"> Enviar</button></b></center><br>
             <center> <b>Resultado da busca:</b></center><br>
             <?php
              if(isset($_SESSION['Busca_cli'])){
                echo $_SESSION['Busca_cli'];
                unset($_SESSION['Busca_cli']);
             }
             
            ?>
             
            </form>
          </div>
           <div class = "col s2"></div>
        </div>
    
    </body>
    <div class="row">
        <div class="col s2"></div>
        <div class="col s8" style="background-color: rgb(244, 251, 234);">
        <center> <h5><b>Delete um cliente cadastrado.</b></h5></center><br>
            <form action = "Delete_cliente.php" method = "POST">
             <b>Digite o ID do cliente que deseja deletar: <input type="text" name = "del_id" ></b><br>
             <center><b><button type="submit" style="background-color: rgb(18, 17, 17); color: white;"> Enviar</button></b></center><br>
            <?php
                if(isset($_SESSION['Del_cliente'])){
                    echo $_SESSION['Del_cliente'];
                    unset($_SESSION['Del_cliente']);
                 }

            ?>
            </form>
           
        </div>
        
        
        <div class="col s2"></div>
    </div>
    <div class = "row">
    <div class="col s2"></div>
       <div class="col s8" style="background-color: rgb(244, 251, 234);">
         <center> <h5><b>Alteração de cliente cadastrado.</b></h5></center><br>
           <form action = "Altera_cliente.php" method = "POST">
            <b>Digite o ID do cliente que deseja alterar:</b>
            <input type = "text" name = "alt_id">
            <b>Novo Nome: </b> <input type ="text" name = "alt_nome">
            <b>Novo Sobrenome: </b> <input type ="text" name = "alt_sobrenome">
            <b>Novo E-mail: </b> <input type ="text" name = "alt_email">
            <b>Nova Idade: </b> <input type ="text" name = "alt_idade">
           <br>
           <center><b><button type="submit" style="background-color: rgb(18, 17, 17); color: white;"> Enviar</button></b></center><br>
           <?php
                if(isset($_SESSION['Alt_cliente'])){
                    echo $_SESSION['Alt_cliente'];
                    unset($_SESSION['Alt_cliente']);
                 }
           ?>

            </form>
        </div>
        <div class="col s2"></div>

    </div>
    <div class = "row">
    <div class="col s2"></div>
       <div class="col s8" style="background-color: rgb(244, 251, 234);">
         <center> <h5><b>Listando todos clientes cadastrados.</b></h5></center><br>
                 
           <?php
           include_once("Lista_clientes.php");
               while($list =$Full_list->fetch_array()){
               echo "<b>ID: </b>".$list['ID'].'<br>';
               echo "<b>Nome: </b>".$list['Nome'].'<br>';
               echo "<b>Sobrenome: </b>".$list['Sobrenome'].'<br>';
               echo "<b>E-mail: </b>".$list['Email'].'<br>';
               echo "<b>Idade: </b>".$list['Idade'].'<br>';
               echo "<b>Data do cadastro: </b>".$list['Data_cadastro'].'<br>';
               echo "---".'<br>'; 
                         
               
               }
            
           ?>
           

            
        </div>
        <div class="col s2"></div>

    </div>
    <footer style="background-color: rgb(23, 49, 9);">
        <center><b style = "font-size: 25px; color:white;">Luan Henrique T de Souza</b><center>
        <center><b style = "font-size: 25px; color:white;">Back_End II</b><center>
        
    </footer>
</body>


</html>