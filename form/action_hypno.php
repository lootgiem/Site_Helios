<?php

$reussi = "false";
$message ="";

if(isset($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['phone']) and $_POST['nom'] != '' and $_POST['prenom'] != '' and $_POST['mail'] != '' and $_POST['phone'] != ''){

	$nom = 	urlencode($_POST['nom']);
	$prenom = urlencode($_POST['prenom']);
	$mail = urlencode(strtolower($_POST['mail']));
	$phone = urlencode($_POST['phone']);

	if(1==1){

		if(preg_match('#^0[0-9]([ .-]?[0-9]{2}){4}\s*$#', $phone)){

				$requestUrl = "http://liste-helios.com/api/apiSE.php?action=insertEntry&id_event=2&nom=".$nom."&prenom=".$prenom."&mail=".$mail."&phone=".$phone;
                $reponse  = file_get_contents($requestUrl);
                $json_obj  = json_decode($reponse);
                $error = $json_obj[0]->error;

                if($error == 0){
                   $reussi = "true";
                   $message = "Bravo vous avez réservé, il ne vous reste plus qu'a confirmer le mail que nous vous avons envoyé à l'adresse : ".$mail;
                }
	                else if($error == 6){
	                    $reussi = "false";
	                   	$message = "Erreur : Certains champs sont vides lors de l'inscription dans la Base de données";
	                }
		                else if($error == 5){
		                    $reussi = "false";
		                   	$message = "Erreur : Votre mail est déjà associé à une reservation";
		                }
			                else{
			                    $reussi = "false";
			                  	$message = "Erreur : Erreur Inconnue";
			                }
		}
		else{
			$reussi = "false";
          	$message = "Erreur : Il ne s'agit pas d'un numéro de telephone valide";
		}
	}
	else{
		$reussi = "false";
        $message = "Erreur : Il ne s'agit pas d'un mail ESIEE reconnu";
	}
}
else{
	$reussi = "false";
  	$message = "Erreur : Certains champs sont vides";
}

header('Location: ../index.php?message='.urlencode($message).'&reussi='.urlencode($reussi));
exit();
