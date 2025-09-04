<?php


$pageTitle = "Dream Sky Airways Pvt Ltd | Leading Tour and Travel Company in India";
$pageDescription = "Plan your perfect trip with Dream Sky Airways – a trusted travel company in India offering flight bookings, hotel reservations, bus and cab services, custom holiday packages, and more. Explore stress-free travel planning today.";

$pageCanonical = "https://www.dreamskyairways.com/";

$pageRobots = 'index,follow';

include('includes/header.php');


?>

<!-- carousel -->
<section id="image-carousel" class="splide" aria-label="Beautiful Images">
    <div class="splide__track">
        <ul class="splide__list ">
            <li class="splide__slide">
                <img src="assets/images/Sky.jpg" alt="" />
            </li>
            <li class="splide__slide">
                <img src="assets/images/3.webp" alt="" />
            </li>
            <li class="splide__slide">
                <img src="assets/images/home.jpg" alt="" />
            </li>
              <!-- <li class="splide__slide">
                <img src="assets/images/pack.jpg" alt="" /> -->
            <!-- </li> -->
             
        </ul>
    </div>
</section>
<!-- Include Splide JS & CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

<!-- Splide Initialization Script -->
<!-- <script>
  document.addEventListener('DOMContentLoaded', function () {
    new Splide('#image-carousel', {
         type: 'fade', 
  rewind: true, 
      type: 'loop',
      autoplay: true,
      interval: 2000,
      pauseOnHover: false,
      pauseOnFocus: false,
    
    }).mount();
  });
</script> -->
<!-- <script>
  document.addEventListener('DOMContentLoaded', function () {
    new Splide('#image-carousel', {
      type: 'slide',         // Normal slide (no infinite loop)
      rewind: true,          // Go back to first after last
      autoplay: true,
      interval: 2000,
      speed: 1000,           // Smooth slide transition
      pauseOnHover: false,
      pauseOnFocus: false,
    }).mount();
  });
</script> -->
<!-- <script>
  document.addEventListener('DOMContentLoaded', function () {
    new Splide('#image-carousel', {
      type: 'loop',          // Infinite loop
      autoplay: true,        // Auto slide
      interval: 2000,        // 2 seconds
      speed: 1000,           // Smooth transition
      easing: 'ease-in-out', // Smooth effect
      pauseOnHover: false,
      pauseOnFocus: false,
    }).mount();
  });
</script> -->

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const splide = new Splide('#image-carousel', {
      type: 'slide',          // Use slide instead of loop
      rewind: true,           // Go back to first after last
      autoplay: true,

      speed: 1000,
      easing: 'ease-in-out',
      pauseOnHover: false,
      pauseOnFocus: false,
    });

    let currentIndex = 0;

    splide.on('move', (newIndex) => {
      currentIndex = newIndex;
    });

    splide.on('autoplay:playing', () => {
      if (currentIndex === splide.length - 1) {
        splide.Components.Autoplay.pause(); // Pause at last
        // setTimeout(() => {
        //   splide.go(0); // Go to first
        //   setTimeout(() => {
        //     splide.Components.Autoplay.play(); // Resume autoplay
        //   }); // Wait for transition
        // }); // Pause 2 sec on last slide
      }
    });

    splide.mount();
  });
</script>




<style>
    /* Responsive track height */
/* .splide__track {
    height: 60vh;            
    height: 499px;       
    overflow: hidden;
    border-radius: 12px;

} */
    /* .splide__slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.splide__track {
  height: 500px; /* or your desired fixed height */
  /* overflow: hidden; */
  /* border-radius: 12px; */
 */

.splide__slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

    .splide__track img {
  width: 100%;
  height: 100%;
  object-fit: cover;       /* Makes the image fill the box while maintaining aspect ratio */
  object-position: top center; /* Aligns image at the top, centered horizontally */
  border-radius: 12px;     /* Optional: match container rounding */
}


/* Responsive image styling */
#image-carousel .splide__slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

/* For mobile devices */
@media (max-width: 768px) {
    .splide__track {
        height: 50vh;         /* Reduce height for smaller screens */
    }
}
#image-carousel .splide__slide img {
    height:100%;
    width: 100%;
    /* object-fit: cover; */
    display: block;
    margin: 0 auto;
}
.splide__track{
    height: 700px;
}/* Responsive adjustment for small devices */
@media (max-width: 768px) {
    .splide__track {
        height: 50vh;
    }
}
.ho_offsr-thmb-img{
     margin-top:30px;
     width: 100%;
}


</style>
<div class="container" style="margin-top:60px;">
    <div class="ho_sectionarea col-md-12 lgmtop_minus">
        <div class="super-offers-topbar offeringcol">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="theme2_special-offer">
                        <h3><b>SPECIAL OFFERS</b></h3>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="offer_titlebar">
                        <ul class="nav nav-tabs ho_offer_pill tab_add2">
                            <li class="active"><a data-toggle="pill" href="#offer_65">Holiday</a></li>
                            <li class=""><a data-toggle="pill" href="#offer_63">Bus</a></li>
                            <li class=""><a data-toggle="pill" href="#offer_62">Hotel</a></li>
                            <li class=""><a data-toggle="pill" href="#offer_61">Flight</a></li>
                            <li class=""><a data-toggle="pill" href="#offer_61">Train</a></li>

                        </ul>
                        <div class="ho_trvl-view-butt text-uppercase">
                            <a href="offer.html">View All <i class="icofont-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" data-aos="fade-up" data-aos-delay="500">
            <div id="offer_65" class="tab-pane fade in active" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ho_offers-carousel owl-carousel owl-theme">
                            <div class="item">
                                <div class="ho_home-pack-content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="ho_offsr-thmb-img"><a href="#">
                                                    <img
                                                        src="assets/images/Holiday3.jfif">
                                                </a>
                                                <a href="#" class=" ho_btn-info">Holidays</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="ho_content_right">
                                                <a href="#">
                                                    <h3>Vacations</h3>
                                                    <div class="ho_shortd">
                                                    </div>
                                                    <div class="ho_view text-right"> View</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ho_home-pack-content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="ho_offsr-thmb-img"><a href="#">
                                                    <img
                                                        src="assets/images/Holiday_offer1.jfif">
                                                </a>
                                                <a href="#" class=" ho_btn-info">Holiday
                                                    plan</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="ho_content_right">
                                                <a href="#">
                                                    <h3>HolidayPlan</h3>
                                                    <div class="ho_shortd">
                                                    </div>
                                                    <div class="ho_view text-right"> View</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ho_home-pack-content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="ho_offsr-thmb-img"><a href="#">
                                                    <img
                                                        src="assets/images/Holiday_2.jfif">
                                                </a>
                                                <a href="#" class=" ho_btn-info">SuperHoliday</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="ho_content_right">
                                                <a href="#">
                                                    <h3>Holiday20</h3>
                                                    <div class="ho_shortd">
                                                    </div>
                                                    <div class="ho_view text-right"> View</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="offer_63" class="tab-pane fade in " role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ho_offers-carousel owl-carousel owl-theme">
                            <div class="item">
                                <div class="ho_home-pack-content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="ho_offsr-thmb-img"><a href="#">
                                                    <img
                                                        src="assets/images/Bus_3.jfif">
                                                </a>
                                                <a href="#" class=" ho_btn-info">Bus300</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="ho_content_right">
                                                <a href="#">
                                                    <h3>Bus300</h3>
                                                    <div class="ho_shortd">
                                                        Book bus and&#8230; </div>
                                                    <div class="ho_view text-right"> View</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ho_home-pack-content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="ho_offsr-thmb-img"><a href="#">
                                                    <img
                                                        src="assets/images/Bus_Offer.jfif">
                                                </a>
                                                <a href="#" class=" ho_btn-info">Bus100</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="ho_content_right">
                                                <a href="#">
                                                    <h3>Bus Booking&#8230;</h3>
                                                    <div class="ho_shortd">
                                                    </div>
                                                    <div class="ho_view text-right"> View</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ho_home-pack-content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="ho_offsr-thmb-img"><a href="#">
                                                    <img
                                                        src="assets/images/BUS.jpg">
                                                </a>
                                                <a href="#" class=" ho_btn-info"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="ho_content_right">
                                                <a href="#">
                                                    <h3>Bus20</h3>
                                                    <div class="ho_shortd">
                                                    </div>
                                                    <div class="ho_view text-right"> View</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="offer_62" class="tab-pane fade in " role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ho_offers-carousel owl-carousel owl-theme">
                            <div class="item">
                                <div class="ho_home-pack-content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="ho_offsr-thmb-img"><a href="#">
                                                    <img
                                                        src="assets/images/Hotel3.jfif">
                                                </a>
                                                <a href="#" class=" ho_btn-info">DREAM100</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="ho_content_right">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
                                                <a href="#">
                                                    <h3>Hotel</h3>
                                                    <div class="ho_shortd">
                                                    </div>
                                                    <div class="ho_view text-right"> View</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ho_home-pack-content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="ho_offsr-thmb-img"><a href="#">
                                                    <img
                                                        src="assets/images/Hotel2.jfif">
                                                </a>
                                                <a href="#" class=" ho_btn-info">Hotel100</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="ho_content_right">
                                                <a href="#">
                                                    <h3>Enjoy Stay</h3>
                                                    <div class="ho_shortd">
                                                    </div>
                                                    <div class="ho_view text-right"> View</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ho_home-pack-content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="ho_offsr-thmb-img"><a href="#">
                                                    <img
                                                        src="assets/images/Hotel1.jfif">
                                                </a>
                                                <a href="#" class=" ho_btn-info">Hotel10</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="ho_content_right">
                                                <a href="#">
                                                    <h3>Hotelstay</h3>
                                                    <div class="ho_shortd">
                                                    </div>
                                                    <div class="ho_view text-right"> View</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="offer_61" class="tab-pane fade in " role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ho_offers-carousel owl-carousel owl-theme">
                            <div class="item">
                                <div class="ho_home-pack-content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="ho_offsr-thmb-img"><a href="#">
                                                    <img
                                                        src="assets/images/Eze2fly.jpg">
                                                </a>
                                                <a href="#" class=" ho_btn-info">Fly20</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="ho_content_right">
                                                <a href="#">
                                                    <h3>Fly20</h3>
                                                    <div class="ho_shortd">
                                                    </div>
                                                    <div class="ho_view text-right"> View</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="compare-flights">
    <div class="container">
        <div class="advertisement_sec">
            <div class="owl-carousel advertisement">
                <div class="item">
                    <div class="ad_img">
                        <img src="assets/images/Banner.png">
                            alt="home" title="home">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="holiday_packages">
    <div class="container">
        <div class="wrapper_holiday">
            <div class="flex_headingbar">
                <div class="theme2_special-offer">
                    <h3><span>Holiday Packages</span></h3>
                </div>
                <div class="blogsee_all">
                    <a href="">View All <i class="icofont-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12  col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="300">
                    <div class="ho_blog-carousel owl-carousel owl-theme">
                        <div class="item">
                            <div class="ho_holiday">
                                <div class="ho_holiday-img">
                                    <a href="Mussoorie.php"> <img
                                            src="./assets/images/service/PackagesImages/mussoorie-view.jpg"></a>
                                </div>
                                <a href="Mussoorie.php">
                                    <div class="ho_holiday-cont">
                                        <h3>Mussoorie </h3>
                                        <div class="ho_rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <div class="ho_holiday_price">
                                            Starting price From <i class='fa fa-inr'></i> ₹2,999/Person </div>
                                        <div class="ho_holiday_deail">
                                            <p class="peragraph ">
                                                <i class="icofont-clock-time"></i>
                                                <span>2 Nights /</span>
                                                <span>2 Days</span>
                                            </p>
                                            <p class="ho_holiday_location">
                                                <span><i class="icofont-google-map"></i>Delhi-Mussoorie</span>
                                            </p>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ho_holiday">
                                <div class="ho_holiday-img">
                                    <a href="Rishikesh-Tour.php"> <img
                                            src="./assets/images/service/PackagesImages//Rishikesh/Rishikesh view1.jpg"></a>
                                </div>
                                <a href="Rishikesh-Tour.php">
                                    <div class="ho_holiday-cont">
                                        <h3>Rishikesh </h3>
                                        <div class="ho_rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <div class="ho_holiday_price">
                                            Starting price From <i class='fa fa-inr'></i> 8000/person</div>
                                        <div class="ho_holiday_deail">
                                            <p class="peragraph ">
                                                <i class="icofont-clock-time"></i>
                                                <span>3 Nights /</span>
                                                <span>2 Days</span>
                                            </p>
                                            <p class="ho_holiday_location">
                                                <span><i class="icofont-google-map"></i>Delhi-Rishikesh</span>
                                            </p>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ho_holiday">
                                <div class="ho_holiday-img">
                                    <a href="nainital-tour.php"> <img
                                            src="./assets/images/service/PackagesImages//Nainital//Nainital-View.jpeg"></a>
                                </div>
                                <a href="nainital-tour.php">
                                    <div class="ho_holiday-cont">
                                        <h3>Nainital </h3>
                                        <div class="ho_rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <div class="ho_holiday_price">
                                            Starting price From <i class='fa fa-inr'></i> 7000/person</div>
                                        <div class="ho_holiday_deail">
                                            <p class="peragraph ">
                                                <i class="icofont-clock-time"></i>
                                                <span>2 Nights /</span>
                                                <span>1 Days</span>
                                            </p>
                                            <p class="ho_holiday_location">
                                                <span><i class="icofont-google-map"></i>Delhi-Nanital</span>
                                            </p>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="ho_holiday">
                                <div class="ho_holiday-img">
                                    <a href="Mathura.php"> <img
                                            src="./assets/images/service/PackagesImages/Mathura/Mathura view3.avif"></a>
                                </div>
                                <a href="Mathura.php">
                                    <div class="ho_holiday-cont">
                                        <h3>Mathura </h3>
                                        <div class="ho_rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <div class="ho_holiday_price">
                                            Starting price From <i class='fa fa-inr'></i> ₹12,000/Person </div>
                                        <div class="ho_holiday_deail">
                                            <p class="peragraph ">
                                                <i class="icofont-clock-time"></i>
                                                <span>2 Nights /</span>
                                                <span>2 Days</span>
                                            </p>
                                            <p class="ho_holiday_location">
                                                <span><i class="icofont-google-map"></i>Delhi-Mathura</span>
                                            </p>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ho_holiday">
                                <div class="ho_holiday-img">
                                    <a href="JimCorbett.php"> <img
                                            src="./assets/images/service/PackagesImages/Jimcorbett/jim corbett view2.jpg"></a>
                                </div>
                                <a href="JimCorbett.php">
                                    <div class="ho_holiday-cont">
                                        <h3>JimCorbett</h3>
                                        <div class="ho_rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <div class="ho_holiday_price">
                                            Starting price From <i class='fa fa-inr'></i> ₹7,000/Person </div>
                                        <div class="ho_holiday_deail">
                                            <p class="peragraph ">
                                                <i class="icofont-clock-time"></i>
                                                <span>2 Nights /</span>
                                                <span>2 Days</span>
                                            </p>
                                            <p class="ho_holiday_location">
                                                <span><i class="icofont-google-map"></i>Delhi-Ramnagar</span>
                                            </p>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                       

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--blogs start-->
<section class="ho_section2 theme2blog_bg">
    <div class="container">
        <div class="theme2_travel_tools">
            <div class="flex_headingbar">
                <div class="theme2_special-offer">
                    <h3><span>Travel Blogs</span></h3>
                </div>
                <div class="blogsee_all">
                    <a href="#">See All Blogs <i class="icofont-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 sliderp0" data-aos="fade-up" data-aos-delay="300">
                    <div class="ho_blog-carousel owl-carousel owl-theme">
                        <div class="item">
                            <div class="ho_blog">
                                <div class="ho_blog-img">
                                    <a href=""> <img
                                            src="assets/images/Image_beach.jpg"></a>
                                </div>
                                <div class="ho_blog-cont">
                                    <a href="">
                                        <h3>Best destinations to visit in India </h3>
                                        <div class="ho_sentence">
                                            <p>
                                            <p>India is a mini-continent in itself, a melting pot of cultures,
                                                history, traditions, languages and cuisines. India is blessed in
                                                terms of geography, that&rsquo;s exactly why, you will find lush
                                                rainforests, beautiful beaches, magnificent snow-capped mountains
                                                and plateaus and plains. Considered one of the most popular travel
                                                destinations in the world with a huge list of&nbsp;<strong>Top
                                                    Tourist Places to Visit in India</strong>, not just attracts
                                                travellers who enjoy luxury, but also backpackers and travellers in
                                                search of cultural and spiritual bliss or someone who just wants to
                                                let their hair down and party. A trip to India will guarantee you
                                                some memorable experiences that will last a lifetime. Considering
                                                the diversity of India, choosing ten places was a challenge.
                                                Here&rsquo;s a list of our ten highly
                                                recommended&nbsp;<strong>Tourist Places in India</strong>.</p>
                                            </p>
                                        </div>
                                    </a>
                                    <!-- <div class="ho_blg-bottom">
                                                            <p class="read-more"><a href="https://dreamskyairways.com/blog/best-destinations-to-visit-in-india">Read more <i class="icofont-simple-right"></i></a></p>
                                                        </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ho_blog">
                                <div class="ho_blog-img">
                                    <a href=""> <img
                                            src="assets/images/Beaches.jpg"></a>
                                </div>
                                <div class="ho_blog-cont">
                                    <a href="">
                                        <h3>Beaches </h3>
                                        <div class="ho_sentence">
                                            <p>
                                            <p>Monsoons are a favourite of many people and for good reason. During
                                                this season, the raindrops paint the world in beautiful vibrant
                                                hues, and the scenic beauty is simply breathtaking. While the hills
                                                are covered with lush green trees, the shores attract a wide range
                                                of marine life during monsoons.</p>

                                            <p>So, this monsoon, delight in the rhythmic sound of waves, indulge in
                                                delectable seafood and enjoy a stroll across sandy shores. Pack your
                                                bags and check out the best place to visit in the monsoon from
                                                Delhi, offering a perfect blend of tranquillity, adventure, and
                                                picturesque landscapes.</p>

                                            <p>Unveil the hidden treasures and enjoy a serene and unforgettable
                                                monsoon escapade!</p>

                                            <h2><strong>How can you plan a successful monsoon escapade?</strong>
                                            </h2>

                                            <p>Before we enlist the best places to visit in the rainy season in
                                                India, here are a few monsoon travel tips you should keep in mind
                                                for a pleasant experience!</p>

                                            <ul>
                                                <li>Carry a waterproof bag to keep your belongings safe from the
                                                    rain. They can protect your electronic gadgets and clothes.</li>
                                                <li>While travelling to coastal destinations, carry essential items
                                                    like an umbrella, raincoat, mosquito repellent, extra clothes, a
                                                    basic first-aid kit, and reusable water bottles.</li>
                                                <li>If you are going to coastal regions during monsoons, carry
                                                    synthetic clothes. They do not absorb water and dry faster than
                                                    cotton or wool clothes.</li>
                                                <li>The coastal destinations have slippery paths, especially during
                                                    monsoons. Carrying the right footwear like Crocs and sports
                                                    shoes is recommended.</li>
                                            </ul>
                                            </p>
                                        </div>
                                    </a>
                                    <!-- <div class="ho_blg-bottom">
                                                            <p class="read-more"><a href="https://dreamskyairways.com/blog/beaches-">Read more <i class="icofont-simple-right"></i></a></p>
                                                        </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ho_blog">
                                <div class="ho_blog-img">
                                    <a href=""> <img
                                            src="assets/images/Maldives.jpeg"></a>
                                </div>
                                <div class="ho_blog-cont">
                                    <a href="">
                                        <h3>Maldives </h3>
                                        <div class="ho_sentence">
                                            <p>
                                            <p>The Maldives, officially the Republic of Maldives, is a country and
                                                archipelagic state in South Asia in the Indian Ocean. The Maldives
                                                is named after the main island and capital of Male. The word
                                                &quot;Maldives&quot; means &quot;the islands of Male&quot;.</p>
                                            </p>
                                        </div>
                                    </a>
                                    <!-- <div class="ho_blg-bottom">
                                                            <p class="read-more"><a href="https://dreamskyairways.com/blog/maldives">Read more <i class="icofont-simple-right"></i></a></p>
                                                        </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ho_blog">
                                <div class="ho_blog-img">
                                    <a href=""> <img
                                            src="assets/images/dubai.jpg"></a>
                                </div>
                                <div class="ho_blog-cont">
                                    <a href="">
                                        <h3>Dubai </h3>
                                        <div class="ho_sentence">
                                            <p>
                                            <p>Dubai is a city and emirate in the United Arab Emirates known for
                                                luxury shopping, ultramodern architecture and a lively nightlife
                                                scene. Burj Khalifa, an 830m-tall tower, dominates the
                                                skyscraper-filled skyline</p>
                                            </p>
                                        </div>
                                    </a>
                                    <!-- <div class="ho_blg-bottom">
                                                            <p class="read-more"><a href="https://dreamskyairways.com/blog/dubai">Read more <i class="icofont-simple-right"></i></a></p>
                                                        </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="theme2_compare-flights">
    <div class="container">
        <div class="theme2_travel_tools">
            <div class="row">
                <div class="col-md-12">
                    <div class="theme2_special-offer">
                        <h3><span>Airlines Brand</span></h3>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-theme brands_dom-owl-cras ho_sectionarea2">
                <div class="item">
                    <div class="dom-com_2">
                        <img src="assets/images/go-air.png" alt="go-air">
                    </div>
                </div>
                <div class="item">
                    <div class="dom-com_2">
                        <img src="assets/images/vistara.png" alt="vistara">
                    </div>
                </div>
                <div class="item">
                    <div class="dom-com_2">
                        <img src="assets/images/spice-jet.png" alt="spice-jet">
                    </div>
                </div>
                <div class="item">
                    <div class="dom-com_2">
                        <img src="assets/images/air-asia.png" alt="air-asia">
                    </div>
                </div>
                <div class="item">
                    <div class="dom-com_2">
                        <img src="assets/images/jet-airway.png" alt="jet-airway">
                    </div>
                </div>
                <div class="item">
                    <div class="dom-com_2">
                        <img src="assets/images/air_india_logo.jpg" alt="air_india_logo">
                    </div>
                </div>
                <div class="item">
                    <div class="dom-com_2">
                        <img src="assets/images/indigo.jpg" alt="indigo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--BRANDS WE DEAL end-->

<Style>
.ho_sectionarea img {
  transition: transform 0.4s ease;
  cursor: pointer;
}

.ho_sectionarea img:hover {
  transform: scale(1.2); 
}
</Style>

<section class="ho_graysection testimonialbg">
    <div class="container">
        <div class="ho_sectionarea">
            <div class="row">
                <div class="col-md-12 user_says text-center">
                    <h2 class="ho_heading-2" data-aos="flip-left" data-aos-delay="500">
                        <span style="color:var(--color-4);">What</span>
                        <span style="color:var(--main-color);">Our User</span>
                        <span style="color:var(--color-4);"> Say</span>
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonials-carousel arrow_no owl-carousel owl-theme">

                        <!-- Testimonial 1 -->
                        <div class="item">
                            <div class="ho_testimonial_item">
                                <img src="assets/images/Review/Review 4.jpg">
                                <p><i class="icofont-quote-left"></i>
                                    <a href="https://www.dreamskyairways.com/">dreamskyairways.com</a> is a trustworthy service provider for air ticket bookings.
                                    Their reliability, user-friendly platform, and excellent customer service make
                                    them my go-to choice for hassle-free travel planning. Highly recommended!
                                    <i class="icofont-quote-right"></i>
                                </p>
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <!-- <span class="fa fa-star checked"></span> -->
                                </div>
                                <h6>Suman Shrivash</h6>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="item">
                            <div class="ho_testimonial_item">
                                <img src="assets/images/professonal selfe.jpg">
                                <p><i class="icofont-quote-left"></i>
                                 fantastic experience with <a href="https://www.dreamskyairways.com/">dreamskyairways.com</a> for booking my air tickets.
                                    The website was user-friendly, and I found great deals tailored to my needs.
                                    Their customer service was responsive and helpful. Transparent pricing.
                                    <i class="icofont-quote-right"></i>
                                </p>
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h6>Akanshu Dutt</h6>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="item">
                            <div class="ho_testimonial_item">
                                <img src="assets/images/Review/Review 3.jpg">
                                <p><i class="icofont-quote-left"></i>
                                    I had an outstanding experience with <a href="https://www.dreamskyairways.com/">dreamskyairways.com</a> Their easy-to-use platform,
                                    competitive prices, and top-notch customer service made booking my air ticket a
                                    breeze. I appreciated their transparency and flexibility.
                                    <i class="icofont-quote-right"></i>
                                </p>
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h6>Ravi Chaudhary</h6>
                            </div>
                        </div>

                        <!-- Testimonial 4 -->
                        <div class="item">
                            <div class="ho_testimonial_item">
                                <img src="assets/images/Review/Review1.jpg" class="">
                                <p><i class="icofont-quote-left"></i>
    Choosing <strong><a href="https://www.dreamskyairways.com/">dreamskyairways.com</a></strong> was one of the best decisions I made for my travel plans. The website is smooth and easy to navigate, offering unbeatable prices and excellent flexibility. What truly sets them apart is their customer service — quick, courteous, and genuinely helpful. From booking to boarding, everything was seamless and stress-free. Highly recommended for anyone who values time, comfort, and professionalism.
    <i class="icofont-quote-right"></i></p>

                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h6>Mukul</h6>
                            </div>
                        </div>

                        <!-- Testimonial 5 -->
                        <div class="item">
                            <div class="ho_testimonial_item">
                                <img src="assets/images/Review/Review 2.jpg">
                                <p><i class="icofont-quote-left"></i>
    I recently booked my flight through <strong><a href="https://www.dreamskyairways.com/">dreamskyairways.com</a></strong> and honestly, the whole process was super smooth. The site is easy to use, and I found a good deal without spending hours searching. What I really liked was how quickly their team responded when I had a small query. It just felt reliable. Will definitely use them again next time I travel.
<i class="icofont-quote-right"></i></p>

                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <!-- <span class="fa fa-star checked"></span> -->
                                </div>
                                <h6>Azad Hussain</h6>
                            </div>
                        </div>

                    </div>

                    <!-- View All Button -->
                    <div class="text-center all_testimonials">
                        <a href="#" class="btn btn-info">View all Testimonials</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!--sign up-->
<section class="ho_signup">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5" data-aos="fade-right">
                <h2 class="ho_heading-1 text-uppercase">Sign Up for Exclusive Offers</h2>
                <p class="mb-0">Exclusive access to coupons, special offers and promotions.</p>
            </div>
            <div class="col-md-7 col-sm-7" data-aos="fade-left">
                <div class="row">
                    <div class="success_msg"></div>
                    <div class="col-md-5 col-sm-6">
                        <input type="text" name="" id="newsletter_email" class="form-control"
                            placeholder="Enter your email address">
                        <div class="error_msg_email"></div>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <input type="text" name="" id="newsletter_mobile" class="form-control"
                            placeholder="Enter your mobile no." require="">
                        <div class="error_msg_mobile"></div>
                    </div>
                    <div class="col-md-2 col-sm-2 text-right">
                        <button type="button" class="btn btn-go subscribe_email_theme_four">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--social icons-->

<!--Our Services srart-->
<section class="theme2_our-services">
    <div class="container text-center">
        <h3>Our Services</h3>
        <ul class="list-inline mb-0">
            <a href="javascript:void(0);" data-toggle="tab" class="services-scroll" toggletab="#tab1default">
                <li class="list-inline-item">
                    <span><i class="icofont-airplane"></i></span>
                    <p class="mb-0">Airline</p>
                </li>
            </a>
            <a href="javascript:void(0);" data-toggle="tab" class="services-scroll" toggletab="#tab2default">
                <li class="list-inline-item">
                    <span><i class="icofont-hotel"></i></span>
                    <p class="mb-0">Hotel &amp; Resort</p>
                </li>
            </a>
            <a href="javascript:void(0);" data-toggle="tab" class="services-scroll" toggletab="#tab3default">
                <li class="list-inline-item">
                    <span><i class="icofont-bus-alt-1"></i></span>
                    <p class="mb-0">Bus Rental</p>
                </li>
            </a>
            <a href="javascript:void(0);" data-toggle="tab" class="services-scroll" toggletab="#tab6default">
                <li class="list-inline-item">
                    <span><i class="icofont-car"></i></span>
                    <p class="mb-0">Car Rental</p>
                </li>
            </a>
            <a href="javascript:void(0);" data-toggle="tab" class="services-scroll" toggletab="#tab7default">
                <li class="list-inline-item">
                    <span><i class="icofont-beach-bed"></i></span>
                    <p class="mb-0">Holiday Packages</p>
                </li>
            </a>
            <a href="javascript:void(0);" data-toggle="tab" class="services-scroll" toggletab="#tab4insurance">
                <li class="list-inline-item">
                    <span><img src="assets/images/theme9_images/travel.png" width="46"
                            alt="Travel Insurance"></span>
                    <p class="mb-0">Travel Insurance</p>
                </li>
            </a>
            <a href="#">
                <li class="list-inline-item">
                    <span><i class="icofont-visa"></i></span>
                    <p class="mb-0"> Visa Query</p>
                </li>
            </a>

        </ul>
    </div>
</section>
<!--Our Services end-->
<div class="modal fade" id="showapitabmodel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" style="padding-right: 17px;;">
    <div class="modal-dialog">
        <div class="modal-content main_popup_page">
            <div class="text-right">
                <button class="btn btn-danger btn-xs btn-ef into_srdv_popup_section" data-dismiss="modal"><i
                        class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="main_srdv_detail">
                <div class="text-center">
                    <div class="main_heading_high animate-srdv-popup arrow_icon_sec_h3">
                        <h4 class="modal-title custom-font example animate-srdv-text">Dream Sky Airways</h4>
                    </div>

                    <div class="modal-body images_srdvdetail">
                        <img class="media-object thumbscl img-responsive"
                            src="assets/images/WhatsApp_Image_2024-02-28_at_4_17_01_PM1.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            // $('#showapitabmodel').modal("show");
        }, 1350);
    });
</script>
<style>
    #confirmprice div.modal-header {
        background-color: rgb(42, 45, 148);
        color: white !important;
        text-align: center;
    }

    #confirmprice div.modal-footer {
        background-color: rgb(42, 45, 148);
    }

    .clearfix {
        display: inherit;
    }

    .waiting-loader {
        width: 100%;
        max-width: 50px;
        max-height: 200px;
        display: block;
        margin: 15px auto;
    }
</style>







<?php include('includes/footer.php') ?>
