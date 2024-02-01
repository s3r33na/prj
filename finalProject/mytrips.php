<?php
session_start();
if( ! isset($_SESSION["username"]) ){  
  die('Only  logged in users can access this page!'); 
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
include 'DBConnection.php';
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
$uid = $_SESSION["id"];
$sql = "SELECT * FROM registrations WHERE UID = $uid";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        echo "<section class='container'> <div class='table'>";
        echo "<table><tr>";

        // Use foreach to dynamically generate table headers
        foreach ($row as $key => $value) {
            echo "<th>" . ucwords($key) . "</th>";
        }

        echo "</tr>";

        // Reset the result pointer to the beginning
        mysqli_data_seek($result, 0);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
            <td>".$row["id"]."</td>
            <td>".$row["TID"]."</td>
            <td>".$row["TID"]."</td>
            <td>".$row["username"]."</td>
            <td>".$row["email"]."</td>
            <td>".$row["num"]."</td>
            </tr>";
        }

        echo "</table>";
    } else {
        echo "No records found.";
    }
} else {
    echo "Error in SQL query: " . mysqli_error($conn);
}
?>

</body>
</html>