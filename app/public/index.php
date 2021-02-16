<?php

    //initalize container
    $container = "container";
    
    include_once __DIR__.'/../resources/templates/layouts/header.php';
    
    //initalize container
    $container = "container";

    //files directory
    $filesDirectory = "front";

    //get name from browser
    if(!empty($_GET['page'])){
        //page
        $page = $_GET['page'];

        //get all files in directory
        $files = scandir($filesDirectory, 0);

        //remove unwanted dots in array
        unset($files[0]);
        unset($files[1]);

        //check if file is in array
        if(in_array($page.".inc.php", $files)){
            //include file if in array
            include_once($filesDirectory."/".$page.".inc.php");
        }else{
            //include home page by default
            include_once($filesDirectory."/home.inc.php");
        }
    }else{
        //include home page by default
        include_once($filesDirectory."/home.inc.php");
    }
 
    include_once __DIR__.'/../resources/templates/layouts/footer.php';
?>