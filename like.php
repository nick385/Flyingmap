<?php require('layout.php'); ?>
<?php page_head(); ?>
<body>

<?php body_head(); ?>

<div id="main">

	<div id="main_inner" class="fixed">

		<div id="primaryContent_3columns">

			<div id="columnA_3columns">
			<?php
			print_r($_GET);
			if($_GET['flg']==1)
			{
			$query="insert into soc_like (like_postid,like_uid,like_addon) values ('".$_GET['postid']."','".$_SESSION['sid']."',now())";			
			}
			else
			{
			$query="delete from soc_like where like_postid='".$_GET['postid']."' and like_uid='".$_SESSION['sid']."'";
			}
			$result=mysql_query($query);
			header('Location:wall.php?uid='.$_GET['uid'].'');
			?>
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