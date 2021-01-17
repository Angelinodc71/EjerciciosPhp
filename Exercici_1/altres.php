<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Ejercicio 1-index</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    
    <?php
        include 'header.php';
        include 'nav.php';
        include 'aside.php';
    
   
    echo '<section>
            <h2>El VIDEO DEL NENG</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/watch?v=J_ub7Etch2U&list=RDfKopy74weus&index=3" allowfullscreen></iframe>
          </section>';
    
    
        include 'footer.php';
    ?>

  </body>
</html>