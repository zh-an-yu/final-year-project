<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<head>
	<title>Resume Editor</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
	<div class="sidebar">
		<div class="logo-details">
      <i class='#' ></i>
		  <span class="logo_name">Job Seekeer</span>
		</div>
		  <ul class="nav-links">
			<li>
			  <a href="JobSeekerProfile.php" >
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
				<div class="title">Job Seeker Resume</div>
				<div class="applicant-boxes">
				  <div class="recent-applicant">
				  <div class="company-detail-wrapper">
				  <form class="post-form-wrapper"  method="POST" autocomplete="off">
				
					  <div class="row gap-20">
						<div class="clear"></div>
						
						<div class="col-sm-12 col-md-8">
						
						  <div class="form-group">
							<label>Name</label>
							<input name="name" placeholder="Enter your name" type="text" class="form-control"  required>
						  </div>
						  
						</div>
						
						<div class="clear"></div>
		
						<div class="col-sm-12 col-md-8">
						
						  <div class="form-group">
							<label>Address</label>
							<input name="address" placeholder="Enter your address" type="text" class="form-control"  required>
						  </div>
						  
						</div>
						<div class="clear"></div>
						
						<div class="col-sm-6 col-md-4">
						
						  <div class="form-group">
							<label>Race</label>
							<input name="race" placeholder="Enter your race" type="text" class="form-control"  required>
						  </div>
						  
						</div>
						
						<div class="col-sm-6 col-md-4">
						
							<div class="form-group">
							  <label>Phone Number</label>
							  <input type="text" name="phonenumber" required class="form-control"  placeholder="Enter your phone number">
							</div>
							
						  </div>
						
						
						<div class="clear"></div>

						
						
		
						<div class="clear"></div>
						
						
						<div class="col-sm-6 col-md-4">
						
						  <div class="form-group">
							<label>Email Address</label>
							<input type="email" name="emailaddress" required class="form-control"  placeholder="Enter your email address">
						  </div>
						  
						</div>
						<div class="col-sm-6 col-md-4">
						
							<div class="form-group">
							  <label>Education</label>
							  <input type="text" name="education" required class="form-control"  placeholder="Enter your education">
							</div>
							
						  </div>
						
		
		
						<div class="clear"></div>
						
		
		
						<div class="clear"></div>
						
						<div class="col-sm-12 col-md-12">
						
						  <div class="form-group bootstrap3-wysihtml5-wrapper">
							<label>Summary</label>
							<textarea name="summary" class="bootstrap3-wysihtml5 form-control" placeholder="Enter your summary ..." style="height: 200px;"></textarea>
						  </div>
						  
						</div>
						
						<div class="clear"></div>
						
						<div class="col-sm-12 col-md-12">
						
						  <div class="form-group bootstrap3-wysihtml5-wrapper">
							<label>Work Experience</label>
							<textarea name="workexperience" class="bootstrap3-wysihtml5 form-control" placeholder="Enter your work experience ..." style="height: 200px;"></textarea>
						  </div>
						  
						</div>
						
						<div class="clear"></div>
						
						<div class="col-sm-12 col-md-12">
						
						  <div class="form-group bootstrap3-wysihtml5-wrapper">
							<label>Language</label>
							<textarea name="language" class="bootstrap3-wysihtml5 form-control" placeholder="Enter language you know ..." style="height: 200px;"></textarea>
						  </div>
						  
						</div>
		
						<div class="col-sm-12 col-md-12">
						
						  <div class="form-group bootstrap3-wysihtml5-wrapper">
							<label>Skills</label>
							<textarea name="skills" class="bootstrap3-wysihtml5 form-control" placeholder="Enter your skills ..." style="height: 200px;"></textarea>
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
            
			</div>
</body>
</html>

<?php
	include("connect.php");
	
	if(isset($_POST["submit"]))
	{
		$name = $_POST["name"];
		$address = $_POST["address"];
		$race = $_POST["race"];
		$phonenumber = $_POST["phonenumber"];
    	$emailaddress = $_POST["emailaddress"];
    	$education = $_POST["education"];
		$summary = $_POST["summary"];
		$workexperience = $_POST["workexperience"];
		$language = $_POST["language"];
    	$skills = $_POST["skills"];
		
		 $query = "INSERT INTO resume_jobseeker(Job_SeekerFullname, Job_SeekerEmail, Job_SeekerPhone, Job_SeekerAddress, Job_SeekerRace, Job_SeekerExperience, Job_SeekerEducation, Job_SeekerLanguage, Job_SeekerSkill, Job_SeekerSummary,Job_SeekerID)
		 VALUES ('$name', '$emailaddress', '$phonenumber', '$address', '$race', '$workexperience', '$education', '$language', '$skills', '$summary','2')";
		 $result = mysqli_query($connect, $query);

		 //$query = "INSERT INTO resume_jobseeker(Job_SeekerFullname)
		// VALUES('$name')";
		 //$result = mysqli_query($connect,$query);

		//$query = "INSERT INTO resume_jobseeker(Job_SeekerFullname)
		//VALUES('$name')";
		//$result = mysqli_query($connect, $query);

		mysqli_close($connect);
	
	?>
	
	<script>
		alert("Add Resume Done!");
	</script>
	
	<?php
	}