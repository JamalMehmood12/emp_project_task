<?php

if(isset($_POST['save']))

session_start();
$conn =mysqli_connect("localhost","root","","emp_system") or die("connection failed");
$title =$_POST['task_name'];
$des=$_POST['taskdesc'];
$assign_to=$_POST['assign_to'];
$date=date("y,d,M");
$status=$_POST['status'];
// $author=$_SESSION['user_id'];

$sql ="INSERT INTO tasks (task_name,task_description,assigned_to,assign_date,status)VALUES('$title','$des','$assign_to','$date','$status');";
// $sql .="UPDATE category SET post=post+1 WHERE category_id={$category}";
if(mysqli_multi_query($conn,$sql))
{
    header("Location:http://localhost:7882/emp_project//admin/task.php");
}
else{
    echo "Query Failed";
}




?>