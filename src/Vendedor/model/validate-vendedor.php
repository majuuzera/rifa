<?php

session_start();

if(!isset($_SESSION['NOME']) && !isset($_SESSION['TIPO']) ){
    $dados = array(
        'tipo' =>  'error';
        'mensagem' => 'você não está autenticado'
    );
}else{
    $dados = array(
        'tipo' =>  'success';
        'mensagem' => 'bem-vindo, ' . $_SESSION['NOME'];
    );
}
echo json_encode($dados);