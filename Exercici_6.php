<html>
<head>
</head>
<body>
<h1>Cookies: Creació i destrucció</h1>
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
<?php
// después de que la página se recargue, imprime

    if (isset($_POST['fname'])) {
        $fname=$_POST['fname'];
    }
    
    //CREAR
    if (isset($_POST['created'])) {
        echo "Cookie creada. Es destruirà en $fname segons.<br>";
        $timeS=date('s',time());
        session_start();
        setcookie("cookie","f",time() + $fname);
        $_SESSION['fname']=$_POST['fname'];
        $_SESSION['timeS']=$timeS;
    }
    else {
        echo "";
    }

    //COMPROVAR
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

    //DESTRUIR
    if (isset($_POST['destroyed'])) {
        session_start();
        setcookie("cookie","f",time() - $_SESSION['fname']);
        echo "Cookie destruida";
    }
    else {
        echo "";
    }

?>

</form>
</body>
</html>
