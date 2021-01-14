<html>
<head>
</head>
<body>
<form method="post">
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

  <label for="activo">Es actiu</label>  
  <input type="checkbox" id="checkbox" name="activo" checked><br>

  <label for="file">Foto</label>    
  <input type="file" name="archivo"><br>

  <label for="menu">Edat</label>    
  <select name="menu">
    <?php
    $edad=18;
    while ($edad<=99) {
        echo "<option value='$edad'>$edad</option>";
        $edad++;
    }
    ?>
  </select><br>

  <label for="texto">Comentaris</label>    
  <textarea name="texto" rows="4" cols="40" placeholder="((Comentaris de l'usuari))"></textarea><br>
  
  <input type="hidden" id="oculto" name="oculto" value="prova">  

  <input type="reset" value="Esborrar">
  <input type="submit" value="Submit">
</form>
<?php

    if (isset($_POST['fname'],$_POST['lname'],$_POST['user'],$_POST['archivo'],$_POST['texto'],$_POST['menu'],$_POST['oculto'])) {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        // var_dump($_POST['passwd']);
        $passwd=$_POST['passwd'];
        $user=$_POST['user'];
        $archivo=$_POST['archivo'];
        $texto=$_POST['texto'];
        $menu=$_POST['menu'];
        $oculto=$_POST['oculto'];
        
        echo "POST[nom] = $fname<br>";
        echo "POST[cognom] = $lname<br>";
        if (!$passwd=="") {
            echo "POST[password] = ";
            echo md5($passwd);
        }
        else {
            echo "POST[password] = ";
        }
        echo "<br>POST[usuari] = $user<br>";
        
        if (isset($_POST['activo'])) {
            $activo=$_POST['activo'];
            echo "POST[actiu] = on<br>";
        }
        else {
            echo "POST[actiu] = off<br>";
        }

        echo "POST[foto] = $archivo<br>";
        echo "POST[edat] = $texto<br>";
        echo "POST[comentaris] = $menu<br>";
        echo "POST[ocult] = $oculto<br>";
    }


?>
</body>
</html>