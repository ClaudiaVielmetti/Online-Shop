<?php
try 
    {
    //host
    define("HOST", "localhost");

    //DB name
    define("DBNAME", "online-shop");

    //user
    define("USER", "root");

    //password
    define("PASS", "");

    //Connection DB Testing

    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME."",USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // if($conn == true) {
    //    echo "connection success";

    // } else {
    //    echo "error";}

    
    } catch(PDOException $e)
        {
            echo $e->getMessage();
    }
