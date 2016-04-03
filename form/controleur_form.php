<?php

defined("_Inclusion_autorisee_") or die("Inclusion directe non autorisee");


/*Disponiblité Event DEJ*/
$requestUrl = 'http://liste-helios.com/api/apiSE.php?action=getVisibility&id_event=1'; /**/
$response  = file_get_contents($requestUrl);
$json_obj  = json_decode($response);
$EV_fortboyard_dispo = $json_obj[2]->visibility;

/*Disponiblité Event DEJ*/
$requestUrl = 'http://liste-helios.com/api/apiSE.php?action=getVisibility&id_event=2'; /**/
$response  = file_get_contents($requestUrl);
$json_obj  = json_decode($response);
$EV_hypno_dispo = $json_obj[2]->visibility;

/*Places restantes Event Hypnotiseur*/
$requestUrl = 'http://liste-helios.com/api/apiSE.php?action=getPlaces&id_event=2';
$response  = file_get_contents($requestUrl);
$json_obj  = json_decode($response);
$place_restante_H = $json_obj[1]->places;


/*Disponiblité Event Mardi*/
$requestUrl = 'http://liste-helios.com/api/apiSE.php?action=getVisibility&id_event=3';
$response  = file_get_contents($requestUrl);
$json_obj  = json_decode($response);
$SE_Mardi_dispo = $json_obj[2]->visibility;

/*Disponiblité Event Mercredi*/
$requestUrl = 'http://liste-helios.com/api/apiSE.php?action=getVisibility&id_event=4';
$response  = file_get_contents($requestUrl);
$json_obj  = json_decode($response);
$SE_Mercredi_dispo = $json_obj[2]->visibility;


/*Disponiblité Event Jeudi*/
$requestUrl = 'http://liste-helios.com/api/apiSE.php?action=getVisibility&id_event=5';
$response  = file_get_contents($requestUrl);
$json_obj  = json_decode($response);
$SE_Jeudi_dispo = $json_obj[2]->visibility;

/*Disponiblité Event DEJ*/
$requestUrl = 'http://liste-helios.com/api/apiSE.php?action=getVisibility&id_event=8'; /**/
$response  = file_get_contents($requestUrl);
$json_obj  = json_decode($response);
$EV_DEJ_dispo = $json_obj[2]->visibility;

$EV_fortboyard_dispo 
= $json_obj[2]->visibility;

$place_restante_H  = 1;
$EV_fortboyard_dispo  = 1;
$EV_hypno_dispo  = 1;
$SE_Mardi_dispo = 1;
$SE_Mercredi_dispo = 1;
$SE_Jeudi_dispo = 1;
$EV_DEJ_dispo = 1;

?>
