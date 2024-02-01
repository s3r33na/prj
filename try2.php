 
<?php
 
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'cr';
 
$connection = new mysqli($host, $user, $pass, $db);
 
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
 
    $sql = "SELECT * FROM user WHERE student='$username'";
    $result = mysqli_query($connection, $sql);
    $num = mysqli_num_rows($result);
 
    if ($num > 0) {
      $exists = "UserName not available";
    } else {$sql = "INSERT INTO `student` (stdN, stdID, password)
                VALUES ('$username', '$email','$password')";
        $result = mysqli_query($connection, $sql);
 
        if ($result) {
          $showAlert = true;
          header('Location: try.php');
        }else{
            die("Data Issue " . $e->getMessage());
                 }
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="book2.html">Book</a></li>
                <li><a href="signin.html">Login</a></li>
                <li><a href="Signup.html">Sign Up</a></li>
            </ul>
        </nav>
    </header>
    <div class="signin-form">
        <h2>User Sign Up</h2>
        <form action="try2.php" method="POST">
          <input type="text" name="username" placeholder="Username" required>
          <input type="text" name="email" placeholder="Email" required>
          <input type="password" name="password" placeholder="Password" required>
          <button type="submit">Sign Up</button>
         
        </form>
        <a href="#">Forgot Password?</a>
      </div>
    <footer>
        <p>&copy; 2023 Bus Traveling and Booking. All rights reserved.</p>
    </footer>
 
 
</body>
</html>