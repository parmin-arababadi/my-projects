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
$a =$_POST["nom"];
$b =$_POST["nom2"];
$بزرگتر = 0;
$کوچکتر = 0;
if ($a > $b) {
    $کوچکتر = $b;
    $بزرگتر = $a;
} else {
    $کوچکتر = $a;
    $بزرگتر = $b;
}
if ($بزرگتر - $کوچکتر <= 1) {
    echo 'اعداد پشت هم هستند';
} else {
    $n = $کوچکتر + 1;
    $x = 1;
    while ($n < $بزرگتر) {
        $x = $x * $n;
        $n = $n + 1;
    }
    echo $x . '<br>';
}
?>