<?php

try{
   $conexao = new PDO('mysql:host=localhost;dbname=imc', 'root', '');
   $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
   echo "Erro na conexão com o banco de dados ".$e->getMessage();
}

// fazer janela em js que fala q os dados foram salvos e faz salvar na tabela
// mysql -u root -p
?>
