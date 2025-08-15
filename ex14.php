 <html>
    <head></head>
 <body>
    <div style="text-align:right; justify-content:right; position:rtl">
        <pre>عدد مورد نظر را وارد کنید</pre>
        <form method="post">
            <input type="text" name="number" id="number" style="margin:10px;">
            <label for="number"></label><br>
            <input type="submit" name="submit" id="submit" value="send." style="margin:10px;">
            <label for="submit"></label>
        </form>
    </div>
</body>
</html>
<?php
$y=$_POST["number"];
$x= 0;
$n=1;
$a=$x+$n;
while ($a<$y) {
    $x=$n;
    $n=$a;
    $a=$x+$n;
    echo $x .'<br>';}
    ?>
