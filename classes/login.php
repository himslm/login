<?php
class login extends cxn{
  function loginUser($user, $pass){
    $user = $this->escape($user);
    $this->checkFields($user, $pass);
  }
}
?>
