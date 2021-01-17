<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nom-2</title>

        <style>
            * {
                font-family: Arial, Helvetica, sans-serif;
            }
        </style>
        
    </head>

    <body>
        <?php 

        echo "<p>Cognoms Enregistrats: <b>".sessionNom2()."</b></p>";
        echo '<a href="index.php">Inici</a>';

        function sessionNom2 () {
            session_start();
            $_SESSION["name2"] = $_POST["name2"];
            echo $_SESSION["name2"];
        }
        ?>
    </body>
</html>