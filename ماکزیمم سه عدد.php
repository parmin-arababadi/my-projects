<?php
$a = 10;
$b = 11;
$c = 1;
if ($a > $b && $a > $c) {
    echo $a . '<br>بزرگترین';
} elseif ($b > $a && $b > $c) {
    echo $b . 'بزرگترین<br>';
} else {
    echo $c . 'بزرگترین<br>';
}
?>