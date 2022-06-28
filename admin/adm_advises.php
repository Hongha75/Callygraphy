<?php
require_once('../validation/dbhelper.php');
require_once('../validation/utility.php');
require_once('check_admin.php');

$sql = "select * from advises";
$form_List = executeResult($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <title>Admin</title>
    <style>
         table, th, td{
            border:1px solid black;
        }
        table{
            border-collapse:collapse;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <div class="header">
            <nav class="container">
                <a href="../index.php" id="logo">
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
                <div class="container"> 
 <div class="row"> 
  <div class="col-md-10 col-md-offset-1"> 
   <div class="panel panel-default panel-table"> 
    <div class="panel-heading"> 
     <div class="row"> 
      <div class="col col-xs-6"> 
       <h3 class="panel-title">Danh sách khách hàng</h3> 
      </div> 
     </div> 
    </div> 
    <div class="panel-body"> 
     <table method="post" class="table table-striped table-bordered table-list"> 
      <thead> 
       <tr> 
        <th><em class="fa fa-cog"></em></th> 
        <th class="hidden-xs">No</th> 
        <th>Name</th> 
        <th>Email</th> 
        <th>Phone</th> 
        <th>Address</th> 
        <th>Describe</th> 
        <th>Created_at</th> 
        <th>Update_at</th> 
       </tr> 
      </thead> 
      <tbody>
      <?php
$index = 0;
foreach($form_List as $item) {
    echo '<tr>
            <td align="center"><a href="adm_edit_advises.php?id='.$item['id'].'" class="btn btn-default"><em class="fa fa-pencil"></em></a> <a href="adm_delete.php?id='.$item['id'].'" class="btn btn-danger"><em class="fa fa-trash"></em></a></td> 
            <td class="hidden-xs">'.(++$index).'</td>
            <td>'.$item['name'].'</td>
            <td>'.$item['email'].'</td>
            <td>'.$item['phone'].'</td>
            <td>'.$item['address'].'</td>
            <td>'.$item['content'].'</td>
            <td>'.$item['created_at'].'</td>
            <td>'.$item['update_at'].'</td>
        
        </tr>';
}
?>
     </tbody>
    </table> 
                </div>
        </div>
    </div>
    <script src="js/jquery-1.11.1.min.js"></script>
</body>
</html>