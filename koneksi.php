<?php


try{
    //config
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbcomplaint";

    //connect
    $database = "mysql:dbname=$dbname;host=$host";
    $connection = new PDO($database, $username, $password);  
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $konek =mysqli_connect($host, $username, $password, $dbname) or die("Database Tidak Terhubung");
    
   
} catch (PDOException $e){
    echo "Error | ".$e->getMessage();
    die;
}

?>