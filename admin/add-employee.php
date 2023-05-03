<?php include "header.php"; ?>
<?php
$conn =mysqli_connect("localhost","root","","emp_system") or die("connection failed");

if(isset($_POST['submit']))
{
 $username=mysqli_real_escape_string($conn,$_POST['username']);
 $email =mysqli_real_escape_string($conn,$_POST['email']);
 $pass=mysqli_real_escape_string($conn,md5($_POST['password']));
 $job_title =mysqli_real_escape_string($conn,$_POST['job_title']);
 $user_role =mysqli_real_escape_string($conn,$_POST['UserRole']);
 $sql="INSERT INTO employees (UserName,Email,Password,job_Title,UserRole)VALUES('$username','$email','$pass','$job_title','$user_role')";
 
 if(mysqli_query($conn,$sql) or die("query failed"));
 
 {
    header("Location:http://localhost:7882/emp_project/admin/employee.php");
 }
// }
}
?>
  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">New Employee</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <form  action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <label>Username</label>
                          <input type="text" name="username" class="form-control" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                          <label>Email</label>
                          <input type="text" name="email" class="form-control" value="" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                          <label>Job title</label>
                          <input type="text" name="job_title" class="form-control" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" >
                              <option value="0">Normal User</option>
                              <option value="1">Admin</option>
                          </select> 
                  </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                  </form>
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
