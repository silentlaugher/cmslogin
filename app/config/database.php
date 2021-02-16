<?php
    $host = "localhost";
    $dbname = "cmslogin";
    $dbusername = "root";
    $dbpassword = "";
    $dsn = "mysql:host=".$host.";dbname=".$dbname;

    //establish connection to database
    try{
        $dbc = new PDO($dsn, $dbusername, $dbpassword);
        //PDO::ERRMODE_SILENT
        $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbc->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        //check connection to database
        //echo "You have successfully connected to the database named ".$dbname;

    }catch(PDOException $ex){
        //get error message
        echo "Connection failed: ".$ex->getMessage();
    }
?>