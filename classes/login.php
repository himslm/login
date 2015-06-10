<?php
class login extends cxn{
  function loginUser($user, $pass){
    $user = $this->escape($user);
    $this->checkFields($user, $pass);
    $this->checkUserExists($user);
    $this->verifyPassword($user, $pass);
  }
  function checkFields($user, $pass){
    if(!$user | !$pass){
      $_SESSION['process_result'] = '<div class="notify-error">Please complete all fields before continuing.</div>';
      header("Location: " . $_SERVER['HTTP_REFERER']);
    }else{
      return true;
    }
  }
  function checkUserExists($user){
    $sql = $this->cxn->query("SELECT username FROM users WHERE username = '" . $user . "'");
    if($sql->num_rows > 0){
      return true;
    }else{
      $_SESSION['process_result'] = '<div class="notify-error">Username/Password is incorrect.</div>';
      header("Location: " . $_SERVER['HTTP_REFERER']);
    }
  }
  function verifyPassword($user, $pass){
    $sql = $this->cxn->query("SELECT * FROM users WHERE username = '" . $user . "'");
    WHILE($row = $sql->fetch_assoc()){
      if(crypt($pass, $row['password']) == $row['password']){
        $_SESSION['admin_ID'] = $row['user_ID'];
        header("Location: " . $_SERVER['HTTP_REFERER']);
      }else{
        $_SESSION['process_result'] = '<div class="notify-error">Username/Password is incorrect.</div>';
        header("Location: " . $_SERVER['HTTP_REFERER']);
      }
    }
  }
}
?>
