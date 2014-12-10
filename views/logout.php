<?php
require_once "includes/classUserManager.php";
$usermanager=new userManager();

$usermanager->logout();
  header('Location: index.php');

?>