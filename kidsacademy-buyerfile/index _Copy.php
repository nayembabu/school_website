<?php
include "pdo.php";
include "query.php";



?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Sadman</title>
	<link href="images/favicon.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />

	<!-- Google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
		rel="stylesheet">

	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- Font-awesome -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">

	<!-- Flaticon -->
	<link href="assets/flaticon/flaticon.css" rel="stylesheet">

	<!-- lightcase -->
	<link href="assets/css/lightcase.css" rel="stylesheet">

	<!-- Swiper -->
	<link href="assets/css/swiper.min.css" rel="stylesheet">

	<!-- quick-view -->
	<link href="assets/css/quick-view.css" rel="stylesheet">

	<!-- nstSlider -->
	<link href="assets/css/jquery.nstSlider.css" rel="stylesheet">

	<!-- flexslider -->
	<link href="assets/css/flexslider.css" rel="stylesheet">

	<!-- Style -->
	<link href="assets/css/rtl.css" rel="stylesheet">

	<!-- Style -->
	<link href="assets/css/style.css" rel="stylesheet">

	<!-- Responsive -->
	<link href="assets/css/responsive.css" rel="stylesheet">
</head>


<body id="scroll-top">

	<!-- Preloader start here -->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
	<!-- Preloader end here -->


	<!-- mobile menu start here -->
	<div class="mobile-menu-area">
		<div class="logo-area">
			<a class="logo" href="index.html"><img src="images/logo.png" alt="logo" class="img-responsive"></a>
			<button type="button" class="navbar-toggle collapsed d-md-none" data-toggle="collapse"
				data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<div class="mobile-menu">
			<ul class="m-menu">
				<li class="dropdown-submenu">
					<a href="#">Home</a>
					<ul class="mobile-submenu">
						<li><a href="index.html">home style 1</a></li>
						<li><a href="index-2.html">home style 2</a></li>
						<li><a href="index-3.html">home style 3</a></li>
						<li><a href="one-page.html">home Onepage</a></li>
					</ul>
				</li>
				<li class="dropdown-submenu">
					<a href="#">About</a>
					<ul class="mobile-submenu">
						<li><a href="about.html">About Style 1</a></li>
						<li><a href="about-2.html">About Style 2</a></li>
					</ul>
				</li>
				<li class="dropdown-submenu">
					<a href="#">Classes</a>
					<ul class="mobile-submenu">
						<li><a href="classes.html">Classes</a></li>
						<li><a href="class-single.html">Class Single</a></li>
					</ul>
				</li>

				<li class="dropdown-submenu">
					<a href="#">Teachers</a>
					<ul class="mobile-submenu">
						<li><a href="teachers.html">Teacher</a></li>
						<li><a href="teacher-detail.html">Teacher Details</a></li>
					</ul>
				</li>

				<li class="dropdown-submenu">
					<a href="#">Pages</a>
					<ul class="mobile-submenu">
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="gallery-2.html">Gallery 2</a></li>
						<li><a href="event.html">Event</a></li>
						<li><a href="event-single.html">Event Single</a></li>
						<li><a href="404.html">404</a></li>
					</ul>
				</li>

				<li class="dropdown-submenu">
					<a href="#">Blog</a>
					<ul class="mobile-submenu">
						<li><a href="blog.html">Blog Page</a></li>
						<li><a href="single.html">Blog Single</a></li>
					</ul>
				</li>

				<li class="dropdown-submenu">
					<a href="#">Shop</a>
					<ul class="mobile-submenu">
						<li><a href="product.html">Product</a></li>
						<li><a href="product-details.html">Product Details</a></li>
						<li><a href="shop-cart.html">Product Cart</a></li>
					</ul>
				</li>
				<li><a href="contact.html">Contact Us</a></li>
			</ul>
		</div>
	</div>
	<!-- mobile menu ending here -->

	<?php foreach ($web as $info){ ?>
	<header>
		<div class="header-top">
			<div class="container">
				<div class="ht-area">
					<ul class="left">
						<li><span><i class="fa fa-phone" aria-hidden="true"></i></span> Phone : <?php echo $info->school_phone_no; ?></li>
						<li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Opening Time : <?php echo $info->start_times; ?>-<?php echo $info->end_times; ?> 
						</li>
						<li><span><i class="fa fa-home" aria-hidden="true"></i></span> Address : <?php echo $info->school_address_full; ?>
						</li>
					</ul>
					<?php } ?>
					<ul class="right">
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="main-menu">
			<div class="container">
				<div class="row no-gutters">
					<nav class="main-menu-area w-100">
						<div class="logo-area">
							<a class="" href="index.html"><img src="images/logo.png" alt="logo"
									class="img-responsive"></a>
							<button type="button" class="navbar-toggle collapsed d-md-none" data-toggle="collapse"
								data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<div class="menu-area">
							<ul class="menu-search-cart">
								<li><span class="menu-search"><i class="fa fa-search" aria-hidden="true"></i></span>
								</li>
								<li class="menu_cart dropdown"><span><i class="fa fa-shopping-bag"
											aria-hidden="true"></i></span>
								</li>
							</ul>

							<ul class="menu">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li class="active"><a href="index.html">Home Style 01</a></li>
										<li><a href="index-2.html">Home Style 02</a></li>
										<li><a href="index-3.html">Home Style 03</a></li>
										<li><a href="one-page.html">One Page</a></li>
										<li><a href="boxed-layout.html">Boxed Layout</a></li>

										<li><a href="#">Test Multi Step</a>
											<ul class="dropdown-menu">
												<li><a href="#">Menu 2</a></li>
												<li><a href="#">Menu 2</a></li>
												<li><a href="#">Menu 2</a></li>
												<li><a href="#">Menu 2</a>
													<ul class="dropdown-menu">
														<li><a href="#">Menu 3</a></li>
														<li><a href="#">Menu 3</a></li>
														<li><a href="#">Menu 3</a></li>
														<li><a href="#">Menu 3</a>
															<ul class="dropdown-menu">
																<li><a href="#">Menu 4</a></li>
																<li><a href="#">Menu 4</a></li>
																<li><a href="#">Menu 4</a></li>
																<li><a href="#">Menu 4</a></li>
															</ul>
														</li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="about.html">About Style 01</a></li>
										<li><a href="about-2.html">About Style 02</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Classes <span
											class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="classes.html">Classes</a></li>
										<li><a href="class-single.html">Classes Details</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Teachers <span
											class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="teachers.html">Teachers</a></li>
										<li><a href="teacher-details.html">Teacher Details</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="gallery.html">Gallery</a></li>
										<li><a href="gallery-2.html">Gallery Two</a></li>
										<li><a href="event.html">Event</a></li>
										<li><a href="event-single.html">Event Details</a></li>
										<li><a href="404.html">404 Error</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Blog <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="blog.html">Blog Page</a></li>
										<li><a href="single.html">Blog Single</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Shop <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="product.html">Product Page</a></li>
										<li><a href="product-details.html">Product Details</a></li>
										<li><a href="shop-cart.html">Shop Cart</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
							<form class="menu-search-form">
								<input type="text" name="search" placeholder="Search here...">
								<span class="menu-search-close"><i class="fa fa-times" aria-hidden="true"></i></span>
							</form>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- header End here -->

	<?php foreach ($sldr as $info){ ?>
	<!-- Banner Start here -->
	<section class="banner section-notch">
		<div class="banner-slider swiper-container">
			<div class="swiper-wrapper">
				<div class="banner-item slide-one swiper-slide">
					<div class="banner-overlay"></div>
					<div class="container">
						<div class="banner-content">
							<h3>Welcome to KidsAcademy</h3>
							<h2><?php echo $info->slider_names; ?></h2>
							<p><?php echo $info->slider_desc; ?></p>
							<ul>
								<li><a href="#" class="button-default">Read More</a></li>
								<li><a href="#" class="button-default">Buy Now</a></li>
							</ul>
						</div><!-- banner-content -->
					</div><!-- container -->
				</div><!-- slide item -->
				<div class="banner-item slide-two swiper-slide">
					<div class="banner-overlay"></div>
					<div class="container">
						<div class="banner-content">
							<h3>Welcome to KidsAcademy</h3>
							<h2><?php echo $info->slider_names; ?></h2>
							<p><?php echo $info->slider_desc; ?></p>
							<ul>
								<li><a href="#" class="button-default">Read More</a></li>
								<li><a href="#" class="button-default">Buy Now</a></li>
							</ul>
						</div><!-- banner-content -->
					</div><!-- container -->
				</div><!-- slide item -->
				<div class="banner-item slide-three swiper-slide">
					<div class="banner-overlay"></div>
					<div class="container">
						<div class="banner-content">
							<h3>Welcome to KidsAcademy</h3>
							<h2><?php echo $info->slider_names; ?></h2>
							<p><?php echo $info->slider_desc; ?></p>
							<ul>
								<li><a href="#" class="button-default">Read More</a></li>
								<li><a href="#" class="button-default">Buy Now</a></li>
							</ul>
						</div><!-- banner-content -->
					</div><!-- container -->
				</div><!-- slide item -->

			</div><!-- swiper-wrapper -->
			<div class="swiper-pagination"></div>
		</div><!-- swiper-container -->
	</section><!-- banner -->
	<!-- Banner End here -->
		<?php } ?>

	<!-- facility Start here -->
	<section class="facility padding-120">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="facility-item">
						<span class="icon flaticon-symbols"></span>
						<h4>Active Learning</h4>
						<p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors
							after</p>
					</div><!-- facility item -->
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="facility-item">
						<span class="icon flaticon-avatar"></span>
						<h4>Expert Teachers</h4>
						<p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors
							after</p>
					</div><!-- facility item -->
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="facility-item">
						<span class="icon flaticon-world"></span>
						<h4>Strategi Location</h4>
						<p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors
							after</p>
					</div><!-- facility item -->
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="facility-item">
						<span class="icon flaticon-line-chart"></span>
						<h4>Full Day Programs</h4>
						<p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors
							after</p>
					</div><!-- facility item -->
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- facility -->
	<!-- facility End here -->

	<?php foreach ($exp as $info){ ?>
	<!-- About Start here -->
	<section class="about section-notch">
		<div class="overlay padding-120">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="about-image">
							<img src="<?php echo $info->about_image_srccc; ?>" alt="about image" class="img-responsive">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-content">
							<h3><?php echo $info->about_full_titlesss; ?></h3>
							<p><?php echo $info->about_full_des_cription_ssss; ?></p>
							<ul>
								<li><a href="#" class="button-default">Read More</a></li>
								<li><a href="#" class="button-default">Buy Now</a></li>
							</ul>
						</div><!-- about content -->
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- overlay -->
	</section><!-- about -->
	<!-- About End here -->

		<?php } ?>
	<!-- Classes Start here -->
	<section class="classes padding-120">
		<div class="container">
			<div class="section-header">
				<h3>Our Popular Classes</h3>
				<p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize
					pandemic strategic themeplatform.</p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="class-item">
						<div class="image">
							<img src="images/classes/class_01.jpg" alt="class image" class="img-responsive">
						</div>
						<ul class="schedule">
							<li>
								<span>Class Size</span>
								<span>30 - 40</span>
							</li>
							<li>
								<span>Years Old</span>
								<span>5 - 6</span>
							</li>
							<li>
								<span>Tution Fee</span>
								<span>$1500</span>
							</li>
						</ul>
						<div class="content">
							<h4><a href="class-single.html">Imagination Classes</a></h4>
							<p><span>Class Time</span> : 08:00 am - 10:00 am</p>
							<p>Draticaly novate fuly rarched an plications awesome theme education</p>
						</div>
						<div class="address">
							<p><span><i class="fa fa-home" aria-hidden="true"></i></span> 218 New Newyork Road, USA-
								1205</p>
						</div>
					</div><!-- class item -->
				</div>
				<div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="class-item">
						<div class="image">
							<img src="images/classes/class_02.jpg" alt="class image" class="img-responsive">
						</div>
						<ul class="schedule">
							<li>
								<span>Class Size</span>
								<span>30 - 40</span>
							</li>
							<li>
								<span>Years Old</span>
								<span>5 - 6</span>
							</li>
							<li>
								<span>Tution Fee</span>
								<span>$1500</span>
							</li>
						</ul>
						<div class="content">
							<h4><a href="class-single.html">Drawing Classes</a></h4>
							<p><span>Class Time</span> : 08:00 am - 10:00 am</p>
							<p>Draticaly novate fuly rarched an plications awesome theme education</p>
						</div>
						<div class="address">
							<p><span><i class="fa fa-home" aria-hidden="true"></i></span> 218 New Newyork Road, USA-
								1205</p>
						</div>
					</div><!-- class item -->
				</div>
				<div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="class-item">
						<div class="image">
							<img src="images/classes/class_03.jpg" alt="class image" class="img-responsive">
						</div>
						<ul class="schedule">
							<li>
								<span>Class Size</span>
								<span>30 - 40</span>
							</li>
							<li>
								<span>Years Old</span>
								<span>5 - 6</span>
							</li>
							<li>
								<span>Tution Fee</span>
								<span>$1500</span>
							</li>
						</ul>
						<div class="content">
							<h4><a href="class-single.html">Learning Classes</a></h4>
							<p><span>Class Time</span> : 08:00 am - 10:00 am</p>
							<p>Draticaly novate fuly rarched an plications awesome theme education</p>
						</div>
						<div class="address">
							<p><span><i class="fa fa-home" aria-hidden="true"></i></span> 218 New Newyork Road, USA-
								1205</p>
						</div>
					</div><!-- class item -->
				</div>
			</div><!-- row -->
			<div class="class-button">
				<a href="classes.html" class="button-default">See More Classes</a>
			</div>
		</div><!-- container -->
	</section><!-- classes -->
	<!-- Classes End here -->

	<?php foreach ($all_tcr as $info){ ?>
	<!-- Teachers Start here -->
	<section class="teachers section-notch">
		<div class="overlay padding-120">
			<div class="container">
				<div class="section-header bg">
					<h3>Meet Our Teachers</h3>
					<p>Rapidiously expedite granular imperatives before economically sound web services. Credibly
						actualize pandemic strategic themeplatform.</p>
				</div>
				<div class="row">
					<div class="col-lg-6 col-xs-12">
						<div class="teacher-item">
							<div class="teacher-image">
								<img src="<?php echo $info->teacher_imagesss; ?>" alt="teacher image" class="img-responsive">
							</div>
							<div class="teacher-content">
								<h4><?php echo $info->teacher_full_names; ?> <span><?php echo $info->teacher_department; ?></span></h4>
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
								</ul>
								<p><?php echo $info->teacher_descr; ?></p>
								<a href="teacher-details.html">View Portfolio</a>
							</div>
						</div><!-- teacher item -->
					</div>
					<div class="col-lg-6 col-xs-12">
						<div class="teacher-item">
							<div class="teacher-image">
								<img src="<?php echo $info->teacher_imagesss; ?>" alt="teacher image" class="img-responsive">
							</div>
							<div class="teacher-content">
							<h4><?php echo $info->teacher_full_names; ?> <span><?php echo $info->teacher_department; ?></span></h4>
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
								</ul>
								<p><?php echo $info->teacher_descr; ?></p>
								<a href="teacher-details.html">View Portfolio</a>
							</div>
						</div><!-- teacher item -->
					</div>
					<div class="col-lg-6 col-xs-12">
						<div class="teacher-item">
							<div class="teacher-image">
								<img src="<?php echo $info->teacher_imagesss; ?>" alt="teacher image" class="img-responsive">
							</div>
							<div class="teacher-content">
							<h4><?php echo $info->teacher_full_names; ?> <span><?php echo $info->teacher_department; ?></span></h4>
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
								</ul>
								<p><?php echo $info->teacher_descr; ?></p>
								<a href="teacher-details.html">View Portfolio</a>
							</div>
						</div><!-- teacher item -->
					</div>
					<div class="col-lg-6 col-xs-12">
						<div class="teacher-item">
							<div class="teacher-image">
								<img src="<p><?php echo $info->teacher_imagesss; ?></p>" alt="teacher image" class="img-responsive">
							</div>
							<div class="teacher-content">
							<h4><?php echo $info->teacher_full_names; ?> <span><?php echo $info->teacher_department; ?></span></h4>
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
								</ul>
								<p><?php echo $info->teacher_descr; ?></p>
								<a href="teacher-details.html">View Portfolio</a>
							</div>
						</div><!-- teacher item -->
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- overlay -->
	</section><!-- teacher -->
	<!-- Teachers End here -->
		<?php } ?>

	<!-- Gallery Start here -->
	<section class="gallery padding-120">
		<div class="container">
			<div class="section-header">
				<h3>Our School Gallery</h3>
				<p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize
					pandemic strategic themeplatform.</p>
			</div>
			<ul class="gallery-menu">
				<li class="active" data-filter="*">Show all</li>
				<li data-filter=".branding">Class</li>
				<li data-filter=".development">Event</li>
				<li data-filter=".packing">Playing</li>
				<li data-filter=".photography">Art</li>
			</ul>

			<div class="gallery-items">
				<div class="gallery-item branding packing">
					<div class="gallery-image">
						<img src="images/gallery/gallery_01.jpg" alt="gallery image" class="img-responsive">
						<div class="gallery-overlay">
							<div class="bg"></div>
						</div>
						<div class="gallery-content">
							<a href="images/gallery/gallery_bg_01.jpg" data-rel="lightcase:myCollection"><i
									class="icon flaticon-expand"></i></a>
							<h4>Product Name Here</h4>
							<span>By: KidsAcademy Theme</span>
						</div>
					</div>
				</div><!-- gallery item -->
				<div class="gallery-item development photography">
					<div class="gallery-image">
						<img src="images/gallery/gallery_02.jpg" alt="gallery image" class="img-responsive">
						<div class="gallery-overlay">
							<div class="bg"></div>
						</div>
						<div class="gallery-content">
							<a href="images/gallery/gallery_bg_02.jpg" data-rel="lightcase:myCollection"><i
									class="icon flaticon-expand"></i></a>
							<h4>Product Name Here</h4>
							<span>By: KidsAcademy Theme</span>
						</div>
					</div>
				</div><!-- gallery item -->
				<div class="gallery-item branding packing">
					<div class="gallery-image">
						<img src="images/gallery/gallery_03.jpg" alt="gallery image" class="img-responsive">
						<div class="gallery-overlay">
							<div class="bg"></div>
						</div>
						<div class="gallery-content">
							<a href="images/gallery/gallery_bg_03.jpg" data-rel="lightcase:myCollection"><i
									class="icon flaticon-expand"></i></a>
							<h4>Product Name Here</h4>
							<span>By: KidsAcademy Theme</span>
						</div>
					</div>
				</div><!-- gallery item -->
				<div class="gallery-item development photography">
					<div class="gallery-image">
						<img src="images/gallery/gallery_04.jpg" alt="gallery image" class="img-responsive">
						<div class="gallery-overlay">
							<div class="bg"></div>
						</div>
						<div class="gallery-content">
							<a href="images/gallery/gallery_bg_04.jpg" data-rel="lightcase:myCollection"><i
									class="icon flaticon-expand"></i></a>
							<h4>Product Name Here</h4>
							<span>By: KidsAcademy Theme</span>
						</div>
					</div>
				</div><!-- gallery item -->
				<div class="gallery-item branding packing">
					<div class="gallery-image">
						<img src="images/gallery/gallery_05.jpg" alt="gallery image" class="img-responsive">
						<div class="gallery-overlay">
							<div class="bg"></div>
						</div>
						<div class="gallery-content">
							<a href="images/gallery/gallery_bg_05.jpg" data-rel="lightcase:myCollection"><i
									class="icon flaticon-expand"></i></a>
							<h4>Product Name Here</h4>
							<span>By: KidsAcademy Theme</span>
						</div>
					</div>
				</div><!-- gallery item -->
				<div class="gallery-item branding packing">
					<div class="gallery-image">
						<img src="images/gallery/gallery_06.jpg" alt="gallery image" class="img-responsive">
						<div class="gallery-overlay">
							<div class="bg"></div>
						</div>
						<div class="gallery-content">
							<a href="images/gallery/gallery_bg_06.jpg" data-rel="lightcase:myCollection"><i
									class="icon flaticon-expand"></i></a>
							<h4>Product Name Here</h4>
							<span>By: KidsAcademy Theme</span>
						</div>
					</div>
				</div><!-- gallery item -->
			</div><!-- gallery items -->
			<div class="gallery-button"><a href="gallery.html" class="button-default">View More Gallery</a></div>
		</div><!-- container -->
	</section><!-- gallery -->
	<!-- Gallery End here -->


	<!-- Achievements Start here -->
	<section class="achievements section-notch">
		<div class="overlay padding-120">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-12">
						<div class="achievement-item">
							<i class="icon flaticon-student"></i>
							<span class="counter">320</span><span>+</span>
							<p>Total Students</p>
						</div><!-- achievement item -->
					</div>
					<div class="col-md-3 col-sm-3 col-12">
						<div class="achievement-item">
							<i class="icon flaticon-construction"></i>
							<span class="counter">12</span>
							<p>Class Rooms</p>
						</div><!-- achievement item -->
					</div>
					<div class="col-md-3 col-sm-3 col-12">
						<div class="achievement-item">
							<i class="icon flaticon-school-bus"></i>
							<span class="counter">24</span>
							<p>Schools bus</p>
						</div><!-- achievement item -->
					</div>
					<div class="col-md-3 col-sm-3 col-12">
						<div class="achievement-item">
							<i class="icon flaticon-people"></i>
							<span class="counter">15</span>
							<p>Total Teachers</p>
						</div><!-- achievement item -->
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- overlay -->
	</section><!-- achievements -->
	<!-- Achievements End here -->

	<?php foreach ($web as $info){ ?>
	<!-- Testimonial Start here -->
	<section class="testimonial padding-120">
		<div class="container">
			<div class="section-header">
				<h3>What Parents Say</h3>
				<p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize
					pandemic strategic themeplatform.</p>
			</div>
			<div class="testimonial-items">
				<div class="testimonial-slider swiper-container">
					<div class="swiper-wrapper">
						<div class="testimonial-item swiper-slide">
							<div class="testimonial-details">
							<p><?php echo $info->another_person_speach; ?></p>
							<h4><p><?php echo $info->another_person_name; ?></p> <span>ui/ux Designer</span></h4>
								<img src="images/testimonial/testimonial_icon_01.jpg" alt="testimonial icon"
									class="img-responsive">
							</div>
							<div class="testimonial-image">
								<img src="images/testimonial/testimonial_01.jpg" alt="client image"
									class="img-responsive">
							</div>
						</div><!-- testimonial-item -->
						<div class="testimonial-item swiper-slide">
							<div class="testimonial-details">
							<p><?php echo $info->another_person_speach; ?></p>
							<h4><p><?php echo $info->another_person_name; ?></p> <span>ui/ux Designer</span></h4>
								<img src="images/testimonial/testimonial_icon_02.jpg" alt="testimonial icon"
									class="img-responsive">
							</div>
							<div class="testimonial-image">
								<img src="images/testimonial/testimonial_02.jpg" alt="client image"
									class="img-responsive">
							</div>
						</div><!-- testimonial-item -->
						<div class="testimonial-item swiper-slide">
							<div class="testimonial-details">
							<p><?php echo $info->another_person_speach; ?></p>
							<h4><p><?php echo $info->another_person_name; ?></p> <span>ui/ux Designer</span></h4>
								<img src="images/testimonial/testimonial_icon_03.jpg" alt="testimonial icon"
									class="img-responsive">
							</div>
							<div class="testimonial-image">
								<img src="images/testimonial/testimonial_03.jpg" alt="client image"
									class="img-responsive">
							</div>
						</div><!-- testimonial-item -->
						<div class="testimonial-item swiper-slide">
							<div class="testimonial-details">
							<p><?php echo $info->another_person_speach; ?></p>
							<h4><p><?php echo $info->another_person_name; ?></p> <span>ui/ux Designer</span></h4>
								<img src="images/testimonial/testimonial_icon_01.jpg" alt="testimonial icon"
									class="img-responsive">
							</div>
							<div class="testimonial-image">
								<img src="images/testimonial/testimonial_01.jpg" alt="client image"
									class="img-responsive">
							</div>
						</div><!-- testimonial-item -->
						<div class="testimonial-item swiper-slide">
							<div class="testimonial-details">
							<p><?php echo $info->another_person_speach; ?></p>
							<h4><p><?php echo $info->another_person_name; ?></p> <span>ui/ux Designer</span></h4>
								<img src="images/testimonial/testimonial_icon_02.jpg" alt="testimonial icon"
									class="img-responsive">
							</div>
							<div class="testimonial-image">
								<img src="images/testimonial/testimonial_02.jpg" alt="client image"
									class="img-responsive">
							</div>
						</div><!-- testimonial-item -->
						<div class="testimonial-item swiper-slide">
							<div class="testimonial-details">
								<p><?php echo $info->another_person_speach; ?></p>
								<h4><p><?php echo $info->another_person_name; ?></p> <span>ui/ux Designer</span></h4>
								<img src="images/testimonial/testimonial_icon_03.jpg" alt="testimonial icon"
									class="img-responsive">
							</div>
							<div class="testimonial-image">
								<img src="images/testimonial/testimonial_03.jpg" alt="client image"
									class="img-responsive">
							</div>
						</div><!-- testimonial-item -->

					</div><!-- swiper-wrapper -->
				</div><!-- swiper-container -->
			</div><!-- testimonial-items -->
		</div><!-- container -->
	</section><!-- testimonial -->
	<!-- Testimonial End here -->
		<?php } ?>

	<!-- Partner Start here -->
	<section class="partner section-notch">
		<div class="overlay padding-120">
			<div class="container">
				<div class="section-header bg">
					<h3>Our Partners Logo</h3>
					<p>Rapidiously expedite granular imperatives before economically sound web services. Credibly
						actualize pandemic strategic themeplatform.</p>
				</div>
				<div class="partner-items">
					<div class="partner-slider swiper-container">
						<div class="swiper-wrapper">
							<div class="partner-item swiper-slide">
								<img src="images/partner/partner_01.jpg" alt="partner image" class="img-responsive">
							</div><!-- partner-item -->
							<div class="partner-item swiper-slide">
								<img src="images/partner/partner_02.jpg" alt="partner image" class="img-responsive">
							</div><!-- partner-item -->
							<div class="partner-item swiper-slide">
								<img src="images/partner/partner_03.jpg" alt="partner image" class="img-responsive">
							</div><!-- partner-item -->
							<div class="partner-item swiper-slide">
								<img src="images/partner/partner_04.jpg" alt="partner image" class="img-responsive">
							</div><!-- partner-item -->
							<div class="partner-item swiper-slide">
								<img src="images/partner/partner_05.jpg" alt="partner image" class="img-responsive">
							</div><!-- partner-item -->
							<div class="partner-item swiper-slide">
								<img src="images/partner/partner_01.jpg" alt="partner image" class="img-responsive">
							</div><!-- partner-item -->
							<div class="partner-item swiper-slide">
								<img src="images/partner/partner_02.jpg" alt="partner image" class="img-responsive">
							</div><!-- partner-item -->
							<div class="partner-item swiper-slide">
								<img src="images/partner/partner_03.jpg" alt="partner image" class="img-responsive">
							</div><!-- partner-item -->
							<div class="partner-item swiper-slide">
								<img src="images/partner/partner_04.jpg" alt="partner image" class="img-responsive">
							</div><!-- partner-item -->
							<div class="partner-item swiper-slide">
								<img src="images/partner/partner_05.jpg" alt="partner image" class="img-responsive">
							</div><!-- partner-item -->

						</div><!-- swiper-wrapper -->
					</div><!-- swiper-container -->
				</div><!-- partner-items -->
			</div><!-- container -->
		</div><!-- overlay -->
	</section><!-- partner -->
	<!-- Partner End here -->


	<!-- Event Start here -->
	<section class="event padding-120">
		<div class="container">
			<div class="section-header">
				<h3>Don't Miss Our Event</h3>
				<p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize
					pandemic strategic themeplatform.</p>
			</div>
			<div class="event-items">
				<div class="event-item wide">
					<div class="event-image">
						<img src="images/event/event_01.jpg" alt="event image" class="img-responsive">
						<div class="date">
							<span>24</span>
							<p>March</p>
						</div>
					</div>
					<div class="event-content">
						<h4>Imagination Classes</h4>
						<ul>
							<li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span>08:00 am - 10:00 am</li>
							<li><span><i class="fa fa-home" aria-hidden="true"></i></span>218 New Newyork Road Newyork
							</li>
						</ul>
						<p>Dratcaly novate fuly rarched and plications awesome theme education athat plications creative
							theme education</p>
						<a href="event-single.html" class="button-default">Join Now</a>
					</div>
				</div>
				<div class="event-item">
					<div class="event-image">
						<img src="images/event/event_02.jpg" alt="event image" class="img-responsive">
						<div class="date">
							<span>24</span>
							<p>March</p>
						</div>
					</div>
					<div class="event-content">
						<h4>Imagination Classes</h4>
						<ul>
							<li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span>08:00 am - 10:00 am</li>
							<li><span><i class="fa fa-home" aria-hidden="true"></i></span>218 New Newyork Road Newyork
							</li>
						</ul>
						<p>Dratcaly novate fuly rarched and plications awesome theme education athat plications creative
							theme education</p>
						<a href="event-single.html" class="button-default">Join Now</a>
					</div>
				</div>
				<div class="event-item wide right">
					<div class="event-image">
						<img src="images/event/event_03.jpg" alt="event image" class="img-responsive">
						<div class="date">
							<span>24</span>
							<p>March</p>
						</div>
					</div>
					<div class="event-content">
						<h4>Imagination Classes</h4>
						<ul>
							<li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span>08:00 am - 10:00 am</li>
							<li><span><i class="fa fa-home" aria-hidden="true"></i></span>218 New Newyork Road Newyork
							</li>
						</ul>
						<p>Dratcaly novate fuly rarched and plications awesome theme education athat plications creative
							theme education</p>
						<a href="event-single.html" class="button-default">Join Now</a>
					</div>
				</div>
			</div>
		</div><!-- container -->
	</section><!-- event blog -->
	<!-- event End here -->

	<!-- Footer Start here -->
	<footer>
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-xs-12">
						<div class="footer-item">
							<div class="title"><img src="images/logo.png" alt="logo" class="img-responsive"></div>
							<div class="footer-about">
								<p>Distily enable team driven services through extensive is a relatonships platforms
									with interactive content. Enthusiastically scale effective.</p>
									<?php foreach ($web as $info){ ?>
								<ul>
									<li><span><i class="fa fa-home" aria-hidden="true"></i></span> <?php echo $info->school_address_full; ?>.</li>
									<li><span><i class="fa fa-phone" aria-hidden="true"></i></span> <?php echo $info->school_phone_no; ?>,<?php echo $info->school_phone_02; ?></li>
									<li><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span> <?php echo $info->school_email_addressss; ?></li>
									<li><span><i class="fa fa-globe" aria-hidden="true"></i></span> <?php echo $info->school_email_addressss; ?></li>
								</ul>
							</div>
						</div>
					</div>
					<?php } ?>
					<div class="col-lg-3 col-md-6 col-xs-12">
						<div class="footer-item">
							<h4 class="title">Latest News</h4>
							<ul class="footer-post">
								<li>
									<div class="image">
										<a href="single.html"><img src="images/blog/footer_post_01.jpg" alt="post image"
												class="img-responsive"></a>
									</div>
									<div class="content">
										<p><a href="single.html">Corem psum dolor the amectetuer adipiscing...</a></p>
										<span>04 February 2021</span>
									</div>
								</li>
								<li>
									<div class="image">
										<a href="single.html"><img src="images/blog/footer_post_02.jpg" alt="post image"
												class="img-responsive"></a>
									</div>
									<div class="content">
										<p><a href="single.html">Corem psum dolor the amectetuer adipiscing...</a></p>
										<span>28 January 2021</span>
									</div>
								</li>
								<li>
									<div class="image">
										<a href="single.html"><img src="images/blog/footer_post_03.jpg" alt="post image"
												class="img-responsive"></a>
									</div>
									<div class="content">
										<p><a href="single.html">Duis autem iriure dolor in hendrerit esse...</a></p>
										<span>03 January 2021</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-xs-12">
						<div class="footer-item">
							<h4 class="title">Twitter Widget</h4>
							<ul class="twitter-post">
								<li>
									<div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
									<div class="content">
										<p>Raritas etiam processus them dynamicus sequitur mutatem education theme</p>
										<span>23 seconds ago</span>
									</div>
								</li>
								<li>
									<div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
									<div class="content">
										<p>Duis autem veleum iriu dolor hendrerit in vulputate velit</p>
										<span>8 seconds ago</span>
									</div>
								</li>
								<li>
									<div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
									<div class="content">
										<p>@frankdoe amber tempor cum soluta nobis eleifend</p>
										<span>2 years ago</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-xs-12">
						<div class="footer-item">
							<h4 class="title">Recent Photos</h4>
							<ul class="photos">
								<li><a href="#"><img src="images/sidebar/gallery_01.jpg" alt="gallery image"
											class="img-responsive"></a></li>
								<li><a href="#"><img src="images/sidebar/gallery_02.jpg" alt="gallery image"
											class="img-responsive"></a></li>
								<li><a href="#"><img src="images/sidebar/gallery_03.jpg" alt="gallery image"
											class="img-responsive"></a></li>
								<li><a href="#"><img src="images/sidebar/gallery_04.jpg" alt="gallery image"
											class="img-responsive"></a></li>
								<li><a href="#"><img src="images/sidebar/gallery_05.jpg" alt="gallery image"
											class="img-responsive"></a></li>
								<li><a href="#"><img src="images/sidebar/gallery_06.jpg" alt="gallery image"
											class="img-responsive"></a></li>
								<li><a href="#"><img src="images/sidebar/gallery_07.jpg" alt="gallery image"
											class="img-responsive"></a></li>
								<li><a href="#"><img src="images/sidebar/gallery_08.jpg" alt="gallery image"
											class="img-responsive"></a></li>
								<li><a href="#"><img src="images/sidebar/gallery_09.jpg" alt="gallery image"
											class="img-responsive"></a></li>
							</ul>
						</div>
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- footer top -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<p>&copy; 2025. Designed By <a href="https://themeforest.net/user/labartisan">SADMAN</a></p>
					</div>
					<div class="col-md-6 col-xs-12">
						<ul class="social-default">
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- footer bottom -->
	</footer>
	<a class="page-scroll scroll-top" href="#scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	<!-- Footer End here -->


	<!-- jquery -->
	<script src="assets/js/jquery-1.12.4.min.js"></script>

	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<!-- Isotope -->
	<script src="assets/js/isotope.min.js"></script>

	<!-- lightcase -->
	<script src="assets/js/lightcase.js"></script>

	<!-- counterup -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>

	<!-- Swiper -->
	<script src="assets/js/swiper.jquery.min.js"></script>

	<!--progress-->
	<script src="assets/js/circle-progress.min.js"></script>

	<!--velocity-->
	<script src="assets/js/velocity.min.js"></script>

	<!--quick-view-->
	<script src="assets/js/quick-view.js"></script>

	<!--nstSlider-->
	<script src="assets/js/jquery.nstSlider.js"></script>

	<!--flexslider-->
	<script src="assets/js/flexslider-min.js"></script>

	<!--easing-->
	<script src="assets/js/jquery.easing.min.js"></script>

	<!--coundown-->
	<script src="assets/js/coundown.js"></script>

	<!-- custom -->
	<script src="assets/js/custom.js"></script>
	
</body>

</html>