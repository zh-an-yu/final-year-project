<?php include("admin_session.php"); ?>
<?php

require_once('connect.php');
$query = "select * from message";
$result = mysqli_query($connect,$query);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Message</title>
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
          <a href="AdminMessage.php"  class="active">
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
      <a href="AdminAddAdmin.php" >
        <i class='bx bxs-user-badge'></i>
        <span class="links_name">New Admin</span>
      </a>
  </li>

        <li class="log_out">
          <a href="logout.php">
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
      <span class="admin_name">Kui Jun Fu</span>
      
    </div>
  </nav>
  
  <section class="home-section">
    <div class="home-content">
			<div class="all-boxes">
        <div class="title">Message</div>
        <div class="applicant-boxes">
          <div class="recent-applicant">
          <section class="body-content">
    
    <div class="job-applications">
        <table>
          <thead>
            <tr>
              <th>Job Seeker ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Message</th>
              
            </tr>
          </thead>
          <tbody>
          <tr>
                          <?php

                          while($row = mysqli_fetch_assoc($result))
                          {
                          ?>
                          <td><?php echo $row['Job_SeekerID']; ?></td>
                          <td><?php echo $row['Name']; ?></td>
                          <td><?php echo $row['Email']; ?></td>
                          <td><?php echo $row['Message']; ?></td>
                        </tr>
                        <?php
                          }
                        ?>

          </tbody>
        </table>
      </div>
      
  </section>


          </div>
          </div>
        </div>
      </div>
    </div>


</body>
</html>

<script src="script.js"></script>