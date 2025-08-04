<?php
$pageCanonical = "http://localhost/_public_html/packages-policy.php";
$pageRobots = "index, follow";
include("includes/header.php");
?>

<style>
  .banner {
    /* background: url('https://via.placeholder.com/1920x300?text=Packages+Policy') no-repeat center center; */
    background-size: cover;
    /* height: 300px; */
     background-color: #bad6f2ff;
    color: black;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
  }

  .banner h1 {
    font-size: 48px;
    font-weight: bold;
    text-shadow: 2px 2px 4px #000;
    margin: 0;
  }

  .content-section {
    padding: 10px 20px;
  }

  .content-section h3, .content-section h4 {
    font-weight: bold;
    margin-top: 30px;
  }

  .content-section ul {
    padding-left: 20px;
  }

  .content-section ul li {
    margin-bottom: 10px;
  }
</style>

<!-- Banner -->
<div class="banner">
  <h1>Packages Policy</h1>
</div>

<!-- Content Section -->
<div class="container content-section">
  <div class="row">
    <div class="col-md-12">
      <h3>1. Overview</h3>
      <p>Our packages are designed to provide the best combination of services and value. This policy outlines how packages are delivered, modified, or canceled.</p>

      <h3>2. Booking and Payment</h3>
      <ul>
        <li>Full payment is required at the time of booking to confirm your package.</li>
        <li>Payments can be made online via debit/credit card, UPI, or net banking.</li>
        <li>Confirmation email will be sent within 24 hours of payment.</li>
      </ul>

      <h3>3. Package Customization</h3>
      <p>We allow basic customization in package services as long as the request is made before service delivery begins. Additional charges may apply.</p>

      <h3>4. Validity and Expiry</h3>
      <ul>
        <li>Each package is valid for a fixed period as mentioned during booking.</li>
        <li>Expired packages cannot be extended or reused.</li>
      </ul>

      <h3>5. Cancellation Policy</h3>
      <ul>
        <li>Cancellations made within 48 hours of booking may be eligible for a full refund.</li>
        <li>No refund will be processed for cancellations after service delivery has begun.</li>
        <li>Special or custom packages are non-refundable.</li>
      </ul>

      <h3>6. Refund Process</h3>
      <p>Once a refund is approved, it will be processed to your original payment method within 7–10 business days. An email confirmation will be sent when the refund is issued.</p>

      <h3>7. Changes by Company</h3>
      <p>In rare situations, we may modify or cancel your package due to unforeseen circumstances (e.g., natural disasters, government restrictions). In such cases, you will be offered an alternative or full refund.</p>

      <h3>8. Customer Responsibilities</h3>
      <ul>
        <li>Provide accurate information during booking.</li>
        <li>Follow all terms and instructions provided with the package.</li>
        <li>Reach out to support for any clarification before package expiry.</li>
      </ul>

      <h3>9. Contact Information</h3>
      <p>If you have any questions about your package or this policy, feel free to <a href="contact-us.php">contact our support team</a> or email us at <strong>support@dreamskyairways.com</strong>.</p>

      <h3>10. Policy Updates</h3>
      <p>This policy is subject to change without prior notice. Please refer to this page for the most recent version before purchasing a new package.</p>
    </div>
  </div>
</div>

<?php include("includes/footer.php"); ?>