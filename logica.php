<?php

const API_URL = 'https://whenisthenextmcufilm.com/api';

function apiUrl():array
{
    //Inicializando una sesión cURL; ch= cURL handle
    $ch = curl_init(API_URL);
    
    //Indicar que deseamos recibir el resultado de la petición como text y no mostrarlo en pantalla
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    //Guardamos el resultado de la petición en una variable
    $result = curl_exec($ch);
    
    // Decodificamos el JSON recibido, y lo convertimos a un array asociativo
    $data = json_decode($result, true);
    
    // Cerramos la sesión cURL
    curl_close($ch);

    return $data;
}
