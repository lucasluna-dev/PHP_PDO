<?php

    //Trabalhando com GROUP, ORDER , LIMIT,ASC,DESC,

    $pdo = new PDO('mysql:local=localhost;dbname=pdo_jedai','root','');

    
    

    // Selecionando e agrupando dados com GROUP BY, sendo assim os dados não se repetem
    // Selecionando em ordem alfabetica com ORDER BY
    // Selecionando em ordem crescente com ASC, OU DESC para decrescente
    // Limitando a vizualiação dos dados com o limit
    $sql  = $pdo->prepare('SELECT * FROM `tb_funcionarios` GROUP BY cargo ORDER BY nomeCargo ASC LIMIT 2');
    $sql->execute();
    $info = $sql->fetchAll();
    foreach($info as $key => $value){
        echo $value['nomeCargo'];
        echo '<hr>';

    }
    




?>