<?php
if(!isset($_SESSION['admin_ID'])){
  require_once("login.php");
}else{
  require_once("admin.php");
}
?>
