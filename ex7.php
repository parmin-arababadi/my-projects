<html>
    <head></head>
    <body>
        <div style="margin: 10px; text-align:right; justify-content: right; position: rtl;">
            <form method="post">
                <label for="first">عدد اول را وارد کنید</label>
                <input type="text" id="first" name="first" style="margin: 10px;"><br>
                 <label for="second">عدد دوم را وارد کنید</label>
                <input type="text" id="second" name="second" style="margin: 10px;"><br>
                <input type="submit" id="submit" name="submit">
                <label for="submit"></label>
            </form>
        </div>
    </body>
</html>
<?php
$a =(int)$_POST["first"];
$b =(int)$_POST["second"];
if ($a > $b) {
    $عددبزرگتر = $a;
     $عددکوچکتر = $b;
} else {
    $عددبزرگتر = $b;
     $عددکوچکتر = $a;
}
if ($عددکوچکتر==0) {echo 'نقسیم امکان پذیر نیست';} 
else{
$n = $عددبزرگتر % $عددکوچکتر;
if ($n == 0) {
    echo 'عدد کوچکتر مقسوم علیه عدد بزرگ است<br>';
} else {
    echo 'عدد کوچکتر مقسوم علیه عدد بزرگ نیست <br>';
}
}
?>