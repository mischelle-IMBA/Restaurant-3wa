<?php


class LoginModel
{
	public function validateForm(){

    if (empty($_POST['email'])) {
         $NameErr = "Name shouldn't be empty";
         return false;
    } else {
         $uname = $_POST['username'];
         if(empty($_POST['psw'])) {
           $PassErr = "Password shouldn't be empty";
           return false;
         } else {
           $pass = $_POST['psw'];
         }
  }
  return true;
  }

  public function verifyUser($username, $psw)
  {
    $db= new Database();
    $query= 'SELECT * FROM client WHERE `pseudo` LIKE ?';

    $user = $db->queryOne($query, [$username]);

    if (empty($user)) {
      return false;
    } else {
      if ($psw == $user['password']) {
        return $user;
      } else {
        return false;
      }
    }

  }
}
