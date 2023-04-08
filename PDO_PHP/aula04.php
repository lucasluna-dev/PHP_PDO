<?php

    // Trablhando com Delete PDO

    $pdo = new PDO('mysql:host=localhost;dbname=pdo_jedai','root','');
    $id = 5;
    //Deletando resigstro da linha 5 com update
    $sql = $pdo->prepare("DELETE FROM `tb_clientes` WHERE id=?");
    
    // Excutando a query e confirmando o registro.
    if($sql->execute(array($id))){

        echo 'Registro deletado com sucesso';

    }else{

        echo'Registro não foi deletado ';
    }





?>