<?php include("includes/header.php"); ?>

<!-- WhatsApp Redirect Script -->
<script>
  window.onload = function () {
    // Replace with your WhatsApp number in international format (without +)
    var phone = "918750610304";
    var message = "Hi, I'm interested in booking a holiday package.";
    
    // Redirect to WhatsApp Web (or App)
    var whatsappURL = "https://wa.me/" + phone + "?text=" + encodeURIComponent(message);
    
    // Redirect after a short delay (optional: for UX)
    setTimeout(function () {
      window.location.href = whatsappURL;
    }, 1000); // 1 second delay
  };
</script>

<!-- Form Section (Hidden for Now) -->
<div class="container-fluid" style="padding: 30px; display: none;">
  <div class="row">
    <div class="col-12">
      <div class="holiday-sidebar-wrap" style="max-width: 800px; margin: auto;">
        <div class="buy_now">
          <h3>Buy Now</h3>
        </div>

        <form action="#" id="holiday_form_submit" novalidate="novalidate">
          <input type="hidden" name="csrf_token" value="...">
          <input type="hidden" name="package_id" value="673">
          <input type="hidden" name="package_name" value="Singapore">

          <!-- Form Fields (unchanged) -->
          <!-- Keep your full form code here -->
        </form>
      </div>
    </div>
  </div>
</div>

<?php include("includes/footer.php"); ?>
