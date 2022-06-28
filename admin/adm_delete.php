<?php
require_once('../validation/dbhelper.php');
require_once('../validation/utility.php');
require_once('check_admin.php');

$id = $_GET['id'];
$sql = "delete from users where id = $id";
execute($sql);
header('Location: adm_users.php');


$id = $_GET['id'];
$sql = "delete from advises where id = $id";

execute($sql);
header('Location: adm_advises.php');

$id = $_GET['id'];
$sql = "delete from category where id = $id";

execute($sql);
header('Location: adm_category.php');