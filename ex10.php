<html>
    <head></head>
<body>
    <div style="text-align:right; justify-content:right; position:rtl">
        <pre>عدد مورد نظر را وارد کنید</pre>
        <form method="post">
            <input type="text" name="nom" id="nom" style="margin:10px;">
            <label for="nom"></label><br>
            <input type="submit" name="submit" id="submit" value="send." style="margin:10px;">
            <label for="submit"></label>
        </form>
    </div>
</body>

</html>

<?php 
$a =$_POST["nom"];
$sum = 0;
for ($x = 1;$x <= $a;$x++) {
    $sum = $sum + $x;
}
echo $sum . '<br>';
?>