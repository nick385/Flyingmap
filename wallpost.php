<?php require('layout.php'); ?>
<?php page_head(); ?>
<body>

<?php body_head(); ?>

<div id="main">

	<div id="main_inner" class="fixed">

		<div id="primaryContent_3columns">

			<div id="columnA_3columns">
			<?php
			print_r($_POST);
			
			$query="insert into soc_wall (wall_content,wall_from,wall_to,wall_addon) values ('".$_POST['content']."','".$_SESSION['sid']."','".$_POST['to']."',now())";
			$result=mysql_query($query);
			header('Location:wall.php?uid='.$_POST['to'].'');
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