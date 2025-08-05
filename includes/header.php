<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
   
    <meta name="viewport" content="width=device-width, initial-scale=1" />
       
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">

<?php
// If canonical URL is specified, include canonical link element
if (isset($pageCanonical) && $pageCanonical) {
    echo '<link rel="canonical" href="' . htmlspecialchars($pageCanonical) . '">';
}

if (isset($pageRobots) && $pageRobots) {
    echo '<meta name="robots" content="' . htmlspecialchars($pageRobots) . '">';
}
?>

     <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css"
    />
  <link href="assets/css/carousel.css" rel="stylesheet">
    <link href="assets/css/costom.css" rel="stylesheet">
    <link href="assets/css/recharge.css" rel="stylesheet">
    <link href="assets/css/bus-booking.css" rel="stylesheet">
    <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
    <link href="assets/css/icofont.min.css" rel="stylesheet">
    <link href="assets/fonts/fa/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/js/vendor/daterangepicker/daterangepicker-bs3.css">
    <link rel="stylesheet" href="assets/js/vendor/datepicker/css/datepicker.css">
    <link rel="stylesheet" href="assets/plugin/jqueryUI/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/media.css">
    <link href="assets/css/holiday.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <link
        href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700|Roboto:100,300,400,500,700,700i,900,900i&amp;display=swap"
        rel="stylesheet">
    <style>
        :root {
            --main-color: #f58120;
            --secondary-color: #01a551;
            --color-3: #021e4b;
            --color-4: #6c80e5;
        }
    </style>
    <style>
    </style>
    
    <meta name="google-site-verification" content="Uf5NIx-02d47nL9VnZ-P1QvyUybWAr2AEoSwrEUqQfA" />
    
  
</head>
  <style>
    .fade.in {
        background: transparent;
    }

    :root {
        --color-theme: #fff;
    }

    .theme2_our-services ul a {
        color: #fff;
        text-decoration: none;
    }

    .theme2_our-services li {
        width: calc(97% / 6);
        display: inline-block;
    }
    
    
</style>
<link href="assets/css/home_theme/home_theme_9.css" rel="stylesheet">
<link href="assets/css/owl.carousel.min.css" rel="stylesheet">
<script src="../static.elfsight.com/platform/platform.js" data-use-service-core defer></script>


<body class="ho_body_section">
    <link href="assets/css/header_theme/header_theme_9.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/country_flags.css">
    <link
        href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap"
        rel="stylesheet">

    <style>
        #google_translate_element select {
            background: #283845;
            color: #ffffff;
            border: none;
            padding: 6px 8px;
            border-radius: 5px
        }

        /*google translate link | logo */
        .goog-logo-link,
        .goog-te-gadget span,
        div#goog-gt- {
            display: none !important;
        }

        .goog-te-gadget {
            color: transparent !important;
            font-size: 0;
            margin-right: -1px;
        }

        /* google translate banner-frame */
        .goog-te-banner-frame {
            display: none !important;
        }

        #goog-gt-tt,
        .goog-te-balloon-frame {
            display: none !important;
        }

        .goog-text-highlight {
            background: none !important;
            box-shadow: none !important;
        }

        .goog-te-combo::-webkit-scrollbar-track {
            box-shadow: inset 0 0 4px rgba(0, 0, 0, 0.3);
            border-radius: 5px;
            background: #F5F5F5;
        }

        .skiptranslate iframe {
            display: none;
        }

        .goog-te-gadget .goog-te-combo {
            margin: 3px 3px 0 2px;
        }

        .goog-te-combo::-webkit-scrollbar {
            width: 8px;
            background-color: #F5F5F5;
        }

        .goog-te-combo::-webkit-scrollbar-thumb {
            border-radius: 10px;
            box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
            background: #D62929;
        }

        .ho_body_section {
            top: 0px !important;
        }
        
           /* Top Info Bar */
      .top-bar {
        background: #032b91;
        /* border-bottom: 1px solid #ddd; */
        font-size: 14px;
        font-weight: bold;
        color: white;
        padding: 2px 0;
        font-family: 'Quicksand', sans-serif;
        margin-bottom:'0px'
      }
      .top-bar .info-item {
        margin-right: 25px;
        display: inline-block;
      }
      .top-bar .row {
        display: flex;
        align-items: center;
      }
      .top-bar .info-item i {
        margin-right: 5px;
        color: #fbfbfb;
      }
      .top-bar .apply-btn {
        float: right;
        background: red;
        color: #fff;
        padding: 8px 14px;
        border-radius: 20px;
        font-weight: bold;
        font-size: 13px;
        font-family: 'Quicksand', sans-serif;
      }

      /* Main Header */
      .main-header {
        background: #fff;
       
      }
      .main-header .row {
        display: flex;
        align-items: center;
      }
      .main-header .logo img {
        height: 70px;
      }
      .main-header .nav > li > a {
        color: #333;
        font-weight: bold;
        font-family: 'Quicksand', sans-serif;
      }
      .main-header .navbar-nav > .active > a {
        color: rgb(4, 42, 182) !important;
        border-bottom: 2px solid red;
      }

      /* Offcanvas Menu */
      .mobile-toggle {
        font-size: 20px;
        cursor: pointer;
        display: none;
      }
      .offcanvas-menu {
        position: fixed;
        top: 0;
        left: -250px;
        width: 250px;
        height: 100%;
        background: #003399;
        color: white;
        padding: 20px;
        transition: all 0.3s ease;
        z-index: 9999;
      }
      .offcanvas-menu ul {
        list-style: none;
        padding: 0;
      }
      .offcanvas-menu li {
        padding: 15px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
      }
       .offcanvas-menu li a{
           color: #fff;
       }
      .offcanvas-menu.show {
        left: 0;
      }

      @media (max-width: 768px) {
        .navbar-collapse {
          display: none !important;
        }
        .mobile-toggle {
          display: inline-block;
          color: #032b91;
          margin-top: 10px;
        }
        .top-bar .apply-btn {
          float: none;
          display: block;
          margin-top: 10px;
        }
        .emailId {
            display: none !important;
        }
        .top-bar .info-item{
            margin: 10px !important;
        }
        .top-bar { 
            font-size: 13px !important;
        }
        
      }

      .splide__slide img {
        width: 100%;
        height: 600px;
        object-fit: cover;
      }
      
        
    </style>

    <!-- Top Bar -->
    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-xs-12">
            <span class="info-item emailId"
              ><i class="fa fa-map-marker"></i>
              <a href="https://www.google.com/maps?q=A-43,+Sector+63,+Noida,+Uttar+Pradesh" target="_blank" style="color: #fff;">
    A-43, Noida Sector-63, U.P
  </a>
</span>
            <!-- <span class="info-item emailId"
              ><i class="fa fa-envelope"></i> <a href="mailto:info@dreamskyairways.com" style="color:#fff;"> info@dreamskyairways.com </a></span
            >
            <span class="info-item"
              ><i class="fa fa-phone"></i> <a href="tel:911204992853" style="color:#fff;">Helpline: 120-499-2853</a></span
            >
            <span class="info-item "
              ><i class="fa fa-whatsapp"></i> <a href="tel:8750610304" style="color:#fff;">+91-8750610304</a></span
            > -->
            <!-- Email -->
<!-- <span class="info-item emailId">
  <i class="fa fa-envelope"></i>
  <a href="mailto:dreamskyairways@gmail.com" style="color:#fff;">dreamskyairways@gmail.com</a>
</span> -->
 <!-- <span> -->
    <!-- <i class="fa fa-envelope"></i>
    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@dreamskyairways.com" target="_blank" style="color:#fff;">
  info@dreamskyairways.com
</a>


  </span> -->
<!-- Phone -->
<!-- <span class="info-item">
  <i class="fa fa-phone"></i>
  <a href="tel:+911204992853" style="color:#fff;">Helpline:120-499-2853</a>
</span> -->
<span class="info-item" style=" gap: 40px; , ">
  <i class="fa fa-phone" style="font-size: 11px;"></i>
  <a href="tel:+911204992853" style="color: #fff;">Helpline: 120-499-2853</a>
</span>

<!-- WhatsApp -->
<span class="info-item">
  <!-- <i class="fa fa-whatsapp"></i> -->
  <i class="fa-brands fa-whatsapp"></i>
  <a href="https://wa.me/918750610304" target="_blank" style="color:#fff;">+91-8750610304</a>
</span>
<span> 
     <i class="fa fa-envelope"></i>
    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@dreamskyairways.com" target="_blank" style="color:#fff;">
  info@dreamskyairways.com
</a>
    </span>

          </div>
          <div class="col-sm-3 hidden-xs text-right">
            <a href="apply-for-job.php" class="apply-btn">Apply for Job</a>
          </div>
        </div>
      </div>
    </div>

   
    <div class="main-header">
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-sm-3 logo">
              <a href="./">
            <img src="assets/images/DreamSky.svg" alt="DreamSky Airways" />
            </a>
          </div>
          <div class="col-sm-9 hidden-xs">
            <nav
              class="navbar navbar-default" id="main-menu"
              style="margin: 0; border: none; background: none"
            >
              <div class="container-fluid">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="./">Home</a></li>
                  <li><a href="who-we-are.php">About Us</a></li>
                  <li><a href="service.php">Services</a></li>
                  <li><a href="career.php">Career</a></li>
                   <li><a href="Contact-Enquery-Form.php">Inquery </a></li>
                  <li><a href="faq-page.php">FAQ</a></li>
                  <li><a href="Contact-Enquery-Form.php">Inquery</a></li>
                  <li><a href="contact-us.php">Contact</a></li>
                </ul>
              </div>
            </nav>
          </div>
          <div class="col-xs-6 visible-xs text-right">
            <i class="fa fa-bars mobile-toggle"></i>
          </div>
        </div>
      </div>
    </div>

  
    <div class="offcanvas-menu" id="mobileMenu">
      <ul>
      <li class="active"><a href="./">Home</a></li>
                  <li><a href="who-we-are.php">About Us</a></li>
                  <li><a href="service.php">Services</a></li>
                  <li><a href="career.php">Career</a></li>
                  <li><a href="faq-page.php">FAQ</a></li>
                  <li><a href="Contact-Enquery-Form.php">Inquery</a></li>
                  <li><a href="contact-us.php">Contact</a></li>
                  

        <li><i class="fa fa-phone"></i> <a href="tel:8750610304" style="color:#fff;">  +91-875-061-0304 </a></li>
        <li><i class="fa fa-envelope"></i> <a href="mailto:info@dreamskyairways.com" style="color:#fff;"> info@dreamskyairways.com </a></li>
        <li>
          <a href="#" style="color: #fff"
            ><i class="fa fa-pencil"></i> Apply for Job</a
          >
        </li>
      </ul>
    </div>