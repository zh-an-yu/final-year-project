<?php
require_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Jobs</title>
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
                      <a href="CompanyPostJob.php">Post A Job</a>
                    </div>
                    
                  </div>
                  
                </div>
            </div>
        <div class="all-boxes">
            <div class="title">Posted Job</div>

            <div class="applicant-boxes">
              <div class="recent-applicant">
        <div class="table">

        <table>
            
            <thead>
                <tr role="row"><th class="text-center sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 10.3375px;">ID</th>
                  <th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Vacancy Information: activate to sort column ascending" style="width: 124.287px;">Vacancy Information</th>

                  <th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 51.525px;">Position</th>
                  <th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 51.525px;">Action</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                          <?php
                          $query = "select * from joblisting";
                          $result = mysqli_query($connect,$query);
                          while($row = mysqli_fetch_assoc($result))
                          {
                          ?>
                          <td><?php echo $row['JobListingID']; ?></td>
                          <td><?php echo $row['JobTitle']; ?></td>
                          <td><?php echo $row['JobType']; ?></td>
                          <td class="text-center">
                        <button class="btn btn-sm btn-primary view_vacancy" type="button" data-id="2">View</button>
                        <button class="btn btn-sm btn-primary edit_vacancy" type="button" data-id="2">Edit</button>
                        <button class="btn btn-sm btn-danger delete_vacancy" type="button" data-id="2">Delete</button>
                        </td>
            </tr>
                        <?php
                          }
                        ?>
            </tbody>
        </table>
         </div>   
            </div>    
        </div> 
        </div>
  
        </div>








   </body>
</html>


<script src="script.js"></script>