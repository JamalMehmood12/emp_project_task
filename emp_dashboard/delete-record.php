<?php
$conn=mysqli_connect("localhost","root","","emp_system") or die("connection failed");
$user_id=$_GET['id'];
$sql="DELETE FROM users WHERE user_id=$user_id";
if(mysqli_query($conn,$sql)or die("query failed"))
{
    header("Location:http://localhost:7882/emp_project/admin/users.php");
}
else
{
    echo "Record can,t delted";
}

mysqli_close($conn);

?>