<?php

abstract class Connection 
{
    protected function getConnection()
    {   try{
        
        $conn = new PDO('mysql:host=localhost;dbname=ra211618745','root','');
        return $conn;

    }catch(PDOException $e){
        
        die($e->getMessage());
    }
} 
}

?>