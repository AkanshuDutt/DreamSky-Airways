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

  /* Carousel Arrow Custom Styling */
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
            <img src="./assets/images/service/PackagesImages/Nainital/Nainital-View.jpeg" alt="Nainital Lake" class="img-responsive">
          </div>
          <div class="item">
            <img src="./assets/images/service/PackagesImages/Nainital/Nainital-View1.jpg" alt="Hotel View" class="img-responsive">
          </div>
          <div class="item">
            <img src="./assets/images/service/PackagesImages/Nainital/Nainital-View2.jpg" alt="Room" class="img-responsive">
          </div>
          <div class="item">
            <img src="./assets/images/service/PackagesImages/Nainital/Nainital-View3.jpg" alt="Food" class="img-responsive">
          </div>
        </div>

        
      </div>
    </div>

    <!-- Right Content Side -->
    <div class="col-md-6">
      <h2 class="mb-3">Nainital Holiday Packages</h2>
      <p class="lead"><strong>₹3199/ Per Person</strong></p>

      <!-- Accordion Buttons -->
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
              <strong>Per person:</strong> ₹7,000/Person + GST<br>
              <strong>Couples:</strong> ₹13,900/Couple + GST<br>
              <strong>Family:</strong> ₹28,900/Person + GST<br>
              <strong>Office:</strong> ₹3,50,000 + GST<br>
              <small>(Includes Stay, Meals, Amenities for 50 Guests)</small>
            </div>
          </div>
        </div>

        <!-- Benefits -->
        <div class="panel panel-success">
          <div id="benefitsBox" class="panel-collapse collapse">
            <div class="panel-body">
              <ul>
                <li>Lake-facing rooms for perfect view</li>
                <li>All-inclusive package for 50 guests</li>
                <li>Pure Veg Hygienic Meals</li>
                <li>Boating & Sightseeing Assistance</li>
                <li>Late Checkout till 2 PM</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Accommodation -->
        <div class="panel panel-warning">
          <div id="accommodationBox" class="panel-collapse collapse">
            <div class="panel-body">
              <ul>
                <li>4 Lake View Rooms (5 Pax each)</li>
                <!-- <li>4 Garden View Rooms (4 Pax each)</li> -->
                <li>5 Standard Rooms (4 Pax each)</li>
                <li>Extra guests accommodated with extra beds/shared setup</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Meal Plan -->
        <div class="panel panel-danger">
          <div id="mealBox" class="panel-collapse collapse">
            <div class="panel-body">
              <strong>2 Breakfasts:</strong>
              <ul><li>Tea / Coffee, Sandwiches, Upma, Mineral Water</li></ul>
              <strong>1 Lunch:</strong>
              <ul><li>Paneer Dish, Dal, Seasonal Veg, Roti, Rice, Salad</li></ul>
              <strong>2 Dinners:</strong>
              <ul><li>Paneer Dish, Dal, Sabji, Roti, Rice, Dessert, Mineral Water</li></ul>
            </div>
          </div>
        </div>
      </div>

      <hr>
      <h4>Contact for Booking</h4>
      <p>
        <a href="tel:8750610304">8750610304</a> / <a href="tel:+911204992853">120-499-2853</a><br>
        Nainital Holiday Package
      </p>

      <a href="InqueryForm.php" class="btn btn-primary btn-block btn-lg">Book Now</a>
    </div>
  </div>
</div>

<?php include("includes/footer.php"); ?>
