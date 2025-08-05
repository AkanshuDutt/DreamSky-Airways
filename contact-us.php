<?php 
$pageTitle = "Contact Us | Dream Sky Airways Pvt Ltd.";
$pageDescription = "Get in touch with Dream Sky Airways. Our dedicated team is here to assist you with any inquiries regarding flight bookings, travel services, and more. Reach out today!";
$pageCanonical = "https://www.dreamskyairways.com/contact-us.php"; 
$pageRobots = 'index,follow';

include('includes/header.php');
?> 

<style>
/* ===== BREADCUMB ===== */
.breadcumb {
    
    background-image: url('assets/images/contact.jpg');
 background-size: cover;
    height: 510px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    text-align: center;
    color: white;
}

.breadcumb h2 {
    font-size: 48px;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
    z-index: 1;
}

/* ===== SECTION SPACING ===== */
.wrapper_inner {
    padding: 50px 15px;
}

/* ===== CONTACT INFO SECTION ===== */
.cont-information .contbox {
    margin-bottom: 30px;
    padding: 15px;
    background: #f9f9f9;
    border-radius: 6px;
    box-shadow: 0 0 8px rgba(0,0,0,0.1);
}

.contbox h3 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 10px;
    color: #333;
}

.contbox a {
    font-size: 16px;
    color: #333;
    display: block;
    text-decoration: none;
    margin-bottom: 5px;
}

.contbox a:hover {
    color: #007bff;
}

/* ===== FORM SECTION ===== */
.contactus {
    background: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.contactus h2 {
    font-size: 30px;
    margin-bottom: 25px;
    font-weight: 700;
}

.form-group {
    margin-bottom: 20px;
}

.form-control {
    padding: 10px;
    font-size: 15px;
    width: 100%;
    border-radius: 4px;
    border: 1px solid #ccc;
}

.cont_submit .btn {
    padding: 12px 30px;
    font-size: 16px;
    border-radius: 4px;
}

/* ===== RESPONSIVE LAYOUT ===== */
@media (max-width: 768px) {
    .breadcumb h2 {
        font-size: 32px;
    }
    .contbox {
        text-align: center;
    }
    .form-group .col-md-6,
    .form-group .col-md-12 {
        width: 100%;
        padding: 0;
    }
    .contactus,
    .cont-information {
        margin-bottom: 30px;
    }
}
</style>

<div class="breadcumb">
    <!-- <h2>CONTACT US</h2> -->
</div>

<section class="wrapper_inner">
    <div class="container">
        <div class="row">

            <!-- ===== CONTACT INFO LEFT ===== -->
            <div class="col-md-4 col-sm-12 cont-information">
                <div class="contbox">
                    <h3><i class="fa fa-phone"></i> Helpline Number</h3>
                    <a href="tel:8750610304">+91 8750610304</a>
                    <a href="tel:911204992853">+91-120-499-2853</a>
                </div>

                <div class="contbox">
                    <h3><i class="fa fa-envelope"></i> Write us on!</h3>
                    <a href="mailto:info@dreamskyairways.com">info@dreamskyairways.com</a>
                    <a href="mailto:hr@dreamskyairways.com">hr@dreamskyairways.com</a>
                </div>

                <div class="contbox">
                    <h3><i class="fa fa-map-marker"></i> Address</h3>
                    <a>Dream Sky Airways Pvt. Ltd.<br/>A-43 Noida Sector-63, Near Dainik Jagaran,<br/>Gautam Budh Nagar 201301</a>
                </div>
            </div>

            <!-- ===== CONTACT FORM RIGHT ===== -->
            <div class="col-md-8 col-sm-12 contactus">
                <div class="transprent-img">
                    <h2><strong>Contact</strong> Us</h2>
                    <form id="contactForm" action="" method="POST">
                        <input type="hidden" name="csrf_token" value="secure-token-here">
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label>Your Name*</label>
                                <input type="text" name="name" class="form-control" pattern="[A-Za-z\s]+" required oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, ''); validateName();" />
                            </div>

                            <div class="form-group col-md-6">
                                <label>Your Email Address*</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Phone Number*</label>

                                <input type="tel"  name="phone" class="form-control" pattern="[0-9]{10}" maxlength="10" required oninput="this.value = this.value.replace(/[^0-9]/g, ''); validatePhone();" />
      <span id="phone-error" class="error"></span>
                    
                            
                            </div>

                            <div class="form-group col-md-6">
                                <label>Subject*</label>
                                <input type="text" name="subject" class="form-control">
</div>

<div class="form-group col-md-12">
    <label>Message *</label>
    <textarea name="message" rows="5" class="form-control" required style="resize: none;"></textarea>
</div>


                            <div class="form-group col-md-12 cont_submit">
                                <input type="submit" value="Send Message" class="btn btn-primary btn-lg">
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>
