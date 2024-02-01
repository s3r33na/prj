<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include'DBConnection';
    if (isset($_POST["isManager"]))
        {
            $manager=$_POST[""];
            $managerusername=$_POST["username"];
            $managerPassword=$_POST["password"];
            $sql="insert into adminstror values= $manager,$managerusername,$managerPassword";
            $result=mysqli_query($conn,$sql);
        }
        else{
            

        }

    ?>
</body>
</html>