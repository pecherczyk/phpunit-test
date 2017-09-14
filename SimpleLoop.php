<?php

function policzIloraz($x, $y){
  if($y == 0){
   return "Nie wolno dzielić przez 0";
   }
  return $x / $y;
}

for ($i=0; $i < 10; $i++) {
  $a = rand(-10, 10);
  $b = rand(-10, 10);
  $x = policzIloraz($a, $b);
  echo $x."<br />".PHP_EOL;
}

