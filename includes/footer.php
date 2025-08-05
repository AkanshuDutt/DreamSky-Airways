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

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

<!-- Floating WhatsApp -->
<a href="https://wa.me/918750610304" class="floating-icon whatsapp" target="_blank" rel="noopener noreferrer">
  <i class="fab fa-whatsapp"></i>
</a>

<a href="tel:+918750610304" class="floating-icon call" title="Call Now" rel="noopener">
  <i class="fas fa-phone"></i>
</a>

<!-- Floating Social Toggle -->
<div class="floating-icon social-toggle" onclick="toggleSocialIcons()">
  <i class="fas fa-plus"></i>
</div>

<!-- Social Icons Box -->
<div class="floating-social-icons" id="socialIcons">
  <ul class="list-inline">
    <li><a href="https://www.facebook.com/dreamskyairwayspvtltd"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="https://www.instagram.com/dreamskyairways/profilecard/?igsh=aTNtbWw0emNvcDFv"><i class="fab fa-instagram"></i></a></li>
    <li><a href="https://youtube.com/@dreamskyairways?si=pQLQuRttBlG401Pd"><i class="fab fa-youtube"></i></a></li>
    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
  </ul>
</div>

<!-- Styles -->
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
</style>

<!-- JS -->
<script>
  function toggleSocialIcons() {
    const box = document.getElementById("socialIcons");
    box.style.display = box.style.display === "block" ? "none" : "block";
  }
</script>

<footer class="fo_footer">
  <div class="container">
    <div class="row">

      <!-- Column 1 -->
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

      <!-- Column 2 -->
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

      <!-- Column 3 -->
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

      <!-- Column 4 -->
      <div class="col-md-3 col-sm-6">
        <div class="fo_footer_heading6">
          <h4>MAP</h4>
          <ul class="list-inline">
           
<li style="list-style: none;">
  


  <!-- Embedded Google Map -->
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

    <!-- Copy Right Row -->
    <div class="row mt-3">
      <div class="col-12 text-center">
        © Copyright Dream Sky Airways 2024. All Rights Reserved
      </div>
    </div>

  </div>
</footer>


    <!-- <section class="fo_copyright">
        <div class="container">
            <div class="row fo_copy_right">
                <div class="col-md-3 col-sm-3 col-xs-12"> -->
                    <!-- <div class="fo_social-media-col">
                        <ul class="list-inline">
                            <li class="facebookbg"> <a target="_blank"
                                    href="#">
                                    <span class="fa fa-facebook"></span></a>
                            </li>
                            <li class="twitter_img"> <a target="_blank"
                                    href="#"> <span
                                        class=""><img src="assets/images/theme9_images/twitter.png"
                                            width="31"></span></a>
                            </li>
                            <li class="instagrambg"> <a target="_blank"
                                    href="#"> <span
                                        class="fa fa-instagram"></span></a>
                            </li>

                            <li class="linkedinbg"> <a target="_blank" href="#"> <span
                                        class="fa fa-linkedin"></span></a>
                            </li>
                            <li class="youtubebg"> <a target="_blank"
                                    href="#"> <span
                                        class="fa fa-youtube"></span></a>
                            </li>
                        </ul>
                    </div> -->
                <!-- </div>
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <div class="fo_banking-options">
                        <ul class="list-inline ">
                            <li class="list-inline-item d-block payment_method">
                                <strong>Payment Methods:</strong>
                            </li>
                            <li class="list-inline-item">
                                <img src="assets/images/theme9_images/rupay-icon.webp" alt="rupay">
                            </li>
                            <li class="list-inline-item">
                                <img src="assets/images/theme9_images/netbanking-icon.webp" alt="netbanking">
                            </li>
                            <li class="list-inline-item">
                                <img src="assets/images/theme9_images/mastercard.webp" alt="mastercard">
                            </li>

                            <li class="list-inline-item">
                                <img src="assets/images/theme9_images/visa-icon.webp" alt="visa-icon">
                            </li>

                            <li class="list-inline-item">
                                <img src="assets/images/theme9_images/american-express.webp" alt="visa-icon">
                            </li>
                            <li class="list-inline-item">
                                <img src="assets/images/theme9_images/upi.webp" alt="visa-icon">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-sm-4 col-xs-12 fo_copy ">
                    <p class="mb-0">
                        Copyright &copy; 2024. All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </section> -->

<style>
  .fo_copyright {
    background: linear-gradient(135deg, #1e3c72, #2a5298);
    padding: 7px 0;
    color: #fff;
  }

  .fo_copy_right {
    /* display: flex; */
    justify-content: space-between;
    align-items: center;
    /* flex-wrap: wrap; */
  }

  .fo_banking-options ul {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    align-items: center;
  }

  .fo_banking-options .payment_method {
    font-size: 14px;
    color: #ffd700;
    margin-right: 10px;
  }

  .fo_banking-options img {
    width: 20px;
    height: auto;
    transition: transform 0.3s ease;
  }

  .fo_banking-options img:hover {
    transform: scale(1.1);
  }

  .fo_copy p {
    font-size: 14px;
    color: #f0f0f0;
  }

  @media (max-width: 768px) {
    .fo_copy_right {
      flex-direction: column;
      text-align: center;
      gap: 15px;
    }

    .fo_banking-options ul {
      justify-content: center;
    }

    .fo_copy {
      text-align: center !important;
    }
  }
</style>
    <div id="recharge_popup" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1111"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content" style="z-index: 22222;">
                <div class="modal-header text-center no-padding" style="background: white;">
                    <h4 style="font-weight: 600; font-size: 18px;">Dream Sky Airways</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 modal-body-right">
                            <div class="inner">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <div class="text-align-center" style="color:#000">
                                                <img Style="width:100px; height:100px;" src="assets/images/al.gif">
                                                <span class="block midfz">Do not refresh or close the Window</span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Plan modal here -->
    <div class="modal mk-modal fade" id="view-plans">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button style="height: auto;" type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                    <h4 class="modal-title fwb">Browse Plans</h4>
                </div>
                <div class="modal-body">

                    </form>
                    <!-- Plans Here -->
                    <div class="plans">
                        <div class="table-responsive-- plan-col">
                            <table class="table table-hover table-bordered table-striped" id="table_offer">

                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Plan modal end here -->

    <div id="recharge_confirm" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1111"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content" style="z-index: 22222;">
                <div class="modal-header titlebar_design text-center no-padding">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="mar_0">Confirm Recharge!</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 modal-body-right">
                            <div class="inner">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <div class="text-align-center" style="color:#000">
                                                Number : <span id="conf_Number"></span><br>
                                                Operator : <span id="conf_opt"></span><br>
                                                <span id="conf_amount_span"> Amount : <span id="conf_amount"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <span class="blnc_low" style="display:none; color:red;"> There is Problem Contact To Addmin </span>
                    <button type="button" class="btn btn-success" id="pop_get_form_id">Recharge</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-slider.min.js"></script>

    <script>
        $(window).scroll(function () {
            if ($(this).scrollTop() > 20) {
                $('.he_site-header').addClass('affix');
                $('.he_site-header').show();
            } else {
                $('.he_site-header').removeClass('affix');
                $('.he_site-header').hide();
            }
        });
    </script>



    <!-- form field -->
    <script>
        //=================================== Start subscribe script ===================================//

        function ValidateEmail(email) {
            var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            if (!expr.test(email)) {
                return false;
            } else {
                return true;
            }
        }
        $(".subscribe_email").click(function () {

            var email = $("#newsletter_email").val();
            if (email == "") {
                $(".error_msg_reg").html("Please Enter Email ID");
                return false;
            }
            if (ValidateEmail(email) != true) {
                $(".error_msg_reg").html("Invalid email address.");
                return false;
            }

            $.ajax({
                type: "POST",
                // url: "https://hojoy.in/front/add_news_letter",
                data: {
                    'csrf_token': '34979b6004c1117e334bd83160af5d5a',
                    email: email
                },
                dataType: "text",
                cache: false,
                success: function (data) {
                    var obj = jQuery.parseJSON(data);
                    if (obj.status == "success") {
                        $(".error_msg_reg").css('display', 'none');
                        $("#newsletter_email").val("");
                        $(".success_msg").html(obj.message);
                    } else {
                        $(".error_msg_reg").html(obj.message);
                    }
                }
            });
        });
        //=================================== End subscribe script ===================================//

        $(document).ready(function () {
            // Dropdown Menu
            $('.searchengine-temp .fth-frm a').on('click', function () {
                $('.dropdown-menu-nav').toggle();
            });
            $('.searchengine-temp .fth-frm a').on('click', function () {
                $('.dropdown-menu-nav').toggle();
            });
            $('.searchenginehoteldone').on('click', function () {
                $('.dropdown-menu-nav').hide();
            });

            $("#roomsadd").click(function () {
                $(".hotelguestsdetails").toggle();
            });

            $(".searchenginehoteldone").click(function () {
                $(".hotelguestsdetails").hide();
            });

            $(".pop_select").change(function () {

                var child = parseInt($(".infent_select").val());
                var infant = parseInt($(".child_select").val());
                var adult = parseInt($(".adult_select").val());
                var total = child + infant + adult;
                $(".guest_num").text(total);

            });

            $(".class_selected").change(function () {
                $(".room_num").text($(".class_selected option:selected").text());
            })
        });
    </script>


    <div id="wait_popup" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1111"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content" style="z-index: 22222;">
                <div class="modal-header titlebar_design text-center no-padding">
                    <h4>Dream Sky Airways</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 modal-body-right">
                            <div class="inner">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <div class="text-align-center">
                                                <img src="assets/images/al.gif" width="50px" height="50px">
                                                <hr>
                                                <p><span class="block midfz">Do not refresh or close the Window</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="hotel_search_popup" class="modal fade paul-flt-modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel1111" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="text-center">Dream Sky Airways</h4>
                </div>
                <div class="modal-body">
                    <div class="flight-modal-wrap text-center">
                        <div class="loader">Loading...</div>
                        <h3>Please Wait ... <span class="block">We are searching the best hotels for you</span></h3>
                        <div class="destination-wrap-flt">
                            <ul class="list-inline mb-0">
                                <li>
                                    <h3 class="bp_hotel_search_loaction m0"></h3>
                                </li>
                            </ul>
                        </div>
                        <span class="block midfz">Do not refresh or close the Window</span>
                    </div>
                    <div class="flt-bottom">
                        <ul class="list-inline mb-0">
                            <li class="oneway_m_d">
                                <strong>Check In</strong> <span class="bp_hotel_check_in"> </span>
                            </li>
                            <li class="oneway_m_d">
                                <strong>Check Out</strong> <span class="bp_hotel_check_out"></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade paul-flt-modal" id="transfer-popup" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="text-center">Dream Sky Airways</h4>
                </div>
                <div class="modal-body">
                    <div class="flight-modal-wrap text-center">
                        <div class="loader">Loading...</div>
                        <h3>Please Wait ... <span class="block">We are searching the best transfer for you</span></h3>
                        <div class="destination-wrap-flt">
                            <ul class="list-inline mb-0">
                                <li class="oneway_m">
                                    <b>City : </b><span class="transfer_city">Noida</span>
                                </li>
                                <li class="oneway_m">
                                    <b>Time : </b><span class="transfer_hr"> 10 </span>Hr <span class="transfer_mn"> 10
                                    </span>Mn
                                </li>
                                <!-- <li> <i class="fa fa-long-arrow-right"></i></li> -->


                            </ul>
                            <ul class="list-inline mb-0">
                                <li class="oneway_m">
                                    <b>Pick Up : </b><span class="pick_up_point"></span>
                                </li>

                                <li> <i class="fa fa-long-arrow-right"></i></li>

                                <li class="return_m">
                                    <b>Drop Off : </b><span class="drop_off_point"></span>
                                </li>
                            </ul>
                        </div>
                        <span class="block midfz">Do not refresh or close the Window</span>
                    </div>
                    <div class="flt-bottom">
                        <ul class="list-inline mb-0">
                            <li class="oneway_m_d">
                                <strong>Travel Date</strong> <span class="transfer_date"> 20-02-2018 </span></span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="modal fade paul-flt-modal" id="buspopup" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="text-center">Dream Sky Airways</h4>
                </div>
                <div class="modal-body">
                    <div class="flight-modal-wrap text-center">
                        <div class="loader">Loading...</div>
                        <h3>Please Wait ... <span class="block">We are searching the best bus for you</span></h3>
                        <div class="destination-wrap-flt">
                            <ul class="list-inline mb-0">
                                <li class="oneway_m">
                                    <span class="from_location_bus">DEL</span>
                                </li>
                                <li> <i class="fa fa-long-arrow-right"></i></li>

                                <li class="return_m">
                                    <span class="to_location_bus">BOM</span>
                                </li>
                            </ul>
                        </div>
                        <span class="block midfz">Do not refresh or close the Window</span>
                    </div>
                    <div class="flt-bottom">
                        <ul class="list-inline mb-0">
                            <li class="oneway_m_d">
                                <strong>Travel Date</strong> <span class="depart_date_bus"> 20-02-2018 </span></span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="modal fade paul-flt-modal" id="car-popup" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="text-center">Dream Sky Airways</h4>
                </div>
                <div class="modal-body">
                    <div class="flight-modal-wrap text-center">
                        <div class="loader">Loading...</div>
                        <h3>Please Wait ... <span class="block">We are searching the best car for you</span></h3>
                        <div class="destination-wrap-flt">
                            <ul class="list-inline mb-0">
                                <li class="oneway_m">
                                    <span class="from_location_car">Agra</span>
                                </li>
                                <li> <i class="fa fa-long-arrow-right"></i></li>

                                <li class="return_m">
                                    <span class="to_location_car">Noida</span>
                                </li>
                            </ul>
                        </div>
                        <span class="block midfz">Do not refresh or close the Window</span>
                    </div>
                    <div class="flt-bottom">
                        <ul class="list-inline mb-0">
                            <li class="oneway_m_d">
                                <strong>Travel Date</strong> <span class="depart_date_car"> 13-09-2024 </span></span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="modal fade paul-flt-modal" id="insurance-popup" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="text-center">Dream Sky Airways</h4>
                </div>
                <div class="modal-body">
                    <div class="flight-modal-wrap text-center">
                        <div class="loader">Loading...</div>
                        <h3>Please Wait ... <span class="block">We are searching the best transfer for you</span></h3>
                        <div class="destination-wrap-flt">
                            <ul class="list-inline mb-0">
                                <li class="oneway_m">
                                    <b>Destination : </b><span class="transfer_city">Noida</span>
                                </li>
                                <li class="oneway_m">
                                    <b>Number Off Pax: </b><span class="ins_total_pax"> 1 </span>
                                </li>



                            </ul>
                            <ul class="list-inline mb-0">
                                <li class="oneway_m">
                                    <b>Travel Start Date : </b><span class="ins_travel_date"></span>
                                </li>

                                <li> <i class="fa fa-long-arrow-right"></i></li>

                                <li class="return_m">
                                    <b>Travel End Date : </b><span class="ins_return_date"></span>
                                </li>
                            </ul>
                        </div>
                        <span class="block midfz">Do not refresh or close the Window</span>
                    </div>
                    <div class="flt-bottom">
                        <ul class="list-inline mb-0">
                            <li class="oneway_m_d">
                                <strong>Day Duration </strong> <span class="number_of_night"> 1 </span> Day
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="modal fade paul-flt-modal" id="searchingpopup" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="text-center">Dream Sky Airways Pvt Ltd.</h4>
                </div>

                <div class="modal-body">
                    <div class="flight-modal-wrap text-center">
                        <div class="loader">Loading...</div>
                        <h3>Please Wait ... <span class="block">We are searching the best flights for you</span></h3>
                        <div class="destination-wrap-flt">
                            <ul class="list-inline mb-0">
                                <li class="oneway_m">
                                    <span class="from_location_m">DEL</span>
                                    <i class="fa fa-long-arrow-right"></i>
                                    <span class="to_location_m">BOM</span>
                                </li>
                                <li class="return_m">
                                    <span class="from_location_m">DEL</span>
                                    <i class="fa fa-exchange"></i>
                                    <span class="to_location_m">BOM</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flght-psg-deails-pop">
                            <ul class="list-inline mb-0">
                                <li>
                                    <span>Adult(s) <strong class="num_adult">1</strong></span>
                                </li>
                                <li>
                                    <span>Child(s) <strong class="num_child">0</strong></span>
                                </li>
                                <li>
                                    <span>Infant(s) <strong class="num_infant">0</strong></span>
                                </li>
                            </ul>
                        </div>
                        <span class="block midfz">Do not refresh or close the Window</span>

                    </div>
                    <div class="flt-bottom">
                        <ul class="list-inline mb-0">
                            <li class="oneway_m_d"><b>Depart - </b> <span class="depart_date_m"> 20-12-2024 </span></li>
                            <li class="return_m_d"><b>Return - </b> <span class="return_date_m">22-12-2024</span></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <script src="assets/plugin/jqueryUI/jquery-ui.js"></script>
   

    <script>
        $(".view_seat_btn").click(function () {
            //if($(".bus-booking-form").valid() == true){
            $("#wait_popup").modal('show');
            //$("#ViewSeat").submit();
            //}
        });

        $(".car_serach").click(function () {
            if ($(".car-booking-form").valid() == true) {
                $("#car-popup").modal('show');
                $(".from_location_car").text($(".car_from").val());
                $(".to_location_car").text($(".car_from_to").val());
                $(".depart_date_car").text($("#car_depart_date").val());
                $(".car-booking-form").submit();
            }
        });

        $(".transfer_btn").click(function () {
            $(".transfer_city").text($(".transfer_destination").val());
            $(".transfer_hr").text($(".time_hours").val());
            $(".transfer_mn").text($(".time_minutes").val());
            $(".transfer_date").text($("#transfer_depart_date").val());
            $(".pick_up_point").text($("#pick_up_point_code option:selected").text());
            $(".drop_off_point").text($("#drop_off_point_code option:selected").text());
            if ($('.transfer-booking-form').valid() == true) // check if form is valid
            {
                $("#transfer-popup").modal('show');
                $(".transfer-booking-form").submit();
            }
        });
        $("#search_bus").click(function () {
            if ($(".bus-booking-form").valid() == true) {
                $("#buspopup").modal('show');
                $(".from_location_bus").text($("#bus_form_city").val());
                $(".to_location_bus").text($("#bus_to_city").val());
                $(".depart_date_bus").text($("#bus-depart-date").val());
                //$(".bus-booking-form").submit();
            }
        });



        $(".bike_serach").click(function () {
            //if($(".bus-booking-form").valid() == true){
            $("#bus-popup").modal('show');
            $(".car-bike-form").submit();
            //}
        });


        $(function () {
            //var showdetails = false;

            $("#caronwayid").click(function () {
                $('.car_drop_date').hide();
                $('.car_hours').hide();
                $('.dorp_city').show();

            });
            $("#carreturnid").click(function () {

                $('.car_drop_date').show();
                $('.car_hours').hide();
                $('.dorp_city').show();
            });
            $("#carlocalid").click(function () {

                $('.car_drop_date').hide();
                $('.car_hours').show();
                $('.dorp_city').hide();
            })
        });





        $(function () {
            //var showdetails = false;

            $("#onwayid").click(function () {

                $('#return_datebox').css("opacity", ".5");
            });
            $("#returnid").click(function () {

                $('#return_datebox').css("opacity", "1");
            });
            $("#multicityid").click(function () {

                $('#return_datebox').css("opacity", ".5");
            })
        });

        $(function () {
            $('#depart_date').datepicker({
                numberOfMonths: 1,
                dayNamesMin: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "minDate": 0,
                showOn: 'both',
                buttonText: '',
                dateFormat: 'dd-mm-yy',
                beforeShow: function () {

                    $('#ui-datepicker-div').addClass("searchdatepicker");
                },
                onClose: function (selectedDate) {
                    $("#return_date").datepicker("option", "minDate", selectedDate);
                }
            });
            $('#return_date').datepicker({
                numberOfMonths: 1,
                dayNamesMin: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "minDate": 0,
                showOn: 'both',
                dateFormat: 'dd-mm-yy',
                buttonText: '',
                beforeShow: function () {
                    // alert();
                    $('#returnid').addClass('active');
                    $('#onwayid').removeClass('active');
                    $('#multicityid').removeClass('active');
                    $('#return_datebox').css("opacity", "1");
                    $("#option2").prop("checked", true);
                    $('#ui-datepicker-div').addClass("searchdatepicker");
                }
            });

        });

        function getDate(element) {
            var date;
            try {
                date = $.datepicker.parseDate(dateFormat, element.value);
            } catch (error) {
                date = null;
            }
            return date;
        }

        // multicity date picker
        $('#ft-date1_multicity').datepicker({
            numberOfMonths: 1,
            dayNamesMin: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            //"minDate": 0,

            dateFormat: "yy-mm-dd",
            minDate: 0,

            beforeShow: function () {
                $('#ui-datepicker-div').addClass("searchdatepicker multicty-col");
            },
            onSelect: function (selectedDate) {
                $("#ft-date2_multicity").datepicker("option", "minDate", selectedDate);
            }
        });

        $('#ft-date2_multicity').datepicker({
            numberOfMonths: 1,
            dayNamesMin: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            minDate: 0,

            dateFormat: "yy-mm-dd",

            beforeShow: function () {
                $('#multicityid').addClass('active');
                $('#onwayid').removeClass('active');
                $('#returnid').removeClass('active');
                $('#return_datebox').css("opacity", "1");
                $('#return_date').removeClass("return-background");
                $("#round-trip").prop("checked", true);
                $('#ui-datepicker-div').addClass("searchdatepicker multicty-col");

            },
            onSelect: function (selectedDate) {
                $("#ft-date3_multicity").datepicker("option", "minDate", selectedDate);
            }
        });

        $('#ft-date3_multicity').datepicker({
            numberOfMonths: 1,
            dayNamesMin: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            minDate: 0,

            dateFormat: "yy-mm-dd",

            beforeShow: function () {
                $('#multicityid').addClass('active');
                $('#onwayid').removeClass('active');
                $('#returnid').removeClass('active');
                $('#return_datebox').css("opacity", "1");
                $('#return_date').removeClass("return-background");
                $("#round-trip").prop("checked", true);
                $('#ui-datepicker-div').addClass("searchdatepicker multicty-col");

            },
            onSelect: function (selectedDate) {
                $("#ft-date4_multicity").datepicker("option", "minDate", selectedDate);
            }
        });

        $('#ft-date4_multicity').datepicker({
            numberOfMonths: 1,
            dayNamesMin: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            minDate: 0,

            dateFormat: "yy-mm-dd",

            beforeShow: function () {
                $('#multicityid').addClass('active');
                $('#onwayid').removeClass('active');
                $('#returnid').removeClass('active');
                $('#return_datebox').css("opacity", "1");
                $('#return_date').removeClass("return-background");
                $("#round-trip").prop("checked", true);
                $('#ui-datepicker-div').addClass("searchdatepicker multicty-col");

            }
        });
    </script>
    <script>
        $("#bus-depart-date").datepicker({
            numberOfMonths: 1,
            dayNamesMin: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "minDate": 0,
            showOn: 'both',
            buttonText: '',
            dateFormat: 'yy-mm-dd',

            onClose: function (selectedDate) {
                $("#bp_check_out_date").datepicker("option", "minDate", selectedDate);
            }
        });
    </script>

    <script src="assets/plugin/jquery_validation/dist/jquery.validate.js"></script>
   
    <script>
        $("#searchform").validate({
            rules: {
                from_location: {
                    required: true,
                },
                to_location: {
                    required: true,
                },
                depart_date: {
                    required: true,
                },
                return_date: {
                    required: {
                        depends: function (element) {
                            return $("#option2").is(":checked");
                        }
                    }
                }
            },
            from_location: {
                balance: {
                    required: "Please select Airport first.",
                }

            },
            to_location: {
                balance: {
                    required: "Please select destination Airport first.",
                }

            }
        });
    </script>

    <script type="text/javascript">
        $('#flightbtn').on('click', function () {
            // alert();
            var $btn = $(this).button('loading');
            // business logic...
            if ($('#searchform').validate()) {
                $btn.button('reset');
            }
        });



        $('#traveller').popover({
            "template": '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>',
            "html": true,
            'content': '<div class="row reavellerrow"><div class="col-md-12"><p class="bp_for_pax_error_pre error"></p></div><div class="col-md-5"><p class="bp_adult_data">1 Adult</p></div><div class="col-md-7"><div class="btn-group btn-group-sm pull-right" role="group" aria-label="Large button group"> <button type="button" class="btn btn-default bp_adult_minus"><span class="glyphicon glyphicon-minus"></span></button><button type="button" class="btn btn-default bp_adult_plus"><span class="glyphicon glyphicon-plus"></span></button> \n\</div></div></div><div class="row reavellerrow"><div class="col-md-5"><p class="bp_child_data">0 child</p></div><div class="col-md-7"><div class="btn-group btn-group-sm pull-right" role="group" aria-label="Large button group"> <button type="button" class="btn btn-default bp_child_minus"><span class="glyphicon glyphicon-minus"></span></button><button type="button" class="btn btn-default bp_child_plus"><span class="glyphicon glyphicon-plus"></span></button> \n\</div></div></div><div class="row reavellerrow"><div class="col-md-5"><p class="bp_infant_data">0 Infant</p></div><div class="col-md-7"><div class="btn-group btn-group-sm pull-right" role="group" aria-label="Large button group"> <button type="button" class="btn btn-default bp_infant_minus"><span class="glyphicon glyphicon-minus"></span></button><button type="button" class="btn btn-default bp_infant_plus"><span class="glyphicon glyphicon-plus"></span></button> \n\</div></div></div><div class="row reavellerrow-end"><div class="col-md-12"><button type="button" class="btn btn-md btn-success pull-right closepopover">done</div></div>'
        });

        $('#class_stops').popover({
            "template": '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>',
            "html": true,
            'content': '<div class="row classandstoprow"><div class="col-md-12"><p><input class="classInputBox" name="cabin_class_value" type="radio" value="1" aria-label="" checked="checked" classname="All"> All</p></div><div class="col-md-12"><p><input class="classInputBox" classname="Economy" name="cabin_class_value" type="radio" value="2" aria-label=""> Economy</p></div><div class="col-md-12"><p><input classname="Business" class="classInputBox" name="cabin_class_value" type="radio" value="4" aria-label=""> Business</p></div><div class="col-md-12"><p><input classname="First Class" class="classInputBox" name="cabin_class_value" type="radio" value="6" aria-label=""> First Class</p></div></div>\n\
       \n\
<div class="col-md-12"><button type="button" class="btn btn-md btn-success mt-5 closepopover ">Done</div></div>'
        });

        $('body').on('click', function (e) {
            //did not click a popover toggle or popover
            if ($(e.target).data('toggle') !== 'popover' &&
                $(e.target).parents('.popover.in').length === 0) {
                $('#traveller').popover('hide');
                $('#class_stops').popover('hide');
            }
        });

        $(document).on("click", ".closepopover", function (e) {

            //did not click a popover toggle or popover


            $('#class_stops').popover('hide');
            $('#traveller').popover('hide');

        });



        $(document).on('click', ".classInputBox", function () {
            var classvalue = $(this).val();
            $("#cabin_class").val(classvalue);
            $("#class_stops").val($(this).attr("classname"));
        });

        $("#flightbtnsearch").click(function () {
            setTimeout(function () {
                $("#searchform").submit();
            }, 1000);
            if ($("#searchform").valid() == true) {
                if ($('#option1').is(':checked')) {
                    $(".return_m").hide();
                    $(".return_m_d").hide();
                    $(".oneway_m").show();
                }
                if ($('#option2').is(':checked')) {
                    $(".oneway_m").hide();

                    $(".return_m").show();
                    $(".return_m_d").show();
                }
                $(".from_location_m").text($(".flight_from0").val());
                $(".to_location_m").text($(".flight_from_to0").val());
                $(".depart_date_m").text($("#depart_date").val());
                $(".return_date_m").text($("#return_date").val());
                $(".num_adult").text($(".bp_no_adult").val());
                $(".num_child").text($(".bp_no_child").val());
                $(".num_infant").text($(".bp_no_infant").val());
                $("#searchingpopup").modal("show");
            }
            //$("#searchform").submit();
        });

        $(function () {
            $(".adult_select").change(function () {
                var a = Number($(this).val());
                var b = Number($(".child_select").val());
                var c = Number($(".infent_select").val());
                var tot = a + b + c;
                var for_b_val = 9 - a;
                var b_val = "";
                var c_val = "";
                var i = 0;

                if (tot > 9) {
                    for (i = 0; i <= for_b_val; i++) {
                        b_val += '<option val="' + i + '">' + i + '</option>';
                    }
                    $(".child_select").html(b_val);
                    $(".child_select").val(0);
                    $(".child_span span").html(0);

                    $(".infent_select").html(c_val);
                    $(".infent_select").val(0);
                    $(".infant_span span").html(0);
                } else {
                    for (i = 0; i <= for_b_val; i++) {
                        b_val += '<option val="' + i + '">' + i + '</option>';
                    }
                    $(".child_select").html(b_val);
                    $(".child_select").val(b);
                    $(".child_span span").html(b);

                    $(".infent_select").html(c_val);
                    $(".infent_select").val(0);
                    $(".infant_span span").html(0);
                }
                if ((a + b) > 4) {
                    for (i = 0; i <= 9 - a; i++) {
                        c_val += '<option val="' + i + '">' + i + '</option>';
                    }
                    $(".infent_select").html(c_val);
                    $(".infent_select").val(0);
                    $(".infant_span span").html(0);
                } else {
                    for (i = 0; i <= a; i++) {
                        c_val += '<option val="' + i + '">' + i + '</option>';
                    }
                    $(".infent_select").html(c_val);
                    $(".infent_select").val(c);
                    $(".infant_span span").html(c);
                }
            });

            $(".child_select").change(function () {
                var b_val = "";
                var c_val = "";
                var a = Number($(".adult_select").val());
                var b = Number($(this).val());
                var c = Number($(".infent_select").val());
                if ((a + b) <= 9) {
                    if (a >= 4) {
                        for (i = 0; i <= 9 - (a + b); i++) {
                            c_val += '<option val="' + i + '">' + i + '</option>';
                        }
                        $(".infent_select").html(c_val);
                        $(".infent_select").val(0);
                        $(".infant_span span").html(0);

                    } else {


                        for (i = 0; i <= 9 - (a + b); i++) {
                            c_val += '<option val="' + i + '">' + i + '</option>';
                        }
                        $(".infent_select").html(c_val);
                        $(".infent_select").val(0);
                        $(".infant_span span").html(0);
                    }
                } else {
                    for (i = 0; i <= a - (b + c); i++) {
                        c_val += '<option val="' + i + '">' + i + '</option>';
                    }
                    $(".infent_select").html(c_val);
                    $(".infent_select").val(c);
                    $(".infant_span span").html(c);
                }
            });
        });

        // for mu
        $("#onwayid").click(function () {
            $('#return_datebox').css("opacity", ".5");
            $("#multi-flght").hide();
            $("#oneway-flght").show();
        });
        $("#returnid").click(function () {
            $('#return_datebox').css("opacity", "1");
            $("#multi-flght").hide();
            $("#oneway-flght").show();
        });
        $("#multicityid").click(function () {
            $('#return_datebox').css("opacity", ".5");
            $("#multi-flght").show();
            $("#oneway-flght").hide();
        })

        $(document).ready(function () {
            var max_fields = 2; //maximum input boxes allowed
            var wrapper = $(".pickup_fields_wrap"); //Fields wrapper
            var add_button = $(".add_pickup_more"); //Add button ID

            var x = 0; //initlal text box count
            $(add_button).click(function (e) { //on add input button click
                e.preventDefault();
                if (x < max_fields) { //max input box allowed
                    x++; //text box increment
                    $(".multicitycount" + x).show();

                }
            });

            $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
                e.preventDefault();
                $(this).parents().eq(1).hide();
                resetTheOrder_pickup();
                x--;
            })
        });

        function resetTheOrder_pickup() {
            $.each($(".inputpickpoint"), function (index, value) {
                $(this).attr("name", 'pickup_loc[' + index + '][pickup_point]')
            });
        }
    </script>
    <script>
        $(document).on("click", ".bp_adult_plus", function (e) {
            var adult = Number($(".bp_no_adult").val());
            var child = Number($(".bp_no_child").val());
            var infant = Number($(".bp_no_infant").val());
            var total_count = adult + child + infant;
            var ch_ad_total = adult + child;

            if (adult > 8) {
                $(".bp_for_pax_error_pre").html("Can not select more then 9 Pax");
                //  $(".bp_adult_plus").attr("disabled", "disabled")
            } else {
                if (ch_ad_total > 8) {
                    var for_infant_data = "0 Inafnt";
                    $(".bp_infant_data").html(for_infant_data);
                    $(".bp_no_infant").val("0");
                    var for_child_data = "0 Child";
                    $(".bp_child_data").html(for_child_data);
                    $(".bp_no_child").val("0");
                    adult = adult + 1;
                    var for_adult_data = adult + " Adult";
                    $(".bp_adult_data").html(for_adult_data);
                    $(".bp_no_adult").val(adult);
                } else {
                    adult = adult + 1;
                    var for_adult_data = adult + " Adult";
                    $(".bp_adult_data").html(for_adult_data);
                    $(".bp_no_adult").val(adult);
                }
                $(".bp_for_pax_error_pre").html("");
            }
            var bp_traveller_data = adult + " Adult," + child + " Child," + infant + " Infant";
            $(".bp_traveller_data").val(bp_traveller_data);
        });
        $(document).on("click", ".bp_adult_minus", function (e) {
            var adult = Number($(".bp_no_adult").val());
            var child = Number($(".bp_no_child").val());
            var infant = Number($(".bp_no_infant").val());
            if (adult > 1) {
                $(".bp_for_pax_error_pre").html("");
                if (infant > adult) {
                    var for_infant_data = "0 Inafnt";
                    $(".bp_infant_data").html(for_infant_data);
                    $(".bp_no_infant").val("0");
                }
                adult = adult - 1;
                var for_adult_data = adult + " Adult";
                $(".bp_adult_data").html(for_adult_data);
                $(".bp_no_adult").val(adult);
            }
            var bp_traveller_data = adult + " Adult," + child + " Child," + infant + " Infant";
            $(".bp_traveller_data").val(bp_traveller_data);
        });
    </script>
    <script>
        $(document).on("click", ".bp_child_plus", function (e) {
            var adult = Number($(".bp_no_adult").val());
            var child = Number($(".bp_no_child").val());
            var infant = Number($(".bp_no_infant").val());
            var total_count = adult + child + infant;
            var ch_ad_total = adult + child;
            if (ch_ad_total > 8) {

                $(".bp_for_pax_error_pre").html("Can not select more then 9 Pax");
            } else {
                child = child + 1;
                var for_child_data = child + " Child";
                $(".bp_child_data").html(for_child_data);
                $(".bp_no_child").val(child);
                $(".bp_for_pax_error_pre").html("");
            }
            var bp_traveller_data = adult + " Adult," + child + " Child," + infant + " Infant";
            $(".bp_traveller_data").val(bp_traveller_data);
        });
        $(document).on("click", ".bp_child_minus", function (e) {
            var adult = Number($(".bp_no_adult").val());
            var child = Number($(".bp_no_child").val());
            var infant = Number($(".bp_no_infant").val());
            var total_count = adult + child;
            if (child > 0) {
                child = child - 1;
                $(".bp_no_child").val(child);
                var for_child_data = child + " Child";
                $(".bp_child_data").html(for_child_data);
                $(".bp_for_pax_error_pre").html("");
            }
            $(".bp_for_pax_error_pre").html("");
            var bp_traveller_data = adult + " Adult," + child + " Child," + infant + " Infant";
            $(".bp_traveller_data").val(bp_traveller_data);
        });
    </script>
    <script>
        $(document).on("click", ".bp_infant_plus", function (e) {
            var adult = Number($(".bp_no_adult").val());
            var child = Number($(".bp_no_child").val());
            var infant = Number($(".bp_no_infant").val());
            var total_count = adult + child + infant;
            if (total_count > 18) {
                $(".bp_for_pax_error_pre").html("Can not select more then 9 Pax");
            } else {
                if (infant >= adult) {
                    $(".bp_for_pax_error_pre").html("Cannot select infant more than adult");
                } else {
                    infant = infant + 1;
                    var for_infant_data = infant + " Infant";
                    $(".bp_infant_data").html(for_infant_data);
                    $(".bp_no_infant").val(infant);
                    $(".bp_for_pax_error_pre").html("");
                }
            }
            var bp_traveller_data = adult + " Adult," + child + " Child," + infant + " Infant";
            $(".bp_traveller_data").val(bp_traveller_data);
        });
        $(document).on("click", ".bp_infant_minus", function (e) {
            var adult = Number($(".bp_no_adult").val());
            var child = Number($(".bp_no_child").val());
            var infant = Number($(".bp_no_infant").val());
            if (infant > 0) {
                infant = infant - 1;
                $(".bp_no_infant").val(infant);
                var for_infant_data = infant + " Infant";
                $(".bp_infant_data").html(for_infant_data);
            }
            $(".bp_for_pax_error_pre").html("");
            var bp_traveller_data = adult + " Adult," + child + " Child," + infant + " Infant";
            $(".bp_traveller_data").val(bp_traveller_data);
        });



        function book_now(ApiType, ApiIndex, traceID, resultIndex, sessionID) {
            $('#confirmprice').modal({
                backdrop: 'static'
            });
            $("#confirmprice").modal("show");
            var formD = $(this).attr("faresno");
            var flightType = $(this).attr("flighttype");
            $.ajax({
                type: "POST",
                // url: "https://hojoy.in/flight/confirm_fare",
                data: {
                    ApiType: ApiType,
                    ApiIndex: ApiIndex,
                    traceID: traceID,
                    resultIndex: resultIndex,
                    sessionID: sessionID
                },
                dataType: "text",
                cache: false,
                success: function (data) {

                    console.log(data);
                    $("#confirmprice").modal("hide");

                    if (data == "true") {
                        // location.href = "https://hojoy.in/flight/booking_detail?seesionid=" + sessionID;
                    } else {
                        $("#increaseprice").modal("show");
                    }
                }
            });
            return false;
        }


        $(function () {
            $(".pax_validation_continue").click(function () {


                var error_msg = "";
                var data_apend = "";
                $(".pax_validation_field").each(function () {
                    if ($(this).val() == "") {
                        error_msg = error_msg + "<div class='alert alert-danger bs-callout-danger' role='alert' style='background-color: #EB411A;color:#FFFFFF'>" + $(this).attr("error_msg") + "</div> ";
                        $(this).css({
                            "border": "2px solid red"
                        });
                        window.scroll(0, 0)
                    } else {
                        $(this).css({
                            "border": ""
                        });

                    }
                });
                if (error_msg != "") {
                    $(".alert_for_error_msg").show();
                    $(".alert_for_error_msg").html(error_msg);
                    return false;
                } else {
                    $(".alert_for_error_msg").hide();
                    $(".alert_for_error_msg").html(error_msg);
                    if (!$(".term_condition").is(":checked")) {
                        $('#term_condition_error_msg').html("Please accept terms and conditions");
                        $('#term_condition_error_msg').show();
                        return false;
                    } else {
                        $('#term_condition_error_msg').hide();
                    }
                    if (!$(".payment_option").is(":checked")) {
                        $('#payment_option_msg').html("Please select payment Option.");
                        $('#payment_option_msg').show();
                        return false;
                    } else {
                        $('#payment_option_msg').hide();
                    }
                    $(".for_pop_data").each(function () {
                        if ($(this).attr("forend") == "0") {
                            data_apend += '<li class="list-group-item">';
                            data_apend += '<b class="fn"> ' + $(this).attr("pestype") + " - ";
                        }
                        data_apend += $(this).val() + " ";
                        if ($(this).attr("forend") == "2") {
                            data_apend += "</b></li>";
                        }
                    });
                    $(".email_confirm").html('<b class="fn">Email: ' + $(".for_email_confirm").val() + '</b>');
                    $(".contact_confirm").html('<b class="fn">Mobile No:  ' + $(".for_contact_confirm").val() + '</b>');
                    $(".pax_data_apend").html(data_apend);
                    $('#Modal_for_confirm').modal('show');
                    return true;
                }

            });
        });
        //-------------------------------------------------------------------------------------

        //For hide error msg div...............................................................
        $(function () {
            $(".alert_for_error_msg").hide();
        });


        //Title And Gender Connection(Gender autofill).......................................
        $(function () {
            $(".title_auto_fill").change(function () {
                // alert();
                var title_value = $(this).val();
                var name = $(this).attr("key_unique");
                $(".gender_auto_fill").each(function () {
                    if ($(this).attr("key_unique") == name) {
                        if (title_value != "") {
                            if (title_value == "Mr" || title_value == "Mstr") {
                                $(this).val("Male");
                            } else {
                                $(this).val("Female");
                            }
                        } else {
                            $(this).val("");
                        }
                    }
                });

            });
        });
        //----------------------------------------------------------------------------------
    </script>
    <script>
        $(function () {
            $('.services-scroll').click(function () {
                var getattr = $(this).attr('toggletab');
                $('a[href=' + getattr + ']').trigger('click');
                window.scroll({
                    top: 0,
                    left: 0,
                    behavior: 'smooth'
                });
            })
        })
    </script>
    <script>
        $("#whatsapp_phone").keyup(function () {
            $('#error_msg_whatsapp').html("");
            $('#error_msg_whatsapp').hide();
        });

        function sendwhatsapp() {
            var country_phone_code = document.getElementById('country_phone_code').value;
            var whatsapp_phone = document.getElementById('whatsapp_phone').value;
            if (whatsapp_phone == "") {
                $('#error_msg_whatsapp').html("Please a whatsapp number");
                $('#error_msg_whatsapp').show();
                return false;
            }
            if (whatsapp_phone.length >= 9 && whatsapp_phone.length <= 10) {
                $('#error_msg_whatsapp').hide();
                $('#error_msg_whatsapp').hide();
                $('.loding_image').html('<div class="text-align-center">' +
                    // '<img src="https://hojoy.in//assets/images/loader_3_points.gif" style="height:40px;">' +
                    '</div>')
                $(".get_app_link").hide();
                var whatsappobj = {
                    Mobile: country_phone_code + whatsapp_phone,
                    Var1: "Dream Sky Airways",
                    Var2: "Flight, Hotel, Car, Bus, Visa, Holiday, Insurance",
                    Var3: "https://apps.apple.com/us/app/ho-joy-comfort/id6504801437?platform=iphone",
                    Var4: "https://play.google.com/store/apps/details?id=com.travels.hojoy",
                    Var5: "",
                    Var6: "",
                };
                $.ajax({
                    type: "POST",
                    // url: "https://hojoy.in/front/send_link",
                    data: {
                        RequestType: 'whatsapp',
                        Type: "ShareB2cMobileApp",
                        RequestData: JSON.stringify(whatsappobj)
                    },
                    success: function (response) {
                        $('.bp_whatsapp_data_put').hide();
                        if (response == "success") {
                            $('.success_msg_whats').html('Link has been shared.');
                            $('#whatsapp_phone').val('');
                            $('.loding_image').hide();
                            $(".get_app_link").show();
                        } else {
                            alert(response);
                        }
                    },
                });
            } else {
                // alert('fdgfdg');
                $('#error_msg_whatsapp').html("Please Enter valid digits whatsapp number");
                $('#error_msg_whatsapp').show();
                return false;
            }
        }
    </script>

    <!---carousel----->
    <script src="assets/js/owl.carousel.min.js"></script>

    <script>
        $(".ho_slider-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsiveClass: true,
            navText: [
                '<i class="icofont-rounded-left"></i>',
                '<i class="icofont-rounded-right"></i>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                768: {
                    items: 1,
                },
                992: {
                    items: 1,
                },
            },
        });
    </script>

    <script>
        $(".ho_offers-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsiveClass: true,
            navText: [
                '<i class="icofont-rounded-left"></i>',
                '<i class="icofont-rounded-right"></i>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 3,
                },
            },
        });
    </script>
    <script>
        $(".ho_destination-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsiveClass: true,
            navText: [
                '<i class="icofont-rounded-left"></i>',
                '<i class="icofont-rounded-right"></i>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 4,
                },
            },
        });
    </script>
    <script>
        $(".ho_blog-carousel").owlCarousel({
            loop: true,
            margin: 5,
            nav: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsiveClass: true,
            navText: [
                '<i class="icofont-rounded-left"></i>',
                '<i class="icofont-rounded-right"></i>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 4,
                },
            },
        });
    </script>


<script>
        $(document).ready(function() {
            var bigimage = $("#big");
            var thumbs = $("#thumbs");
            //var totalslides = 10;
            var syncedSecondary = true;
            bigimage.owlCarousel({
                items: 1,
                slideSpeed: 2000,
                nav: true,
                autoplay: true,
                dots: false,
                loop: true,
                responsiveRefreshRate: 200,
                navText: [
                    '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
                    '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
                ]
            }).on("changed.owl.carousel", syncPosition);
            thumbs.on("initialized.owl.carousel", function() {
                thumbs.find(".owl-item").eq(0).addClass("current");
            }).owlCarousel({
                items: 4,
                dots: true,
                nav: true,
                navText: [
                    '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
                    '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
                ],
                smartSpeed: 200,
                slideSpeed: 500,
                slideBy: 4,
                responsiveRefreshRate: 100
            }).on("changed.owl.carousel", syncPosition2);

            function syncPosition(el) {
                //to disable loop, comment this block
                var count = el.item.count - 1;
                var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

                if (current < 0) {
                    current = count;
                }
                if (current > count) {
                    current = 0;
                }
                //to this
                thumbs.find(".owl-item").removeClass("current").eq(current).addClass("current");
                var onscreen = thumbs.find(".owl-item.active").length - 1;
                var start = thumbs.find(".owl-item.active").first().index();
                var end = thumbs.find(".owl-item.active").last().index();
                if (current > end) {
                    thumbs.data("owl.carousel").to(current, 100, true);
                }
                if (current < start) {
                    thumbs.data("owl.carousel").to(current - onscreen, 100, true);
                }
            }

            function syncPosition2(el) {
                if (syncedSecondary) {
                    var number = el.item.index;
                    bigimage.data("owl.carousel").to(number, 100, true);
                }
            }

            thumbs.on("click", ".owl-item", function(e) {
                e.preventDefault();
                var number = $(this).index();
                bigimage.data("owl.carousel").to(number, 300, true);
            });
        });
    </script>

    <!---carousel end---------->

    <script>
        function flight_suggest(inputString, id) {


            $(".flight_from" + id).autocomplete({
                autoFocus: true,
                minLength: 3,
                source: function (request, response) {
                    $.ajax({
                        type: "GET",
                        // url: "https://hojoy.in/front/fetch_city",
                        dataType: "json",
                        cache: false,
                        data: {
                            id: inputString,
                            div_id: id
                        },
                        success: function (data) {
                            var all_l = [];
                            for (var i = 0; i < data.length; i++) {

                                var city_name = data[i].airport_city_name;
                                var air_name = data[i].airport_name;
                                var air_code = data[i].airport_code;
                                var air_country_code = data[i].airport_country_code;
                                var air_city_code = data[i].airport_city_code;
                                all_l.push({
                                    "label": city_name + " (" + air_name + "), " + air_code,
                                    "value": city_name + " (" + air_name + "), " + air_code,
                                    "country": air_country_code,
                                    "city": air_city_code
                                });

                            }
                            response(all_l);
                        }
                    });

                },
                select: function (event, ui) {
                    $("#flight_from_country" + id).val(ui.item.country);
                    $("#flight_from_city" + id).val(ui.item.city);
                    $(".flight_from_to" + id).focus();
                },
            });


        }

        function flight_suggest_to(inputString, id) {
            $(".flight_from_to" + id).autocomplete({
                autoFocus: true,
                minLength: 3,
                source: function (request, response) {
                    $.ajax({
                        type: "GET",
                        // url: "https://hojoy.in/front/fetch_city_to",
                        dataType: "json",
                        cache: false,
                        data: {
                            id: inputString,
                            div_id: id
                        },
                        success: function (data) {
                            var all_l = [];
                            for (var i = 0; i < data.length; i++) {
                                var city_name = data[i].airport_city_name;
                                var air_name = data[i].airport_name;
                                var air_code = data[i].airport_code;
                                var air_country_code = data[i].airport_country_code;
                                var air_city_code = data[i].airport_city_code;
                                all_l.push({
                                    "label": city_name + " (" + air_name + "), " + air_code,
                                    "value": city_name + " (" + air_name + "), " + air_code,
                                    "country": air_country_code,
                                    "city": air_city_code
                                });

                            }
                            response(all_l);

                        }
                    });

                },
                select: function (event, ui) {

                    $("#flight_from_to_country" + id).val(ui.item.country);
                    $("#flight_from_to_city" + id).val(ui.item.city);
                    $("#depart_date").focus();

                },
            });
        }
    </script>
    <script type="text/javascript">
        //------Hotel Check in date--------Start------------------
        // $(function() {
        //     $("#bus-depart-date").datepicker({
        //         numberOfMonths: 1,
        //         dayNamesMin: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        //         "minDate": 0,
        //         showOn: 'both',
        //         buttonText: '',
        //         dateFormat: 'yy-mm-dd',

        //         onClose: function(selectedDate) {
        //             $("#bp_check_out_date").datepicker("option", "minDate", selectedDate);
        //         }
        //     });
        // });
        //------Hotel Check in date--------End------------------
        //------Hotel Check in date--------End------------------
        function bus_sugges_from(inputString, id) {
            $(".bus_from").autocomplete({

                autoFocus: true,

                minLength: 2,

                source: function (request, response) {

                    $.ajax({

                        type: "GET",

                        // url: "https://hojoy.in/bus/fetch_city_to",

                        dataType: "json",

                        cache: false,

                        data: {
                            id: inputString,
                            div_id: id
                        },

                        success:

                            function (data) {

                                var all_l = [];

                                for (var i = 0; i < data.length; i++) {

                                    var city_name = data[i].busodma_destination_name;

                                    var code = data[i].busodma_origin_code;

                                    all_l.push({
                                        "label": city_name,
                                        "value": city_name,
                                        "city_code": code
                                    });

                                }

                                response(all_l);

                            }

                    });

                },

                select: function (event, ui) {
                    $('#source_code').val(ui.item.city_code);
                },
                open: function () {
                    $(".ui-autocomplete").addClass('common_scrollbar');
                },

            });

        }


        function bus_sugges_to(inputString, id) {

            $(".bus_to").autocomplete({
                autoFocus: true,
                minLength: 2,
                source: function (request, response) {
                    $.ajax({
                        type: "GET",
                        // url: "https://hojoy.in/bus/fetch_city_to",
                        dataType: "json",
                        cache: false,
                        data: {
                            id: inputString,
                            div_id: id
                        },
                        success: function (data) {
                            var all_l = [];
                            for (var i = 0; i < data.length; i++) {
                                var city_name = data[i].busodma_destination_name;
                                var code = data[i].busodma_origin_code;
                                all_l.push({
                                    "label": city_name,
                                    "value": city_name,
                                    "city_code": code
                                });
                            }
                            response(all_l);
                        }
                    });
                },

                select: function (event, ui) {
                    $('#destination_code').val(ui.item.city_code);

                },
                open: function () {
                    $(".ui-autocomplete").addClass('common_scrollbar');
                },

            });

        }

        function car_sugges_from(inputString, id) {
            $(".car_from").autocomplete({
                autoFocus: true,
                minLength: 2,
                source: function (request, response) {
                    $.ajax({
                        type: "GET",
                        // url: "https://hojoy.in/car/fetch_city_to",
                        dataType: "json",
                        cache: false,
                        data: {
                            id: inputString,
                            div_id: id
                        },
                        success: function (data) {
                            var all_l = [];
                            for (var i = 0; i < data.length; i++) {
                                var city_name = data[i].caoncitlst_city_name;
                                var code = data[i].caoncitlst_id;
                                all_l.push({
                                    "label": city_name,
                                    "value": city_name,
                                    "city_code": code
                                });
                            }
                            response(all_l);
                        }
                    });
                },
                select: function (event, ui) {
                    $('#car_from_city').val(ui.item.city_code);
                },
                open: function () {
                    $(".ui-autocomplete").addClass('common_scrollbar');
                },
            });
        }

        function car_sugges_from_to(inputString, id) {
            $(".car_from_to").autocomplete({
                autoFocus: true,
                minLength: 2,
                source: function (request, response) {
                    $.ajax({
                        type: "GET",
                        // url: "https://hojoy.in/car/fetch_city_to",
                        dataType: "json",
                        cache: false,
                        data: {
                            id: inputString,
                            div_id: id
                        },
                        success: function (data) {
                            var all_l = [];
                            for (var i = 0; i < data.length; i++) {
                                var city_name = data[i].caoncitlst_city_name;
                                var code = data[i].caoncitlst_id;
                                all_l.push({
                                    "label": city_name,
                                    "value": city_name,
                                    "city_code": code
                                });
                            }
                            response(all_l);
                        }
                    });
                },
                select: function (event, ui) {
                    $('#car_to_city').val(ui.item.city_code);
                },
                open: function () {
                    $(".ui-autocomplete").addClass('common_scrollbar');
                },
            });
        }

        $(function () {
            $("#car_depart_date").datepicker({
                numberOfMonths: 1,
                dayNamesMin: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "minDate": 0,
                showOn: 'both',
                buttonText: '',
                dateFormat: 'dd/mm/yy',

                onClose: function (selectedDate) {
                    $("#car_drop_date").datepicker("option", "minDate", selectedDate);
                }
            });

            $("#car_drop_date").datepicker({
                numberOfMonths: 1,
                dayNamesMin: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "minDate": 0,
                showOn: 'both',
                buttonText: '',
                dateFormat: 'dd/mm/yy',
                onClose: function (selectedDate) { }
            });

            $("#bike_depart_date").datepicker({
                numberOfMonths: 1,
                dayNamesMin: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "minDate": 0,
                showOn: 'both',
                buttonText: '',
                dateFormat: 'mm/dd/yy',

                onClose: function (selectedDate) {
                    $("#car_drop_date").datepicker("option", "minDate", selectedDate);
                }
            });

        });

        function bike_sugges_from(inputString, id) {
            $(".bike_from").autocomplete({
                autoFocus: true,
                minLength: 2,
                source: function (request, response) {
                    $.ajax({
                        type: "GET",
                        // url: "https://hojoy.in/bike/fetch_city_to",
                        dataType: "json",
                        cache: false,
                        data: {
                            id: inputString,
                            div_id: id
                        },
                        success: function (data) {
                            var all_l = [];
                            for (var i = 0; i < data.length; i++) {
                                var city_name = data[i].bikeofcitlis_city_name;
                                var code = data[i].bikeofcitlis_id;
                                all_l.push({
                                    "label": city_name,
                                    "value": city_name,
                                    "city_code": code
                                });
                            }
                            response(all_l);
                        }
                    });
                },
                select: function (event, ui) {
                    $('#bike_to_city').val(ui.item.city_code);
                },
                open: function () {
                    $(".ui-autocomplete").addClass('common_scrollbar');
                },
            });
        }
    </script>


    <script>
        function transfer_sugges_from(inputString) {
            $(".transfer_destination").autocomplete({
                autoFocus: true,
                minLength: 3,
                source: function (request, response) {
                    $.ajax({
                        type: "GET",
                        // url: "https://hojoy.in/transfer/get_transfer_destination",
                        dataType: "json",
                        cache: false,
                        data: {
                            id: inputString,
                        },
                        success: function (data) {
                            if (data != "0") {
                                var all_l = [];
                                for (var i = 0; i < data.length; i++) {
                                    var city_name = data[i].CityName;
                                    var state_name = data[i].StateName;
                                    var city_code = data[i].CityCode;
                                    var country_code = data[i].CountyCode;
                                    var country_name = data[i].CountyName;
                                    all_l.push({
                                        "label": city_name,
                                        "value": city_name,
                                        "city_code": city_code,
                                        "state_name": state_name,
                                        "country_code": country_code,
                                        "country_name": country_name
                                    });
                                }
                                response(all_l);
                            } else {

                            }
                        }
                    });
                },
                select: function (event, ui) {
                    $('#transfer_city_code').val(ui.item.label + '__' + ui.item.city_code + '__' + ui.item.state_name + '__' + ui.item.country_code);
                    $('.transfer_pick_up').removeAttr('disabled');
                    $('.transfer_drop_off').removeAttr('disabled');
                },
                open: function () {
                    $(".ui-autocomplete").addClass('common_scrollbar transfer_toplist');
                },
                create: function () {
                    $(this).data('ui-autocomplete')._renderItem = function (
                        ul, item) {
                        var cityname = item.value;
                        var country_code = item.country_code;
                        var state_name = item.state_name;
                        var country_name = item.country_name;
                        var lowerCaseName = country_code.toLowerCase()
                        var imageurl = 'https://common-cdn.com/images/country_flags/' + lowerCaseName + '.png';
                        return $("<li>")
                            .data("ui-autocomplete-item", item)
                            .append(
                                "<a>" +
                                "<div class='transfer-left'>" +
                                "<i class='fa fa-car'></i>&nbsp;" +
                                "<samp class='city'>" +
                                cityname +
                                "</samp>" +
                                "<samp class='countryname'>" + state_name + " (" +
                                country_name +
                                ")</samp>" +
                                "</div><div class=''><samp class=''>" +
                                country_code +
                                "</samp><samp class='transferflag'><img src='" + imageurl + "'></samp></div>" +
                                "</a>").appendTo(ul);
                    };
                },

            });
        }
        $(".pickup_or_drop").change(function () {
            var type = $(this).attr('type');
            var pickup_or_drop = $(this).val(); //this.value;
            var transfer_city_code = $('#transfer_city_code').val();
            $.ajax({
                type: "GET",
                // url: "https://hojoy.in/transfer/get_transfer_pickup_or_drop",
                dataType: "json",
                cache: false,
                data: {
                    pickup_or_drop: pickup_or_drop,
                    city_code: transfer_city_code,
                    type: type,
                },
                success: function (response) {
                    if (type == "pick_up") {
                        title = 'Pick Up';
                    } else {
                        title = 'Drop Off';
                    }
                    html = '';
                    if (response.error_code == "0") {
                        if (response.get_request['request_type_id'] == "0") {
                            html += '<div class="col-md-6 col-sm-6 transfer_col box_input">';
                            html += '<label>' + title + ' Hotel </label>';
                            html += '<select class="input form-control"  name="' + type + '_point_code" id="' + type + '_point_code" required="">';
                            html += '<option value="">Please Select</option>';
                            for (var i = 0; i < response.data.length; i++) {
                                html += '<option value=' + response.data[i].HotelID + '__' + response.data[i].ID + '__' + response.data[i].HotelName + '>' + response.data[i].HotelName + '</option>';
                            }
                            html += ' </select>';
                            html += '</div>';
                        }
                        if (response.get_request['request_type_id'] == "1") {
                            html += '<div class="col-md-6 col-sm-6 transfer_col box_input">';
                            html += '<label>' + title + ' Airport </label>';
                            html += '<select class="input form-control"  name="' + type + '_point_code" id="' + type + '_point_code" required="">';
                            html += '<option value="">Please Select</option>';
                            for (var i = 0; i < response.data.length; i++) {
                                html += '<option value=' + response.data[i].AirportCode + '__' + response.data[i].ID + '__' + response.data[i].AirportName + '>' + response.data[i].AirportName + '</option>';
                            }
                            html += ' </select>';
                            html += '</div>';
                        } else if (response.get_request['request_type_id'] == "2") {
                            html += '<div class="col-md-6 col-sm-6 transfer_col box_input">';
                            html += '<label>' + title + ' Station </label>';
                            html += '<select class="input form-control"  name="' + type + '_point_code" id="' + type + '_point_code" required="">';
                            html += '<option value="">Please Select</option>';
                            for (var i = 0; i < response.data.length; i++) {
                                html += '<option value=' + response.data[i].StationCode + '__' + response.data[i].ID + '__' + response.data[i].StationName + '>' + response.data[i].StationName + '</option>';
                            }
                            html += ' </select>';
                            html += '</div>';
                        } else if (response.get_request['request_type_id'] == "3") {
                            html += '<div class="col-md-6 col-sm-6 transfer_col box_input">';
                            html += '<label>' + title + ' Port</label>';
                            html += '<select class="input form-control"  name="' + type + '_point_code" id="' + type + '_point_code" required="">';
                            html += '<option value="">Please Select</option>';
                            for (var i = 0; i < response.data.length; i++) {
                                html += '<option value=' + response.data[i].PortCode + '__' + response.data[i].ID + '__' + response.data[i].PortName + '>' + response.data[i].PortName + ' </option>';
                            }
                            html += ' </select>';
                            html += '</div>';
                        }

                    } else {
                        html += '<div class="col-md-6 col-sm-6">';
                        html += '<p style="color:red;">' + title + ' ' + response.get_request['request_type'] + ' ' + response.error_message + '</p>';
                        html += '</div>';
                    }
                    $('.append_' + response.get_request['form_type']).html(html)
                }


            })
        })
        $("#transfer_depart_date").datepicker({
            numberOfMonths: 1,
            dayNamesMin: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "minDate": 0,
            showOn: 'both',
            buttonText: '',
            dateFormat: 'yy-mm-dd',

            onClose: function (selectedDate) {
                $("#transfer_depart_date").datepicker("option", "minDate", selectedDate);
            }
        });
    </script>

    <script>
        function validateEmailAndMobNumber(email, mobile_number) {
            var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            if (!expr.test(email)) {
                $(".error_msg_mobile").html("");
                $(".error_msg_email").html("Invalid email address.");
                return false;
            } else {
                // var regex = /^(0|91)?[6-9][0-9]{9}$/;
                var regex = /^[6-9][0-9]{9}$/;
                if (regex.test(mobile_number)) {
                    return true;
                } else {
                    $(".error_msg_email").html("");
                    $(".error_msg_mobile").html("Invalid Mobile Number.(Please enter 10 digit)");
                    return false;
                }
            }
        }
        $(".subscribe_email_theme_four").click(function () {
            var email = $("#newsletter_email").val();
            var mobile_number = $("#newsletter_mobile").val();
            if (email == "" && mobile_number == "") {
                $(".error_msg_email").html("Please Enter Email ID");
                $(".error_msg_mobile").html("Please Enter Mobile Number");
                return false;
            }
            if (mobile_number == "") {
                $(".error_msg_email").html("");
                $(".error_msg_mobile").html("Please Enter Mobile Number");
                return false;
            }
            if (email == "") {
                $(".error_msg_email").html("Please Enter Email ID");
                $(".error_msg_mobile").html("");
                return false;
            }
            if (validateEmailAndMobNumber(email, mobile_number) != true) {
                return false;
            }
            $.ajax({
                type: "POST",
                url: "",
                data: {
                    'csrf_token': '34979b6004c1117e334bd83160af5d5a',
                    email: email,
                    mobile_number: mobile_number
                },
                dataType: "text",
                cache: false,
                success: function (data) {
                    var obj = jQuery.parseJSON(data);
                    if (obj.status == "success") {
                        $(".error_msg_email").html("");
                        $(".error_msg_mobile").html("");
                        $("#newsletter_email").val("");
                        $("#newsletter_mobile").val("");
                        $(".success_msg").html(obj.message);
                    } else {
                        $(".error_msg_email").html(obj.message);
                        $(".error_msg_mobile").html("");
                    }
                }
            });
        });
    </script>

    <!--- insurance script start from here----->
    <script>
        $("#ins_travel_date").datepicker({
            numberOfMonths: 1,
            dayNamesMin: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "minDate": 0,
            showOn: 'both',
            buttonText: '',
            dateFormat: 'dd-mm-yy',
            onClose: function (selectedDate) {
                $("#ins_return_date").datepicker("option", "minDate", selectedDate);
            }
        });

        $("#ins_return_date").datepicker({
            numberOfMonths: 1,
            dayNamesMin: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "minDate": 0,
            showOn: 'both',
            buttonText: '',
            dateFormat: 'dd-mm-yy',
            onClose: function (selectedDate) {
                myfunc();
            }

        });

        function myfunc() {
            var start = $("#ins_travel_date").datepicker("getDate");
            var end = $("#ins_return_date").datepicker("getDate");
            days = ((end - start) / (1000 * 60 * 60 * 24) + 1);
            if (Math.round(days) >= 1 && Math.round(days) <= 50) {

                $('#number_of_night').val(Math.round(days));
            }
        }
        $(".ins_age_select").click(function () {
            $(".ins_age_details").show();
        });
        $(".ins_age_select").change(function () {
            $(".ins_age_details").show();
            var ins_no_pax = $(this).val(); //this.value;
            var ins_age_data = "";

            for (var i = 1; i <= ins_no_pax; i++) {
                ins_age_data += '<div class="col-xs-6 col-md-6 ins_agecol age_wrap ">\
                         <span class="d-block  fwd mb-1">Age of Pax ' + i + ':</span>\
                         <div class="agedbox  pt-2">\
                           <div class=" mb-2">\
                              <div class="">\
                              <input type="text" name="ins_paxage[]" autocomplete="off" required class="block width-100 border radius form-control">\
                              </div>\
                              \
                           </div>\
                           \
                       \
                        </div>\
                      </div>';
            }
            $(".ins_age_data").html(ins_age_data);
            var total_guest = 0;
        });
        $("[ins-pax-cl-btn]").click(function () {
            $(".ins_age_details").hide();
        });
        $(".insurance_validation").click(function () {
            $(".insurance-booking-form").validate({
                rules: {
                    'ins_paxage[]': {
                        required: true
                    }
                },
            })
            if ($('.insurance-booking-form').valid()) // check if form is valid
            {
                $("#insurance-popup").modal('show');
                var destination_type = '';
                if ($(".destination_type").val() == "2") {
                    destination_type = "Non US";
                } else if ($(".destination_type").val() == "1") {
                    destination_type = "US/Canada";
                } else {
                    destination_type = "Domestic";
                }
                $(".from_location_car").text(destination_type);
                $(".ins_total_pax").text($(".ins_age_select").val());
                $(".ins_travel_date").text($("#ins_travel_date").val());
                $(".ins_return_date").text($("#ins_return_date").val());
                $(".number_of_night").text($("#number_of_night").val());
                $(".insurance-booking-form").submit();
            }
        });
    </script>
    <!--- insurance script end from here----->
    <script>
        $('.brands_dom-owl-cras').owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            nav: true,
            dots: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsiveClass: true,
            navText: ['<i class="icofont-rounded-left"></i>', '<i class="icofont-rounded-right"></i>'],
            responsive: {
                0: {
                    items: 2,
                    nav: false
                },
                768: {
                    items: 3,
                    nav: false
                },
                992: {
                    items: 5,
                    nav: true
                }
            }
        });
        $(".advertisement").owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                },
                768: {
                    items: 1,
                    nav: false,
                },
                992: {
                    items: 1,
                    nav: false,
                },
            },
        });
        $(".testimonials-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsiveClass: true,
            navText: [
                '<i class="icofont-rounded-left"></i>',
                '<i class="icofont-rounded-right"></i>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 3,
                },
            },
        });
    </script>
    <script>
        $(window).load(function () {
            $('.ho_searchengine-temp').css('visibility', 'visible');
            $('.search-loader').css('display', 'none');
        });

        $('.car_from_location').on('change', function () {
            Seletedarray = this.value.split("__");
            $('#car_from_city').val(Seletedarray[0]);
            $('#car_from_city_name').val(Seletedarray[1]);
        });
        $('.car_to_lcoation').on('change', function () {
            Seletedarray = this.value.split("__");
            $('#car_to_city').val(Seletedarray[0]);
            $('#car_to_city_name').val(Seletedarray[1]);
        });
        $('.availability_type').on('change', function () {
            if (this.value == "SeatWise") {
                $('.car_seat_wise').show();
            } else {
                $('.car_seat_wise').hide();
            }
        })
    </script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
  document.addEventListener("DOMContentLoaded", function () {
    var currentPage = window.location.pathname.split("/").pop(); // e.g. 'about.html'
    var menuLinks = document.querySelectorAll("#main-menu li a");

    menuLinks.forEach(function (link) {
      var linkPage = link.getAttribute("href");

      if (linkPage === currentPage || (linkPage === "index.html" && currentPage === "")) {
        link.parentElement.classList.add("active");
      } else {
        link.parentElement.classList.remove("active");
      }
    });
  });
</script>

    <script>
      $(document).ready(function () {
        $(".mobile-toggle").click(function () {
          $("#mobileMenu").toggleClass("show");
        });
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const splide = new Splide("#image-carousel", {
          type: "loop",
          autoplay: true,
          interval: 3000,

          ease: "ease-in-out",
        });

        splide.on("autoplay:playing", function (rate) {
          console.log("Autoplay is playing at " + rate + "%");
        });

        splide.mount();
      });
    </script>
</body>