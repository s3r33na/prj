<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
var_dump($_POST);
$sname= "localhost";

$uname= "root";

$password = "";

$db_name = "testDB";
$name=$_POST["FName"];
$age=$_POST["age"];

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";  

}
$sql=" insert into student(stdN,stdAge) values('$name','$age')";
$result= mysqli_query($conn,$sql);

if($result){
    echo "insetred";
}
var_dump($_POST);
$local="";
$root="";
$pass="";
$dbname="";



?>

</body>
</html>
