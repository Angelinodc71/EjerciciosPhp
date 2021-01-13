<html>
<head>
</head>
<body>
<h1>Cookies: Creació i destrucció</h1>
<?php
// set the cookies
setcookie("cookie[four]", "cookiefour", time()+60);
setcookie("cookie[three]", "cookiethree");
setcookie("cookie[two]", "cookietwo");
setcookie("cookie[one]", "cookieone");

// después de que la página se recargue, imprime
if (isset($_COOKIE['cookie'])) {
    foreach ($_COOKIE['cookie'] as $name => $value) {
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        echo "$name : $value <br />\n";
    }
}
if (isset($_POST['fname'])) {
    $fname=$_POST['fname'];
    echo "Cookie creada. Es destruirà en $fname segons.<br>";
    setcookie("cookie[four]", "cookiefour", time()-60);

}
else {
    echo "";
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
<?php
if (isset($_POST['destroyed'])) {
    $destroyed=$_POST['destroyed'];
    setcookie("cookie[three]", "cookiethree", time() - 3600);}
else {
    echo "";
}

?>

</form>
</body>
</html>
