<?php
// curl nos permite hacer diversas peticiones HTTP, como GET, POST, PUT, DELETE, etc.

declare(strict_types=1); // Definimos el modo estricto, para que las variables sean del tipo definido, y van arriba del todo

function renderTemplate(string $template, array $data = [])
{
    extract($data); // Extraemos los names del array asociativo y los convierte en variables

    require "templates/$template.php";
}

/* function apiUrl(string $apiUrl): array
{
    //File_get_contents nos permite hacer una petición GET, solo eso
    $result = file_get_contents($apiUrl);
    
    // Decodificamos el JSON recibido, y lo convertimos a un array asociativo
    $data = json_decode($result, true);

    return $data;
}

function getUntilMessage(int $days): string
{
    // Ponemos true, para evaluar la expresión y devolver el primer valor que sea verdadero
    return match (true){
        $days === 0 => "¡Hoy se estrena!",
        $days === 1 => "¡Mañana se estrena!",
        $days <= 7 => "Esta semana se estrena",
        $days <= 30 => "Este mes se estrena",
        default => "Quedan $days días para su estreno"
    };
} */