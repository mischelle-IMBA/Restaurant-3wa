<?php

class MealController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
      $carte = new MealModel();
      $meal = $carte->findOneMeal(3);
      return ['carte'=> $meal];
    }
}
