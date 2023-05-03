<?php
$conn =mysqli_connect("localhost","root","","emp_system") or die("connection failed");
$emp_id =$_GET['id'];
$sql="DELETE FROM employees WHERE employeeId=$emp_id";
if(mysqli_query($conn,$sql) or die("query failed"))
{
    header("http://localhost:7882/emp_project/admin/employee.php");
}
else{
    echo "Record Can,t delete";
}
mysqli_close($conn);
?>