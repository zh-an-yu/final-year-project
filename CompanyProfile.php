<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Company Profile</title>
    <meta charset="UTF-8">
    

    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-upwork'></i>
      <span class="logo_name">Employer</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="CompanyDashboard.php" >
            <i class='bx bxs-dashboard'></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="CompanyJobPosting.php">
            <i class='bx bxs-briefcase-alt-2'></i>
            <span class="links_name">Jobs </span>
          </a>
        </li>
        <li>
          <a href="CompanyApplicant.php">
            <i class='bx bxs-group'></i>
            <span class="links_name">Application</span>
          </a>
        </li>
       
        <li>
          <a href="CompanyReview.php">
            <i class='bx bxs-star'></i>
            <span class="links_name">Review</span>
          </a>
        </li>
        <li>
            <a href="CompanyProfile.php" class="active">
                <i class='bx bxs-buildings' ></i>
              <span class="links_name">Company Profile</span>
            </a>
        </li>



        <li class="log_out">
          <a href="CompanyLogin.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <nav>
    <div class="sidebar-button">
      <i class='bx bx-menu sidebarBtn'></i>
      <span class="dashboard">Dashboard</span>
    </div>
    
    <div class="profile-details">
      <span class="admin_name">Kui Jun Foo</span>
      
    </div>
  </nav>
  
  <section class="home-section">
   

    <div class="home-content">
			<div class="all-boxes">
        <div class="title">Company Profile</div>
        <div class="applicant-boxes">
          <div class="recent-applicant">
          <div class="company-detail-wrapper">
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

                <div class="col-sm-12 col-md-8">
                
                  <div class="form-group">
                    <label>Company Address</label>
                    <input name="address" placeholder="Enter your company address" type="text" class="form-control"  required>
                  </div>
                  
                  <div class="form-group">
                    <label>Password</label>
                    <input name="password" placeholder="Enter your company password" class="form-control" required type="password" required>
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
                    <input name="size" required class="form-control" required type="text" placeholder="Enter your company size" required>
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
                    <textarea name="vision" class="bootstrap3-wysihtml5 form-control" placeholder="Enter your company visions ..." style="height: 200px;"></textarea>
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

                <div class="col-sm-12 mt-10"><br><br>
                  <button type="submit" class="btn btn-primary" name="submit">Save</button>
                  <button type="reset" class="btn btn-warning">Cancel</button>
                </div>

              </div>
              
            </form>
          </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  

</body>
</html>

<script src="script.js"></script>

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
  ?>