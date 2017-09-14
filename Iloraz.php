<?php

class Iloraz
{
  public function dziel($a, $b)
  {
    if ($b == 0) {
      return "Nie wolno dzielić przez 0";
    }

    return $a / $b;
  }
}
