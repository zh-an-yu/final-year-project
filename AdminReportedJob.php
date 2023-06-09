<?php include("admin_session.php"); ?>
<?php
require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Reported Job</title>
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
          <a href="AdminReportedJob.php"  class="active">
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
      <div class="title">Reported Job</div>
      <div class="applicant-boxes">
        <div class="recent-applicant">
          
          <div class="table">
            <table>
              <thead>
                <tr>
                    <th>Report ID</th>
                    <th>Job Listing ID</th>
                    <th>Job Title</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Company Name</th>
                    <th>Company ID</th>
                    <th>Reporter Name</th>
                    <th>Reporter ID</th>
                    <th>Reason</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                  $sql = "select * from report";
                  $result = mysqli_query($connect,$sql);
                  while($row = mysqli_fetch_assoc($result))
                  {
                    $new = $row['JobListingID']; 
                    $sql2 = "select * from joblisting WHERE JobListingID = '$new'";
                    $result2 = mysqli_query($connect,$sql2);
                    $row2 = mysqli_fetch_assoc($result2);
                    if(is_array($row2)){

                    $new2 = $row2['JobCategoryID']; 
                    $sql3 = "select * from joblisting WHERE JobCategoryID = '$new2'";
                    $result3 = mysqli_query($connect,$sql3);
                    $row3 = mysqli_fetch_assoc($result3);
                    if(is_array($row3)){

                    $new3 = $row2['CompanyID']; 
                    $sql4 = "select * from company_info WHERE CompanyID = '$new3'";
                    $result4 = mysqli_query($connect,$sql4);
                    $row4 = mysqli_fetch_assoc($result4);
                    if(is_array($row4)){

                    $new4 = $row['Job_SeekerID']; 
                    $sql5 = "select * from job_seekerinfo WHERE Job_SeekerID = '$new4'";
                    $result5 = mysqli_query($connect,$sql5);
                    $row5 = mysqli_fetch_assoc($result5);
                    if(is_array($row5)){

                  ?>
                  <td><?php echo $row['ReportID']; ?></td>
                  <td><?php echo $row2['JobListingID']; ?></td>
                  <td><?php echo $row2['JobTitle']; ?></td>
                  <td><?php echo $row3['JobCategoryID']; ?></td>
                  <td><?php echo $row2['JobDate']; ?></td>
                  <td><?php echo $row4['CompanyName']; ?></td>
                  <td><?php echo $row4['CompanyID']; ?></td>
                  <td><?php echo $row5['Job_SeekerFullname']; ?></td>
                  <td><?php echo $row5['Job_SeekerID']; ?></td>
                  <td><?php echo $row['Reason_for_report']; ?></td>
                  <td >
                <button class="btn btn-sm btn-primary view_vacancy" type="button" >View</button>
                <button class="btn btn-sm btn-danger delete_vacancy" type="button" >Delete</button>
                  </td>
                </tr>
                <?php
                  }
                }
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
  </section>

</body>
</html>

<script src="script.js"></script>