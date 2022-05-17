<?php 

    //VARIÁVEIS PARA REALIZAÇÃO DA CONEXÃO COM O BANCO DE DADOS
    $hostname = "sql102.epizy.com";
    $database = "epiz_31454913_rifa";
    $username = "epiz_31454913";
    $password = "M6m7AzPVkGmP9Q6";

    if($conecta = mysqli_connect($hostname, $username, $password, $database)){
        echo 'Conectado ao banco de dados ' . $database . '.......'
    } else{
        echo 'Erro: ' . mysqli_connect_error();
    }