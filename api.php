<?php

//per ottenerei dati dal file json:

// step1- Leggo il contenuto del file JSON
$fileContent = file_get_contents("art.json");

//step2-  Restituisco i dati come risposta JSON
header('Content-Type: application/json');

echo $fileContent;

?>





