<?php

    $hostname = "sql102.epizy.com";
    $database = "epiz_31454063_rifa";
    $username = "epiz_31454063";
    $password = "J2hv51D7pz3mRtP";


    if($conecta = mysqli_connect($hostname, $username, $password, $database)){
        echo 'conectando ao banco de dados ' . $database .'.........';
    }
    else{
        echo 'erro:' .mysqli_connect_error();
    }