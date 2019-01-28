<?php

class MealsModel {

  public function findMenu()
  {
  $database = new Database ();
  $sql = "SELECT * FROM carte";
  // $result = $database->queryOne($sql, [$userId]);
  return $database->query($sql);
    }
  }
