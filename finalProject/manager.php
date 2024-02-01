<?php
session_start();
include 'DBConnection.php';
if (!isset($_SESSION['user']['isAdmin']) || $_SESSION['user']['isAdmin'] !== true) {
    echo "Insufficient access privileges. You must be an admin to access this page.";
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php

include_once ("DBConnection.php");
echo "<h1>trips </h1> ";
  $query= "SELECT * FROM trips";
  $result=mysqli_query($conn,$query);

  echo "<html><head><style>
        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            font-size:16px;
           
            margin-top: 20px;
            max-width:1000px;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background: linear-gradient(48deg,rgb(174,181,254) 0%, rgb(215,214,255) 93%);
        }
       



      </style></head><body>";
      
if(mysqli_num_rows($result)>0){

echo"<section class='container'> 	<div class='table'>";
    echo "<table><tr>";

    // Use foreach to dynamically generate table headers
    foreach ($result->fetch_assoc() as $key => $value) {
        echo "<th>" . ucwords($key) . "</th>";
    }
    
    echo "</tr>";
  while($row = mysqli_fetch_array($result))
   {
    echo "<tr>
    <td>".$row["TripsID"]."</td>
    <td>".$row["title"]."</td>
    <td>".$row["StartDate"]."</td>
    <td>".$row["endDate"]."</td>
    <td>".$row["price"]."</td>
    <td>".$row["BusNumber"]."</td>
    <td>".$row["numOfActivites"]."</td>
    <td>".$row["tripImg"]."</td>
    <td>".$row["destination"]."</td>
  </tr>";
       
    }
    echo "</tr>"; 
    }
   echo "</table>";
   echo "</div> </section> ";


   echo "<h1>users </h1> ";
   $query= "SELECT * FROM users";
   $result=mysqli_query($conn,$query);
   
   if(mysqli_num_rows($result)>0){

    echo"<section class='container'> 	<div class='table'>";
        echo "<table><tr>";
    
        // Use foreach to dynamically generate table headers
        foreach ($result->fetch_assoc() as $key => $value) {
            echo "<th>" . ucwords($key) . "</th>";
        }
        
        echo "</tr>";
      while($row = mysqli_fetch_array($result))
       {
        echo "<tr>
        <td>".$row["id"]."</td>
        <td>".$row["Fname"]."</td>
        <td>".$row["Lname"]."</td>
        <td>".$row["username"]."</td>
        <td>".$row["Email"]."</td>
        <td>".$row["password"]."</td>
     
      </tr>";
           
        }
        echo "</tr>"; 
        }
       echo "</table>";
       echo "</div> </section> ";
    
    
    echo "<h1>registrations </h1> ";
       $query= "SELECT * FROM registrations";
       $result=mysqli_query($conn,$query);
       
       if(mysqli_num_rows($result)>0){
    
        echo"<section class='container'> 	<div class='table'>";
            echo "<table><tr>";
        
            // Use foreach to dynamically generate table headers
            foreach ($result->fetch_assoc() as $key => $value) {
                echo "<th>" . ucwords($key) . "</th>";
            }
            
            echo "</tr>";
          while($row = mysqli_fetch_array($result))
           {
            echo "<tr>
            <td>".$row["id"]."</td>

            <td>".$row["TID"]."</td>
            <td>".$row["TID"]."</td>
            <td>".$row["username"]."</td>
            <td>".$row["email"]."</td>
            <td>".$row["num"]."</td>
         
          </tr>";
               
            }
            echo "</tr>"; 
            }
           echo "</table>";
           echo "</div> </section> ";
        
        
        
echo "</body></html>";

?>
</body>
</html>