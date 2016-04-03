<?php

$reussi = "false";
$message ="";

if(isset($_GET["action"])){
     $action = $_GET["action"];

     if($action == "validate"){
          if(isset($_GET["id_event"],$_GET["token"],$_GET["nom"],$_GET["prenom"])){

               $id_event = urlencode($_GET["id_event"]);
               $token_mail = urlencode($_GET["token"]);
               $nom = urlencode($_GET["nom"]);
               $prenom =urlencode($_GET["prenom"]);

               $requestUrl = "http://liste-helios.com/api/apiSE.php?action=validate&id_event=" . $id_event . "&token=" . $token_mail ."&nom=".$nom."&prenom=".$prenom."";
               $reponse  = file_get_contents($requestUrl);
               $json_obj  = json_decode($reponse);
               $error = $json_obj->error;

               if($error == 0){
                    $reussi = "true";
                    $message ="Votre réservation a été confirmée !";
               }
               else if($error == 3){
                    $reussi = "false";
                    $message ="Erreur : Il n'y a aucune réservation associée !";
               }
               else if($error == 6){
                    $reussi = "false";
                    $message ="Erreur : Des champs sont vides lors de la requète BDD";
               }
               else if($error == 7){
                    $reussi = "false";
                    $message ="Erreur : Réservation inconnue";
               }
               else{
                    $reussi = "false";
                    $message ="Erreur : BDD";
               }
          }
          else{
               $reussi = "false";
               $message ="Url non valide";
          }
     }
     else if($action == "validateGroupe"){
          if( isset($_GET["token"], $_GET["nom_groupe"]) ){
               $token_mail = urlencode($_GET["token"]);
               $nom_groupe = urlencode($_GET["nom_groupe"]);
               $requestUrl = "http://liste-helios.com/api/apiSE.php?action=validateGroupe&nom_groupe=" . $nom_groupe . "&token=" . $token_mail."";
               $reponse  = file_get_contents($requestUrl);
               //print_r($reponse);
               //exit();
               $json_obj  = json_decode($reponse);
               $error = $json_obj->error;

               if($error == 0){
                    $reussi = "true";
                    $message ="Votre groupe est désormais inscrit !";
               }
               else if($error == 2){
                    $reussi = "false";
                    $message ="Erreur : Groupe inconnu";
               }
               else if($error == 6){
                    $reussi = "false";
                    $message ="Erreur : Des champs sont vides lors de la requète";
               }
               else{
                    $reussi = "false";
                    $message ="Erreur : BDD";
               }
          }
          else{
               $reussi = "false";
               $message ="Url non valide";
          }
     }
     else{
          $reussi = "false";
          $message ="Action Inconnue";
     }
}
else{
     $reussi = "false";
     $message ="Action Inconnue";
}

header('Location: ../index.php?message='.urlencode($message).'&reussi='.urlencode($reussi));
exit();
