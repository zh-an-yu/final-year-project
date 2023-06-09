<?php
require_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<html>
<head>
	<title>Job Seeker Website</title>
	<link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
			  <a href="JobSeekerFavourite.php" class="active">
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
            <div class="title">Favourite</div>
            <div class="applicant-boxes">  
                <div class="all-boxes">
                <div class="recent-applicant">
                    <div class="favourite-boxes">
                        <div class="boxes">
                            <div class="left">
                                <div class="favourite-card">
                                <?php
                                    $query = "select * from favourite";
                                    $result = mysqli_query($connect,$query);
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                      $new = $row['JobListingID'];
                                      $sql2 = "select * from joblisting WHERE JobListingID  = '$new'";
                                      $result2 = mysqli_query($connect,$sql2);
                                      $row2 = mysqli_fetch_assoc($result2);
                                      if(is_array($row2)){

                                      $new2 = $row2['CompanyID'];
                                      $sql3 = "select * from company_info WHERE CompanyID  = '$new2'";
                                      $result3 = mysqli_query($connect,$sql3);
                                      $row3 = mysqli_fetch_assoc($result3);
                                      if(is_array($row3)){
                                    ?>
                                    <div class="img">
                                    <img src="<?php echo $row3["CompanyLogo"]; ?>">
                                    </div>
                                    <div>
                                    
                                    <h2><?php echo $row2["JobTitle"]; ?></h2>
                                    <p><b>Company:</b> <?php echo $row3["CompanyName"]; ?></p>
                                    <p><b>Location:</b> <?php echo $row3["CompanyAddress"]; ?></p>
                                    <p><b>Salary:</b> <?php echo $row2["JobSalary"]; ?></p>
                                    
                                    <div class="divbtn">
                                        <div class="button">
                                            <a href="#">Apply</a>
                                         </div>
                                        <div class="button">
                                            <a href="#">Delete</a>
                                      </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                  </div>
            </div>
            </div>
        </div>
        <?php
      }
    }
  }
      ?>
        </div>
      </section>


</body>
</html>

