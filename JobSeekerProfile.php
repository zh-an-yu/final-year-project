<!DOCTYPE html>
<html>
  <head>
    <title>Job Seeker Profile Page</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  </head>

  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class='#' ></i>
        <span class="logo_name">Job Seekeer</span>
      </div>
        <ul class="nav-links">
        <li>
          <a href="JobSeekerProfile.php" class="active">
            <i class='bx bxs-user-detail' ></i>				<span class="links_name">Profile</span>
          </a>
        </li>
        <li>
          <a href="JobSeekerAboutUs.php" >
            <i class='bx bxs-user-account' ></i>				<span class="links_name">About Us</span>
          </a>
        </li>
        <li>
          <a href="JobSeekerJobListing.php">
            <i class='bx bx-list-ul' ></i>				  <span class="links_name">Job Listing</span>
          </a>
          </li>
          <li>
            <a href="JobSeekerCompanyListing.php">
              <i class='bx bx-list-ul' ></i>				  <span class="links_name">Company Listing</span>
            </a>
          </li>
        <li>
          <a href="JobSeekerFavourite.php">
            <i class='bx bxs-bookmark' ></i>
                    <span class="links_name">Favourite</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bxs-business'></i>
                              <span class="links_name">Application</span>
          </a>
        </li>
         
        <li>
          <a href="JobSeekerReportHistory.php">
            <i class='bx bxs-time'></i>
                    <span class="links_name">History Report</span>
          </a>
        </li>
  
        <li>
          <a href="JobSeekerMessage.php">
            <i class='bx bxs-chat' ></i>
          <span class="links_name">Message</span>
          </a>
        </li>
        <li>
          <a href="JobSeekerResume.php">
            <i class='bx bx-paperclip'></i>
          <span class="links_name">Resume</span>
          </a>
        </li>
    
        <li class="log_out">
          <a href="#">
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
      
        <div class="search-box">
          <input type="text" placeholder="Search...">
          
        </div>
      
        <div class="profile-details">
          <span class="admin_name">Kui Jun Foo</span>
          
        </div>
        </nav>
        <section class="home-section">
   

          <div class="home-content">
           
            <div class="all-boxes">
            <div class="title">JobSeeker Profile</div>
            <div class="applicant-boxes">
              <div class="recent-applicant">
                  <div class="company-detail-wrapper">
                  <form class="post-form-wrapper"  method="POST" autocomplete="off">
                
                      <div class="row gap-20">
                        <div class="clear"></div>
                        
                        <div class="col-sm-12 col-md-8">
                        
                          <div class="form-group">
                            <label>Full Name</label>
                            <input name="fullname" placeholder="Enter your name" type="text" class="form-control"  required>
                          </div>
                          
                        </div>
                        <div class="col-sm-12 col-md-8">
                        
                          <div class="form-group">
                            <label>Address</label>
                            <input name="address" placeholder="Enter your address" type="text" class="form-control"  required>
                          </div>
                          
                        </div>

                        <div class="clear"></div>

                        <div class="col-sm-6 col-md-4">
                        
                          <div class="form-group">
                            <label>Username</label>
                              <input name="username" placeholder="Enter Username" type="text" class="form-control"  required>
                          </div>
                          
                        </div>
                        
                        <div class="col-sm-6 col-md-4">
                        
                          <div class="form-group">
                            <label>Password</label>
                              <input class="form-control" placeholder="Enter Password" name="password" required type="password"  required> 
                          </div>
                          
                        </div>
                        
                        <div class="clear"></div>
        
                      
                        
                        <div class="col-sm-6 col-md-4">
                        
                          <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone" required class="form-control"  placeholder="Enter your phone">
                          </div>
                          
                        </div>
                        
                        <div class="col-sm-6 col-md-4">
                        
                          <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" required class="form-control"  placeholder="Enter your email">
                          </div>
                          
                        </div>
                        
        
        
                        
                        <div class="resume">
                        
                          <div class="col-sm-6 col-md-4">
                        
                            <div class="form-group">
                              <label>Resume</label>
                              <ul>
                                <a href="#">Username_resume1.pdf</a> <button type="button" class="delete">Delete</button>

                              </ul>
                            </div>
                            
                          </div>
                          <div class="clear"></div>
        
      
                        
      
        
                        <div class="col-sm-15 md-10">
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
      
    </div>
  </body>
</html>

<?php
	include("connect.php");
	
	if(isset($_POST["submit"]))
	{
		$name = $_POST["fullname"];
		$username = $_POST["username"];
		$password = $_POST["password"];
		$email = $_POST["email"];
    $phonenumber = $_POST["phone"];
    $address = $_POST["address"];
		
		$query = "INSERT INTO job_seekerinfo(Job_SeekerFullname,Job_SeekerUsername,Job_SeekerPassword,Job_SeekerEmail,Job_SeekerPhone,Job_SeekerAddress)
		VALUES('$name','$username','$password','$email','$phonenumber','$address')";
		$result = mysqli_query($connect,$query);
		

	mysqli_close($connect);
	
	?>
	
	<script>
		alert("Add Jobseeker Profile Done!");
	</script>
	
	<?php
	}