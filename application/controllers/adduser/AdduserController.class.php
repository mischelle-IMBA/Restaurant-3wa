<?php
class AdduserController
{
  public function httpGetMethod(Http $http, array $queryFields)
  {

  }

  public function httpPostMethod(Http $http, array $formFields)
  {
    $signup = new AdduserModel();
    $signup->create(
      $formFields['email'],
      $formFields['nom'],
      $formFields['prenom'],
      $formFields['pseudo'],
      $formFields['password']
    );
  }

}
?>
