<html>

<div class="container">
<div class="box">
<?php

   require_once "DbConnection.php";

   if(isset($_POST["dados"]))
   {
            $nome = $_POST['nome'];
            $altura = $_POST['altura'];
            $peso = $_POST['peso'];

            $resultado = $peso/($altura*$altura);

            if($resultado < 18.5){
                echo "<h1> Você é classificado com :</br> Magreza";
            }
            if($resultado >= 18.5 && $resultado <= 24.9){
                echo "<h1> Você é classificado com : </br> Normal";
            } 
            if($resultado >= 25 && $resultado <= 29.9){
                echo "<h1> Você é classificado com :  </br> Sobrepeso";
            } 
            if($resultado >= 30 && $resultado <= 34.9){
                echo "<h1> Você é classificado com :  </br> Obesidade grau 1";
            } 
            if($resultado >= 35 && $resultado <= 39.9){
                echo "<h1> Você é classificado com : </br> Obesidade grau 2";
            }
            if($resultado >= 40){
                echo "<h1> Você é classificado com : </br> Obesidade grau 3";
            }
            

            $sql = $conexao->prepare("INSERT INTO infos (nome) VALUES (:nome)");

            $sql->bindValue(':nome', $nome);
            $sql->execute();

   }
?>
</div>
</div>
<style>

 
.container {
        width: 100vw;
        height: 100vh;
        background: #6C7A89;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        }
        .box {
        width: 300px;
        height: 300px;
        background: #fff;
        padding: 10px;
        }
        body {
        margin: 0px;
        }
</style>
</html>