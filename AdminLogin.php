<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="login">
  <div class="container">
    <div class="cover">
      <div class="front">
        <img src="wallhaven-4y3370.jpg" alt="">
      </div>

    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Admin Login</div>
          <form method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="adminusername" placeholder="Enter your username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="adminpassword" placeholder="Enter your password" required>
              </div>
              
              <div class="button input-box">
                <input type="submit" value="Sumbit" name="submit">
              </div>
            </div>
        </form>
      </div>

    </div>
    </div>
  </div>
</div>
</body>
</html>

<?php
  session_start();
	include("connect.php");
	
	if(isset($_POST["submit"]))
	{
    $username = $_POST["adminusername"];
    $password = $_POST["adminpassword"];
    
    $query = "SELECT * FROM admin_info where AdminUsername = '$username' and AdminPassword = '$password'";
    $result = mysqli_query($connect,$query);
    $row = mysqli_fetch_array($result);
    //$count = mysqli_num_rows($result);
    if(is_array($row))
    {
      $_SESSION["adminpassword"] = $row["AdminPassword"];
      $_SESSION["adminusername"] = $row["AdminUsername"];
      $_SESSION["adminid"] = $row["AdminID"];

      

      echo"<script>
      alert('Login successfully.');
      window.location.replace('AdminAddAdmin.php');
      </script>";
    }
    else
    {
      echo"<script>
      alert('Login unsuccessfully.');
      </script>";
    }
	}
mysqli_close($connect);
?>