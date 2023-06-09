<?php
// Start the sessioninclude("connect.php"); 
    session_start();
    include("connect.php");
    if(!isset($_SESSION['adminusername'])&&!isset($_SESSION['adminpassword'])) // The exact conditional depends on your login-system implementation
    {
        ?>
            <script type='text/javascript'>
                alert('Please login first !');
                window.location.href="AdminLogin.php";
            </script>
        <?php
    }
    else 
    {
        $username = $_SESSION["adminusername"];
        $password = $_SESSION["adminpassword"];
        $adminid = $_SESSION["adminid"];

    }
?>