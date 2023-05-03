<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Employee</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
              <?php
                 $conn=mysqli_connect("localhost","root","","emp_system") or die("connection failed");
                 $emp_id=$_GET['id'];
                 $sql1 ="SELECT * FROM `employees`WHERE EmployeeId =$emp_id";
                 $result1=mysqli_query($conn,$sql1) or die("query failed");
                 if(mysqli_num_rows($result1)>0)
                {
                while($row1= mysqli_fetch_assoc($result1))
                {
                  ?>
                  <form action="<?php $_SERVER['PHP_SELF']?>" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="emp_id"  class="form-control" value="<?php echo $row1['EmployeeId']; ?>" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Employee Name</label>
                          <input type="text" name="Emp_name" class="form-control" value="<?php echo $row1['UserName']; ?>"  placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Email Address</label>
                          <input type="text" name="Email_address" class="form-control" value="<?php echo $row1['Email']; ?>"  placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Job Title</label>
                          <input type="text" name="Job_title" class="form-control" value="<?php echo $row1['job_Title']; ?>"  placeholder="" required>
                      </div>
                      <input type="submit" name="sumbit" class="btn btn-primary" value="Update" required />
                  </form>
                  <?php
                    }
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
<?php include "footer.php"; ?>
