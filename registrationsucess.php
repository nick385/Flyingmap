<?php require('layout.php'); ?>
<?php page_head(); ?>
<body>

<?php body_head(); ?>

<div id="main">

	<div id="main_inner" class="fixed">

		<div id="primaryContent_3columns">

			<div id="columnA_3columns">
		
			<h3>Registration Status</h3>	
			<?php 
			//print_r($_POST); 
			$q1="select count(*) from soc_user where user_email='".$_POST['email']."'";
			$r1=mysql_query($q1);
			$ro1=mysql_fetch_assoc($r1);
			if($ro1['count(*)']>0)
			{
				echo "<font color='red'>Email already exist in our database. Please Try Forgot Password.</font>";
				?>
				<meta http-equiv="refresh" content="3;registration.php">
				<?php
			}
			else
			{
			$name=substr($_POST['uname'],0,3);
			$num1=rand(10000,99999);
			$num2=rand(10000,99999);
			$actcode=$name.$num1.$num2;
			
			$query="insert into soc_user (user_name,user_gender,user_city,user_email,user_pwd,user_dob,user_addon,user_actcode,user_status) values ('".$_POST['uname']."','".$_POST['gender']."','".$_POST['city']."','".$_POST['email']."','".$_POST['pwd']."','".$_POST['dob']."',now(),'".$actcode."','0')";
			$result=mysql_query($query);
			echo "User registered sucessfully.";
			}
			?>
			<br/>
			Activation Link:<br/>
			<a href="activateaccount.php?email=<?php echo $_POST['email']; ?>&actcode=<?php echo $actcode; ?>">Activate Now</a>
			</div>
	
		</div>
		
		<div id="secondaryContent_3columns">
		
			<?php sidebar1(); ?>			
			<?php sidebar2(); ?>
		</div>

		<br class="clear" />

	</div>

</div>
<?php footer(); ?>

</body>
</html>