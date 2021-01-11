<html>
<head>
   <title>Tablas de multiplicar.</title> 
</head>
<body>
<form action="Exercici_4.php" method="post">
  <label for="fname">Nom</label>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Cognom</label>
  <input type="text" id="lname" name="lname"><br>
  <label for="passwd">Passwd</label>
  <input type="text" id="passwd" name="passwd"><br>

  <label for="user">Usuari</label>  
  <input type="radio" id="profe" name="user" value="profe" checked>
  <label for="male">Profe</label>
  <input type="radio" id="alumne" name="user" value="alumne">
  <label for="female">Alumne</label><br>

  <input type="file" name="archivo"><br>

  <textarea name="texto" rows="4" cols="40" placeholder="((Comentaris de l'usuari))"></textarea><br>

  <input type="checkbox" name="checkbox" id="checkbox" checked>
  <label>Es actiu</label><br>

  <select name="menu">
    <?php
    $edad=18;
    while ($edad<=99) {
        echo "<option value='$edad'>$edad</option>";
        $edad++;
    }
    ?>
  </select><br>
  
  <input type="hidden" id="oculto" name="oculto" value="prova">  

  <input type="reset" value="Esborrar">
  <input type="submit" value="Submit">
</form>
<?php 

if (isset($fname)){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $passwd=$_POST['passwd'];
    
    $user=$_POST['user'];
    $archivo=$_POST['archivo'];
    $texto=$_POST['texto'];
    $menu=$_POST['menu'];
    $oculto=$_POST['oculto'];

    echo $fname;
}

?>
</body>
</html>