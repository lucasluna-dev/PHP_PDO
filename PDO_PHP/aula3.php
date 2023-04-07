<?php

    // Trabalhando com UPDATE E WEHRE

    //fazendo conecão com o mysql local
    $pdo = new PDO('mysql:host=localhost;dbname=pdo_jedai','root','');
    // Referenciando id da linha que será atualizada na tabela
    $id = 5;

    //atualuzando linha no banco de dados referenciando o id da linha.
    $sql = $pdo->prepare("UPDATE `tb_clientes` SET nome='Marcos',sobrenome='Fernando' WHERE id=?");

    // Excutando a query e confirmando o registro.
    if($sql->execute(array($id))){
        echo 'Registro atualizado com seucesso!';
    }else{
        echo 'Erro ao atualizar registro';
    }



?>