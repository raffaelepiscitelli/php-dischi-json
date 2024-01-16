<?php
    //Leggo il contenuto del file myAlbum.json
    $jasonStringData = file_get_contents('./json/myAlbums.json');
    //Decodifico la stringa JSON in un array associativo
    header('Content-Type: application/json');
    //Stampo il contenuto dell'array associativo
    echo $jasonStringData;

?>