<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Jobseeker Add Feedback</title>
    <meta charset="UTF-8">
    

    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
    <div class="sidebar">
        <div class="logo-details">
          <i class='bx bxl-upwork'></i>
          <span class="logo_name">Admin</span>
        </div>
          <ul class="nav-links">
            <li>
              <a href="AdminDashboard.php" >
                <i class='bx bxs-dashboard'></i>
                <span class="links_name">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="AdminMessage.php" >
                <i class='bx bxs-message' ></i>
                <span class="links_name">Message</span>
              </a>
            </li>
            <li>
              <a href="AdminJobListing.php" >
                <i class='bx bxs-briefcase-alt-2'></i>
                <span class="links_name">Job Listing </span>
              </a>
            </li>
            <li>
              <a href="AdminReportedJob.php" >
                <i class='bx bxs-report'></i>
                <span class="links_name">Reported Job</span>
              </a>
            </li>
           
            <li>
              <a href="AdminFeedBack.php">
                <i class='bx bxs-star'></i>
                <span class="links_name">Company Feedback</span>
              </a>
            </li>
    
        
    
            <li>
                <a href="AdminCompanyList.php">
                    <i class='bx bxs-buildings' ></i>
                  <span class="links_name">Company List</span>
                </a>
            </li>
    
            <li>
                <a href="AdminJobSeekerList.php">
                  <i class='bx bxs-group' ></i>
                  <span class="links_name">Job Seeker List</span>
                </a>
            </li>
    
            <li>
              <a href="AdminCategory.php">
                <i class='bx bxs-category-alt' ></i>
                <span class="links_name">Category</span>
              </a>
          </li>
    
          <li>
            <a href="AdminProfile.php">
                <i class='bx bxs-user'></i>
              <span class="links_name">Profile</span>
            </a>
        </li>
    
        <li>
          <a href="AdminAddAdmin.php" class="active">
            <i class='bx bxs-user-badge'></i>
            <span class="links_name">New Admin</span>
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
    
    <div class="profile-details">
      <span class="admin_name">Kui Jun Foo</span>
      
    </div>
  </nav>
  <section class="home-section">
   









    <div class="home-content">
     
      <div class="all-boxes">
      <div class="title">Feedback</div>
      <div class="applicant-boxes">
        <div class="recent-applicant">
            <div class="company-detail-wrapper">
              <form class="post-form-wrapper"  method="POST" autocomplete="off">
            
                  <div class="row gap-20">
                    <div class="clear"></div>
                    
                    <div class="col-sm-12 col-md-8">
                    
                      <div class="form-group">
                        <label>Company Name</label>
                        <input name="companyname" placeholder="Enter company name" type="text" class="form-control"  required>
                      </div>
                      
                    </div>
                    <div class="clear"></div>
                    
                    <div class="col-sm-6 col-md-4">
                    
                      <div class="form-group">
                        <label>Full Name</label>
                          <input name="fullname" placeholder="Enter your full name" type="text" class="form-control"  required>
                      </div>
                      
                    </div>
                    
                    <div class="col-sm-6 col-md-4">
                    
                      <div class="form-group">
                        <label>Date</label>
                          <input class="form-control" placeholder="Enter date" name="date" required> 
                      </div>
                      
                    </div>
                    
                    <div class="clear"></div>
    
                  
                    
                    <div class="col-sm-6 col-md-4">
                    
                      <div class="form-group">
                        <label>Feedback Comments</label>
                        <input type="text" name="comments" required class="form-control"  placeholder="Enter your feedback comments">
                      </div>
                      
                    </div>
                    
                    <div class="col-sm-6 col-md-4">
                    
                      <div class="form-group">
                        <label>Feedback Score</label>
                        <select input type="feedbackscore" id="score" name="score" required>
                        <option value="" disabled selected>Give a feedback score</option>
                        <option value="5">5 </option>
                        <option value="4">4 </option>
                        <option value="3">3 </option>
                        <option value="2">2 </option>
                        <option value="1">1 </option>
				</select>
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

</body>
</html>

<script src="script.js"></script>

<?php
	include("connect.php");
	
	if(isset($_POST["submit"]))
	{
		$companyname = $_POST["companyname"];
		$fullname = $_POST["fullname"];
		$date = $_POST["date"];
		$comments = $_POST["comments"];
    $score = $_POST["score"];
		
		$query = "INSERT INTO feedback(Date,FeedBackComments,FeedBackScore,Job_SeekerID,CompanyID)
		VALUES('$date','$comments','$score','2','17')";
		$result = mysqli_query($connect,$query);
		

	mysqli_close($connect);
	
	?>
	
	<script>
		alert("Add Feedback Done!");
	</script>
	
	<?php
	}