<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nom-1</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
    
</head>

<body>

    
    <?php
        session_start();
        if(isset($_SESSION["name"])) echo "<p>Nom anterior: <b>".$_SESSION["name"]."</b></p>";
    ?>

    <p>Escriu el teu nom: </p>
    <form method="post" action="nom-2.php">
        <b><label for="name">Nom:</label></b>
        <input required autofocus type="text" id="name" name="name"><br><br>
        <input type="submit" value="Guardar">
        <input type="reset" value="Esborrar">
    </form><br>

    <a href="index.php">Inici</a>
    
</body>