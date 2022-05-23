<?php
    // info de connexion à mysql (phpmyadmin)
    const DB_SERVER = "localhost";
    const DB_USER = "root";
    const DB_PASSWORD = "";

    // connection à la base de données
    $link = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD);

    if ($mysqli->connect_errno) 
    {
        print'
            <script>
                console.log("Erreur de la connexion à MySQL '. $mysqli -> connect_error .'");
            </script>
        ';
        exit();
    }

    print '
        <script>
            console.log("Connexion à MySQL réussie !");
        </script>
    ';

    if ($result = $mysqli->query("SELECT * FROM `transmo`"))
    {
        while ($row = $result->fetch_row())
        {
            printf(
                "%s (%s)\n", $row[0], $row[1]
            );
            $result->free_result();
        }
    }
    $mysqli->close();

?>
