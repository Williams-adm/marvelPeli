<?php

include_once 'logica.php';

$result = apiUrl();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrenos Marvel</title>
    <!-- Centered viewport -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
    <style>
        :root {
            color-scheme: light dark;
        }

        body {
            display: grid;
            place-content: center;
        }

        article {
            max-width: 800px;
            width: 100%;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center; padding-top: 20px; padding-bottom: 20px">Próximos estrenos de Marvel</h1>

    <article style="margin-bottom: 40px;">
        <h2 style="margin-bottom: 40px;">
            Estreno próximo:
        </h2>

        <h3>
            <?= $result["title"] . " - " . $result["type"] ?>
        </h3>

        <img src="<?= $result["poster_url"] ?>" alt="poster de <?= $result["title"] ?>" width="400px" style="border-radius: 20px">

        <section>
            <div>
                <h4 style="margin-top: 20px;">
                    Descripción:
                </h4>
                <p>
                    <?= $result["overview"] ?>
                </p>
            </div>
        </section>
        <section style="margin-top: 40px;">
            <div>
                <h4>
                    Fecha de estreno:
                </h4>
                <p>
                    <?= $result["release_date"] ?>
                </p>
            </div>
        </section>
    </article>

    <article>
        <h2 style="margin-bottom: 40px;">
            Estreno siguiente:
        </h2>

        <h3>
            <?= $result["following_production"]["title"] . " - " . $result["following_production"]["type"] ?>
        </h3>

        <img src="<?= $result["following_production"]["poster_url"] ?>" alt="poster de <?= $result["title"] ?>" width="400px" style="border-radius: 20px">

        <section>
            <div>
                <h4 style="margin-top: 20px;">
                    Descripción:
                </h4>
                <p>
                    <?= $result["following_production"]["overview"] ?>
                </p>
            </div>
        </section>
        <section style="margin-top: 40px;">
            <div>
                <h4>
                    Fecha de estreno:
                </h4>
                <p>
                    <?= $result["following_production"]["release_date"] ?>
                </p>
            </div>
        </section>
    </article>
</body>

</html>