<?php

    $jasonStringData = file_get_contents('./json/myAlbums.json');

    $myAlbumsArray = json_decode($jasonStringData, true);

    var_dump($myAlbumsArray);

?>