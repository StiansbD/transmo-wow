<?php
    date_default_timezone_set('Europe/Paris');
    $name = 'Transmo';
    $date = date("Y-m-d H:i:s");

    include './src/db.php';
?>
<html>
    <head>
        <title>World of Warcraft</title>
    </head>
    <body>
        <link rel="stylesheet" href="./vendor/bulma/css/bulma.css">

        <div class="container">
            <div class="section">
                <div class="block">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-48x48">
                                        <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4"><?php print $name; ?></p>
                                    <p class="subtitle is-6">@<?php print strtolower($name); ?></p>
                                </div>
                            </div>

                            <div class="content">
                                Quoi comment ça ?? <a>@toutou</a>.
                                <a href="#">#css</a> <a href="#">#responsive</a>
                                <br>
                                <time datetime="2016-1-1"><?php print $date ?></time>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>