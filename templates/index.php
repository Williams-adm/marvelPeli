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
    <?php require_once 'styles.php' ?>
</head>

<body>
    <h1 style="text-align: center; padding-top: 20px; padding-bottom: 20px">Próximos estrenos de Marvel</h1>

    <article style="margin-bottom: 40px;">
        <h2>
            Estreno próximo:
        </h2>

        <h3>
            <?= $title . " - " . $type ?>
        </h3>

        <img src="<?= $poster_url ?>" alt="poster de <?= $title ?>" width="400px">

        <section>
            <div>
                <h4 style="margin-top: 20px;">
                    Descripción:
                </h4>
                <p>
                    <?= $overview ?>
                </p>
            </div>
        </section>
        <section style="margin-top: 40px;">
            <div>
                <h4>
                    Fecha de estreno:
                </h4>
                <p>
                    <?= $release_date ?> - <?= $days ?>
                </p>
            </div>
        </section>
    </article>

    <article>
        <h2>
            Estreno siguiente:
        </h2>

        <h3>
            <?= $following_production["title"] . " - " . $following_production["type"] ?>
        </h3>

        <img src="<?= $following_production["poster_url"] ?>" alt="poster de <?= $following_production["title"] ?>" width="400px">

        <section>
            <div>
                <h4 style="margin-top: 20px;">
                    Descripción:
                </h4>
                <p>
                    <?= $following_production["overview"] ?>
                </p>
            </div>
        </section>
        <section style="margin-top: 40px;">
            <div>
                <h4>
                    Fecha de estreno:
                </h4>
                <p>
                    <?= $following_production["release_date"] ?> - <?= $days2 ?>
                </p>
            </div>
        </section>
    </article>
</body>

</html>