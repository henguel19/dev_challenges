<?php
  function isPrimo($number) {
    $divisibleLimit = 2;
    $divisibleCounter = 0;
    for ($index = 1; $index <= $number; $index++) {
      if ($number % $index == 0) {
        $divisibleCounter++;
      }
      if ($divisibleCounter > $divisibleLimit) {
        break;
      }
    }

    return $divisibleCounter == $divisibleLimit;
  }
  
  for ($i = 1; $i <= 100; $i++) {
    if (isPrimo($i)) {
      echo $i . "<br/>";
    }
  }
?>
