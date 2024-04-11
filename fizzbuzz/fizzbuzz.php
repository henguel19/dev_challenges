<?php
  function isMultiplo($number, $multiplo) {
    return !($number % $multiplo);
  }
  
  function getNumberMessage($number) {
    $messageMapping = [
      "3" => "fizz",
      "5" => "buzz",
      "both" => "fizzbuzz"
    ];
    
    if (isMultiplo($number, 3) && isMultiplo($number, 5)) {
      return $messageMapping["both"];
    } elseif (isMultiplo($number, 3) || isMultiplo($number, 5)) {
      $multiplo = isMultiplo($number, 3) ? "3" : "5";
      return $messageMapping[$multiplo];
    } else {
      return $number;
    }
  }
  
  for ($number = 1; $number <= 100; $number++) {
    echo getNumberMessage($number) . "<br/>";
  }
?>
