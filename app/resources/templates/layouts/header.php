<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="dynamic php cms registration system">
    <link rel="stylesheet" href="../resources/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/assets/css/app.css">
    <title>CMS Login</title>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light p-0 <?php if(isset($back)): echo $back; endif; ?>">
            <div class="<?php if(isset($container)): echo $container; endif; ?>">
                <a class="navbar-brand" href="../public/index.php" target="_blank"><strong><i class="fas fa-home back-home-icon"></i>&nbsp;</strong></a>
                <a class="navbar-brand" href="#"><strong>Edynak CMS Registration System</strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"href="index.php?page=contact">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Account
                        </a>
                    <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?page=login"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Login</a>
                        <a class="dropdown-item" href="index.php?page=register"><i class="fas fa-user-plus"></i>&nbsp;SignUp</a>
                    </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <small>Welcome test/user</small>&nbsp;<img src="../resources/storage/uploads/myImage.jpg" class="img rounded-circle" alt="sample image" height="20px;" width="20px;">
                        </a>
                    <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?page=profile"><i class="fas fa-user"></i></i>&nbsp;Profile</a>
                        <a class="dropdown-item" href="index.php?page=settings"><i class="fas fa-cog"></i>&nbsp;Settings</a>
                        <a class="dropdown-item" href="index.php?page=logout"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
                    </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i>&nbsp;Dashboard</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="site-main" id="main-area">
            <main class="main-content" id="main">
                <div class="<?php if(isset($container)): echo $container; endif; ?>">
                
                </div>
            </main>
        </div>
    </div>