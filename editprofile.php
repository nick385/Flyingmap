<?php require('layout.php'); ?>
<?php page_head(); ?>
<body>

<?php body_head(); ?>

<div id="main">

	<div id="main_inner" class="fixed">

		<div id="primaryContent_3columns">

			<div id="columnA_3columns">
			<?php $id=$_SESSION['sid']; ?>
			<?php
			if(isset($_POST['uname']))
			{
				//print_r($_POST);
				$query="update soc_user set user_name='".$_POST['uname']."',user_city='".$_POST['city']."',user_about='".$_POST['about']."',user_music='".$_POST['music']."',user_hobbies='".$_POST['hobbies']."',user_sports='".$_POST['sports']."',user_political='".$_POST['political']."' where user_id='".$_SESSION['sid']."'";
				$result=mysql_query($query);
				header("Location:editprofile.php");
			}
			else
			{			
			?>
			<div style="background-color:turquoise; padding:10px;">
			<h3>Edit Profile</h3>
			<form name="editprofile" action="editprofile.php" method="post">
			<table cellspacing="10">
			<tr><td>Name:</td><td><input type="text" name="uname" value="<?php user_name($id); ?>"></td></tr>
			<tr>
			<td>City</td>
			<td>
			<select name="city">
			<?php
			$query="select * from soc_city order by city_name asc";
			$result=mysql_query($query);
			while($row=mysql_fetch_assoc($result))
			{
			?>
			<option value="<?php echo $row['city_id']; ?>" <?php if($row['city_id']==user_det($id,"user_city")) { echo " selected"; } ?>><?php echo $row['city_name']; ?></option>
			<?php
			}
			?>
			</select>
			</td>
			</tr>
			<tr><td valign="top">About:</td><td><textarea name="about"><?php echo user_det($id,"user_about"); ?></textarea></td></tr>
			<tr><td valign="top">Hobbies:</td><td><textarea name="hobbies"><?php echo user_det($id,"user_hobbies"); ?></textarea></td></tr>
			<tr><td valign="top">Music:</td><td><textarea name="music"><?php echo user_det($id,"user_music"); ?></textarea></td></tr>
			<tr><td valign="top">Sports:</td><td><textarea name="sports"><?php echo user_det($id,"user_sports"); ?></textarea></td></tr>
			<tr><td valign="top">Political View:</td><td><textarea name="political"><?php echo user_det($id,"user_political"); ?></textarea></td></tr>
			<tr><td></td><td><input type="submit" value="submit"></td></tr>
			</table>
			</form>
			</div>
			<?php } ?>
			
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