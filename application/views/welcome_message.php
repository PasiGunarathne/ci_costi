<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #fff;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	.bodylogin{
    width:100%;
    background: url(images/A.jpg)no-repeat center top;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-position: center;
    background-size: 100% 100%;
    height:100%;
    padding:30% 0;
    font-family: sans-serif;
}

.login-box{
    width: 400px;
    height: 600px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 35%;
    left: 40%;
    position: absolute;
    trasform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 70px 30px;

}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
    
}

.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
    
}
.login-box input[type="submit"]{
    border: none;
    outline: none;
    height: 40px;
    background: #17A445;
}

.avatar{
    width: 150px;
    height: 150px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(45% - 50px);


}
	</style>
</head>
<body>

<div class="bodylogin">
    <div class="login-box">
    <img src="images/team1.jpg" class="avatar">
    <br>
    <br>
    <h1>Login here</h1>
    <br>
    <form method="post" >
        <p>Username</p>
        <input type="text" name="user" placeholder="Enter Username" required="required">
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter Password" required="required">
        <input type="submit" name="submit" value="Login">
    </form>
        <?php
    echo form_open('/Email_controller/send_email');
?>
     <!-- <input type="email" name="email" required=""/> -->
     <input type="submit" value="Forgot Password" >
<?php
    echo form_close();


     ?>
        <!-- <a href="#">Forgot Password</a> -->
        
    

</div>
</div>

</body>
</html>
<!-- 
<?php
    echo form_open('/Email_controller/send_email');
?>
     <input type="email" name="email" required=""/>
     <input type="submit" value="SEND MAIL" >
<?php
    echo form_close();


     ?> -->