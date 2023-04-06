<?php

$num1 = 0;
$num2 = 1;

echo "$num1 \n";
echo "$num2 \n";

while(($num3 = $num1 + $num2) < 10000) {

   echo $num3 = $num1 + $num2;

   $num1 = $num2;
   $num2 = $num3;

   echo "\n";
}


   echo "$num3 \n";
?>