<?php
require_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Dashboard</title>
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
          <a href="CompanyDashboard.php" class="active">
            <i class='bx bxs-dashboard'></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="CompanyJobPosting.php">
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
              <a href="#">UI/UX Designer</a>
            </div>
            <div class="applicant-number">
              <div class="number">45</div>
                <div class="applicants">
                  <span class="text">applicants</span>
                </div>
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">
              <a href="#">HTML Developer</a>
            </div>
            <div class="applicant-number">
              <div class="number">65</div>
                <div class="applicants">
                  <span class="text">applicants</span>
                </div>
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">
              <a href="#">C++ Developer</a>
            </div>
            <div class="applicant-number">
              <div class="number">23</div>
                <div class="applicants">
                  <span class="text">applicants</span>
                </div>
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">
              <a href="#">Project Manager</a>
            </div>
            <div class="applicant-number">
              <div class="number">4</div>
                <div class="applicants">
                  <span class="text">applicants</span>
                </div>
            </div>
          </div>
          
        </div>
      </div>
      <div class="all-boxes">
      <div class="title">Recent Applicants</div>
      <div class="applicant-boxes">
        <div class="recent-applicant">
          
          <div class="table">
            <table>
              <thead>
                <tr>
                    <th>Applicant ID</th>
                    <th>Name</th>
                    <th>Applied Role</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Resume</th>
                    <th>Attachment</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql = "select * from application";
                $result = mysqli_query($connect,$sql);
                while($row = mysqli_fetch_assoc($result))
                {
                  $new = $row['Job_SeekerID']; 
                  $sql2 = "select * from job_seekerinfo WHERE Job_SeekerID = '$new'";
                  $result2 = mysqli_query($connect,$sql2);
                  $row2 = mysqli_fetch_assoc($result2);
                  if(is_array($row2)){

                  $new = $row['JobListingID']; 
                  $sql3 = "select * from joblisting WHERE JobListingID = '$new'";
                  $result3 = mysqli_query($connect,$sql3);
                  $row3 = mysqli_fetch_assoc($result3);
                  if(is_array($row3)){

                  
                ?>
                <td><?php echo $row['ApplicationID']; ?></td>
                <td><?php echo $row2['Job_SeekerFullname']; ?></td>
                <td><?php echo $row3['JobTitle']; ?></td>
                <td><?php echo $row['DateApplied']; ?></td>
                <td><?php echo $row['ApplicationStatus']; ?></td>
                <td><?php echo $row2['CompanyName']; ?></td>
                <td><?php echo $row['CompanyName']; ?></td>
              </tr>
              <?php
                  }
                }
              }
              ?>
            </tbody>
        </table>
              
          </div>
          <div class="button">
            <a href="CompanyApplicant.php">See All</a>
          </div>
        </div>
        
      </div>
    </div>
    </div>
  </section>

  

</body>
</html>

<script src="script.js"></script>