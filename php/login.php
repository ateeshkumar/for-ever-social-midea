<?php

session_start();
include_once "config.php";
$email = mysqli_real_escape_string($connection, $_POST['email']);
$password = mysqli_real_escape_string($connection, $_POST['password']);

if (!empty($email) && !empty($password)) {
    $sql = mysqli_query($connection,"SELECT * FROM signupdata WHERE email='{$email}' AND password = '{$password}'");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
        $_SESSION['unique_id'] = $row['unique_id'];
        echo "success";
    } else {
        echo " Email or password is incorrect";
    }
    
} else {
    echo " All input field are requere";
}

?>