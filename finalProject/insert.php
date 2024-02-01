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

<style>
    html, body {
      min-height: 100%;
      
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 32px;
      color: #fff;
      z-index: 2;
     
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      max-width: 1200px;
      width: 100%;
      flex-direction: column;
  
      margin: 50px auto;
      padding: 50px 0px;

      }
      form {
      width: 80%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0 #3647df;
       
      }
      .banner {
      position: relative;
      height: 210px;
      background-image: url("s.jpg");     
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.1); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, textarea, select {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #3647df;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #3647df;
      color: #3647df;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 0;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type="time"]::-webkit-inner-spin-button {
      margin: 2px 22px 0 0;
      }
      input[type=radio], input.other {
      display: none;
      }
      input[type="checkbooks"]{

      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 10px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      label.radio:before {
      content: "";
      position: absolute;
      top: 2px;
      left: 0;
      width: 15px;
      height: 15px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      #radio_5:checked ~ input.other {
      display: block;
      }
      input[type=radio]:checked + label.radio:before {
      border: 2px solid #3647df;
      background: #3647df;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 7px;
      left: 5px;
      width: 7px;
      height: 4px;
      border: 3px solid #fff;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      .btn {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #3647df;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      .btn:hover {
      background: #3647df;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
    </style>
</head>
<body>
<div class="testbox">
<span> add a new card for trips</span> 
    
            <form action="insert.php" method="post">
            <div class="field">
                <label for="TripID"><b></b></label>
                <input type="text" name="TripID" id="TripID" placeholder="TripID" required>
                </div>

                <div class="item">
                <label for="Ttile"><b></b></label>
                <input type="text" name="Title" id="Ttile" placeholder="Ttile " >
                </div>

                <div class="item">
                <label for="StartDate"><b>start date</b></label>
                <input type="date" placeholder="StartDate" name="StartDate" >
                </div>


                <div class="item">
                <label for="endDate"><b>end date</b></label>
                <input type="date" placeholder="endDate " name="endDate" id="endDate" >
                </div>
                <div class="item">
                <label for="price"></label>  
                        <input type="text" class="form-control"
                            id="price" name="price" placeholder="price" >
                </div>
                <div class="field">
                <label for="BusNumber"></label>  
                        <input type="text" class="form-control"
                            id="BusNumber" name="BusNumber" placeholder="BusNumber" >
                </div>
                <div class="item">
                <label for="numOfActivites"></label>  
                        <input type="text" class="form-control"
                            id="numOfActivites" name="numOfActivites" placeholder="numOfActivites" >
                </div>
                <div class="item">
                <label for="tripImg"></label>  
                        <input type="text" class="form-control"
                            id="tripImg" name="tripImg" placeholder="Img url" >
                </div>
                <div class="item">
                <label for="destination"></label>  
                        <input type="text" class="form-control"
                            id="destination" name="destination" placeholder="destination" >
                </div>
                

                <br>
                <label>
                <input type="checkbox" name="delete"> delete
                <br>
                <input type="checkbox" name="add" id="">Add a new Trip
                </label>
            
                    <div class="field">
                    <input type="submit" value = "submit" class="submit">

                    </div>
            </form>
    </div>

                    <?php
                   
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        $TripID = $_POST["TripID"];
                        $Title = $_POST["Title"];
                        $StartDate = $_POST["StartDate"];
                        $endDate = $_POST["endDate"];
                        $price = $_POST["price"];
                        $BusNumber = $_POST["BusNumber"];
                        $numOfActivites = $_POST["numOfActivites"];
                        $tripImg = $_POST["tripImg"];
                        $destination = $_POST["destination"];
                    
                        if (isset($_POST["add"])) {
                            // Use prepared statement to avoid SQL injection
                            $sql = "INSERT INTO trips VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                            $stmt = mysqli_prepare($conn, $sql);
                    
                            // Bind parameters
                            mysqli_stmt_bind_param($stmt, "isssdidsi", $TripID, $Title, $StartDate, $endDate, $price, $BusNumber, $numOfActivites, $tripImg, $destination);
                    
                            // Execute statement
                            $result = mysqli_stmt_execute($stmt);
                    
                            if ($result) {
                                echo "<script>location.href = 'index.php';</script>";
                            } else {
                                echo "Error: " . mysqli_error($conn);
                            }
                    
                            mysqli_stmt_close($stmt);

                            

                        }elseif(isset($_POST["delete"])){
                           
                                $TripID = $_POST["TripID"];
                                $sql = "DELETE FROM trips WHERE TripsID = ?";
                              
                                $stmt = mysqli_prepare($conn, $sql);

                                // Bind the TripID parameter
                                mysqli_stmt_bind_param($stmt, "i", $TripID);
                            
                                // Execute the statement
                                if (mysqli_stmt_execute($stmt)) {
                                    echo "Record deleted successfully.";
                                } else {
                                    echo "Error deleting record: " . mysqli_error($conn);
                                }
                    }
                }
            
                    ?>
</body>
</html>