<?php include("admin_session.php"); ?>
<?php
require_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Job Listing</title>
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
          <a href="AdminJobListing.php"  class="active">
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
      <a href="AdminAddAdmin.php" >
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
      <div class="title">Job Listing</div>
      <div class="applicant-boxes">
        <div class="recent-applicant">
          
          <div class="table">
            <table>
              <thead>
                <tr>
                    <th>Job Listing ID</th>
                    <th>Job Title</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Salary</th>
                    <th>Company Name</th>
                    <th>Company ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                
            <tr>
                          <?php
                          $sql = "select * from joblisting";
                          $result = mysqli_query($connect,$sql);
                          while($row = mysqli_fetch_assoc($result))
                          {
                            $new = $row['CompanyID']; 
                            $sql2 = "select * from company_info WHERE CompanyID = '$new'";
                            $result2 = mysqli_query($connect,$sql2);
                            $row2 = mysqli_fetch_assoc($result2);
                            if(is_array($row2)){
                          ?>
                          <td><?php echo $row['JobListingID']; ?></td>
                          <td><?php echo $row['JobTitle']; ?></td>
                          <td><?php echo $row['JobCategoryID']; ?></td>
                          <td><?php echo $row['JobDate']; ?></td>
                          <td><?php echo $row['JobSalary']; ?></td>
                          <td><?php echo $row2['CompanyName']; ?></td>
                          <td><?php echo $row['CompanyID']; ?></td>
                          <td >
                        <button class="btn btn-sm btn-primary view_vacancy" type="button" >View</button>
                        <button class="btn btn-sm btn-danger delete_vacancy" type="button" >Delete</button>
                          </td>
                        </tr>
                        <?php
                          }
                        }
                        ?>
          </tr>
                
                
            </tbody>
        </table>
              
          </div>
          
        </div>
        
      </div>
    </div>
    </div>
  </section>

</body>
</html>

<script src="script.js"></script>