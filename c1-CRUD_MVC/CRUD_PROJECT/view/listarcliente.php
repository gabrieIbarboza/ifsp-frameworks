<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Cliente</title>
</head>
<?php
    include_once '../factory/conexao.php';
    $consultar = "select *from tbcliente";
    $executar = mysqli_query($conn,$consultar);
    while($linha = mysqli_fetch_array($executar))
    {
?>
<body style="background-color:gray;">
    <div class="container">
    <div class="box">
        <form method="post" action="../model/inserircliente.php"> 
            <label> Nome: </label>
            <input type="text" name="nome" value="<?php echo $linha['nome']?>"> </br></br>
            <label > Email: </label>
            <input type="text" name="email" value="<?php echo $linha['email']?>"> </br></br>
        </form> </br></br>
        <a href="../index.php"> Voltar </a>
    </div>
<?php
    }
    ?>
    
</div>
</body>