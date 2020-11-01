<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NPRU Alumni</title>
    <link rel = "stylesheet" type = "text/css" 
		 href = "<?php echo base_url(); ?>css/styles.css">
</head>
<body style="background-image: url('<?php echo base_url(); ?>img/software.png');">
    <!---<div class="imgBg">
        <img src="<?php echo base_url();?>img/soft.png" alt="">
    </div>--->
    <div class="container">
        <a href="#" class="button" id="button">Login</a>
        <a href="../Alumni/register" class="button" id="button">Register</a>
    </div>

    <div class="popup">
            <div class="popup-content">
                <img class="close" src="<?php echo base_url(); ?>img/error.png" alt="close">
                <img class="profile-icon" src="<?php echo base_url(); ?>img/profileUser.png" alt="user">
                <form action="../Alumni/Check_Login" method="post">
                <input name="Username" type="text" placeholder="Username">
                <input name="Password" type="password" placeholder="Password">
                <br><br>
                <input class="button" type="submit" name="login"  value="Login" />
                </form>
                <br>
                <a href="../Alumni/register" class="button">If you don't Register</a>
            </div>
    </div>

<script src="<?php echo base_url(); ?>js/popup.js"></script>
</body>
</html>