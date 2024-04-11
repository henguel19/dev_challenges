<?php
  $fibonacciSerie = [];
  
  function fillFibonacciSerie(&$seriesContainer) {
    if (count($seriesContainer) == 0) {
      $seriesContainer[] = 0;
      $seriesContainer[] = 1;
    }
    
    for ($index = count($seriesContainer); $index < 50; $index++) {
      $seriesContainer[$index] = $seriesContainer[$index-2] + $seriesContainer[$index-1];
    }
  }
  
  fillFibonacciSerie($fibonacciSerie);
  print_r($fibonacciSerie);
?>
