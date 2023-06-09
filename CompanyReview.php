<?php
require_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Review</title>
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
          <a href="CompanyReview.php"class="active">
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
			<div class="all-boxes">
        <div class="title">Review</div>
        <div class="applicant-boxes">
          <div class="recent-applicant">
          <div class="company-detail-wrapper">
            <div class="reviews">

            <table>
              <thead>
                <tr>
                  <th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Vacancy Information: activate to sort column ascending" style="width: 10%;">Jobseeker Username</th>
                  <th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Availabilty: activate to sort column ascending" style="width: 20%;">Company Name</th>
                  <th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 10%;">Ratings</th>
                  <th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 10%;">Date</th>
                  <th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 50%;">Comments</th>
                </tr>
              </thead>

              <tbody>
              <tr>
                          <?php
                          $query = "select * from feedback";
                          $result = mysqli_query($connect,$query);
                          while($row = mysqli_fetch_assoc($result))
                          {
                            $new = $row['Job_SeekerID']; 
                            $sql2 = "select * from job_seekerinfo WHERE Job_SeekerID = '$new'";
                            $result2 = mysqli_query($connect,$sql2);
                            $row2 = mysqli_fetch_assoc($result2);
                            if(is_array($row2)){
                            
                            $new2 = $row['CompanyID']; 
                            $sql3 = "select CompanyName from company_info WHERE CompanyID = '$new2'";
                            $result3 = mysqli_query($connect,$sql3);
                            $row3 = mysqli_fetch_assoc($result3);
                            if(is_array($row3)){
                          ?>
                          <td><?php echo $row2['Job_SeekerUsername']; ?></td>
                          <td><?php echo $row3['CompanyName']; ?></td>
                          <td><?php echo $row['FeedBackScore']; ?></td>
                          <td><?php echo $row['Date']; ?></td>
                          <td><?php echo $row['FeedBackComments']; ?></td>
                        </tr>
                        <?php
                          }
                        }
                      }
                        ?>
              </tbody>
            </table>
          
          </div>
          </div>
        </div>
      </div>
    </div>

    </div>
  </section>

</body>
</html>

<script src="script.js"></script>