<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  background: #f2f2f2;
  /* background: linear-gradient(-135deg, #c850c0, #4158d0); */
}
::selection{
  background: #4158d0;
  color: #fff;
}
.wrapper{
  width: 380px;
  background: #fff;
  border-radius: 15px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}
.wrapper .title{
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  line-height: 100px;
  color: #fff;
  user-select: none;
  border-radius: 15px 15px 0 0;
  background: linear-gradient(-135deg, #c850c0, #4158d0);
}
.wrapper form{
  padding: 10px 30px 50px 30px;
}
.wrapper form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
  position: relative;
}
.wrapper form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  font-size: 17px;
  padding-left: 20px;
  border: 1px solid lightgrey;
  border-radius: 25px;
  transition: all 0.3s ease;
}
.wrapper form .field input:focus,
form .field input:valid{
  border-color: #4158d0;
}
.wrapper form .field label{
  position: absolute;
  top: 50%;
  left: 20px;
  color: #999999;
  font-weight: 400;
  font-size: 17px;
  pointer-events: none;
  transform: translateY(-50%);
  transition: all 0.3s ease;
}
form .field input:focus ~ label,
form .field input:valid ~ label{
  top: 0%;
  font-size: 16px;
  color: #4158d0;
  background: #fff;
  transform: translateY(-50%);
}
form .content{
  display: flex;
  width: 100%;
  height: 50px;
  font-size: 16px;
  align-items: center;
  justify-content: space-around;
}
form .content .checkbox{
  display: flex;
  align-items: center;
  justify-content: center;
}
form .content input{
  width: 15px;
  height: 15px;
  background: red;
}
form .content label{
  color: #262626;
  user-select: none;
  padding-left: 5px;
}
form .content .pass-link{
  color: "";
}
form .field input[type="submit"]{
  color: #fff;
  border: none;
  padding-left: 0;
  margin-top: -10px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
  background: linear-gradient(-135deg, #c850c0, #4158d0);
  transition: all 0.3s ease;
}
form .field input[type="submit"]:active{
  transform: scale(0.95);
}
form .signup-link{
  color: #262626;
  margin-top: 20px;
  text-align: center;
}
form .pass-link a,
form .signup-link a{
  color: #4158d0;
  text-decoration: none;
}
form .pass-link a:hover,
form .signup-link a:hover{
  text-decoration: underline;
}
.continer{
  border-radius: 25px;

}
</style>
</head>
<body>
  <div class="wrapper">
    <div class="title">
      Sign In Form
    </div>
    <form action="signUp.php" method="post">
      <div class="container">
        <div class="field">
          <label for="fname"><b></b></label>
          <input type="text" name="fname" id="fname" placeholder="First Name" required>
        </div>

        <div class="field">
          <label for="lname"><b></b></label>
          <input type="text" name="lname" id="lname" placeholder="Last Name" required>
        </div>

        <div class="field">
          <label for="uname"><b></b></label>
          <input type="text" placeholder="Enter Username" name="username" required>
        </div>

        <div class="field">
          <label for="email"><b></b></label>
          <input type="email" name="email" id="email" placeholder="Email">
        </div>

        <div class="field">
          <label for="psw"><b></b></label>
          <input type="password" placeholder="Enter Password" name="password" id="Psw" required>
        </div>

        <div class="field">
          <label for="cpassword"><b></b></label>
          <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" required>
        </div>

        <br>

        <div class="field">
          <input type="submit" value="Sign Up" class="submit">
        </div>

        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
          <br>
          <input type="checkbox" name="isManager" id="">Sign Up as a manager
        </label>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <span>Already have an account? <a href="index.php">Log in</a></span>
      </div>
    </form>
  </div>

  <?php
  $localhost = "localhost";
  $username = "root";
  $password = "";
  $db_name = "busdb";

  $conn = mysqli_connect($localhost, $username, $password, $db_name);

  $showAlert = false;
  $showError = false;
  $exists = false;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num > 0) {
      $exists = "Username not available";
    } else {
      if ($password == $cpassword) {
        $sql = "INSERT INTO `users` (username, password, Email, Fname, Lname)
                VALUES ('$username', '$password', '$email', '$fname', '$lname')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
          $showAlert = true;
          echo "<script>location.href = 'login.php';</script>";
        }
      } else {
        $showError = "Passwords do not match";
      }
    }
  }

  if ($showAlert) {
    echo '<div class="alert alert-success
      alert-dismissible fade show" role="alert">

      <strong>Success!</strong> Your account is
      now created and you can log in.
      <button type="button" class="close"
          data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
      </button>
  </div>';
  }

  if ($showError) {
    echo '<div class="alert alert-danger
      alert-dismissible fade show" role="alert">
  <strong>Error!</strong> ' . $showError . '
 <button type="button" class="close" 
      data-dismiss="alert" aria-label="Close"> 
      <span aria-hidden="true">×</span>  
 </button>  
</div> ';
  }

  if ($exists) {
    echo '<div class="alert alert-danger
      alert-dismissible fade show" role="alert">
  <strong>Error!</strong> ' . $exists . '
  <button type="button" class="close" 
      data-dismiss="alert" aria-label="Close">  
      <span aria-hidden="true">×</span>  
  </button> 
 </div> ';
  }

  ?>
</body>

</html>
