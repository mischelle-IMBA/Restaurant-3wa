<?php


class AdduserModel
{
	public function create(
		$email,
		$nom,
    $prenom,
    $pseudo,
		$password)
	{
		$sql = "INSERT INTO client
        (
			email,
			nom,
			prenom,
      pseudo,
			password
		) VALUES (?, ?, ?, ?, ?)";

        // envoie à la base de données.
        $database = new Database();
		$database->executeSql($sql,
		[
      $email,
      $nom,
      $prenom,
      $pseudo,
      $password
		]);

        // Ajout d'un message de notification.
        $flashBag = new FlashBag();
        $flashBag->add('Votre inscription est bien enregistrée, nous vous en remercions.');
	}
}
