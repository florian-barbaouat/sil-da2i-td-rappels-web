<?php

require('connexion.php');
$stmt = $bdd->prepare("SELECT idPerson FROM movieHasPerson WHERE idMovie=".$id);
$stmt->execute();
$ids = $stmt->fetchAll();
$listimg =[];
	foreach($ids as $person) {
			//var_dump($person['idPerson']);
			$query = $bdd->prepare("SELECT idPicture FROM personHasPicture WHERE idPerson=".$person['idPerson']);
			$query->execute();
			$idPictures = $query->fetchAll();

			foreach($idPictures as $idPicture){
				$query = $bdd->prepare("SELECT * FROM picture WHERE id=".$idPicture['idPicture']);
				$query->execute();
				$listimg[$person['idPerson']][] = $query->fetch();

        }
      }
