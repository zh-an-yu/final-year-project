<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
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
        <div class="signup-form">
          <div class="title">Job Seeker Sign Up</div>
          <form class="post-form-wrapper"  method="POST" autocomplete="off">
        
            <div class="row gap-20">
              <div class="clear"></div>
              
              <div class="col-sm-12 col-md-8">
              
                <div class="form-group">
                  <label>Company Name</label>
                  <input name="companyname" placeholder="Enter your company name" type="text" class="form-control"  required>
                </div>

                <div class="form-group">
                    <label>Company Username</label>
                    <input name="companyusername" placeholder="Enter your company username" type="text" class="form-control"  required>
                  </div>
              </div>

              <div class="form-group">
                    <label>Password</label>
                    <input name="password" placeholder="Enter your company password" class="form-control" required type="password" required>
                  </div>

              <div class="col-sm-12 col-md-8">
              
                <div class="form-group">
                  <label>Company Address</label>
                  <input name="address" placeholder="Enter your company address" type="text" class="form-control"  required>
                </div>
                
              </div>
              <div class="clear"></div>
              
              <div class="col-sm-6 col-md-4">
              
                <div class="form-group">
                  <label>Registration Number</label>
                  <input name="registrationnumber" placeholder="Enter your registration number" type="text" class="form-control"  required>
                </div>
                
              </div>
              
              <div class="col-sm-6 col-md-4">
              
                <div class="form-group">
                  <label>Industry</label>
                   <input class="form-control" placeholder="Eg: Booking, Travel" name="industry" required type="text"  required> 
                </div>
                
              </div>
              
              <div class="clear"></div>

              <div class="form-group">
                
                <div class="col-sm-6 col-md-4">
                  <label>Size</label>
                  <input name="size" required class="selectpicker show-tick form-control mb-15" required type="text" placeholder="Enter your company size" required>
                </div>

                <div class="col-sm-6 col-md-4">
                  <label>Website</label>
                  <input type="text" class="form-control"  name="website" placeholder="Enter your company website">
                </div>
                  
              </div>
              
              

              <div class="clear"></div>
              
              <div class="col-sm-6 col-md-4">
              
                <div class="form-group">
                  <label>Phone Number</label>
                  <input type="text" name="phone" required class="form-control"  placeholder="Enter your company phone">
                </div>
                
              </div>
              
              <div class="col-sm-6 col-md-4">
              
                <div class="form-group">
                  <label>Email Address</label>
                  <input type="email" name="email" required class="form-control"  placeholder="Enter your company email">
                </div>
                
              </div>
              


              <div class="clear"></div>
              


              <div class="clear"></div>
              
              <div class="col-sm-12 col-md-12">
              
                <div class="form-group bootstrap3-wysihtml5-wrapper">
                  <label>Company Description</label>
                  <textarea name="description" class="bootstrap3-wysihtml5 form-control" placeholder="Enter your company description ..." style="height: 200px;"></textarea>
                </div>
                
              </div>
              
              <div class="clear"></div>
              
              <div class="col-sm-12 col-md-12">
              
                <div class="form-group bootstrap3-wysihtml5-wrapper">
                  <label>Company Our Team</label>
                  <textarea name="team" class="bootstrap3-wysihtml5 form-control" placeholder="Enter your company services ..." style="height: 200px;"></textarea>
                </div>
                
              </div>
              
              <div class="clear"></div>
              
              <div class="col-sm-12 col-md-12">
              
                <div class="form-group bootstrap3-wysihtml5-wrapper">
                  <label>Company Our Mission</label>
                  <textarea name="mission" class="bootstrap3-wysihtml5 form-control" placeholder="Enter your company expertises ..." style="height: 200px;"></textarea>
                </div>
                
              </div>

              <div class="col-sm-12 col-md-12">
              
                <div class="form-group bootstrap3-wysihtml5-wrapper">
                  <label>Company Our Vision</label>
                  <textarea name="vision" class="bootstrap3-wysihtml5 form-control" placeholder="Enter your company services ..." style="height: 200px;"></textarea>
                </div>
                
              </div>
              
              <div class="clear"></div>

              <div class="col-sm-12 col-md-12">
                                              
                <div class="form-group bootstrap3-wysihtml5-wrapper">
                <label>Company Logo</label>
                <input accept="image/*" type="file" name="image"  required >
                </div>
                      
                </div>
              
              <div class="clear"></div>



            </div>
            <div class="button input-box">
                <input type="submit" value="Sumbit" name="submit">
              </div>
              <div class="text sign-up-text">Already have an account? <a href="JobSeekerLogin.php">Login now</a></div>
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
	include("connect.php");
	
	if(isset($_POST["submit"]))
	{
		$name = $_POST["companyname"];
		$username = $_POST["companyusername"];
    $address = $_POST["address"];
		$password = $_POST["password"];
    $registrationnumber = $_POST["registrationnumber"];
    $industry = $_POST["industry"];
    $size = $_POST["size"];
    $website = $_POST["website"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $description = $_POST["description"];
		$team = $_POST["team"];
    $mission = $_POST["mission"];
    $vision = $_POST["vision"];
    $image = $_POST["image"];
		
		$query = "INSERT INTO company_info(CompanyUsername,CompanyPassword,CompanyName,CompanyEmail,CompanySize,CompanyIndustry,CompanyRegistrationNo,CompanyDescription,CompanyWebsite,CompanyAddress,CompanyPhone,CompanyOurTeam,CompanyOurMission,CompanyOurVision,CompanyLogo)
		VALUES('$username','$password','$name','$email','$size','$industry','$registrationnumber','$description','$website','$address','$phone','$team','$mission','$vision','$image')";
		$result = mysqli_query($connect,$query);
		

	mysqli_close($connect);
	
	?>
	
	<script>
		alert("Add Company Profile Done!");
	</script>
	
	<?php
	}