<?php
$conn=mysqli_connect("localhost","root","","emp_system") or die("connection failed");
session_start();
session_unset();
session_destroy();
header("Location:http://localhost:7882/emp_project/emp_dashboard");
?>