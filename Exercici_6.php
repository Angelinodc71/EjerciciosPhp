<html>
<head>
</head>
<body>
<h1>Cookies: Creació i destrucció</h1>
<?php

    //CREAR
    if (isset($_POST['created'])) {
        if (!empty($_POST["fname"])) {
            $fname=$_POST["fname"];
            setcookie("DANI",time() + $fname,time() + $fname);
            echo "Cookie creada. Es destruirà en $fname segons.<br>";
        }
        else {
            echo "Introduce los segundos porfa.";
        }
    }

    //COMPROVAR
    /*
        if (isset($_POST['checked'])) {
           if (isset($_COOKIE['cookie'])) {
            session_start();
            $segundos=date('s',($_SESSION['timeS']-(time()-$_SESSION['fname'])));
            if($segundos=="00") {
                echo "Cookie muerta";
                setcookie("cookie","f",time() - $_SESSION['fname']);
            }
            else {
                echo "Cookie creada. Es destruirà en $segundos segons.<br>";
            }
        }
    }
    */
    if(isset($_POST["checked"]) ){
        if(isset($_COOKIE["DANI"])){
            $tiempoRestante = $_COOKIE["DANI"] - time();
            if (!$tiempoRestante==NULL){
                echo "Cookie creada. Es destruirà en $tiempoRestante segons.<br>";
            }
            else {
                echo "Cookie expired. Crea una nueva cookie con el boton crear.";
            }
        }
        else {
            echo "Cookie expired. Crea una nueva cookie con el boton crear.";
        }
    }

    //DESTRUIR
    if (isset($_POST['destroyed'])) {
        if(isset($_COOKIE['DANI'])) {
            setcookie("DANI", time() - 3600);
            echo "Cookie destroyed. Crea una nueva cookie con el boton crear.";
        }
        else {
            echo "Cookie expired. Crea una nueva cookie con el boton crear.";
        }
    }

?>

<p>Tria una opció:</p>
<form action="Exercici_6.php" method="post">
<ul>
    <li>
        <label for="fname">Crear una cookie amb una duració de: </label>
        <input type="number" id="fname" name="fname" min="1" max="60">
        
        <label for="submit"> segons (entre 1 i 60) </label>
        <input type="submit" value="Crear" name="created">
    </li>
    <li>
        <label for="comprovar">Comprovar la cookie </label>
        <input type="submit" value="Comprovar" name="checked">
    </li>
    <li>
        <label for="comprovar">Destruir la cookie</label>
        <input type="submit" value="Destruir" name="destroyed">
    </li>
</ul>
</form>
</body>
</html>
