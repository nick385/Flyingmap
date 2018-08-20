<?php require('layout.php'); ?>
<?php page_head(); ?>
<body>

<?php body_head(); ?>

<div id="main">

	<div id="main_inner" class="fixed">

		<div id="primaryContent_3columns">

			<div id="columnA_3columns">
				<?php
				if(isset($_POST['email']))
				{
					$query="select user_id,user_status from soc_user where user_email='".$_POST['email']."' and user_pwd='".$_POST['pwd']."'";
					$result=mysql_query($query);
					$num=mysql_num_rows($result);
					if($num>0)
					{
						echo "Login credential correct!";
						$row=mysql_fetch_assoc($result);
						if($row['user_status']=='1')
						{
							echo "Login Sucess.";
							$_SESSION['sid']=$row['user_id'];
							header('Location:myspace.php');
						}
						else
						{
							echo "Your account is not activated yet.";
						}
					}
					else
					{
						echo "Incorrect Login credential.";
					}
				}
				else
				{
				?>
				<h3>Contact Detail</h3>
				<?php
                 $num = 8327708234;
                  $formattedNum = number_format($num)."<br>";
                  
                 echo $formattedNum;
                 
?>

				
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