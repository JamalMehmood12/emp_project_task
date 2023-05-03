<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add Task</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form action="savetask.php" method="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Task Name</label>
                          <input type="text" name="task_name" class="form-control" placeholder="task Name" required>
                      </div>
                      <div class="form-group">
                      <label> Description</label>
                       <textarea name="taskdesc" class="form-control"  required rows="5"></textarea>
                    </div>
                    <div class="form-group">
                <label>Assign To</label>
                <select class="form-control" name="assign_to">
                   <?php
                   $conn=mysqli_connect("localhost","root","","emp_system") or die("connection failed");
                   $sql1 ="SELECT * FROM `employees`";
                    $result=mysqli_query($conn,$sql1) or die("query failed");
                    if(mysqli_num_rows($result)>0)
                    {
                       while($row= mysqli_fetch_assoc($result))
                       {
                           echo "<option value={$row['EmployeeId']}>{$row['UserName']}</option>";
                       }
                    }
                   ?>
                </select>
                  </div>
                   <div class="form-group">
                   <label>Status</label>
                   <input type="date" id="date" name="date">
                    </div>
                    <div class="form-group">
                          <label>Status</label>
                          <div class="form-group">
                          <select class="form-control" name="status" >
                              <option value="0">Pending </option>
                              <option value="1">Completed </option>
                              <!-- <option value="1">Admin</option> -->
                          </select> 
                          </div>
                          <label>User Role</label>
                          <select class="form-control" name="role" >
                              <option value="0">Normal User</option>
                              <option value="1">Admin</option>
                          </select> 
                  </div>
                      <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                  </form>
                  <!-- /Form End -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
