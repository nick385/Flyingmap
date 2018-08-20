<?php require('layout.php'); ?>
<?php page_head(); ?>
<body>

<?php body_head(); ?>

<div id="main">

	<div id="main_inner" class="fixed">

		<div id="primaryContent_3columns">

			<div id="columnA_3columns">
		
				<?php $id=$_GET['uid']; ?>
				<h3><?php user_name($_REQUEST['uid']); ?>'s Wall</h3>
				
				<form name="wall" action="wallpost.php" method="post">
				<table width="100%" style="margin-top:-15px; border-bottom:1px solid grey; padding-bottom:5px;">
				<tr>
				<td>
				<textarea name="content" style="width:400px; height:60px;"></textarea>
				<input type="hidden" name="to" value="<?php echo $id; ?>">
				</td>
				<td>
				<input type="submit" value="Post!" style="width:100px; height:65px;">
				</td>
				</tr>
				</table>
				</form>		
				
				
				<?php
				$query="select * from soc_wall where wall_to='".$id."' order by wall_addon desc";
				$result=mysql_query($query);
				while($row=mysql_fetch_assoc($result))
				{
				?>
				<div id="wallpost">
				<table border="0" width="100%">
				<tr>
				<td style="width:100px;" valign="top">
				<img src="<?php echo $ppic; echo user_img($row['wall_from']); ?>" style="max-width:85px;">
				</td>
				<td valign="top">
					<table width="100%">
					<tr><td style="border-bottom:1px solid grey;">
					<?php user_name($row['wall_from']); ?> Say's 3 minutes Ago!
					</td></tr>
					<tr>
					<td><?php echo $row['wall_content']; ?></td>
					</tr>
					</table>				
				</td>
				</tr>
				<tr>
				<td colspan="2">
				<?php
				$q10="select count(*) from soc_like where like_postid='".$row['wall_id']."' and like_uid='".$_SESSION['sid']."'";
				$ro10=mysql_fetch_assoc(mysql_query($q10));
				if($ro10['count(*)']>0)
				{
				?>
				<a href="like.php?postid=<?php echo $row['wall_id']; ?>&flg=0&uid=<?php echo $id; ?>">Unlike</a>
				<?php
				}
				else
				{
				?>			
				<a href="like.php?postid=<?php echo $row['wall_id']; ?>&flg=1&uid=<?php echo $id; ?>">Like</a>
				<?php } ?>
				| 
				<?php
				$q11="select count(*) from soc_like where like_postid='".$row['wall_id']."'";
				$ro11=mysql_fetch_assoc(mysql_query($q11));
				echo $ro11['count(*)'];
				?> People Like This!
				</tr>
				</table>
				
				<table width="80%" style="border:1px solid #000; margin-left:100px; margin-top:10px;">
				<tr>
				<td width="12%">
				<img src="<?php echo $ppic; echo user_img('1'); ?>" style="max-width:30px;">
				</td>
				<td valign="top">Rahul Says Its Good!</td>
				</tr>
				<tr>
				<td width="12%">
				<img src="<?php echo $ppic; echo user_img('1'); ?>" style="max-width:30px;">
				</td>
				<td valign="top"><textarea name="com" style="width:250px;"></textarea>
				<input type="submit" value="Post Comment!">
				</td>
				</tr>
				</table>
			
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