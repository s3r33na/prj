<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="registration.php" method="post">

        
        <label for="stdID">Course ID:</label>
        <input type="text" id="stdID" name="stdID" required>
        <label for="cid">Course ID:</label>
        <input type="text" id="cid" name="cid" required>
        <br>
        <button type="submit">Register</button>
    </form>

    <h3>Available Courses</h3>
    <table border="1">
        <tr>
            <th>Course ID</th>
            <th>Course Name</th>
        </tr>
        <?php
       $localhpst="localHost";
       $username="root";
       $password="";
       $db_name="cr";
       $flag=false;
        $conn=mysqli_connect($localhpst, $username,$password,$db_name);
        
        $sql = "select * from courses";
        $sql1="select * from student"
        $result=mysqli_query($conn,$sql,$sql1);

        if($_SERVER["REQUEST_METHOD"]==("POST")){
            if($_POST["stdID"]== $row["stdID"] && $_POST["cid"]==$row["cid"]){
                $sql2="insert into registrations values($stdID,$cid) ";
                $result=mysqli_query($conn,$sql2);
            }
        }
        


       /* while (mysqli_num_rows($result)>0) {
            echo "<table border=1>";
            while($row=mysqli_fetch_assoc($result)){


            echo"<tr>";
            foreach($row as $key => $value){
                echo"<td>";
                echo $value;
                echo"</td>";
            }
            echo"</tr>";

        }
        echo "</table>";

    }*/

        ?>
    </table>
</body>
</html>