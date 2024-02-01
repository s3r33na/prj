<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="login.php" action="POST">
            <div class="field">
               <input type="text" name="stdID" id="stdID" required>
               <label for="stdID">your ID</label>
            </div>
            <div class="field">
               <input type="password" name="password" id="password" required>
               <label for="password">Password</label>
            </div>
            
            <button type="submit">submit</button>

</form>

<?php
$localhpst="localHost";
$username="root";
$password="";
$db_name="cr";
$flag=false;
$conn=mysqli_connect($localhpst, $username,$password,$db_name);
if($_SERVER["REQUEST_METHOD"]==("POST")){
  $sql="select * from student";
  $result=mysqli_query($conn,$sql);
  
  if($row=mysqli_num_rows()>0){
    while(mysqli_fetch_assoc($result)){
      if($_POST["stdID"]== $row["stdID"] && $_POST["password"]==$row["password"]){
      $flag=true;
      header('location:registration.php');
      }
    }

    if(!$flag){
        
      echo"error";
    }
  }
}
?>
</body>
</html>