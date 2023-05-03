<?php include "header.php"; ?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Task</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="add-task.php">add New Tasks</a>
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
              $sql ="SELECT * FROM tasks";
              $result =mysqli_query($conn,$sql) or die("query failed");
              if(mysqli_num_rows($result)>0)
              {
              ?>
                <table class="content-table">
                    <thead>
                        <th>S.No.</th>
                        <th>Task Name</th>
                        <th>Task Description</th>
                        <th>status</th>
                        <th>View</th>
                        <th>Process</th>
                    </thead>
                    <tbody>
                    <?php while($row=mysqli_fetch_assoc($result)) {?>
                        <tr>
                            <td class='id'><?php echo $row['task']; ?></td>
                            <td><?php echo $row['task_name']; ?></td>
                            <td><?php echo $row['task_description']; ?></td>
                            <td>
                            <?php
                            if($row['status']==1)
                            {
                              echo " <option value='0'>Pending</option>
                                      <option value='1'selected>Completed</option>";
                            }
                            else
                            {
                                echo " <option value='0'selected>Pending</option>
                                      <option value='1'>Completed</option>"; 
                            }

                           ?>
                              
                              <?php 
                            //  if($row['status']='0')
                            //  echo "Pending";
                            //  else
                            //  {
                             //   echo "Compelted";
                            //  }
                              
                              
                              ?></td>
                            <td class='edit'><a href='viewtask.php?id=<?php echo $row['task']; ?>'><button>View</button></a></td>
                            <td class='delete'><a href='delete-category.php?id=<?php echo $row['task']; ?>'><button>Process</button></a></td>
                        </tr>
                    <?php  } ?>         
                    </tbody>
                    <?php } ?>
                </table>
                <?php
                
                    $sql1="SELECT * FROM tasks";
                

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

                <!-- <ul class='pagination admin-pagination'>
                    <li class="active"><a>1</a></li>
                </ul> -->
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
