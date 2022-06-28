<?php 
require_once('check_admin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Admin</title>
</head>
<body>
    <div id="wrapper">
        <div class="header">
            <nav class="container">
                <a href="#" id="logo">
                    <img src="../img/logo.png" alt="">
                </a>
                
            </nav>
        </div>
        <div class="main-admin">
                <div class="main-left">
                    <ul>
                        <li><a href="adm_users.php">Users</a></li>
                        <li><a href="adm_advises.php">Advises</a></li>
                        <li><a href="adm_category.php">Category</a></li>
                    </ul>

                </div>
                <div class="main-right">

                </div>
        </div>
    </div>
   
</body>
</html>