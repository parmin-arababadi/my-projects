<html>

<head></head>

<body>
    <div style="margin: 10px; text-align: right; justify-content: right; position: rtl;">
        <form method="post">
            <label for="first">اولین عدد مورد نظرتان را وارد کنید</label>
            <input type="text" id="first" name="first" style="margin :10px;"><br>
            <label for="first">دومین عدد مورد نظرتان را وارد کنید</label>
            <input type="text" id="second" name="second" style="margin :10px;"><br>
            <input type="submit" id="submit" name="submit" style="margin :10px;">
            <label for="submit"></label>
        </form>
    </div>
</body>

</html>
<?php
$a = $_POST["first"];
$b = $_POST["second"];
if ($a > $b) {
    echo '***' . $a . ' بزرگترین <br>';
} else {
    echo '***' . $b . 'بزرگترین <br>';
}
?>