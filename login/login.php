<?php
	session_start();
	include "connect.php";
	if (isset($_POST['submit'])) {
		$mail =$_POST['mail'];
		$pass =$_POST['pass'];
		$sql="SELECT Email,Password  FROM users";
		$result=$con->query($sql);
		 while ($data=$result->fetch_assoc()) {
			$m=$data['Email'];
			$p=$data['Password'];
			 if ($mail===$m AND $pass===$p) {
				header("location:../member.php");
			}else{
				echo "NOPE! WRONG!";
			}
		}
	}
?>
<!DOCTYPE html>
	<html>
	<head>
		<img="../images/header&footer/banner.jpg" class="image" />
		<title>Log in</title>
		<link rel="stylesheet" type="text/css" href="loginStylesheet.css">
	</head>
	<body>
		<div id="wrapper">
		<div id="banner">
			<p><b>Welcome to The Quintessential Gamer!</b></p>
		</div>
		<header>
				<div class="left-header">
					<ul id="nav">
						<li><a href="../index.php">Home</a></li>
						<li><a href="../schedule.php">Schedule</a></li>
						<li><a href="../merch.php">Store</a></li>
						<li><a href="../followMe.php">Follow Me</a></li>
						<li><a href="../aboutMe.php">About Me</a></li>
						<li><a href="../login/loginPage.php">Login</a></li>

					</ul>
			</div>
			</header>
			<div class="right-header">
				<ul>
					<li><a href="loginPage.php" class="log_sign">Sign up</a></li>
					<li><a href="login.php" class="log_in">Login</a></li>
				</ul><br>
			</div>
		<div class="content">
			<form  method="POST" action="login.php">
				<h3><font color = "3E72F3"><font size = 45><center>Returning user?</center></font></font></h3>
				<table>
					<tr>
						<td>Your Email</td>
						<td><input type="email" name="mail" class="input_sign" placeholder="Your Email"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="Password" name="pass" class="input_sign" placeholder="Password"></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Login" class="input_sign_submit">

						</td>
						<br><br>
					</tr>

				</table>
				<br><br><br><br><br><br><br><br>
			</form>
		</div>
	</body>
	<footer>
		<p> All Rights Reserved</p>
	</footer>
</html>