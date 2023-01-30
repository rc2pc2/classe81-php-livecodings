<?php

/**
 *
* recuperare i dati dal nostro file
* decodificare i dati in un elemento gestibile da php
* gestiamo il dato nel modo ritenuto opportuno
* codifichiamo quel dato in un json
* esponiamo il dato:
* avverto il client che sta per ricevere un json
 * espongo il dato in formato json
 *
 */

$apiKey = 'a8234708124nksodnqwo3gp3pml23';

$rawData = file_get_contents('./db/dischi.json');

$decodedData = json_decode($rawData, true);

// controllo che il json sia ben formato
if (is_null($decodedData)){
    http_response_code(204);
} else {
    $exposedArray = $decodedData;
}

if (isset($_GET['api_key']) && $_GET['api_key'] === $apiKey ){
    //  lascio tutti i dati
} else {
    $tempArray = [];
    foreach ($exposedArray as $disc) {
        $tempDisc = $disc;
        unset($tempDisc['poster']);
        unset($tempDisc['year']);
        unset($tempDisc['genre']);
        array_push($tempArray, $tempDisc);
    }

    $exposedArray = $tempArray;
}
// //
// var_dump($exposedArray);

header('Content-Type: application/json');
echo json_encode($exposedArray );