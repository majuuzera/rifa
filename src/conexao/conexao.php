<?php

    $hostname = "sql102.epizy.com";
    $database = "epiz_31454063_rifa";
    $username = "epiz_31454063";
    $password = "J2hv51D7pz3mRtP";


    try{
        $pdo = new PDO('mysqli:host=' .$hostname. ';database=' .$database, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'ação realizada com sucesso';
    }
    catch (PDOException $e){
        echo 'error: ' .$e->getMessage(); 
    }
   