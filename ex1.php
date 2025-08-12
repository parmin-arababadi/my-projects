<html>

<head>
    <title>square</title>
</head>

<body>
    <div style="text-align:right; justify-content:right; position:rtl">
        <pre>اندازه ی ضلع مربع مورد نظر را بنویسید</pre>
        <form method="get">
            <input type="text" name="square" id="square" style="margin:10px;">
            <label for="square"></label><br>
            <input type="submit" name="submit" id="submit" value="send." style="margin:10px;">
            <label for="submit"></label>
        </form>
    </div>
</body>

</html>
<?php
$_GET["square"];
$side = $_GET["square"];
$p = $side * 4;
$s = $side * $side;
echo $s . '**' . $p . '<br>';
?>