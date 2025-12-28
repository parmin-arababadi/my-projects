<html>
<head>
    <title>discount</title>
</head>
<body>
    <form method="POST">
<div style="text-align: right; ">
     <label for="discount" style="margin:10px;">مقدار تخفیف را وارد کنید <br></label>
    <input type="text" name="discount" id="discount" style="margin:5px;">

    <label for="price" style="margin:10px;"><br>قیمت را وارد کنید<br></label>
    <input type="text" name="price" id="price" style="margin:10px;"><br>

    <input type="submit" name="submit" id="submit" value="ارسال" style="margin:10px;">
    <label for="submit"></label>

    </div>
    </form>
</html>
<?php
$discount=$_POST["discount"];
$price=$_POST["price"];
function discount($price,$discount):int{
    $result=$price-($price*$discount/100);
    return $result;
}
$lastprice=discount($price,$discount);
echo 'the last price is '.$lastprice;
?>