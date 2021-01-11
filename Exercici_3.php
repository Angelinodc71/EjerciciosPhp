<html>
<head>
</head>
<body>
<table border="1">
   <?php
   $numA=50;
   $i=1;
   
   echo "<tr>";
   echo "<td bgcolor='6666ff'/>";
   while ($numA<=60) {
      echo "<td bgcolor='b3b3ff'>$numA</td>";
      $numA++;
   }
   echo "</tr>";

   while ($i<=10) {
      echo "<tr>";
      echo "<td bgcolor='b3b3ff'>$i</td>";
      $i2=1;
      $numA=50;
      while($i2<=11){
         if ($i%2==0) {
            echo "<td bgcolor='ffcc99'>";
         }
         else {
            echo "<td bgcolor='ffff99'>";
         }

         if ($numA%$i==0) {
            echo "*";
         }
         else {
            echo "-";
         }

         echo "</td>";
         $i2++;
         $numA++;
      }
      $i++;
      echo "</tr>";
   }

   ?>
</table>

</body>
</html>