<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body style="background-color:gray;">
    <div class="container">
    <div class="box">
        <form method="post" action="../model/inserircliente.php"> 
            <label> Nome: </label>
            <input type="text" name="nome"> </br></br>
            <label > Email: </label>
            <input type="text" name="email"> </br></br>
            <button type="submit" name="dados"> Enviar </button>
        </form> </br>
        <a href="../index.php"> Voltar </a>
        <a href="listarcliente.php"> Listar Cliente </a>
    </div>

    
</div>
</body>