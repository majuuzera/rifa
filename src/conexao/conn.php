<?php
    //conexao online
    // Variáveis para realização da conexão com o Banco de Dados
    // $hostname = "sql102.epizy.com"; //Nome do servidor que se encontra nosso banco de dados
    // $dbname = "epiz_31454063_rifa"; //Nome do nosso banco de dados
    // $username = "epiz_31454063"; //Nome do usuário para acesso ao banco de daddos
    // $password = "J2hv51D7pz3mRtP"; //Senha de acesso ao nosso banco de daddos

    //conexao off
    $hostname = "localhost"; //Nome do servidor que se encontra nosso banco de dados
    $dbname = "rifas"; //Nome do nosso banco de dados
    $username = "root"; //Nome do usuário para acesso ao banco de daddos
    $password = ""; //Senha de acesso ao nosso banco de daddos

    try {
        $pdo = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'Conexão com banco de dados, realizado com sucesso!!!';
    }catch(PDOException $e) {
        echo 'Erro: '.$e->getMessage();
    }