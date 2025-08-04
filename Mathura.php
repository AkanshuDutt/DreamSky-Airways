<?php include("includes/header.php"); ?>

<style>
  .accordion-buttons {
    margin: 20px 0;
    text-align: center;
  }

  .accordion-buttons .btn {
    margin: 5px;
    min-width: 150px;
  }

  .carousel-inner > .item > img {
    width: 60%;
    height: 500px;
    object-fit: cover;
  }

  img {
    border-radius: 10px;
  }

  .carousel {
    height: 100%;
  }

  .container-fluid {
    margin: 40px 20px;
  }

  .carousel-control span {
    font-size: 40px;
    color: black;
    top: 50%;
    position: absolute;
    transform: translateY(-50%);
  }
</style>

<div class="container-fluid">
  <div class="row">
    <!-- Left Image Slider Side -->
    <div class="col-md-6 hidden-xs" style="padding:0;">
      <div id="imageCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner">
          <div class="item active">
            <img src="./assets/images/service/PackagesImages/Mathura/Mathura view1.jpg" alt="Mathura Temple" class="img-responsive">
          </div>
          <div class="item">
            <img src="./assets/images/service/PackagesImages/Mathura/Mathura view2.jpg" alt="Hotel View" class="img-responsive">
          </div>
          <div class="item">
            <img src="./assets/images/service/PackagesImages/Mathura/Mathura view3.avif" alt="Room Interior" class="img-responsive">
          </div>
          <div class="item">
            <img src="./assets/images/service/PackagesImages/Mathura/Mathura view4.jpg" alt="Traditional Food" class="img-responsive">
          </div>
        </div>
      </div>
    </div>

    <!-- Right Content Side -->
    <div class="col-md-6">
      <h2 class="mb-3">Mathura Holiday Packages</h2>
      <p class="lead"><strong>₹12,000 / Per Person</strong></p>

      <div class="accordion-buttons">
        <div class="btn-group">
          <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#priceBox">View Price</a>
          <a class="btn btn-success" data-toggle="collapse" data-parent="#accordion" href="#benefitsBox">View Benefits</a>
          <a class="btn btn-warning" data-toggle="collapse" data-parent="#accordion" href="#accommodationBox">View Accommodation</a>
          <a class="btn btn-danger" data-toggle="collapse" data-parent="#accordion" href="#mealBox">View Meal Plan</a>
        </div>
      </div>

      <!-- Accordion Start -->
      <div class="panel-group" id="accordion">
        <!-- Price -->
        <div class="panel panel-primary">
          <div id="priceBox" class="panel-collapse collapse in">
            <div class="panel-body">
              <strong>Per person:</strong> ₹12,000 + GST<br>
              <strong>Couples:</strong> ₹22,000 + GST<br>
              <strong>Family (4 Pax):</strong> ₹44,000 + GST<br>
              <strong>Office Group (50 Pax):</strong> ₹5,85,000 + GST<br>
              <small>(Includes Stay, Meals, and Guided Tour Assistance)</small>
            </div>
          </div>
        </div>

        <!-- Benefits -->
        <div class="panel panel-success">
          <div id="benefitsBox" class="panel-collapse collapse">
            <div class="panel-body">
              <ul>
                <li>Accommodation near Shri Krishna Janmabhoomi</li>
                <li>Evening Aarti & Temple Visit Assistance</li>
                <li>Spiritual guided tour of Vrindavan</li>
                <li>Vegetarian Sattvic Meals</li>
                <li>Late checkout till 2 PM</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Accommodation -->
        <div class="panel panel-warning">
          <div id="accommodationBox" class="panel-collapse collapse">
            <div class="panel-body">
              <ul>
                <li>5 Deluxe Rooms (4 Pax each)</li>
                <li>3 Family Suites (6 Pax each)</li>
                <li>4 Standard AC Rooms (3 Pax each)</li>
                <li>Additional guests via extra beds or dorm setup</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Meal Plan -->
        <div class="panel panel-danger">
          <div id="mealBox" class="panel-collapse collapse">
            <div class="panel-body">
              <strong>2 Breakfasts:</strong>
              <ul><li>Poha, Halwa, Chai, Fruits, Water Bottles</li></ul>
              <strong>1 Lunch:</strong>
              <ul><li>Thali with Dal, Paneer, Sabzi, Roti, Rice, Sweet</li></ul>
              <strong>2 Dinners:</strong>
              <ul><li>Kachori, Subji, Rice, Curd, Dessert, Water</li></ul>
            </div>
          </div>
        </div>
      </div>

      <hr>
      <h4>Contact for Booking</h4>
      <p>
        <a href="tel:8750610304">8750610304</a> / <a href="tel:+911204992853">120-499-2853</a><br>
        Mathura Holiday Package
      </p>

      <a href="InqueryForm.php" class="btn btn-primary btn-block btn-lg">Book Now</a>
    </div>
  </div>
</div>

<?php include("includes/footer.php"); ?>
