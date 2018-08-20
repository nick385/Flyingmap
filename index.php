<?php require('layout.php'); ?>
<?php page_head(); ?>
				<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
				<link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
				<link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
				<link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
				<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
				
<body>

<?php body_head(); ?>

<div id="main">

	<div id="main_inner" class="fixed">

		<div id="primaryContent_3columns">

			<div id="columnA_3columns">

					
<div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="images/nemo.jpg" data-thumb="images/nemo.jpg" alt="" />
                <a href="http://dev7studios.com"><img src="images/Drona2.jpg" data-thumb="images/Drona2.jpg" alt=""  /></a>
                <img src="images/Drona3.jpg" data-thumb="images/Drona3.jpg" alt="" data-transition="slideInLeft" />
                <img src="images/Drona4.jpg" data-thumb="images/Drona4.jpg" alt="" title="#htmlcaption" />
            </div>
            
        </div>



		
				    <script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
					<script type="text/javascript" src="jquery.nivo.slider.js"></script>
					<script type="text/javascript">
					$(window).load(function() {
						$('#slider').nivoSlider();
					});
					</script>
				
				<br class="clear" />
			
				<div class="post">
				
					<h3>DronaMaps</h3>
					<ul class="post_info">
						<li class="date">Posted by <a href="#">vijay</a> on 19-08-2018</li>
						<li class="comments"><a href="#">04 comments</a></li>
					</ul>					
					
					<p>
						
						
					<p>
						
					</p>

				</div>
		
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