<?php  
// require_once "connection.php";
// $students=$pdo->query("select first_name,last_name from students");
// $x=$students->fetchAll();
// print_r ($x);

// $new_student=$pdo->prepare("insert into students(first_name,last_name,father_name,national_code,birth_date,
// phone_number,address) value (:firstName,'arababadi','ammin','2982389894','2011-5-12','09916936013','kerman')");
// // $new_student->execute(["firstName"=>"nargesss"]);
$plainPassword = "1234";
$hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);
echo $hashedPassword;
echo '<br>';
$hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);
echo $hashedPassword;
echo '<br>';
$hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);
echo $hashedPassword;
echo '<br>';
$x=password_verify('1234',$hashedPassword);
echo $x;
if(password_verify('1234',$hashedPassword)) { 
    echo 'true';
}
else{
    echo 'false';
}

?>