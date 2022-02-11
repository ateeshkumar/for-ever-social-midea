<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
    header ("location: livechatlogin.php");
}
?>
<?php
include_once "header.php";
 ?>
<body>
    <div class="wraper">
        <section class="user">
            <header>


                <?php
                include_once "php/config.php";
                $sql = mysqli_query($connection,"SELECT * FROM signupdata WHERE unique_id='{$_SESSION['unique_id']}'");
                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }
                ?>
                <div class="container">
                    <img src="php/image/<?php echo $row['img'];?>" alt="logo" >
                    <div class="detail">
                        <span><?php echo $row['fname'] . " " . $row['lname'];?></span>
                        <p><?php echo $row['status'];?></php></p>
                    </div>
                </div>
                <a href="http://" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select an user to start chat</span>
                <input type="text" name="ser" id="ser" placeholder="Enter name to search...">
                <button>
                <i class="fa fa-search"></i>
                </button>
            </div>
            <div class="user-list">
                
                
            </div>
        </section>
    </div>
<script src="js/user.js"></script>
</body>
</html>