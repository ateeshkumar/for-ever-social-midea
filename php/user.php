<?php
session_start();
include_once "config.php";
$sql = mysqli_query($connection,"SELECT * FROM signupdata");
$output ="";

$row = mysqli_fetch_assoc($sql);
if (mysqli_num_rows($sql)==1) {
    $output .= "No user are available to chat";
} elseif(mysqli_num_rows($sql)> 0) {
    while ($row) {
        $output .= '<a href="livechat.php">
        <div class="container">
            <img src="php/image/'. $row['img'] . '" alt="logo" >
            <div class="detail">
                <span>'. $row['fname'] . " " . $row['lname'] .'</span>
                <p>This is test massage</p>
            </div>
            </div>
            <div class="status-dot"><i class="fa fa-circle"></i></div>
    </a>';
    }
   echo $output; 
}


?>
