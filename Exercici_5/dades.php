<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dades</title>

        <style>
            * {
                font-family: Arial, Helvetica, sans-serif;
            }
        </style>

    </head>
    <body>
        <?php
            
            echo "<p>Nom: <b>";
            session_start();
            if(isset($_SESSION["name"])) echo $_SESSION["name"];
            echo "</b></p>";

            echo "<p>Cognoms: <b>";
                if(isset($_SESSION['name2'])) echo $_SESSION["name2"];
            echo "</b></p>";

            echo '<a href="index.php">Inici</a>';
            
        ?>
    </body>
</html>