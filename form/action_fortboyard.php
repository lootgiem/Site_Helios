<?php

$reussi = "false";
$message ="";

/*if(isset($_POST['nom'],
		 $_POST['prenom'],
		 $_POST['mail'],
		 $_POST['phone'],
		 $_POST['name_groupe'],

		 $_POST['nom2'],
		 $_POST['prenom2'],
		 $_POST['mail2'],

		 $_POST['nom3'],
		 $_POST['prenom3'],
		 $_POST['mail3'],

		 $_POST['nom4'],
		 $_POST['prenom4'],
		 $_POST['mail4'],

		 $_POST['nom5'],
		 $_POST['prenom5'],
		 $_POST['mail5'])){*/

	/*$nom = 	$_POST['nom'];
	$prenom = $_POST['prenom'];
	$mail = $_POST['mail'];
	$phone = $_POST['phone'];
	$name_groupe = $_POST['name_groupe'];

	$nom2 = $_POST['nom2'];
	$prenom2 = $_POST['prenom2'];
	$mail2 = $_POST['mail2'];

	$nom3 = $_POST['nom3'];
	$prenom3 = $_POST['prenom3'];
	$mail3 = $_POST['mail3'];

	$nom4 = $_POST['nom4'];
	$prenom4 = $_POST['prenom4'];
	$mail4 = $_POST['mail4'];

	$nom5 = $_POST['nom5'];
	$prenom5 = $_POST['prenom5'];
	$mail5 = $_POST['mail5'];*/

	$nom = 	urlencode($_POST['nom']);
	$prenom = urlencode($_POST['prenom']);
	$mail = strtolower($_POST['mail']);
	$phone = urlencode($_POST['phone']);
	$name_groupe = urlencode(strtolower($_POST['name_groupe']));

	$nom2 = urlencode($_POST['nom2']);
	$prenom2 = urlencode($_POST['prenom2']);
	$mail2 = urlencode(strtolower($_POST['mail2']));

	$nom3 = urlencode($_POST['nom3']);
	$prenom3 = urlencode($_POST['prenom3']);
	$mail3 = urlencode(strtolower($_POST['mail3']));

	$nom4 = urlencode($_POST['nom4']);
	$prenom4 = urlencode($_POST['prenom4']);
	$mail4 = urlencode(strtolower($_POST['mail4']));

	$nom5 = urlencode($_POST['nom5']);
	$prenom5 = urlencode($_POST['prenom5']);
	$mail5 = urlencode(strtolower($_POST['mail5']));

	/*if( preg_match('#^[a-zA-Z-]+[\.]?[a-zA-Z-]+@(edu.)?esiee.fr\s*$#',$mail)
		and preg_match('#^[a-zA-Z-]+[\.]?[a-zA-Z-]+@(edu.)?esiee.fr\s*$#',$mail2)
		and preg_match('#^[a-zA-Z-]+[\.]?[a-zA-Z-]+@(edu.)?esiee.fr\s*$#',$mail3)
		and preg_match('#^[a-zA-Z-]+[\.]?[a-zA-Z-]+@(edu.)?esiee.fr\s*$#',$mail4)
		and preg_match('#^[a-zA-Z-]+[\.]?[a-zA-Z-]+@(edu.)?esiee.fr\s*$#',$mail5)){

		if(preg_match('#^0[0-9]([ .-]?[0-9]{2}){4}\s*$#', $phone)){*/

				$requestUrl = "http://liste-helios.com/api/apiSE.php?action=insertGroupeReservation&id_event=1&nom=".$nom."&prenom=".$prenom."&mail=".$mail."&phone=".$phone."&nom_groupe=".$name_groupe."&nom2=".$nom2."&prenom2=".$prenom2."&mail2=".$mail2."&nom3=".$nom3."&prenom3=".$prenom3."&mail3=".$mail3."&nom4=".$nom4."&prenom4=".$prenom4."&mail4=".$mail4."&nom5=".$nom5."&prenom5=".$prenom5."&mail5=".$mail5;

                $reponse  = file_get_contents($requestUrl);
                $json_obj  = json_decode($reponse,true);

                $error0 = $json_obj[0]['Respo'][0]['error'];
                $error1 = $json_obj[1][1][0]['error'];
                $error2 = $json_obj[2][2][0]['error'];
                $error3 = $json_obj[3][3][0]['error'];
                $error4 = $json_obj[4][4][0]['error'];
                $error5 = $json_obj[5]['error'];

                if($error0 == 0 && $error1 == 0 && $error2 == 0 && $error3 == 0 && $error4 == 0 && $error5 == 0 ){
                   $reussi = "true";
                   $message = "Bravo, il ne vous reste plus qu'a confirmer le mail que nous vous avons envoyé à l'adresse : ".$mail."";
                }

                else if($error0 == 4){
	                    $reussi = "false";
	                   	$message = "Erreur : Ce nom d'équipe existe déjà/Vous avez déjà crée un groupe";
	                }
	                else if($error0 == 6 || $error1 == 6 || $error2 == 6 || $error3 == 6 || $error4 == 6 || $error5 == 6){
	                    $reussi = "false";
	                   	$message = "Erreur : Certains champs sont vides lors de l'inscription dans la base de données";
	                }
		                else if($error0 == 5 || $error1 == 5 || $error2 == 5 || $error3 == 5 || $error4 == 5 || $error5 == 5){
		                    $reussi = "false";
		                   	$message = "Erreur : Le mail d'un de vos équipiers est déjà associé à une autre équipe";
		                }
			                else{
			                    $reussi = "false";
			                  	$message = "Erreur inconnue";
			                }
	/*	}
		else{
			$reussi = "false";
          	$message = "Erreur : Il ne s'agit pas d'un numéro de télephone valide";
		}
	}
	else{
		$reussi = "false";
        $message = "Erreur : L'un des mails est invalide";
	}
/*}
else{
	$reussi = "false";
  	$message = "Erreur : Certains champs sont vides";
}*/

header('Location: ../index.php?message='.urlencode($message).'&reussi='.urlencode($reussi));
exit();
