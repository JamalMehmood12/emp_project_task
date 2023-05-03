<!DOCTYPE html>
<?php
$conn =mysqli_connect("localhost","root","","emp_system") or die("connection failed");
session_start();
if(!isset($_SESSION['username']))
{
    header("Location:http://localhost:7882/emp_project/admin/");
}
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>EMS Panel</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="../css/font-awesome.css">
        <!-- Custom stlylesheet -->
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <!-- HEADER -->
        <div id="header-admin">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-2">
                        <a href="task.php">
                        <h2 style="color:white;font-weight:25px; font-weight:700;">EMS</h2>
                    </div>
                    <!-- /LOGO -->
                      <!-- LOGO-Out -->
                    <div class="col-md-offset-9  col-md-1">
                        <a href="logout.php" class="admin-logout" >logout</a>
                    </div>
                    <!-- /LOGO-Out -->
                </div>
            </div>
        </div>
        <!-- /HEADER -->
        <!-- Menu Bar -->
        <div id="admin-menubar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <ul class="admin-menu">
                         
                         
                            <li>
                                <a href="task.php">Dashoard</a>
                            </li>
                            <?php
                         if($_SESSION["user_role"] == 1)
                            {  
                            ?>
                            <li>
                            <a href="task.php">Task Assign</a>
                            </li>
                            <li>
                                <a href="employee.php">Employee</a>
                            </li>
                            <!-- <li>
                                <a href="category.php">Task Assign</a>
                            </li> -->
                            
                            <?php
                            }
                            ?>
                       </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Menu Bar -->
