<?php
// if(isset($_POST['submit']))
// {
$conn =mysqli_connect("localhost","root","","emp_system") or die("connection failed");
$cat_name=mysqli_real_escape_string($conn,$_POST['cat_name']);
$sql ="UPDATE category SET category_name = 'cat_name' WHERE category_id = 'cat_id'";
if(mysqli_query($conn,$sql) or die("query failed"));
{
    header("Location:http://localhost:7882/emp_project/admin/task.php");
}

// else
// {
//     echo "Query Failed";
// } 


?>