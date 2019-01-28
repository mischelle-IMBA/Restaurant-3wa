<?php

class DessertController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
      $m = new BookingModel();
      $desserts = $m -> findOneDessert;
      return;
    }

}
