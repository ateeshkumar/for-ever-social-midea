<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
    header ("location: livechatlogin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Forever</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <nav class="navbar">
    <?php
    include_once "php/config.php";
    $sql = mysqli_query($connection,"SELECT * FROM signupdata WHERE unique_id='{$_SESSION['unique_id']}'");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
            }
    ?>
        <img src="img/logo1.png" class="logo1" alt="logo">
        <div class="icon">
        <i class="fa fa-search"></i>
        <input type="text"  name="search" id="search" placeholder="Search Forever">
        </div>
        <ul class="nav-list">
            <li><a href="home.php"><i class="fa fa-home"></i></a></li>
            <li><a href="www.youtube.com"><i class="fa fa-youtube"></i></a></li>
            <li><a href="http://"><i class="fa fa-group"></i></a></li>
            <li><a href="http://"><i class="fa fa-internet-explorer"></i></a></li>
            <li><a href="http://"><div class="profile"><img src="php/image/<?php echo $row['img'];?>" alt="pic"><?php echo $row['fname'];?></div></a></li>
            <li><a href="livechatuser.php"><i class="fa fa-wechat"></i></a></li>
            <li><a href="http://"><i class="fa fa-bell"></i></a></li>
        </ul>
    </nav>
    <div class="section">
    <div class="left">

    </div>
    <div class="midil">

    </div>
    <div class="right">

    </div>
</div>
</body>
</html>