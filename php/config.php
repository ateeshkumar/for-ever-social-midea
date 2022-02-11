<?php
$connection = mysqli_connect("localhost","root","","livechat");
if ($connection) {
    // echo "database connected".mysqli_connect_error();
}
else {
    echo "connection is faield";
}
?>