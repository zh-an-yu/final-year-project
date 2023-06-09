<?php
require_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <head>
    <title>Job Description</title>
    <link rel="stylesheet" href="style.css" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
</head>
<body>
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
      <?php
      $query = "select * from joblisting";
      $result = mysqli_query($connect,$query);
      if($row = mysqli_fetch_assoc($result))
      {
        $new = $row['CompanyID'];
        $sql2 = "select * from company_info WHERE CompanyID = '$new'";
        $result2 = mysqli_query($connect,$sql2);
        $row2 = mysqli_fetch_assoc($result2);
        if(is_array($row2)){

        $new2 = $row['JobCategoryID'];
        $sql3 = "select * from jobcategory WHERE JobCategoryID = '$new2'";
        $result3 = mysqli_query($connect,$sql3);
        $row3 = mysqli_fetch_assoc($result3);
        if(is_array($row3)){
      ?>
			  <div class="all-boxes">
			  <div class="title">Job Description</div>
			  <div class="applicant-boxes">
				<div class="description-boxes">
					<div class="boxes">

							<div class="description-card">
								<div class="img">
                <img src="<?php echo $row2["CompanyLogo"]; ?>">
								</div>
								<h2><?php echo $row["JobTitle"]; ?></h2>
								<div class="Job-Description">
                  <h2>Job Description</h2>
                  <p><li><?php echo $row["JobDescription"]; ?></li></p>
                  <h2>Job Requirement</h2>
                  <p><li><?php echo $row["JobRequirement"]; ?></li></p>

                  <h2>Job Type</h2>
                  <p><li><?php echo $row["JobType"]; ?></li></p>
                  <h2>Job Category</h2>
                  <p><li><?php echo $row3["JobCategoryName"]; ?></li></p>
                 
                </div>

								<p><b>Location:</b><?php echo $row2["CompanyAddress"]; ?></p>
								<p><b>Salary:</b><?php echo $row["JobSalary"]; ?></p>
								<a href="#">Apply Now</a>
								<a href="#">Add to Favourite</a>
								<a href="JobSeekerReport.php">Report Job</a>
                <a href="#">Add Review</a>
							</div>
						</div>

					</div>
    <?php
      }
    }
  }
    ?>
          <div class="similarjob">
            Similar Job
            <div class="similarboxes">
              <div class="box">
                <div class="img">
                <img src="<?php echo $row["CompanyLogo"]; ?>">
                </div>
                <div class="1">
                  <div class="jobtitle">
                    <a href="#"><?php echo $row["JobTitle"]; ?></a>
                  </div>
                  <div class="company">
                    <b>Company :</b>
                    <a href="#"><?php echo $row["CompanyName"]; ?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
			  
			</div>
			  </div>
			</div>
			</div>
		  </section>	
</body>
</html>
<main>


