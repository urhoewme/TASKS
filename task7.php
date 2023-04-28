<?php

function find_fibonacci(int $n): int {
  if ($n < 1) {
      return -1;
  }
  
  $prev = 1;
  $curr = 1;
  
  while (strlen((string)$curr) < $n) {
      $temp = $curr;
      $curr += $prev;
      $prev = $temp;
  }
  
  return $curr;
}

for ($i = 0; $i < 20; $i++) {
  echo find_fibonacci($i);
  echo "\n";
}

?>