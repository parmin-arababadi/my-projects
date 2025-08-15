<html>

<head></head>

<body>
<body>
    <div style="text-align:right; justify-content:right; position:rtl">
        <form method="post">
                        <label for="nom">عدد اول را وارد کنید</label>
            <input type="text" name="nom" id="nom" style="margin:10px;"><br>
                        <label for="nom2">عدد دوم را وارد کنید</label>
            <input type="text" name="nom2" id="nom2" style="margin:10px;"><br>
            <input type="submit" name="submit" id="submit" value="send." style="margin:10px;">
            <label for="submit"></label>
        </form>
    </div>
</body>

</html>
<?php 
  $a=$_POST["nom"];
  $b=$_POST["nom2"];
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