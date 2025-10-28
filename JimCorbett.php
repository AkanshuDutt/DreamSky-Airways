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
      <div id="imageCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner">
          <div class="item active">
            <img src="./assets/images/service/PackagesImages/jaisalmer/Jaisalmer1.jpg" alt="Jaisalmer View" class="img-responsive">
          </div>
          <div class="item">
            <img src="./assets/images/service/PackagesImages/jaisalmer/Jaisalmer2.jpg" alt="Desert Camp" class="img-responsive">
          </div>
          <div class="item">
            <img src="./assets/images/service/PackagesImages/jaisalmer/Jaisalmer3.jpg" alt="Camel Safari" class="img-responsive">
          </div>
          <div class="item">
            <img src="./assets/images/service/PackagesImages/jaisalmer/Jaisalmer4.jpg" alt="Folk Dance" class="img-responsive">
          </div>
        </div>
      </div>
    </div>

    <!-- Right Content Side -->
    <div class="col-md-6">
      <h2 class="mb-3">Jaisalmer Holiday Packages</h2>
      <p class="lead"><strong>₹3,499 / Per Person</strong></p>

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
              <strong>Per person:</strong> ₹3,499 + GST<br>
              <strong>Couples:</strong> ₹6,800 + GST<br>
              <strong>Family (4 Pax):</strong> ₹13,500 + GST<br>
              <strong>Office Group (50 Pax):</strong> ₹1,65,000 + GST<br>
              <small>(Includes Stay, Meals, Camel Safari, and Cultural Activities)</small>
            </div>
          </div>
        </div>

        <!-- Benefits -->
        <div class="panel panel-success">
          <div id="benefitsBox" class="panel-collapse collapse">
            <div class="panel-body">
              <ul>
                <li>Camel Safari & Jeep Ride</li>
                <li>Luxury Desert Camp Stay</li>
                <li>Evening Folk Dance & Music Show</li>
                <li>Bonfire & Stargazing</li>
                <li>Free Local Sightseeing (Patwon Ki Haveli, Jaisalmer Fort)</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Accommodation -->
        <div class="panel panel-warning">
          <div id="accommodationBox" class="panel-collapse collapse">
            <div class="panel-body">
              <ul>
                <li>6 Swiss Tents (3 Pax each)</li>
                <li>5 Desert Cottages (4 Pax each)</li>
                <li>4 Standard Rooms (3 Pax each)</li>
                <li>Extra Bedding for Large Groups Available</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Meal Plan -->
        <div class="panel panel-danger">
          <div id="mealBox" class="panel-collapse collapse">
            <div class="panel-body">
              <strong>1 Breakfast:</strong>
              <ul><li>Poori Bhaji / Poha, Tea/Coffee, Fruits</li></ul>
              <strong>1 Lunch:</strong>
              <ul><li>Dal, Veg Curry, Rice, Roti, Salad, Raita</li></ul>
              <strong>1 Dinner:</strong>
              <ul><li>Rajasthani Buffet + Cultural Snacks + Dessert</li></ul>
            </div>
          </div>
        </div>
      </div>

      <hr>
      <h4>Contact for Booking</h4>
      <p>
        <a href="tel:9876543210">9876543210</a> / <a href="tel:01204567890">0120-456-7890</a><br>
        Jaisalmer Holiday Package
      </p>

      <a href="InqueryForm.php" class="btn btn-primary btn-block btn-lg">Book Now</a>
    </div>
  </div>
</div>

<?php include("includes/footer.php"); ?>
