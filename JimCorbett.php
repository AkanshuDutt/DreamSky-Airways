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
            <img src="./assets/images/service/PackagesImages/JimCorbett/jim corbett view1.jpg" alt="Jim Corbett Safari" class="img-responsive">
          </div>
          <div class="item">
            <img src="./assets/images/service/PackagesImages/JimCorbett/jim corbett view2.jpg" alt="Resort" class="img-responsive">
          </div>
          <div class="item">
            <img src="./assets/images/service/PackagesImages/JimCorbett/jim corbett view3.jpg" alt="Forest Stay" class="img-responsive">
          </div>
          <div class="item">
            <img src="./assets/images/service/PackagesImages/JimCorbett/jim corbett view4.jpg" alt="Buffet Dining" class="img-responsive">
          </div>
        </div>
      </div>
    </div>

    <!-- Right Content Side -->
    <div class="col-md-6">
      <h2 class="mb-3">Jim Corbett Holiday Packages</h2>
      <p class="lead"><strong>₹7,000 / Per Person</strong></p>

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
              <strong>Per person:</strong> ₹7,000 + GST<br>
              <strong>Couples:</strong> ₹13,900 + GST<br>
              <strong>Family (4 Pax):</strong> ₹30,000 + GST<br>
              <strong>Office Group (50 Pax):</strong> ₹3,50,000 + GST<br>
              <small>(Includes Stay, Meals, Jungle Safari, and Recreational Activities)</small>
            </div>
          </div>
        </div>

        <!-- Benefits -->
        <div class="panel panel-success">
          <div id="benefitsBox" class="panel-collapse collapse">
            <div class="panel-body">
              <ul>
                <li>Jungle Safari & Adventure Trails</li>
                <li>Riverside Resort Stay with Views</li>
                <li>Bonfire Night & DJ (on request)</li>
                <li>Nature Walks & Local Sightseeing</li>
                <li>Late Checkout till 1 PM</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Accommodation -->
        <div class="panel panel-warning">
          <div id="accommodationBox" class="panel-collapse collapse">
            <div class="panel-body">
              <ul>
                <li>6 Deluxe Jungle View Cottages (4 Pax each)</li>
                <li>5 Premium Rooms (3 Pax each)</li>
                <li>4 Standard Rooms (3 Pax each)</li>
                <li>Extra guests via floor bedding/dorm setup</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Meal Plan -->
        <div class="panel panel-danger">
          <div id="mealBox" class="panel-collapse collapse">
            <div class="panel-body">
              <strong>2 Breakfasts:</strong>
              <ul><li>Toast, Eggs/Poha, Tea/Coffee, Fruits</li></ul>
              <strong>1 Lunch:</strong>
              <ul><li>Paneer, Dal, Mix Veg, Rice, Roti, Salad, Raita</li></ul>
              <strong>2 Dinners:</strong>
              <ul><li>BBQ Setup, Buffet Dinner with Dessert & Beverages</li></ul>
            </div>
          </div>
        </div>
      </div>

      <hr>
      <h4>Contact for Booking</h4>
      <p>
        <a href="tel:8750610304">8750610304</a> / <a href="tel:+911204992853">120-499-2853</a><br>
        Jim Corbett Holiday Package
      </p>

      <a href="InqueryForm.php" class="btn btn-primary btn-block btn-lg">Book Now</a>
    </div>
  </div>
</div>



<?php include("includes/footer.php"); ?>
