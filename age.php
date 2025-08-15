<html>

<head></head>

<body>
<body>
    <div style="text-align:right; justify-content:right; position:rtl">
        <form method="post">
                        <label for="age">سال تولد خود را وارد کنید</label>
            <input type="text" name="age" id="age" style="margin:10px;"><br>
            <input type="submit" name="submit" id="submit" value="send." style="margin:10px;">
            <label for="submit"></label>
        </form>
    </div>
</body>

</html>
<?php 
$birth = $_POST["age"];
$age = 1404 - $birth;
if ($age > 18) {
    echo 'شما میتوانید رای دهید';
} else {
    echo 'شما نمیتوانید رای دهید';
} 
