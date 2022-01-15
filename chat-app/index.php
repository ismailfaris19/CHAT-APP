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
        <section class="form signup">
            <header>Chat App </header>
            <form action="#" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt"></div>
                <div class="name-details">

                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>

                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter new password" required>
                    <i class="fa fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file" name="image" required>
                </div>
                <div class="field button">
                    <label></label>
                    <button type="button" class="login-btn">Continue to chat</button>
                </div>
                
            </form>
            <div class="link">Already signed up? <a href="login.php">Login Now</a></div>
        </section>
    </div>
    
    <script src="Javascript/Javascriptpassshowhide.js"></script>
    <script src="Javascript/signup.js"></script>
    <script type="text/javascript" src="Javascript/particles.min.js"></script>
    <script type="text/javascript" src="Javascript/app.js"></script>
</body>


