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
        echo "<p>Nom Enregistrat:<b>".sessionNom()."</b></p>";

        echo '<a href="index.php">Inici</a>';

        function sessionNom() {
            session_start();
            $_SESSION["name"] = $_POST["name"];
            echo $_SESSION["name"];
        }
   ?>
</body>
</html>