<?php 
$pageTitle = "Contact Us | Dream Sky Airways Pvt Ltd.";
$pageDescription = "Get in touch with Dream Sky Airways. Our dedicated team is here to assist you with any inquiries regarding flight bookings, travel services, and more. Reach out today!";
$pageCanonical = "https://www.dreamskyairways.com/contact-us.php"; 
$pageRobots = 'index,follow';

include('includes/header.php');
?> 
<style>
    .breadcumb{
        background-image: url('assets/images/breadcumb-bg.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 350px;
    }
    .breadcumb h2{
        position: absolute;
        top:40%;
        left: 10%;
        color: white;
    }
</style>

<div class="breadcumb">
    <!--<img src="assets/images/breadcumb-bg.jpg" width="100%">-->
    <h2>CONTACT US</h2>
</div>
  <section class="wrapper_inner mt-5 mb-5" style="margin:50px 0;">
     
        <div class="container">
            <div class="middle_area">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 cont-information">
                        <div class="wrap_information">
                            <div class="col-sm-12 mb-10 continfo">
                                <!--<div class="grabber contbox clearfix">-->
                                <!--    <h3 class=" mb10 fz16 main-color"> <i class="fa fa-phone main-bg white-color"></i> Have Questions? Call Us !</h3>-->
                                <!--    <a href="tel:" class="black-color hover-main-color fz16"></a>-->
                                <!--</div>-->
                            </div>
                          
                            <div class="col-sm-12 mb-10 continfo">
                                <div class="grabber contbox clearfix">
                                    <h3 class=" mb10 fz16 orange-color"> <i class="fa fa-phone orange-bg white-color"></i> Helpline Number</h3>
                                    <a href="tel:8750610304" class="black-color hover-orange-color fz16">+91 8750610304</a><br/>
                                     <a href="tel:911204992853" class="black-color hover-orange-color fz16">+91-120-499-2853</a>
                                </div>
                            </div>
                              <div class="col-sm-12 mb-10 continfo">
                                <div class="grabber contbox clearfix">
                                    <h3 class=" mb10 fz16 orange-color"> <i class="fa fa-envelope orange-bg white-color"></i> Write us on !</h3>
                                    <a href="mailto:info@dreamskyairways.com" class="black-color hover-orange-color fz16">info@dreamskyairways.com</a>
                                     <a href="mailto:hr@dreamskyairways.com" class="black-color hover-orange-color fz16">hr@dreamskyairways.com</a>
                                </div>
                            </div>
                            <div class="col-sm-12 mb-10 continfo">
                                <div class="grabber contbox addconbox clearfix">
                                    <h3 class=" mb10 fz16 success-color"> <i class="fa fa-map-marker success-bg white-color"></i> Address</h3>
                                    <a href="#none" class="black-color text-decoration-none hover-success-color fz16" style="text-decoration:none;">Dream Sky Airways Pvt. Ltd. <br/>  A-43 Noida Sector-63 Near by Dainik Jagaran Gautam Budh Nagar 201301</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 col-sm-8 col-xs-12 contactus" style="background-image: url('assets/images/cont.webp');">
                        <div class="transprent-img">
                                       <h2 class="mb-sm mt-sm"><strong>Contact</strong> Us</h2>
                            <form id="contactForm" action="" method="POST">
                                <input type="hidden" name="csrf_token" value="95f30bca2496304c29a67c6b8c328e0c">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>Your Name *</label>
                                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required="">
                                        </div>
                                        <div class="col-md-6 col-sm-6 mob_margintop">
                                            <label>Your Email Address *</label>
                                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row marT10">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <label>Phone Number</label>
                                            <input type="text" value="" data-msg-required="Please enter the Phone Number." maxlength="100" class="form-control" name="mobile" id="mobile">
                                        </div>
                                        <div class="col-md-6 col-sm-6 mob_margintop">
                                            <label>Subject</label>
                                            <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row marT10">
                                    <div class="form-group">
                                        <div class="col-md-12 massege_text">
                                            <label>Message *</label>
                                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" cols="5" class="form-control" name="message" id="message" required=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pedT20 cont_submit">
                                        <input type="submit" value="Send Message" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('includes/footer.php') ?>