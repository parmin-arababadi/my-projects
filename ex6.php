<html>
    <head></head>
    <body>
        <div style="margin: 10px; text-align:right; justify-content: right; position: rtl;">
            <form method="post">
                <label for="first">عدد اول را وارد کنید</label>
                <input type="text" id="first" name="first" style="margin: 10px;"><br>
                 <label for="second">عدد دوم را وارد کنید</label>
                <input type="text" id="second" name="second" style="margin: 10px;"><br>
                 <label for="third">عدد سوم را وارد کنید</label>
                <input type="text" id="third" name="third" style="margin: 10px;"><br>
                <input type="submit" id="submit" name="submit">
                <label for="submit"></label>
            </form>
        </div>
    </body>
</html>
<?php
$a = $_POST["first"];
$b = $_POST["second"];
$c = $_POST["third"];
if ($a > $b && $a > $c) {
    echo $a . '<br>بزرگترین';
} elseif ($b > $a && $b > $c) {
    echo $b . 'بزرگترین<br>';
} else {
    echo $c . 'بزرگترین<br>';
}
?>