<?php require('layout.php'); ?>
<?php page_head(); ?>
<body>

<?php body_head(); ?>

<div id="main">

	<div id="main_inner" class="fixed">

		<div id="primaryContent_3columns">

			<div id="columnA_3columns">
		
				<h3>photography</h3>
				<img src="images/pic.gif" class="floatTL" alt="Something scenic" />

				<p>
					“It is a cruel, ironical art, photography. The dragging of captured moments into the future; moments that should have been allowed to be evaporate into the past; should exist only in memories, glimpsed through the fog of events that came after. Photographs force us to see people before their future weighed them down....” 
					
				</p>
				
				
				<br class="clear" />
			
				<div class="post">
				
					<h3>about photography contest</h3>
					<ul class="post_info">
						<li class="date">Posted by <a href="#">enks</a> comptition detail</li>
						<li class="comments"><a href="#">44 comments</a></li>
					</ul>					
					
					<p>
						“Photography is a reality so subtle that it becomes more real than reality.” 
					</p>
					
		
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