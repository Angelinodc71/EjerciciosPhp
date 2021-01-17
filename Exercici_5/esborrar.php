<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dades</title>

        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }
        </style>

    </head>
    <body>
        <?php
            
            session_start();
            if(isset($_SESSION['name']) && isset($_SESSION['name2'])) {
                $_SESSION["name"] = NULL;
                $_SESSION["name2"] = NULL;
                echo "Dades esborrades amb èxit.<br><br>";
            } else if (isset($_SESSION['name'])) {
                $_SESSION["name"] = NULL;
                echo "Nom esborrat amb èxit.<br><br>";
            } else if (isset($_SESSION['name2'])) {
                $_SESSION["name2"] = NULL;
                echo "name2 esborrats amb èxit.<br><br>";
            } else {
                echo "Escriu dades per esborrar.<br><br>";
            } 

            echo '<a href="index.php">Inici</a>';
            
        ?>
    </body>
</html>
