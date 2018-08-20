<?php require('layout.php'); ?>
<?php page_head(); ?>
<body>

<?php body_head(); ?>

<div id="main">

	<div id="main_inner" class="fixed">

		<div id="primaryContent_3columns">

			<div id="columnA_3columns">
				<?php $id=$_GET['uid']; ?>
				<h3><?php user_name($_REQUEST['uid']); ?></h3>
				<a href="wall.php?uid=<?php echo $id; ?>" style="background-color:rgb(30%,10%,60%); color:#fff; padding:5px;"><?php user_name($_REQUEST['uid']); ?>'s Wall</a>  
				<a href="#" style="background-color:rgb(30%,10%,60%); color:#fff; padding:5px;"><?php user_name($_REQUEST['uid']); ?>'s Photos</a>
				<img src="<?php echo $ppic; echo user_img($_GET['uid']) ?>" style="max-width:150px; float:right;">
				
				<table style="font-size:17px;" cellspacing="10">
				<tr><td>Gender:</td><td><?php gender(user_det($id,"user_gender")); ?></td></tr>
				<tr><td>City:</td><td><?php city(user_det($id,"user_city")); ?></td></tr>
				<tr><td>Email:</td><td><?php echo user_det($id,"user_email"); ?></td></tr>
				<tr><td>Date of Birth:</td><td><?php echo user_det($id,"user_dob"); ?></td></tr>
				<?php if(user_det($id,"user_about")!="") { ?>
				<tr><td>About:</td><td><?php echo user_det($id,"user_about"); ?></td></tr>
				<?php } ?>
				<?php if(user_det($id,"user_hobbies")!="") { ?>
				<tr><td>Hobbies:</td><td><?php echo user_det($id,"user_hobbies"); ?></td></tr>
				<?php } ?>
				<?php if(user_det($id,"user_music")!="") { ?>
				<tr><td>Music:</td><td><?php echo user_det($id,"user_music"); ?></td></tr>
				<?php } ?>
				<?php if(user_det($id,"user_sports")!="") { ?>
				<tr><td>Sports:</td><td><?php echo user_det($id,"user_sports"); ?></td></tr>
				<?php } ?>
				<?php if(user_det($id,"user_political")!="") { ?>
				<tr><td>Political View:</td><td><?php echo user_det($id,"user_political"); ?></td></tr>
				<?php } ?>				
				<tr><td>Member Since:</td><td><?php echo substr(user_det($id,"user_addon"),0,10); ?></td></tr>
				</table>
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