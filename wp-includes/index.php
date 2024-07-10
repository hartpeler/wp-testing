<?php
get_header();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Velhive" name="keywords">
  <meta content="Velhive" name="description">

  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="icon">
  <link href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.ico" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?php echo get_template_directory_uri(); ?>/css.css" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo get_template_directory_uri(); ?>/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo get_template_directory_uri(); ?>/nivo-slider.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/owl.transitions.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/animate.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="<?php echo get_template_directory_uri(); ?>/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="<?php echo get_template_directory_uri(); ?>/responsive.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar-example">



  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                  data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="#home">
                  <h1><span>V</span>elhive</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
                </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">About</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#services">Services</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#jobs">Jobs</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides nivoSlider">
        <img src="<?php echo get_template_directory_uri(); ?>/slider1.jpg" alt="" title="#slider-direction-1"
          style="width: 1536px; visibility: hidden;">
        <img src="<?php echo get_template_directory_uri(); ?>/slider3.jpg" alt="" title="#slider-direction-2"
          style="width: 1536px; visibility: hidden;">
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <div class="layer-1-1 hidden-xs wow slideInDown animated" data-wow-duration="2s" data-wow-delay=".2s"
                  style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: slideInDown;">
                  <h2 class="title1">We Build the future</h2>
                </div>
                <div class="layer-1-2 wow slideInUp animated" data-wow-duration="2s" data-wow-delay=".1s"
                  style="visibility: visible; animation-duration: 2s; animation-delay: 0.1s; animation-name: slideInUp;">
                  <h1 class="title2">Our innovative digital solutions are designed to drive progress and shape
                    tomorrow’s business landscape</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <div class="layer-1-1 hidden-xs wow slideInUp animated" data-wow-duration="2s" data-wow-delay=".2s"
                  style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: slideInUp;">
                  <h2 class="title1">Innovate and Elevate</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp animated" data-wow-duration="2s" data-wow-delay=".1s"
                  style="visibility: visible; animation-duration: 2s; animation-delay: 0.1s; animation-name: slideInUp;">
                  <h1 class="title2">We focus on creating cutting-edge digital solutions that help businesses grow and
                    reach new heights in the digital era.</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center about-title">
            <h2>About Velhive</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/logo-full.png" alt="velhive" style="max-width: 65%;">
              </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <h4>
                Velhive is a leading information technology consultancy
                offering a comprehensive range of services to help businesses harness
                the power of digital technology. Our expert team provides tailored
                solutions designed to drive growth, enhance efficiency, and achieve
                strategic goals.
              </h4>
              <h4>
                At Velhive, we are committed to delivering innovative
                and effective IT solutions that empower businesses to achieve their
                goals and stay ahead in a competitive digital landscape. Our
                collaborative approach and dedication to excellence ensure that our
                clients receive the highest quality of service and support.
              </h4>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->

  <!-- Start Service area -->
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>Our Services</h2>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="services-contents">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="fa fa-cloud"></i>
                  </a>
                  <h4>Digital Transformation</h4>
                  <p>
                    Guiding organizations through digital transformation journeys to improve operational efficiency.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="fa fa-code"></i>
                  </a>
                  <h4>Software Development</h4>
                  <p>
                    Designing and developing custom software applications tailored to specific business needs.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="fa fa-calendar"></i>
                  </a>
                  <h4>IT Strategy and Consulting</h4>
                  <p>
                    Offering expert advice on technology investments, infrastructure planning, and IT governance.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="fa fa-gears"></i>
                  </a>
                  <h4>System Integration</h4>
                  <p>
                    Ensuring seamless integration of various IT systems
                    and applications. Enhancing interoperability and data flow across
                    different platforms to optimize business operations.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="fa fa-bar-chart"></i>
                  </a>
                  <h4>SEO Expert</h4>
                  <p>
                    Developing and implementing SEO strategies to improve website visibility and ranking on search
                    engines.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="fa fa-handshake-o"></i>
                  </a>
                  <h4>IT Support and Maintenance</h4>
                  <p>
                    Providing ongoing IT support and maintenance services to ensure system reliability and performance.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Service area -->

  <!-- our-skill-area start -->
  <div class="our-skill-area fix hidden-sm">
    <div class="test-overly"></div>
    <div class="skill-bg area-padding-2">
      <div class="container">
        <!-- section-heading end -->
        <div class="row">
          <div class="skill-text">
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <div style="display:inline;width:175px;height:200px;"><canvas width="218" height="250"
                      style="width: 175px; height: 200px;"></canvas><input type="text" class="knob" value="95%"
                      data-rel="95" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#c12ffd"
                      data-thickness=".20" data-readonly="true" disabled="disabled" readonly="readonly"
                      style="width: 91px; height: 58px; position: absolute; vertical-align: middle; margin-top: 58px; margin-left: -133px; border: 0px; background: none; font: bold 35px Arial; text-align: center; color: rgb(193, 47, 253); padding: 0px; appearance: none;">
                  </div>
                  <h3 class="progress-h4">Web Design</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <div style="display:inline;width:175px;height:200px;"><canvas width="218" height="250"
                      style="width: 175px; height: 200px;"></canvas><input type="text" class="knob" value="85%"
                      data-rel="85" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#c12ffd"
                      data-thickness=".20" data-readonly="true" disabled="disabled" readonly="readonly"
                      style="width: 91px; height: 58px; position: absolute; vertical-align: middle; margin-top: 58px; margin-left: -133px; border: 0px; background: none; font: bold 35px Arial; text-align: center; color: rgb(193, 47, 253); padding: 0px; appearance: none;">
                  </div>
                  <h3 class="progress-h4">Graphics Design</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <div style="display:inline;width:175px;height:200px;"><canvas width="218" height="250"
                      style="width: 175px; height: 200px;"></canvas><input type="text" class="knob" value="75%"
                      data-rel="75" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#c12ffd"
                      data-thickness=".20" data-readonly="true" disabled="disabled" readonly="readonly"
                      style="width: 91px; height: 58px; position: absolute; vertical-align: middle; margin-top: 58px; margin-left: -133px; border: 0px; background: none; font: bold 35px Arial; text-align: center; color: rgb(193, 47, 253); padding: 0px; appearance: none;">
                  </div>
                  <h3 class="progress-h4">Php Developer</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <div style="display:inline;width:175px;height:200px;"><canvas width="218" height="250"
                      style="width: 175px; height: 200px;"></canvas><input type="text" class="knob" value="65%"
                      data-rel="65" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#c12ffd"
                      data-thickness=".20" data-readonly="true" disabled="disabled" readonly="readonly"
                      style="width: 91px; height: 58px; position: absolute; vertical-align: middle; margin-top: 58px; margin-left: -133px; border: 0px; background: none; font: bold 35px Arial; text-align: center; color: rgb(193, 47, 253); padding: 0px; appearance: none;">
                  </div>
                  <h3 class="progress-h4">Java Script</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- our-skill-area end -->

  <!-- Start contact Area -->
  <div id="jobs" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Job Vacancies</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-well">
                <h5>Domain administrator</h5>
                <p>
                  Responsibilities:
                </p>
                <ul>
                  <li>
                    <i class="fa fa-check"></i> Responsible for domain name registration, management and maintenance.
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Ensure that the domain name resolution is set correctly to ensure the
                    compliance of the website.
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Handle domain name renewal, transfer and Sony change and other matters.
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Assist in completing
                    domain name transactions, find high-value domain names by looking for
                    old domain names, and purchase, evaluate and sell them.
                  </li>
                </ul>
                <p>
                  Qualifications:
                </p>
                <ul>
                  <li>
                    <i class="fa fa-check"></i> Be able to read and write in Chinese.
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Priority is given to those with related work.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-well">
                <h5>Website administrator</h5>
                <p>
                  Responsibilities:
                </p>
                <ul>
                  <li>
                    <i class="fa fa-check"></i> Responsible for building and developing websites using WordPress.
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Responsible for the daily management and maintenance of the website, and
                    the website backup is being managed.
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Responsible for on-site SEO optimization, including keyword research,
                    content optimization and technical SEO.
                  </li>
                </ul>
                <p>
                  Qualifications:
                </p>
                <ul>
                  <li>
                    <i class="fa fa-check"></i> At least 1 year of website building related work.
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Familiar with AI creation.
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Familiar with wordpress is preferred.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-well">
                <h5>Google SEO</h5>
                <p>
                  Responsibilities:
                </p>
                <ul>
                  <li>
                    <i class="fa fa-check"></i> Conduct keyword research and analyze competitors keyword strategies.
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Conduct website SEO audits to identify and solve content problems.
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Plan and implement external link building strategies to obtain
                    high-quality backlinks.
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Use tools such as Google Analytics and Google Search Console to monitor
                    website traffic and SEO performance.
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Track Google algorithm updates.
                  </li>
                </ul>
                <p>
                  Qualifications:
                </p>
                <ul>
                  <li>
                    <i class="fa fa-check"></i> At least 1 year of SEO related work experience.
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Proficient in using SEO tools such as Google Analytics, Google Search
                    Console, SEMrush, Ahrefs, Moz, etc.
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Able to analyze data, identify problems and opportunities, and propose
                    optimization plans.
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Able to propose innovative content and link building strategies.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-well">
                <h5>Website content administrator</h5>
                <p>
                  Responsibilities:
                </p>
                <ul>
                  <li>
                    <i class="fa fa-check"></i> Responsible for the planning and creation of website content.
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Ensure content quality and consistency, manage content agenda and
                    editing process.
                  </li>
                </ul>
                <p>
                  Qualifications:
                </p>
                <ul>
                  <li>
                    <i class="fa fa-check"></i> Be able to read and write in Chinese.
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Priority is given to those with related work.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <img src="<?php echo get_template_directory_uri(); ?>/logo-full.png" alt="Velhive Logo">
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  APL Tower Central Park Lt.26
                  <br>
                  Jl. Letjen S. Parman No.Kav. 28, RT.12/RW.7, Petamburan,
                  Kec. Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota
                  Jakarta 11440
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span><a href="https://wa.me/+6282172321013" target="_blank"> (+62) 821 7232 1013</a>
                  </p>
                  <p><span>Email:</span><a href="mailto:velhivedigital@outlook.com" target="_blank">
                      velhivedigital@outlook.com</a></p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                © Copyright <strong>Velhive</strong>. All Rights Reserved
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo get_template_directory_uri(); ?>/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/owl.carousel.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/venobox.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/jquery.knob.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/wow.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/parallax.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/easing.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/jquery.appear.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo get_template_directory_uri(); ?>/contactform.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/main.js"></script>



  </div>
</body>

</html>
<?php
get_footer();
?>