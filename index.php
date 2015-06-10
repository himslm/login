<?php
if(!isset($_SESSION['admin_ID'])){
  require_once("pages/login.php");
}else{
  require_once("pages/admin.php");
}
?>
