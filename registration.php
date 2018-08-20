<?php require('layout.php'); ?>
<?php page_head(); ?>
<body>

<?php body_head(); ?>

<div id="main">

	<div id="main_inner" class="fixed">

		<div id="primaryContent_3columns">

			<div id="columnA_3columns">
		
			<h3>Register Now! Its Free!</h3>	
			<form name="register" action="registrationsucess.php" method="post">
			<table border="0" cellspacing="10">
			<tr><td>Name:</td><td><input type="text" name="uname"></td></tr>
			<tr><td>Gender:</td><td><input type="radio" name="gender" value="1"> Male<input type="radio" name="gender" value="0"> Female</td></tr>
			<tr><td>City:</td><td>
			<select name="city">
			<?php
			$query="select * from soc_city order by city_name asc";
			$result=mysql_query($query);
			while($row=mysql_fetch_assoc($result))
			{
			?>
			<option value="<?php echo $row['city_id']; ?>"><?php echo $row['city_name']; ?></option>
			<?php
			}
			?>
			</select>
			</td></tr>
			<tr><td>Date of Birth:</td><td><input type="text" name="dob" size="10">Format (yyyy-mm-dd)</td></tr>
			<tr><td>Email:</td><td><input type="text" name="email"></td></tr>
			<tr><td>Password:</td><td><input type="password" name="pwd"></td></tr>
			<tr><td></td><td><input type="submit" value="Register!" style="border:1px solid #000; padding:10px;"></td></tr>
			</table>	
			</form>
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