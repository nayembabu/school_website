
  
  <?php
include 'pdo.php';
  
  $mys  = "SELECT * FROM about_us_tbl ";
  $stms = $pdo->prepare($mys);
  $exc  = $stms->execute();
  $all_news = $stms -> fetchAll(PDO::FETCH_OBJ);
  
  
  
  

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>KidsAcademy</title>
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
  <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background-color: #f5f5f5;
        padding: 20px;
    }

    .news-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        max-width: 1200px;
        margin: auto;
        
        flex-direction:column;
        height: 100%;
    }

    .news-box {
        background: white;
        flex-grow: 1;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .news-box img {
        width: 100%;
        border-radius: 10px;
        
        
    }

    .news-box h3 {
        font-size: 18px;
        margin: 10px 0;
        color: #333;
    }

    .news-box p {
        font-size: 14px;
        color: #666;
    }
    .fixed{
      text-align: center;
      margin-top: auto;
    }
</style>

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


  <header>
    <div class="header-top">
      <div class="container">
        <div class="ht-area">
          <ul class="left">
            <li><span><i class="fa fa-phone" aria-hidden="true"></i></span> Phone : 8801 234 567 890</li>
            <li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Opening Time : 9:30am-5:30pm</li>
            <li><span><i class="fa fa-home" aria-hidden="true"></i></span> Address : Labartisan 1205 Newyork</li>
          </ul>
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
              <a class="" href="index.html"><img src="images/logo.png" alt="logo" class="img-responsive"></a>
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
                <li><span class="menu-search"><i class="fa fa-search" aria-hidden="true"></i></span></li>
                <li class="menu_cart dropdown"><span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                  <ul class="dropdown-menu first_dropdown shop_feature">
                    <li class="feature_item">
                      <div class="featured_image">
                        <img src="images/product/menu_cart_01.jpg" alt="Fratured image" class="img-responsive" />
                      </div>
                      <!--featured image-->
                      <div class="featured_content">
                        <h3><a href="#">Product Title</a> </h3>
                        <span class="remove"><i class="fa fa-times" aria-hidden="true"></i></span>
                        <p>quantity: 1</p>
                        <span>$85</span>
                      </div>
                      <!--featured content-->
                    </li><!--  feature item -->
                    <li class="feature_item">
                      <div class="featured_image">
                        <img src="images/product/menu_cart_02.jpg" alt="Fratured image" class="img-responsive" />
                      </div>
                      <!--featured image-->
                      <div class="featured_content">
                        <h3><a href="#">Product Title</a> </h3>
                        <span class="remove"><i class="fa fa-times" aria-hidden="true"></i></span>
                        <p>quantity: 2</p>
                        <span>$85</span>
                      </div>
                      <!--featured content-->
                    </li><!--  feature item -->
                    <li class="feature_item">
                      <div class="featured_image">
                        <img src="images/product/menu_cart_03.jpg" alt="Fratured image" class="img-responsive" />
                      </div>
                      <!--featured image-->
                      <div class="featured_content">
                        <h3><a href="#">Product Title</a> </h3>
                        <span class="remove"><i class="fa fa-times" aria-hidden="true"></i></span>
                        <p>quantity: 4</p>
                        <span>$85</span>
                      </div>
                      <!--featured content-->
                    </li><!--  feature item -->
                    <li class="cart_total">total order: <span>$591.00</span></li>
                    <li><a href="shop-cart.html" class="button-default check_out">Check Out</a></li>
                  </ul>
                </li>
              </ul>

              <ul class="menu">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Home <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="index.html">Home Style 01</a></li>
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
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">About <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="about.html">About Style 01</a></li>
                    <li class="active"><a href="about-2.html">About Style 02</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Classes <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="classes.html">Classes</a></li>
                    <li><a href="class-single.html">Classes Details</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Teachers <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="teachers.html">Teachers</a></li>
                    <li><a href="teacher-details.html">Teacher Details</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Pages <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="gallery-2.html">Gallery Two</a></li>
                    <li><a href="event.html">Event</a></li>
                    <li><a href="event-single.html">Event Details</a></li>
                    <li><a href="404.html">404 Error</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Blog <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="blog.html">Blog Page</a></li>
                    <li><a href="single.html">Blog Single</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Shop <span class="caret"></span></a>
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


  <!-- Page Header Start here -->
  <section class="page-header section-notch">
    <div class="overlay">
      <div class="container">
        <h3>About Our KidsAcademy</h3>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li>-</li>
          <li>About us</li>
        </ul>
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- page header -->
  <!-- Page Header End here -->


  <!-- About Start here -->
  <section class="about about-two padding-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="about-image">
            <img src="images/about/about.png" alt="about image" class="img-responsive">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <h3>About Our KidsAcademy</h3>
            <p>Enthusiasticay diseminate competitive oportunitie through transparent an actions Compelngly seize viral
              schemas through intermandated creative is adiea sources. Enthusiasticay plagiarize clientcentered
              relationship for the covalent experiences. Distinctively architect 24/365 service for wireless is
              ebusiness ahosfluorescently Efficiently comunicate coperative methods of empowerment awesome athrough
              Monotonectaly myocardinate cross and functional niche markets and an functional.</p>
            <ul>
              <li><a href="#" class="button-default">Read More</a></li>
              <li><a href="#" class="button-default">Buy Now</a></li>
            </ul>
          </div><!-- about content -->
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- about -->
  <!-- About End here -->


  <!-- Achievements Start here -->
  <section class="achievements section-notch">
    <div class="overlay padding-120">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-12">
            <div class="achievement-item">
              <i class="icon flaticon-student"></i>
              <span class="counter">320</span><span>+</span>
              <p>Total Students</p>
            </div><!-- achievement item -->
          </div>
          <div class="col-md-3 col-12">
            <div class="achievement-item">
              <i class="icon flaticon-construction"></i>
              <span class="counter">12</span>
              <p>Class Rooms</p>
            </div><!-- achievement item -->
          </div>
          <div class="col-md-3 col-12">
            <div class="achievement-item">
              <i class="icon flaticon-school-bus"></i>
              <span class="counter">24</span>
              <p>Schools bus</p>
            </div><!-- achievement item -->
          </div>
          <div class="col-md-3 col-12">
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


  <!-- Testimonial Start here -->
  <section class="testimonial padding-120">
    <div class="container">
      <div class="section-header">
        <h3>What Parents Say</h3>
        <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize pandemic
          strategic themeplatform.</p>
      </div>
      <div class="testimonial-items">
        <div class="testimonial-slider-two swiper-container">
          <div class="swiper-wrapper">
            <div class="testimonial-item swiper-slide">
              <div class="testimonial-details">
                <p>Professionally predominate that awesome themes and education timely infrastructures tops
                  nemethodologies Colaboratively seize scalable Colaboratively seze scalable achannels before an
                  creative theme longterm high awesome impact</p>
                <h4>Joly Smith <span>ui/ux Designer</span></h4>
                <img src="images/testimonial/testimonial_icon_01.jpg" alt="testimonial icon" class="img-responsive">
              </div>
              <div class="testimonial-image">
                <img src="images/testimonial/testimonial_01.jpg" alt="client image" class="img-responsive">
              </div>
            </div><!-- testimonial-item -->
            <div class="testimonial-item swiper-slide">
              <div class="testimonial-details">
                <p>Professionally predominate that awesome themes and education timely infrastructures tops
                  nemethodologies Colaboratively seize scalable Colaboratively seze scalable achannels before an
                  creative theme longterm high awesome impact</p>
                <h4>Joly Smith <span>ui/ux Designer</span></h4>
                <img src="images/testimonial/testimonial_icon_02.jpg" alt="testimonial icon" class="img-responsive">
              </div>
              <div class="testimonial-image">
                <img src="images/testimonial/testimonial_02.jpg" alt="client image" class="img-responsive">
              </div>
            </div><!-- testimonial-item -->
            <div class="testimonial-item swiper-slide">
              <div class="testimonial-details">
                <p>Professionally predominate that awesome themes and education timely infrastructures tops
                  nemethodologies Colaboratively seize scalable Colaboratively seze scalable achannels before an
                  creative theme longterm high awesome impact</p>
                <h4>Joly Smith <span>ui/ux Designer</span></h4>
                <img src="images/testimonial/testimonial_icon_03.jpg" alt="testimonial icon" class="img-responsive">
              </div>
              <div class="testimonial-image">
                <img src="images/testimonial/testimonial_03.jpg" alt="client image" class="img-responsive">
              </div>
            </div><!-- testimonial-item -->
            <div class="testimonial-item swiper-slide">
              <div class="testimonial-details">
                <p>Professionally predominate that awesome themes and education timely infrastructures tops
                  nemethodologies Colaboratively seize scalable Colaboratively seze scalable achannels before an
                  creative theme longterm high awesome impact</p>
                <h4>Joly Smith <span>ui/ux Designer</span></h4>
                <img src="images/testimonial/testimonial_icon_01.jpg" alt="testimonial icon" class="img-responsive">
              </div>
              <div class="testimonial-image">
                <img src="images/testimonial/testimonial_01.jpg" alt="client image" class="img-responsive">
              </div>
            </div><!-- testimonial-item -->
            <div class="testimonial-item swiper-slide">
              <div class="testimonial-details">
                <p>Professionally predominate that awesome themes and education timely infrastructures tops
                  nemethodologies Colaboratively seize scalable Colaboratively seze scalable achannels before an
                  creative theme longterm high awesome impact</p>
                <h4>Joly Smith <span>ui/ux Designer</span></h4>
                <img src="images/testimonial/testimonial_icon_02.jpg" alt="testimonial icon" class="img-responsive">
              </div>
              <div class="testimonial-image">
                <img src="images/testimonial/testimonial_02.jpg" alt="client image" class="img-responsive">
              </div>
            </div><!-- testimonial-item -->
            <div class="testimonial-item swiper-slide">
              <div class="testimonial-details">
                <p>Professionally predominate that awesome themes and education timely infrastructures tops
                  nemethodologies Colaboratively seize scalable Colaboratively seze scalable achannels before an
                  creative theme longterm high awesome impact</p>
                <h4>Joly Smith <span>ui/ux Designer</span></h4>
                <img src="images/testimonial/testimonial_icon_03.jpg" alt="testimonial icon" class="img-responsive">
              </div>
              <div class="testimonial-image">
                <img src="images/testimonial/testimonial_03.jpg" alt="client image" class="img-responsive">
              </div>
            </div><!-- testimonial-item -->

          </div><!-- swiper-wrapper -->
        </div><!-- swiper-container -->
      </div><!-- testimonial-items -->
    </div><!-- container -->
  </section><!-- testimonial -->
  <!-- Testimonial End here -->


  <!-- Teachers Start here -->
  <section class="teachers teachers-two">
    <div class="overlay padding-120">
      <div class="container">
        <div class="section-header bg">
          <h3>NEWS</h3>
          <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize
            pandemic strategic themeplatform.</p>
        </div>

        <div class="news-container">


        <?php foreach($all_news as $news_view){?>

          <div class="news-box">
              
              <h3><?php echo $news_view->about_full_titlesss;?></h3>
              <img src="t.jpg" alt="নিউজ ইমেজ">
              <p><?php echo $news_view->about_creating_timingsss;?></p>
              <p><?php echo $news_view->about_creating_datessss;?></p>
              <p><?php echo $news_view->about_full_des_cription_ssss;?></p>
              <div class="fixed">
              <a href="ab.php?perameter=<?php echo $news_view->about_us_tbl_pr_at_iddd; ?>"><button type="button" class="btn btn-primary btn-lg">View</button></a>
              </div>
          </div>
          
         
          <?php } ?> 
         
  
       
         
      </div>
             

      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- teacher -->
  <!-- Teachers End here -->


  <!-- Partner Start here -->
  <section class="partner partner-two padding-120">
    <div class="container">
      <div class="section-header">
        <h3>Our Partners Logo</h3>
        <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize pandemic
          strategic themeplatform.</p>
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
  </section><!-- partner -->
  <!-- Partner End here -->


  <!-- Subscribe Start here -->
  <section class="subscribe">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-xs-12">
          <h3>Join Our Newsletter</h3>
        </div>
        <div class="col-lg-7 col-xs-12">
          <form action="/">
            <input type="text" placeholder="Enter your e-mail here">
            <input type="submit" value="Subscribe Now">
          </form>
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- subscribe -->
  <!-- Subscribe End here -->


  <!-- Footer Start here -->
  <footer>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="title"><img src="images/logo.png" alt="logo" class="img-responsive"></div>
              <div class="footer-about">
                <p>Distily enable team driven services through extensive is a relatonships platforms with interactive
                  content. Enthusiastically scale effective.</p>
                <ul>
                  <li><span><i class="fa fa-home" aria-hidden="true"></i></span> New Chokoya Road, USA.</li>
                  <li><span><i class="fa fa-phone" aria-hidden="true"></i></span> +8801 923 970 212, 0125897</li>
                  <li><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span> Contact@admin LabArtisan</li>
                  <li><span><i class="fa fa-globe" aria-hidden="true"></i></span> Email@admin LabArtisan</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-xs-12">
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
          <div class="col-lg-3 col-sm-6 col-xs-12">
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
          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <h4 class="title">Recent Photos</h4>
              <ul class="photos">
                <li><a href="#"><img src="images/sidebar/gallery_01.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="images/sidebar/gallery_02.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="images/sidebar/gallery_03.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="images/sidebar/gallery_04.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="images/sidebar/gallery_05.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="images/sidebar/gallery_06.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="images/sidebar/gallery_07.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="images/sidebar/gallery_08.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="images/sidebar/gallery_09.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
              </ul>
            </div>
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- footer top -->
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-xs-12">
            <p>&copy; 2021. Designed By <a href="https://themeforest.net/user/labartisan">LabArtisan</a></p>
          </div>
          <div class="col-lg-6 col-xs-12">
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