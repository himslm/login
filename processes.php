<?php
include("includes/configuration.php);
if(!isset($_SESSION['admin_ID'])){
  if(isset($_POST['login'])){
    $login->loginUser($_POST['user'], $_POST['pass'], $_POST['remember']);
  }
}
?>
