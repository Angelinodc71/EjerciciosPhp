<?php

/*A*/

funcion1(1,1,1,1,1);

function funcion1($num1,$num2,$num3,$num4,$num5) {
    echo "<p><b>A) El resultat de la funció passant com a paràmetres $num1,$num2,$num3,$num4,$num5 és:</p></b>";
    echo $resultado = $num1 + $num2 + $num3 + $num4 + $num5;
}

/*B*/

$tmp = funcion2(2,5,1,8,10);
echo "<p>\$tmp = $tmp</p>";

function funcion2($num1,$num2,$num3,$num4,$num5) {
    echo "<p><b>B) \$tmp = El resultat de la funció passant com a paràmetres $num1,$num2,$num3,$num4,$num5</p></b>";
    return $num1 + $num2 + $num3 + $num4 + $num5;
}

/*C*/

$tmp =  funcion3(10,5);
echo "<p>\$volum = $tmp</p>";

//round() sirve para redondear y pow() para elevar un numero
function funcion3($alçada,$radi) {
    echo "<p><b>C) Radi = $radi / Alçada = $alçada: </b></p>";

    $volum = round(pi() * pow($radi,2) * $alçada, 3);
    return $volum;
}

/*D*/

const Debug = 1;

function funcion4($m) {   
    if (Debug == 1) {
        echo"<p style='border: ridge red 1px;'> <b>Debug</b>: <br>$m</br></p>";
    }
}
  
echo "<p><b> D) Debug: </b></p>";
funcion4("Missatge de prova de debug.");

?>