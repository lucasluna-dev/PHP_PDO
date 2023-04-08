<?php

    //Trabalhando com conexão ao banco de dados com segurança.

    define('HOST','localhost');
    define('DATABASE','pdo_jedai');
    define('USER','root');
    define('PASSWORD','');

  
    try{
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWORD,array(PDO:: 
        MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));// função para reconhecer pontuação nas letras
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//Exibindo erro caso de errado a conexeão
        }catch(Exception $e){//pegando o erro e armazenando na variavel e.

        // Fazendo a minha proria menssagem de erro.
        echo '<h2 style="color:red;">Erro ao conectar com bancos de dados :(<h2>';
    }
            



?>