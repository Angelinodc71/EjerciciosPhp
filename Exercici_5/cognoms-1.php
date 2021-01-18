<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cognom-1</title>

        <style>
            * {
                font-family: Arial, Helvetica, sans-serif;
            }
        </style>
    </head>

    <body>

        <?php 
            session_start(); 
            if(isset($_SESSION["name2"])) echo "<p>Cognoms anteriors: <b>".$_SESSION["name2"]."</b></p>"; 
        ?>

        <p>Escriu els teus cognoms: </p>

        <form action="cognoms-2.php" method="post">
            <b><label for="name2">Cognoms:</label></b>  
            <input required autofocus type="text" id="name2" name="name2"><br><br>
            <input type="submit" value="Guardar">
            <input type="reset" value="Esborrar">
        </form><br>

        <a href="index.php">Inici</a>
        
    </body>
</html>