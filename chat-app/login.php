<?php 
session_start();
if(isset($_SESSION['unique_id'])){ //if user is logged in
    header("location: users.php");
}
?>
<?php include_once "php/header.php"; ?>
<body>
<div id="particles-js"></div>
    <div class="wrapper">
        <section class="form login">
            <header>Chat App </header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt"></div>


                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password" required>
                    <i class="fa fa-eye"></i>
                </div>

                <div class="field button">
                    <label></label>
                    <button type="button" class="login-btn">Continue to chat</button>
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Signup Now</a></div>
        </section>
    </div>
    <script src="Javascript/Javascriptpassshowhide.js"></script>
    <script src="Javascript/login.js"></script>
    <script type="text/javascript" src="Javascript/particles.min.js"></script>
    <script type="text/javascript" src="Javascript/app.js"></script>

</body>
    
    
    






















