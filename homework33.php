<?php
$n = 100;
$fib = array(0, 1); 
echo "i\tfi\tfi+1\tfi+2/fi+1\n";
echo "1\t1\t1\t-\n";
for($i=2; $i<=$n; $i++)
  $fib[$i] = $fib[$i-1] + $fib[$i-2];
  $prop = ($fib[$i] + $fib[$i-1]) / $fib[$i-1]; 
  echo $i."\t".$fib[$i]."\t".$fib[$i-1]."\t".number_format($prop, 6)."\n";
  if($fib[$i] > $n) break; 