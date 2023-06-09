<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Message</title>

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
    

  
    

<form method="post">
    <div class="home-content">
	<div class="all-boxes">
    <div class="title">Message</div>
        <div class="applicant-boxes">
          <div class="recent-applicant">
          <div class="company-detail-wrapper">
            <div class="form">

                <div class="col-sm-12 col-md-8">
    
                    <div class="form-group">
                      <label>Name</label>
                      <input name="name" placeholder="Enter Name" type="text" class="form-control"  required>
                    </div>
                    
                  </div>
					
                <div class="col-sm-12 col-md-8">
    
                    <div class="form-group">
                      <label>Email</label>
                      <input name="email" placeholder="Enter Email" type="text" class="form-control"  required>
                    </div>
                    
                  </div>
        
                  <div class="col-sm-12 col-md-12">
            
                    <div class="form-group bootstrap3-wysihtml5-wrapper">
                      <label>Message</label>
                      <textarea name="message" class="bootstrap3-wysihtml5 form-control" placeholder="Enter Message" style="height: 200px;"></textarea>
                    </div>
                    
                  </div>
        
                <div class="button">
                    <input type="submit" value="Save" name="submit">
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
</form>

<script src="script.js"></script>


<?php
	include("connect.php");
	
	if(isset($_POST["submit"]))
	{
		$name = $_POST["name"];
		$email = $_POST["email"];
		$message = $_POST["message"];

		
		$query = "INSERT INTO message(Name,Email,Message,Job_SeekerID )
		VALUES('$name','$email','$message','2')";
		$result = mysqli_query($connect,$query);
		

	mysqli_close($connect);
	
	?>
	<script>
		alert("Add Message Done!");
	</script>
	
	<?php
	}