<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading">View Task</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
              <?php
                 $conn=mysqli_connect("localhost","root","","emp_system") or die("connection failed");
                 $task_id=$_GET['id'];
                 $sql1 ="SELECT * FROM `tasks`WHERE task =$task_id";
                 $result1=mysqli_query($conn,$sql1) or die("query failed");
                 if(mysqli_num_rows($result1)>0)
                {
                while($row1= mysqli_fetch_assoc($result1))
                {
                  ?>
                
                  <form action="" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="task_id"  class="form-control" value="<?php echo $row1['task']; ?>" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Task Name</label>
                          <input type="text" name="Emp_name" class="form-control" value="<?php echo $row1['task_name']; ?>"  placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Task Description</label>
                          <input type="text" name="Task_description" class="form-control" value="<?php echo $row1['task_description']; ?>"  placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Status</label>
                          <input type="text" name="Status" class="form-control" value="<?php echo $row1['status']; ?>"  placeholder="" required>
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
