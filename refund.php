<?php include("includes/header.php"); ?>

<style>
  

  /* .banner h1 {
    align-items: center;
    justify-content: center;
    font-size: 90px;
    font-weight: bold;
    text-shadow: 2px 2px 4px #000;
  } */

    .banner {
  /* background: url('https://via.placeholder.com/1920x300?text=Refund+Policy') no-repeat center center; */
  background-size: cover;
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

  .content-section h3,

  .content-section h4 {
    font-weight: bold;
    margin-top: 25px;

  }

  .content-section ul {
    padding-left: 20px;
  }

  .content-section ul li {
    margin-bottom: 8px;
  }
</style>

<!-- Banner Section -->
<div class="banner">
  <h1>Refund Policy</h1>
</div>

<!-- Main Content -->
<div class="container content-section">
  <div class="row">
    <div class="col-md-12">
      <h3>Our Refund Policy</h3>
      <p>We value your satisfaction. If you're not entirely happy with your purchase, we're here to help.</p>

      <h4>Eligibility for Refund</h4>
      <ul>
        <li>Refund requests must be made within 7 days of purchase.</li>
        <li>The service/product must not have been consumed or misused.</li>
        <li>Proof of purchase is required for all refunds.</li>
      </ul>

      <h4>Non-refundable Items</h4>
      <p>Some services and items are non-refundable once delivered or accessed.</p>

      <h4>Processing Refunds</h4>
      <p>Once your request is approved, the refund will be processed to your original payment method within 5–7 working days.</p>

      <h4>Need Help?</h4>
      <p>If you have any questions regarding refunds, please <a href="contact-us.php">contact our support team</a>.</p>
    </div>
  </div>
</div>

<?php include("includes/footer.php"); ?>