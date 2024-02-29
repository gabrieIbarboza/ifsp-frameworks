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
        <form method="post" action="../model/inserirproduto.php"> 
            <label> Produto: </label>
            <input type="text" name="produto"> </br></br>
            <label > Data de Validade: </label>
            <input type="date" name="datavalidade"> </br></br>
            <label > Quantidade: </label>
            <input type="text" name="qtde"> </br></br>
            <label > Valor: </label>
            <input type="text" name="valor"> </br></br>
            <button type="submit" name="dados"> Enviar </button>
        </form> </br>
        <a href="../index.php"> Voltar </a>
    </div>

    
</div>
</body>