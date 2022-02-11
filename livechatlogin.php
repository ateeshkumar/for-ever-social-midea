<?php
include_once "header.php";
 ?>
<body>
    <div class="wraper">
    <section class="form login">
    <header>Forever</header>
    <form action="#">
        <div class="error-txt"></div>
        <div class="field">
            <label for="Email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your Email">
        </div>
        <div class="field">
            <label for="name">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <i class="fa fa-eye"></i>
        </div>
        
        <div class="field button">
            <input type="submit" name="submit" id="submit" value="Continue to chat">
        </div>
    </form>
    <div class="link">
        Not yet signed up? <a href="livechatsignup.php">Sign up</a>
    </div>
    </section>
</div>
<script src="js/pass-show.js"></script>
<script src="js/login.js"></script>
</body>
</html>