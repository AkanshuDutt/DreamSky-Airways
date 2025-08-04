<?php 
$pageTitle = "Customer Reviews | Dream Sky Airways Pvt Ltd.";
$pageDescription = "Read what our customers are saying about their experiences with Dream Sky Airways. Discover testimonials and feedback that showcase our commitment to exceptional service and travel satisfaction.";
$pageCanonical = "https://www.dreamskyairways.com/customer_review.php"; // Correct URL
$pageRobots = 'index,follow';

include('includes/header.php');
?>
     
  <section class="wrapper_inner">
                <h3 class="pages_hed"> Add Review</h3>
                <div class="container">
                        <div class="reviewcols">
                                <div class="row">
                                        <div class="col-md-12">
                                                <h2 class="mb-sm mt-sm"><strong>Add </strong> Review</h2>
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                                <div class="bgreview">
                                                                                                                <form id="review_form" action="#" enctype="multipart/form-data" method="POST">
                                                                <input type="hidden" name="csrf_token" value="95f30bca2496304c29a67c6b8c328e0c">
                                                                <div class="row marT10">
                                                                        <div class="form-group">
                                                                                <div class="col-md-6 col-sm-6">
                                                                                        <label>Your Name *</label>
                                                                                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required="">
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6">
                                                                                        <label>Company Name *</label>
                                                                                        <input type="test" value="" data-msg-required="Please enter company name." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="company_name" id="company_name" required="">
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="row marT10">
                                                                        <div class="form-group">
                                                                                <div class="col-md-6 col-sm-6">
                                                                                        <label>Designation *</label>
                                                                                        <input type="text" value="" data-msg-required="Please enter designation ." maxlength="100" class="form-control" name="designation" id="designation" required="">
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6">
                                                                                        <label>Your Email Address *</label>
                                                                                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required="">
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="row marT10">
                                                                        <div class="form-group">
                                                                                <div class="col-md-6 col-sm-6">
                                                                                        <label>Phone Number*</label>
                                                                                        <input type="number" maxlength="10" value="" data-msg-required="Please enter the phone number." class="form-control" name="phone" required id="phone">
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 mob_margintop">
                                                                                        <label>Rating *</label>
                                                                                        <select class="form-control valid" name="star" aria-invalid="false">
                                                                                                <option value="1">1 Star</option>
                                                                                                <option value="2">2 Star</option>
                                                                                                <option value="3">3 Star</option>
                                                                                                <option value="4">4 Star</option>
                                                                                                <option value="5">5 Star</option>
                                                                                        </select>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="row marT10">
                                                                        <div class="form-group">
                                                                                <div class="col-md-12 col-sm-12">
                                                                                        <label>Profile *</label>
                                                                                        <input type="file" value="" data-msg-required="Please select Profile image" class="form-control reviewfile_upload" name="userfile" id="userfile" required>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="row marT10">
                                                                        <div class="form-group">
                                                                                <div class="col-md-12 massege_text">
                                                                                        <label>Message *</label>
                                                                                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="3" cols="3" class="form-control" name="description" id="description" required=""></textarea>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="row">
                                                                        <div class="col-md-12 pedT20 cont_submit">
                                                                                <button type="submit" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">Submit <i class="icofont-paper-plane"></i></button>
                                                                        </div>
                                                                </div>
                                                        </form>

                                                </div>
                                        </div>
                                        <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="shadow_review">
                                                        <div class="logoscall">
                                                                <a href="../index.html">
                                                                        <img src="assets/images/logo.svg" alt="">
                                                                </a>
                                                        </div>
                                                        <div class="review">
                                                                <img src="assets/images/review.jpg" width="100%">
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
    <?php include('includes/footer.php') ?>