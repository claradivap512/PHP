<!DOCTYPE html>
<html lang="en">
<head>
	<title>Profil Clara Diva P</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="fonts/icomoon/style.css">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">

	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700" rel="stylesheet">


</head>
<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">



	<nav class="navbar navbar-expand-lg site-navbar navbar-light bg-light" id="pb-navbar">

		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

            <?php
            include_once 'navbar.php';
            ?>

			<!--navbar-->
		</div>
	</nav>



    <!-- home.section -->
	<section class="site-hero" style="background-image: url(images/raden-saleh.jpg);" id="section-home" data-stellar-background-ratio="0.5">
		
        <?php
        include_once "home.php";
        ?>

	</section> <!-- home.section -->

    <!-- about.section -->
	<section class="site-section" id="section-about">
		
        <?php
        include_once 'about.php';
        ?>

	</section> <!-- about.section -->

	<!-- study.section -->
	<section class="site-section " id="section-resume">
		
        <?php
        include_once 'study.php';
        ?>

	</section> <!-- study.section -->

    <!-- task.section -->
	<section class="site-section pb-0"  id="section-services">
		
        <?php
        include_once "task.php";
        ?>

	</section>

    <!-- portfolio.section -->
	<section class="site-section" id="section-portfolio">
		<div class="container">
			<div class="row">
				<div class="section-heading text-center col-md-12">
					<h2>Featured <strong>Portfolio</strong></h2>
				</div>
			</div>
			<div class="filters">
				<ul>
					<li class="active" data-filter="*">All</li>
					<li data-filter=".packaging">Packaging</li>
					<li data-filter=".mockup">Mockup</li>
					<li data-filter=".typography">Typography</li>
					<li data-filter=".photography">Photography</li>
				</ul>
			</div>

			<div class="filters-content">
				<div class="row grid">
					<div class="single-portfolio col-sm-4 all mockup">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="images/p1.jpg" alt="">
							</div>
							<a href="images/p1.jpg" class="img-pop-up">  
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="images/preview.png" alt=""></div>
								</div>
							</a>                                  
						</div>
						<div class="p-inner">
							<h4>Square Box Mockup</h4>
							<div class="cat">Mockup</div>
						</div>                                         
					</div>
					<div class="single-portfolio col-sm-4 all mockup">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="images/p2.jpg" alt="">
							</div>
							<a href="images/p2.jpg" class="img-pop-up">  
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="images/preview.png" alt=""></div>
								</div>
							</a>                                  
						</div>
						<div class="p-inner">
							<h4>Product Box Package Mockup</h4>
							<div class="cat">Mockup</div>
						</div>                                         
					</div>                            
					<div class="single-portfolio col-sm-4 all packaging">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="images/p3.jpg" alt="">
							</div>
							<a href="images/p3.jpg" class="img-pop-up">  
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="images/preview.png" alt=""></div>
								</div>
							</a> 

						</div>
						<div class="p-inner">
							<h4>Creative Package Design</h4>
							<div class="cat">Packaging</div>
						</div>
					</div>
					<div class="single-portfolio col-sm-4 all packaging">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="images/p4.jpg" alt="">
							</div>
							<a href="images/p4.jpg" class="img-pop-up">  
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="images/preview.png" alt=""></div>
								</div>
							</a>                                
						</div> 
						<div class="p-inner">
							<h4>Packaging Brand</h4>
							<div class="cat">Packaging</div>
						</div>
					</div>
					<div class="single-portfolio col-sm-4 all typography">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="images/p5.jpg" alt="">
							</div>
							<a href="images/p5.jpg" class="img-pop-up">  
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="images/preview.png" alt=""></div>
								</div>
							</a>                                
						</div>
						<div class="p-inner">
							<h4>Isometric 3D Extrusion</h4>
							<div class="cat">Typography</div>
						</div>
					</div>
					<div class="single-portfolio col-sm-4 all photography">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="images/p6.jpg" alt="">
							</div>
							<a href="images/p6.jpg" class="img-pop-up">  
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="images/preview.png" alt=""></div>
								</div>
							</a>                                
						</div>
						<div class="p-inner">
							<h4>White Space Photography</h4>
							<div class="cat">photography</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- portfolio.section -->

    <!--contact.section-->
	<section class="site-section" id="section-contact">
		
        <?php
        include_once "contact.php";
        ?>

	</section>


	<footer class="site-footer">
		<?php
        include_once "sosmed.php";
        ?>
	</footer>




	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/vendor/popper.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>

	<script src="js/vendor/jquery.easing.1.3.js"></script>

	<script src="js/vendor/jquery.stellar.min.js"></script>
	<script src="js/vendor/jquery.waypoints.min.js"></script>

	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
	<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
	<script src="js/custom.js"></script>

	<!-- Google Map -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    	<script src="js/google-map.js"></script> -->

    </body>
    </html>