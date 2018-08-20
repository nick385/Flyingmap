<?php require('layout.php'); ?>
<?php page_head(); ?>
<body>

<?php body_head(); ?>

<div id="main">

	<div id="main_inner" class="fixed">

		<div id="primaryContent_3columns">

			<div id="columnA_3columns">
				<h3>Change Profile Picture</h3>
				<?php
				if(isset($_FILES['img']['name']))
				{
					//print_r($_FILES['img']);
					if($_FILES['img']['size']>102400)
					{
						echo "File size is too large to upload.";
					}
					else
					{
					$num=rand(1000,9999);
					$nname=$num.$_FILES['img']['name'];
					move_uploaded_file($_FILES['img']['tmp_name'],$ppic.$nname);
					
					$query="update soc_user set user_img='".$nname."' where user_id='".$_SESSION['sid']."'";
					$result=mysql_query($query);
					echo "Photograph uploaded successfully.";
					}
				}
				else
				{				
				?>
				<form name="chnpic" action="changepic.php" method="post" enctype="multipart/form-data">
				Choose Image: <input type="file" name="img">
				<br/><br/>
				<input type="submit" value="Upload!">
				</form>
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