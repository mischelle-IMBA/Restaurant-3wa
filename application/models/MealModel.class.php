<?php

class MealModel {

  public function findOneMeal(int $mealId)
  {
  $database = new Database ();
  $sql = "SELECT * FROM carte WHERE id = ?";
  // $result = $database->queryOne($sql, [$userId]);
  return $database->queryOne($sql, [$mealId]);
    }
  }
