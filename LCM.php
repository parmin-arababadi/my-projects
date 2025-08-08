<?php 
  $a=10;
  $b=55;
  $x=1;
  $y=1;
  $lcm=0;
  if ($a==0 || $b==0)  {$lcm=0;}
  else {  $xa=$x*$a;
  $yb=$y*$b;
  while ($xa!=$yb) {
    if ($yb<$xa) {$y++; $xa=$x*$a; $yb=$y*$b;} 
    else {$x++; $xa=$x*$a; $yb=$y*$b;}
    $lcm=$xa;
  }
    echo $lcm .'<br>';
}
?>