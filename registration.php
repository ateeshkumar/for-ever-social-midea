<?php
$connection= mysqli_connect('localhost','root');
if ($connection) {
    echo "connection is successful";
} else {
    echo "connection is faield";
}
mysqli_select_db($connection,'forever');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$gender = $_POST['r'];
$birthday= $_POST['start'];
$phone= $_POST['phone'];
$password =$_POST['password'];
$data = "INSERT INTO data (fname,lname,email,gender,birth,phone,password) VALUE('$fname','$lname','$email','$gender','$birthday','$phone','$password')";
mysqli_query ($connection, $data);
header("location:login.html");
?>