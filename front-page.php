<?php get_header() ?>

	<!-- Slider -->
	<div id="slider-container">
		<div class="container">
			<div id="slider" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#slider" data-slide-to="0" class="active"></li>
			    <li data-target="#slider" data-slide-to="1"></li>
			    <li data-target="#slider" data-slide-to="2"></li>
			  </ol>
			  <!-- Carousel items -->
			  <div class="carousel-inner">
			    <div class="active item">
			    	<img src="<?= get_stylesheet_directory_uri() ?>/img/alternators.jpg">
			    </div>
			    <div class="item">
			    	<img src="<?= get_stylesheet_directory_uri() ?>/img/starters.jpg">
			  	</div>
			    <div class="item">
			    	<img src="<?= get_stylesheet_directory_uri() ?>/img/clutches.jpg">
			    </div>
			  </div>
			  <!-- Carousel nav -->
			  <a class="carousel-control left" href="#slider" data-slide="prev">&lsaquo;</a>
			  <a class="carousel-control right" href="#slider" data-slide="next">&rsaquo;</a>
			</div>
		</div>
	</div>

	<!-- Boxes -->
	<div id="boxes">
		<div class="container">
			<div class="row">
				<div class="span4">
						<h3>Professional Quality</h3>
						<p>ACC has been remanufacturing alternators, clutches, generators and starters for more than forty years. The products we sell are built to OEM specifications and are 100 percent tested for quality assurance.</p>
				</div>
				<div class="span4">
						<h3>For Any Motor</h3>
						<p>We carry new & remanufacture alternators, starters, and clutches for all size motors. We specialize in Agriculture, ATV, Automotive, Heavy Duty Truck, Industrial, Marine, and much more.</p>
				</div>
				<div class="span4">
						<h3>Family Service</h3>
						<p>Mohawk Distributors was purchased by Charles "Chick" Charnes, William Charnes, and W.T, Vincent in 1961. It was located at 3177 Summer Avenue, Memphis, Tennessee. <a href="/about">Read More</a></p>
				</div>
			</div>
		</div>
	</div>

<?php get_footer() ?>