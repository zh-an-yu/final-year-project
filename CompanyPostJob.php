<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Post A Job</title>
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
            <a href="CompanyJobPosting.php" class="active">
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
              <a href="CompanyProfile.php">
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
            <div class="overview-boxes">
                <div class="box">
                  <div class="right-side">
                    <div class="box-topic">
                      <a href="#">Post A Job</a>
                    </div>
                    
                  </div>
                  
                </div>

            </div>
            <div class="col-sm-7 col-md-8">
							
                <div class="company-detail-wrapper">

                    <div class="company-detail-company-overview  mt-0 clearfix">
                        

                        <form class="post-form-wrapper" method="POST" autocomplete="off">
                
                            <div class="row gap-20">
                            
                        
                                <div class="col-sm-8 col-md-8">
                                
                                    <div class="form-group">
                                        <label>Job Title</label>
                                        <input name="title" required type="text" class="form-control" placeholder="Enter job title">
                                    </div>
                                    
                                </div>
                                
                                <div class="clear"></div>
                                
                                <div class="col-sm-8 col-md-8">
                                
                                <div class="form-group">
                                    <label>Location</label>
                                    <input name="location" required type="text" class="form-control" placeholder="Enter Location">
                                </div>
                                
                            </div>

                            <div class="clear"></div>
                                
                                <div class="col-sm-8 col-md-8">
                                
                                <div class="form-group">
                                    <label>Job Period</label>
                                    <input name="Date" required type="text" class="form-control" placeholder="Enter job date">
                                </div>
                                
                            </div>
                                    
                                </div>
                                
                                <div class="clear"></div>
                                
                                <div class="col-sm-4 col-md-4">
                                
                                    <div class="form-group">
                                        <label>Job Category</label>
                                            <select name="category" required class="selectpicker show-tick form-control" data-live-search="true">
                                            <option disabled value="">Select</option>
                                            <option value="Web Developer" data-content="<span class='label label-warning'>Web Developer</span>">Web Developer</option>
                                            <option value="Construction" data-content="<span class='label label-danger'>Construction</span>">Construction</option>
                                            <option value="Electrician" data-content="<span class='label label-success'>Electrician</span>">Electrician</option>
                                            <option value="Marketing" data-content="<span class='label label-warning'>Marketing</span>">Marketing</option>
                                            <option value="Computer Programmer" data-content="<span class='label label-danger'>Computer Programmer</span>">Computer Programmer</option>
                                            <option value="Human Resources Manager" data-content="<span class='label label-success'>Human Resources Manager</span>">Human Resources Manager</option>
                                        </select>
                            
                                        
                                    </div>
                                    
                                </div>


                                <div class="col-sm-4 col-md-4">
                                
                                  <div class="form-group">
                                      <label>Salary</label>
                                      <input name="salary" required type="text" class="form-control" placeholder="Eg: 2000">
                                  </div>
                                  
                              </div>
                                
                                
                                <div class="col-xss-12 col-xs-6 col-sm-6 col-md-4">
                                
                                    <div class="form-group mb-20">
                                        <label>Job Type:</label>
                                        <select name="jobtype" required class="selectpicker show-tick form-control" data-live-search="false" data-selected-text-format="count > 3" data-done-button="true" data-done-button-text="OK" data-none-selected-text="All">
                                            <option value="" selected>Select</option>
                                            <option value="Full-time" data-content="<span class='label label-warning'>Full-time</span>">Full-time</option>
                                            <option value="Part-time" data-content="<span class='label label-danger'>Part-time</span>">Part-time</option>
                                            <option value="Freelance" data-content="<span class='label label-success'>Freelance</span>">Freelance</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-xss-12 col-xs-6 col-sm-6 col-md-4">
                                

                                    
                                    
                                </div>

                                <div class="clear"></div>
                                
                                <div class="col-sm-12 col-md-12">
                                
                                    <div class="form-group bootstrap3-wysihtml5-wrapper">
                                        <label>Job Description</label>
                                        <textarea class="form-control bootstrap3-wysihtml5" name="description" required placeholder="Enter description ..." style="height: 200px;"></textarea>
                                    </div>
                                    
                                </div>
                                
                                <div class="clear"></div>
                                
                                
                                
                                <div class="clear"></div>
                                
                                <div class="col-sm-12 col-md-12">
                                
                                    <div class="form-group bootstrap3-wysihtml5-wrapper">
                                        <label>Requirements</label>
                                        <textarea name="requirements" required class="form-control bootstrap3-wysihtml5" placeholder="Enter requirements..." style="height: 200px;"></textarea>
                                    </div>
                                    
                                </div>
                                
                                <div class="clear"></div>
                                

                                
                                <div class="clear"></div>
                                

                                
                                <div class="clear mb-10"></div>

                                
                                <div class="clear mb-15"></div>

                                
                                <div class="clear"></div>
                                
                                <div class="col-sm-6 mt-30">
                                    <button type="submit" name="submit" onclick = "validate(this)" class="btn btn-primary btn-lg">Post Your Job</button>
                                </div>

                            </div>
                            
                        </form>
                        
                    </div>
                    
            


                

            </div>


            
        </div>    
      
    </div>








</body>
</html>

<script>
    let sidebar = document.querySelector(".sidebar");
 let sidebarBtn = document.querySelector(".sidebarBtn");
 sidebarBtn.onclick = function() {
   sidebar.classList.toggle("active");
   if(sidebar.classList.contains("active")){
   sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
 }else
   sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
 }
  </script>




<?php
	include("connect.php");
	
	if(isset($_POST["submit"]))
	{
		$title = $_POST["title"];
		$location = $_POST["location"];
    $date = $_POST["date"];
		$category = $_POST["category"];
		$salary = $_POST["salary"];
    $jobtype = $_POST["jobtype"];
    $description = $_POST["description"];
    $requirements = $_POST["requirements"];
		
		$query = "INSERT INTO joblisting(JobTitle,JobDescription,JobSalary,JobRequirement,JobType,JobLocation,JobDate,JobCategoryID,CompanyID)
		VALUES('$title','$description','$salary','$requirements','$jobtype','$location','$date','1','17')";
		$result = mysqli_query($connect,$query);
		

	mysqli_close($connect);
	
	?>
	
	<script>
		alert("Post Job Done!");
	</script>
	
	<?php
	}