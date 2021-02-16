<?php

    //initalize container
    $container = "container-fluid";
    $back = "backend-nav";

    include_once __DIR__.'/../resources/templates/layouts/header.php';

    //intialize side navigation
?>
    <div class="row">
        <?php include_once __DIR__.'/../resources/templates/admin/sidenav.php';?>
        <div class="col-sm-12 col-md-10"></div>
    </div>
<?php
    //files directory
    $filesDirectory = "back";

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
            include_once($filesDirectory."/dashboard.inc.php");
        }
    }else{
        //include home page by default
        include_once($filesDirectory."/dashboard.inc.php");
    }

    include_once __DIR__.'/../resources/templates/layouts/footer.php';
?>