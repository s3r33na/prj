<?php
session_start();
if( ! isset($_SESSION["username"]) ){  
  die('Only  logged in users can access this page!'); 
  } 

  if (!isset($_SESSION['user']['isAdmin']) || $_SESSION['user']['isAdmin'] !== false) {
    echo "Insufficient access privileges. You must be an user to access this page.";
    exit();
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Entertainment Booking Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
      background-image: url("pics/sea2.jpg");     
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
      <form action="Booknow.php" method="POST">
        <div class="banner">
          <h1>Book Now</h1>
        </div>
      
        
       
        <div class="item">
          <p>Contact Person</p>
          
          <div class="name-item">
            <input type="text" name="username" placeholder="First" value="<?php echo $_SESSION['username']; ?>" />
            <input type="text" name="number" placeholder="Your number"/>
          </div>
        </div>
        <div class="item">
          <p>Contact Email</p>
          <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>"/>
        </div>
      
        <div class="item">
          <p>Trip ID</p>
          <input type="text" name="TID"/>
        </div>
        <div class="item">
          <p>Your id</p>
          <input type="text" name="UID" value="<?php echo $_SESSION['id']; ?>">
        </div>
        
        <div class="question">
          <p>Have you ever tried us?</p>
          <div class="question-answer">
            <div>
              <input type="radio" value="none" id="radio_1" name="recorded" />
              <label for="radio_1" class="radio"><span>Yes</span></label>
            </div>
            <div>
              <input type="radio" value="none" id="radio_2" name="recorded" />
              <label for="radio_2" class="radio"><span>No</span></label>
            </div>
          </div>
        </div>
        <div class="btn-block">
          <input type="submit" value="Submit" class="btn">
        </div>
      </form>
    </div>

    <?php

     include 'DBConnection.php';
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = $_POST["username"];
      $email = $_POST["email"];
      $TID = $_POST["TID"];
      $num = $_POST["number"];
      $UID=$_POST["UID"];
  
      $sql = "INSERT INTO registrations (TID,UID, username, email, num)
              VALUES ('$TID',$UID,'$username', '$email', '$num')";
  
      $result = mysqli_query($conn, $sql);
  
      if ($result) {
          $showAlert = true;
          echo "<script>location.href = 'index.php';</script>";
      }
  }
    
     
    
    ?>
  </body>
</html>