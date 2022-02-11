<?php
include_once "header.php";
 ?>
<body>
    <div class="wraper">
    <section class="form signup">
    <header>Forever</header>
    <form action="#" enctype="multipart/form-data">
        <div class="error-txt">This is an error!</div>
        <div class="name-detail">
        <div class="field">
            <label for="fname">Frist Name</label>
            <input type="text" name="fname" id="fname" placeholder="Frist name" require>
        </div>
        <div class="field">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname" placeholder="Last name" require>
        </div>
</div>
        <div class="field">
            <label for="Email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your Email" require>
        </div>
        <div class="field">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" placeholder="Enter your password" require>
            <i class="fa fa-eye"></i>
        </div>
        <div class="field image">
            <label for="name">Select image</label>
            <input type="file" name="file" id="file" >
        </div>
        <div class="field button">
            <input type="submit" name="submit" id="submit" value="Continue to chat">
        </div>
    </form>
    <div class="link">
        Already sign up? <a href="livechatlogin.php">Login in</a>
    </div>
    </section>
</div>
<script src="js/pass-show.js"></script>
<script src="js/signup.js"></script>
</body>
</html>