<?php

require_once('connect.php');
$query = "select * from company_info";
$result = mysqli_query($connect,$query);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Company info</title>
    <meta charset="UTF-8">
    

    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
          <a href="JobSeekerCompanyListing.php" class="active">
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
     
      <?php
      while($row = mysqli_fetch_assoc($result)){
      ?>
      <div class="all-boxes">
      <div class="title"><?php echo $row["CompanyName"]; ?></div>
      <div class="description-boxes">
        <div class="boxes">

                <div class="description-card">
                    <div class="img">
                        <img src="<?php echo $row["CompanyLogo"]; ?>">
                    </div>
                    <h2>Company Discripsion</h2>
                    <div class="Job-Description">
                    <?php echo $row["CompanyDescription"]; ?>
                    </div>
<br>
    <h3>Company Industry</h3>
    <p><?php echo $row["CompanyIndustry"]; ?></p>
<br>
    <h3>Our Team</h3>
    <p><?php echo $row["CompanyOurTeam"]; ?></p>   
<br>
    <h3>Our Vision</h3>
    <p><?php echo $row["CompanyOurVision"]; ?></p>
    <h3>Our Mission</h3>
    <p><?php echo $row["CompanyOurMission"]; ?></p>
<br>
    <h3>Contact Information</h3>
            <p><li><?php echo $row["CompanyPhone"]; ?></p></li></p>
            <p><li><?php echo $row["CompanyEmail"]; ?></p></li></p>
            <p><li><?php echo $row["CompanyWebsite"]; ?></p></li></p>
 
    </div>   
    </div>
    </div>
    </div>
    <?php
      }
    ?>
    </div>
      

<div class="similarjob">
Jobs Available
<div class="similarboxes">
  <div class="box">
    <div class="img">
      <img src="zus.png" alt="">
    </div>
    <div class="1">
      <div class="jobtitle">
        <a href="#">Baristas</a>
      </div>
</div>
</div>
  
</div>
    </div>
    
  </section>

</body>
</html>

<script src="script.js"></script>