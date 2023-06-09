<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login and Registration</title>
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
        <div class="text">
          <span class="text-1">Lets get your Job Now</span>

        </div>
      </div>

    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Job Seekers Login</div>
          <form method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>
              
              <div class="button input-box">
                <input type="submit" value="Sumbit" name="submit">
              </div>
              <div class="text sign-up-text">Don't have an account? <a href="JobSeekerRegister.php">Signup now</a></div>
              <div class="text sign-up-text">Login as <a href="CompanyLogin.php">Company?</a></div>
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
	$email = $_POST["email"];
	$password = $_POST["password"];
	
	//$username = stripcslashes($username);
	//$password = stripcslashes($password);
	//$username = mysqli_real_escape_string($connect,$username);
	//$password = mysqli_real_escape_string($connect,$password);
	
	$query = "SELECT * FROM job_seekerinfo where Job_SeekerEmail = '$email' and Job_SeekerPassword = '$password'";
	$result = mysqli_query($connect,$query);
	$row = mysqli_fetch_array($result);
	//$count = mysqli_num_rows($result);
	
	if(is_array($row)){
		$_SESSION["login"] = "OK";
		$_SESSION["email"] = $row['$email'];
    echo"<script>
		alert('Login successfully.');
		window.location.replace('AdminAddAdmin.php');
		</script>";

	}
	
	if(!isset($_SESSION["email"]))
	{
	?>
		<script>
		alert("Login unsuccessfully.");
		window.location.href="JobSeekerLogin.php";
		</script>
	<?php
	}
	}
mysqli_close($connect);
?>