<link href="assets/css/footer_theme/footer_theme_9.css" rel="stylesheet">
<style>
    .row {
        flex-wrap: wrap;
        gap: 0px;
    }
    .floating-whatsapp {
        position: fixed;
        bottom: 80px;
        right: 20px;
        background-color: #25d366;
        color: #fff;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        z-index: 9999;
        box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

<a href="https://wa.me/918750610304" class="floating-icon whatsapp" target="_blank" rel="noopener noreferrer">
    <i class="fab fa-whatsapp"></i>
</a>
<a href="tel:+918750610304" class="floating-icon call" title="Call Now" rel="noopener">
    <i class="fas fa-phone"></i>
</a>
<div class="floating-icon social-toggle" onclick="toggleSocialIcons()">
    <i class="fas fa-plus"></i>
</div>
<div class="floating-social-icons" id="socialIcons">
    <ul class="list-inline">
        <li><a href="https://www.facebook.com/dreamskyairwayspvtltd"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="https://www.instagram.com/dreamskyairways/profilecard/?igsh=aTNtbWw0emNvcDFv"><i class="fab fa-instagram"></i></a></li>
        <li><a href="https://youtube.com/@dreamskyairways?si=pQLQuRttBlG401Pd"><i class="fab fa-youtube"></i></a></li>
        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
    </ul>
</div>

<style>
    .floating-icon {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        background: #25d366;
        color: white;
        border-radius: 50%;
        text-align: center;
        line-height: 50px;
        font-size: 22px;
        z-index: 9999;
        box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        transition: all 0.3s ease;
    }
    .floating-icon.call {
        bottom: 85px;
        background: #007bff;
    }
    .floating-icon.social-toggle {
        bottom: 150px;
        background: orange;
    }
    .floating-social-icons {
        position: fixed;
        bottom: 215px;
        right: 20px;
        background: #fff;
        border-radius: 12px;
        padding: 10px 10px 5px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        display: none;
        z-index: 9999;
    }
    .floating-social-icons ul {
        padding: 0;
        margin: 0;
        display: flex;
        gap: 10px;
    }
    .floating-social-icons ul li {
        list-style: none;
    }
    .floating-social-icons ul li a {
        color: #333;
        font-size: 20px;
        text-decoration: none;
    }
   
    .fo_footer_heading6 ul li {
        margin-bottom: 12px;
    }
    .fo_footer_heading6 ul li:last-child {
        margin-bottom: 0;
    }

</style>
<script>
    function toggleSocialIcons() {
        const box = document.getElementById("socialIcons");
        box.style.display = box.style.display === "block" ? "none" : "block";
    }
</script>
<footer class="fo_footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="fo_footer_heading6">
                    <h4>Dream Sky Airways Pvt. Ltd.</h4>
                    <p style="color: orange; font-weight: bold;">The Company is recognized by NCT & MCA, MSME Certified.</p>
                    <p>A-43, Noida Sector-63 Near by Dainik Jagaran Gautam Budh Nagar 201301</p>
                    <p><strong>Phone:</strong> +918750610304 </p>
                    <p><strong>For Holidays Support:</strong> holidays@dreamskyairways.com </p>
                    <p><strong>For Info:</strong> info@dreamskyairways.com</p>
                    <p><strong>For Career:</strong> hr@dreamskyairways.com</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="fo_footer_heading6">
                    <h4>About Us</h4>
                    <ul class="list-unstyled">
                        <li><a href="who-we-are.php">Who we are</a></li>
                        <li><a href="service.php">Our Services</a></li>
                        <li><a href="career.php">Career</a></li>
                        <li><a href="service.php">Packages</a></li>
                        <li><a href="packagespolicy.php">Packages Policy</a></li>
                        <li><a href="refund.php">Refund Policy</a></li>
                        <li><a href="banquet.php">Banquet Booking</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="fo_footer_heading6">
                    <h4>Important Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="terms-and-conditions.php">Terms & Conditions</a></li>
                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="cancellations-policy.php">Cancellation Policy</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
                        <li><a href="faq-page.php">Frequently Asked Questions</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="fo_footer_heading6">
                    <h4>MAP/LOCATION</h4>
                    <ul class="list-inline">
                        <li style="list-style: none;">
                            <div style="margin-top: 10px; border-radius: 10px; overflow: hidden;">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3510.070144564623!2d77.36980007548866!3d28.625421075662584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce56e693b7e81%3A0x5a0f89b88ea3f07b!2sA-43%2C%20Sector%2063%2C%20Noida%2C%20Uttar%20Pradesh%20201301!5e0!3m2!1sen!2sin!4v1690635503795!5m2!1sen!2sin"
                                    width="100%"
                                    height="200"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 text-center">
                © Copyright Dream Sky Airways 2024. All Rights Reserved
            </div>
        </div>

        <!-- WhatsApp Floating Button -->
<div id="whatsapp">
  <a href="https://wa.me/918750610304" target="_blank">
    <i class="fa fa-whatsapp"></i>
  </a>
</div>

<!-- Call Floating Button -->
<div id="call">
  <a href="tel:+918750610304">
    <i class="fa fa-phone"></i>
  </a>
</div>

<!-- Floating Disclaimer -->
<div id="floatingDisclaimer" style="display:none;">
  <div class="disclaimer-content">
    <span class="close-btn" onclick="document.getElementById('floatingDisclaimer').style.display='none'">&times;</span>

        <p><strong>Dream Sky Airways</strong> does not charge any money for offering jobs or employment.</p>
        <p>If anyone contacts you claiming to offer a job on behalf of our company and asks for payment, please do not pay.</p>
        <p>We never ask for money for job placement, interview, or any recruitment process.</p>
        <p>All official payments related to our travel services (tour packages, bookings, etc.) are accepted only in the company’s official bank account.</p>
        <p>We do not accept payments in any individual’s personal account, UPI, or number.</p>
        <p><strong>Please be careful</strong> of such scams and report them to us immediately.</p>
        <h5>Contact:</h5>
        <p>📞 +91 8750610304<br>📧 info@dreamskyairways.com</p>
        <p style="color: red; font-weight: bold;">
            ⚠ If you make any payment to such individuals, our company will not be responsible for any loss or fraud caused.
        </p>
     
</div>

<style>
  #whatsapp, #call {
    position: fixed;
    right: 15px;
    z-index: 9999;
  }
  #whatsapp {
    bottom: 80px;
    background: #25D366;
    padding: 12px;
    border-radius: 50%;
    color: white;
    font-size: 24px;
  }
  #call {
    bottom: 20px;
    background: #007BFF;
    padding: 12px;
    border-radius: 50%;
    color: black;
    font-size: 24px;
  }

  /* Disclaimer styles */
 #floatingDisclaimer {
    position: fixed;
    top: 54%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #FFC389;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    z-index: 10000;
    max-width: 350px;
    text-align: center;
    animation: fadeIn 0.5s ease-in-out;
}

  .disclaimer-content {
    position: relative;
  }
  .disclaimer-content .close-btn {
    position: absolute;
    top: -10px;
    right: -10px;
    background: red;
    color: black;
    border-radius: 50%;
    width: 25px;
    height: 25px;
    line-height: 25px;
    text-align: center;
    cursor: pointer;
    font-weight: bold;
    box-shadow: 0 2px 6px rgba(0,0,0,0.2);
  }
  @keyframes fadeIn {
    from { opacity: 0; transform: translate(-50%, -60%); }
    to { opacity: 1; transform: translate(-50%, -50%); }
  }
</style>

<script>
  window.onload = function() {
    setTimeout(function() {
      document.getElementById('floatingDisclaimer').style.display = 'block';
    }, 1000); // 3 seconds after page load
  }
</script>

    </div>
</footer>










