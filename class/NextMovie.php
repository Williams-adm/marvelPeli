<?php

declare(strict_types=1);

class NextMovie
{
    #Class properties, define y asigna valores por defecto a las propiedades de la clase
    public function __construct(
        private string $title,
        private string $type,
        private string $poster_url,
        private string $overview,
        private string $release_date,
        private array $following_production,
        private int $days_until
    ){
    }

    public static function apiUrl(string $apiUrl): NextMovie
    {
        //File_get_contents nos permite hacer una petición GET, solo eso
        $result = file_get_contents($apiUrl);
        
        // Decodificamos el JSON recibido, y lo convertimos a un array asociativo
        $data = json_decode($result, true);

        return new self(
            $data["title"],
            $data["type"],
            $data["poster_url"],
            $data["overview"],
            $data["release_date"],
            $data["following_production"],
            $data["days_until"]
        );
    }

    public function getData()
    {
        return get_object_vars($this);
    }

    public function getUntilMessage(int $days): string
    {
        // Ponemos true, para evaluar la expresión y devolver el primer valor que sea verdadero
        return match (true) {
            $days === 0 => "¡Hoy se estrena!",
            $days === 1 => "¡Mañana se estrena!",
            $days <= 7 => "Esta semana se estrena",
            $days <= 30 => "Este mes se estrena",
            default => "Quedan $days días para su estreno"
        };
    }
}