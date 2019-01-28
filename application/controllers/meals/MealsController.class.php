<?php

class MealsController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
      $restaurant = new MealsModel();
      $menu = $restaurant->findMenu();
      return ['carte'=> $menu];
    }
}
