<?php
session_start();
require('config.php');
require('common.php');
function page_head()
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>DronaMaps</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
</head>

<?php
}

function body_head()
{
?>
<div id="header">

	<div id="header_inner" class="fixed">

		<div id="logo">
			<h1><span><bold>DronaMaps</bold></span></h1>
			<h2></h2>
		</div>
		
		<div id="menu">
			<ul>
				<li><a href="#" class="active">Home</a></li>
				<?php
				if(isset($_SESSION['sid']))
				{
				?>
				<li><a href="#">Profile</a></li>
				<li><a href="upload.php">Upload Photo</a></li>
				<li><a href="logout.php">Logout</a></li>

				<?php
				}
				else
				{
				?>
				<li><a href="registration.php">Register</a></li>
				<li><a href="login.php">Login</a></li>
				<?php } ?>
			    <li><a href="Business.php">Reach</a></li>
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="contactus.php">Contact US</a></li>
			</ul>
		</div>
		
	</div>
</div>
<?php
}

function sidebar1()
{
?>
<div id="columnB_3columns">
				<!--
				<h4><span>Search</span></h4>
				
				<form method="post" action="">
				<div id="search">
					<input type="text" class="text" name="keywords" />
					<input type="submit" class="button" value="Go" />
					<br class="clear" />
				</div>
				</form>
				-->
				<?php
				if(isset($_SESSION['sid'])) {
				?>
				<h4>Hello <?php user_name($_SESSION['sid']); ?>!</h4><br/>
				<?php } ?>
				<h4><span>Contest</span> </h4>
				<p> <a href="#"></a></p>
	
				<h4><span>User </span>Menu</h4>
				<ul class="links">
				<li class="first"><a href="editprofile.php">Edit Profile</a></li>
				<li><a href="changepic.php">Change Profile Picture</a></li>
				
				<li><a href="nextround.php">Business Enquiry</a></li>
				
				
				</ul>

			</div>
<?php
}

function sidebar2()
{
?>
<div id="columnC_3columns">
	
				<h4><span>Recent </span>Users</h4>
				<ul class="links">
				<?php
				$query="select user_id from soc_user order by user_addon desc limit 3";
				$result=mysql_query($query);
				while($row=mysql_fetch_assoc($result))
				{
				?>
				<li style="text-align:center;">
				<a href="viewprofile.php?uid=<?php echo $row['user_id']; ?>">
				<img src="user_ppic/<?php echo user_img($row['user_id']); ?>" style="max-width:100px;">
				<br/><?php echo user_det($row['user_id'],"user_name"); ?>
				</a></li>
				<?php
				}
				?>				
				
	
				<h4><span>Cool Stuff</h4>
				<ul class="links">
				<li class="first"><a href="https://www.dronamaps.com">Company information</a></li>
				
				</ul>

			</div>

<?php
}

function footer()
{
?>

<div id="footer" class="fixed">
	Copyright &copy; 2018 Your Website. All rights reserved. Design by <a href="#">vijay bhan</a>
</div>
<?php
}
?>