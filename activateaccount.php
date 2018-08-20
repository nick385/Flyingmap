<?php require('layout.php'); ?>
<?php page_head(); ?>
<body>

<?php body_head(); ?>

<div id="main">

	<div id="main_inner" class="fixed">

		<div id="primaryContent_3columns">

			<div id="columnA_3columns">
		
			<h3>Account Verification</h3>	
			<?php
			//print_r($_GET);
			$query="select count(*) as a from soc_user where user_email='".$_GET['email']."' and user_actcode='".$_GET['actcode']."'";
			$result=mysql_query($query);
			$row=mysql_fetch_assoc($result);
			if($row['a']>0)
			{
				$query="update soc_user set user_status='1' where user_email='".$_GET['email']."'";
				$result=mysql_query($query);
				echo "Account Activated.";
			}
			else
			{
				echo "Invalid Credential.";
			}
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