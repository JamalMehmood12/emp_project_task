<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">Employee</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-employee.php">add Employee</a>
              </div>
              <div class="col-md-12">
              <?php
              $conn=mysqli_connect("localhost","root","","emp_system") or die("connection failed");
              $limit = 3;
              if(isset($_GET['page']))
              {
                $page=$_GET['page'];
              }
              else
              {
                 $page =1;
              }
              $offset=($page-1)*1;
              $sql ="SELECT * FROM employees";
              $result =mysqli_query($conn,$sql) or die("query failed");
              if(mysqli_num_rows($result)>0)
              {
              ?>
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>UserName</th>
                          <th>Email</th>
                          <th>Job_Title</th>
                          <th>UserRole</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                      <?php while($row=mysqli_fetch_assoc($result)) {?>
                        <tr>
                            <td class='id'><?php echo $row['EmployeeId']; ?></td>
                            <td><?php echo $row['UserName']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['job_Title']; ?></td>
                            <td>
                            <?php 
                              if($row['UserRole']==1)
                              echo "Admin";
                              else
                              {
                                echo "Employee";
                              }
                              
                              
                              ?> 
                          </td>
                            <td class='edit'><a href='update-category.php?id=<?php echo $row['category_id']; ?>'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='deletecategory.php?id=<?php echo $row['category_id']; ?>'><i class='fa fa-trash-o'></i></a></td>
                        </tr> 
                        <?php  } ?>         
                    </tbody>
                    <?php } ?>
                </table>
                <?php
                  $sql1="SELECT * FROM employees";
                  $result1=mysqli_query($conn,$sql1) or die("query failed");
                  if(mysqli_num_rows($result1)>0)
                  {
                    $total_records =mysqli_num_rows($result1);
                    $total_page =ceil($total_records/$limit);
                    echo '<ul class="pagination admin-pagination">';
                    if($page>1)
                    {
                    echo '<li><a href="category.php?page='.($page-1).'">Previous</a></li>';
                    }
                    for($i=1; $i<=$total_page; $i++){
                    if($i==$page)
                    {
                       $active ="active";
                    }
                    else
                    {
                        $active ="";
                    }
        
                    echo '<li class="'.$active.'"><a href="category.php?page='.$i.'">'.$i.'</a></li>'; 
                    
                  }
                  if($total_page>$page)
                    {
                    echo '<li><a href="category.php?page='.($page+1).'">Next</a></li>';
                    }  
                  echo '</ul>';
                }
                  ?>

              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
