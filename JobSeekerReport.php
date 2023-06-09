<!DOCTYPE html>
<html>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

<head>
	<title>Report Submission Page</title>
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
				<form method="post">
					<div class="all-boxes">
				<div class="title">Report Job </div>
				<div class="applicant-boxes">
				  <div class="recent-applicant">
					<div class="container">

                        <div class="form">

						<div class="form-group">
                            <label>Date Reported</label>
                            <input name="date" placeholder="Enter date reported" type="text" class="form-control" required>
                          </div>
						  
                              <div class="col-sm-12 col-md-12">
						
                                <div class="form-group bootstrap3-wysihtml5-wrapper">
                                  <label>Report Reason</label>
                                  <textarea name="description" class="bootstrap3-wysihtml5 form-control" placeholder="Enter Report description ..." style="height: 200px;"></textarea>
                                </div>
                                
                              </div>
					
							<div class="button">
							    <input type="submit" value="Submit" name="submit">
							</div>
</form>
						</div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		
		  </section>
</body>
</html>

<?php
	include("connect.php");
	
	if(isset($_POST["submit"]))
	{
		$date = $_POST["date"];
		$description = $_POST["description"];

		// $query = "INSERT INTO report(Date_Reported, 'Reason for report')
		// VALUES('$date','$description')";
		// $result = mysqli_query($connect,$query);
		
		$query = "INSERT INTO report (Date_Reported,Reason_for_report,Job_SeekerID,JobListingID) VALUES ('$date', '$description', '2', '4')";
		$result = mysqli_query($connect,$query);
		 

		

	mysqli_close($connect);
	
	?>
	
	<script>
		alert("Add Report Done!");
	</script>
	
	<?php
	}


