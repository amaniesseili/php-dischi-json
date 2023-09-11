<?php

//per ottenerei dati dal file json:

// step1- Leggo il contenuto del file JSON
$fileContent = file_get_contents("art.json");

// decodifico il json in un array assosciativo
$opere = json_decode($fileContent,true);

//step3-  Restituisco i dati come risposta JSON
header('Content-Type: application/json');

//restituiscpo i dati delle opere come risposta json 
echo json_encode($opere);

?>





