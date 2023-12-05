<?php
    $servername = 'mysql-myro.alwaysdata.net';
    $username = 'myro';
    $password = 'Kemayou7';
    //On établit la connexion 
    $con = new PDO("mysql:host=$servername;dbname=myro_garage", $username, $password);
    if($con){
        $reponse = $con->prepare('SELECT * FROM admin');
        $reponse->execute();
        $userData = [];
            while($data = $reponse->fetch()){
                $userData [] = $data;
            }
            echo json_encode($userData);
    }else{
        echo 'echec de connexion';
    }
?> 
