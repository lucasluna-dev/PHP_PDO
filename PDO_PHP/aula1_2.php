<?php

    //TABALHANDO COM INSERT E CONEXÃO DO BANCO DE DADOS

    //Aula 1 -> fazendo conecão com o mysql local
    $pdo = new PDO("mysql:host=localhost;dbname=pdo_jedai",'root','');

    //Aula 2 -> Incluindo dados na tabela

    date_default_timezone_set('America/Sao_Paulo');

    if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_regisro = date('Y-m-d H-i-s');

        if($nome == ''){
            echo '<script>alert("Error campo nome vaizio")</script>';
        }else if($sobrenome == ''){
            echo '<script>alert("Error campo sobre nome vaizio")</script>';
            
        }else if($nome && $sobrenome != ''){
            $sql = $pdo->prepare("INSERT INTO `tb_clientes` VALUES (null,?,?,?)");
            // Excutando a query e confirmando o registro.
            $sql->execute(array($nome,$sobrenome,$momento_regisro));
            echo '<script>alert("Dados Registrados com Sucesso")</script>';
            
        }else{
            echo '<script>alert("Falha ao registrar os dados.")</script>';
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cliente</title>
</head>
<body>

    <form method="post">
        <div><input type="text" name="nome"  require placeholder="Nome"></div>
        <div><input type="text" name="sobrenome" require placeholder="Sobre nome"></div>
        <div><input type="submit" name="acao" value="enviar"> </div>
    </form>
    
</body>
</html>