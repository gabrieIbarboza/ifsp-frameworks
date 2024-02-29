<?php

    if($_POST['nome'] != "")
    {
        include_once '../factory/conexao.php';
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $sql = "insert into tbcliente (nome, email) values('$nome','$email')";

        $query = mysqli_query($conn,$sql);
        echo "Dados cadastrados com sucesso!";

    }else{
        echo "Dados não cadastrado";
    }



?>