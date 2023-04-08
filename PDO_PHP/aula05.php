<?php

    // Trabalhando com INNER JOIN E ON para fazer relacionamento entre tabelas

    // fazendo conexão
    $pdo = new PDO('mysql:host=localhost;dbname=pdo_jedai','root','');

    //Selecionando todo o conteudo do tabela posts

   $sql = $pdo->prepare(" SELECT * FROM tb_posts");
   $sql->execute();
   $info1 = $sql->fetchAll();

   foreach($info1 as $key => $value){
       echo 'Titulo -> '.$value['titulo'];
       echo '</br>';
       echo 'Noticia -> '.$value['conteudo'];
   } 

  
    
    


     
     // Selecionando conteudo da tabela via GET
     
     $sql = $pdo->prepare("SELECT * FROM tb_posts WHERE categoria_id = ?");
    $sql->execute(array($_GET['categoria_id']));
    $info2 = $sql->fetchAll();

    // para recuperar valor passado pelo get, digite na url, PDO_PHP/aula5.php/index.php?categoria_id=2
    foreach($info2 as $key => $value){
        echo 'Titulo -> '.$value['titulo'];
        echo '<br/>';
        echo 'Noticia -> '.$value['conteudo'];
        echo '<hr>';
    }



      // Relacionando colunas das tabelas posts e categorias
      $sql = $pdo->prepare("SELECT * FROM `tb_posts` INNER JOIN `tb_categoria` ON `tb_posts`.`categoria_id` = 
      `tb_categoria`.`id`");
      $sql->execute();
      $info3 = $sql->fetchAll();
  
  
      foreach($info3 as $key => $value){
          echo 'Titulo -> '.$value['titulo'];
          echo '<br/>';
          echo 'Noticia -> '.$value['conteudo'];
          echo '<hr>';
      }
  
    

?>