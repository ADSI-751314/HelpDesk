<?php

    function Conectar(){
    $conn= null;
    $host = 'localhost';
    $db ='helpdesk';
    $user='root';
    $pwd='';
    
    try{
        $conn= new PDO('mysql:host='.$host.';dbname='.$db,$user,$pwd);
        
    }  catch (PDOException $e){
        
        echo 'Error al conectar la base de datos'.$e;
        exit;
    }
   
    return $conn;
    }
?>
