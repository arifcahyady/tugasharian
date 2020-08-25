<?php
$n = 9;

for ($x = 0; $x < $n - 1; $x++) {
  if ($x%2 == 0) {
    continue;
  }
  echo  $x;
}
?>