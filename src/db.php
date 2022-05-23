<?php
    // info de connexion à mysql (phpmyadmin)
    const DB_SERVER = "localhost";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    const DB_NAME = "db_transmo";

    try 
    {
        // connection à la base de données
        $db = new PDO(
            'mysql: host='.DB_SERVER.
            ';dbname=' .DB_NAME.
            ';charset=utf8', DB_USER, DB_PASSWORD
        );

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        print '
            <script>
                console.log("Connexion à MySQL réussie !");
            </script>
        ';
    }
    catch (Exception $e)
    {
        die ('Error : '. $e->getMessage().'<br>');
    }
    


?>
