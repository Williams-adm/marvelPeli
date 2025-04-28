<?php

//require_once hace que si no encuentra el archivo, no se ejecute el resto del código, mientras que include_once lo ejecuta y solo arroja un warning
//usamos _once en ambos para evitar duplicados de importaciones

require_once 'consts.php';
require_once 'logica.php';
require_once 'class/NextMovie.php';

    $nextMovie = NextMovie::apiUrl(API_URL);
    $nextMovieData = $nextMovie->getData();

    $days = $nextMovie->getUntilMessage($nextMovieData["days_until"]);
    $days2 = $nextMovie->getUntilMessage($nextMovieData["following_production"]["days_until"]);
?>

<?php renderTemplate('index', array_merge(
    $nextMovieData,
    ['days' => $days ],
    ['days2' => $days2 ],
)) ?>