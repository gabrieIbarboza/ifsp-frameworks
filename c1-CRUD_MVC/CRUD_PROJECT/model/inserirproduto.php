<?php

    if($_POST['produto'] != "")
    {
        include_once '../factory/conexao.php';
        $produto = $_POST['produto'];
        $datavalidade = $_POST['datavalidade'];
        $qtde = $_POST['qtde'];
        $valor = $_POST['valor'];
        $sql = "insert into tbproduto (produto,datavalidade,qtde,valor) values('$produto','$datavalidade','$qtde','$valor')";

        $query = mysqli_query($conn,$sql);
        echo "Dados cadastrados com sucesso!";

    }else{
        echo "Dados não cadastrado";
    }



?>