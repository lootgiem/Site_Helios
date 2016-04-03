<?php


$reussi = "false";
$message ="";

if(isset($_POST['manger'],$_POST['B_F'],$_POST['B_C'],$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['phone'],$_POST['adresse'])){


$manger = urlencode($_POST['manger']);
$B_F = urlencode($_POST['B_F']);
$B_C = urlencode($_POST['B_C']);
$nom = urlencode($_POST['nom']);
$prenom = urlencode($_POST['prenom']);
$mail = urlencode($_POST['mail']);
$phone = urlencode($_POST['phone']);
$adresse = urlencode($_POST['adresse']);

	/*if(preg_match('#^[a-zA-Z-]+[\.]?[a-zA-Z-]+@(edu.)?esiee.fr\s*$#',$mail)){

		if(preg_match('#^0[0-9]([ .-]?[0-9]{2}){4}\s*$#', $phone)){*/

				$commande = urlencode("Adresse: ".$adresse." // Vienoiserie: ".$manger." // Boisson chaude: ".$B_C." // Boisson froide: ".$B_F."");

				/*
					id = 6 	Dej_mardi
					id = 7 	Dej_mercredi
					id = 8 	Dej_jeudi
				*/

				$requestUrl = "http://liste-helios.com/api/apiSE.php?action=insertEntry&id_event=8&nom=".$nom."&prenom=".$prenom."&mail=".$mail."&phone=".$phone."&commande=".$commande."";

                $reponse  = file_get_contents($requestUrl);
                $json_obj  = json_decode($reponse);
                $error = $json_obj[0]->error;

                if($error == 0){
                   $reussi = "true";
                   $message = "Bravo vous avez reservé votre petit Dej' pour demain matin, il ne vous reste plus qu'a confirmer le mail que nous vous avons envoyé à l'adresse : ".$mail;
                }
	                else if($error == 6){
	                    $reussi = "false";
	                   	$message = "Erreur : Certains champs sont vide lors de l'inscription dans la Base de donnée";
	                }
		                else if($error == 5){
		                    $reussi = "false";
		                   	$message = "Erreur : Votre mail est déjà associé à une reservation";
		                }
			                else{
			                    $reussi = "false";
			                  	$message = "Erreur : Erreur Inconnue";
			                }
	/*	}
		else{
			$reussi = "false";
          	$message = "Erreur : Il ne s'agit pas d'un numero de telephone valide";
		}
	}
	else{
		$reussi = "false";
        $message = "Erreur : Il ne s'agit pas d'un mail ESIEE reconnue";
	}*/
}
else{
	$reussi = "false";
  	$message = "Erreur : Certains champs sont vides";
}

header('Location: ../index.php?message='.urlencode($message).'&reussi='.urlencode($reussi));
exit();
