<?php
class LoginController
{
  public function httpGetMethod(Http $http, array $queryFields)
  {

  }

  public function httpPostMethod(Http $http, array $formFields)
  {
    //var_dump($formFields);

    $signin = new LoginModel();
    $err = $signin->verifyUser(
      $formFields['username'],
      $formFields['psw']
    );

    if ($err === false) {
      header('Location: login');
    } else {
      $session = new UserSession();
      $session->create($err['id'], $err['prenom'], $err['nom'], $err['email']);
      header('Location: meals');
    }
  }

}
?>
