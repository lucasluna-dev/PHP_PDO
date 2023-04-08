<?php

    // TRABAlhando com lef e right 
    

    $pdo = new PDO('mysql:local=localhost;dbname=pdo_jedai','root','');


    // Left ajuda a selecioando a tabela da esquerda, ou seja, a tabela que esta sendo relacionada primeira antes do from
    // Sendo assim ela trás o resultado só dos funcionrios que tem time na tabela.
    $sql = $pdo->prepare('SELECT * FROM `tb_funcionarios` LEFT JOIN tb_time ON `tb_funcionarios`.`time` = `tb_time`.`id` ');
    $sql->execute();
    $info = $sql->fetchAll();
    foreach($info as $key => $value){
        
        echo 'O(a) funcionario(a) '.$value['nome'].' torce para o time do '.$value['time'];
        echo " <br> ";
        echo '<hr>';
    }


?>