<?php

require_once('connect.php');
$query = "select * from company_info";
$result = mysqli_query($connect,$query);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Company List</title>
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
  <?php
     while($row = mysqli_fetch_assoc($result)){
     ?>
    <div class="home-content">
     
      <div class="all-boxes">
      <div class="title">Company List</div>
      <div class="applicant-boxes">
        <div class="description-boxes">

            <div class="container">
                <div class="company-card">
                <img src="<?php echo $row["CompanyLogo"]; ?>">
                  <a href="<?php echo $row["CompanyLogo"]; ?>"><?php echo $row["CompanyName"]; ?></a>
                  <br><?php echo $row["CompanyIndustry"]; ?></br>
                </div>
              </div>
              


      </div>
    </div>
    </div>
    <?php
      }
    ?>
  </div>
  </div>
</section>	
</body>
</html>

<script src="script.js"></script>