<html>
    <head></head>
    <body><div style="text-align: right; justify-content: right; position: rtl;">
        <pre>کیلومتر مورد نظرتان را وارد کنید</pre> 
        <form method="post">
            <input type="text" id="km" name="km" style="margin: 10px;">
            <label for="km"></label><br>
            <input type="submit" id="submit" name="submit" value="send" style="margin: 10px;">
            <label for="submit"></label>
        </form>
        </div>
    </body>
</html>
<?php
$km = $_POST["km"];
$m = $km * 1000;
echo $m . '<br>';
?>