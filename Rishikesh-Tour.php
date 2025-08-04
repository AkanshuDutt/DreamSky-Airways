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
            <img src="./assets/images/service/PackagesImages/Rishikesh/Rishikesh view1.jpg" alt="Rishikesh View" class="img-responsive">
          </div>
          <div class="item">
            <img src="./assets/images/service/PackagesImages/Rishikesh/Rishikesh view2.jpg" alt="River Rafting" class="img-responsive">
          </div>
          <div class="item">
            <img src="./assets/images/service/PackagesImages/Rishikesh/Rishikesh view3.jpg" alt="Camp Stay" class="img-responsive">
          </div>
          <div class="item">
            <img src="./assets/images/service/PackagesImages/Rishikesh/Rishikesh view4.jpg" alt="Bonfire Night" class="img-responsive">
          </div>
        </div>
      </div>
    </div>

    <!-- Right Content Side -->
    <div class="col-md-6">
      <h2 class="mb-3">Rishikesh Holiday Packages</h2>
      <p class="lead"><strong>₹7000/ Per Person</strong></p>

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
              <strong>Family:</strong> ₹28,000/Person + GST<br>
              <strong>Corporate Group:</strong> ₹3,50,000 + GST<br>
              <small>(Includes Camping, Meals, Adventure for 40+ Guests)</small>
            </div>
          </div>
        </div>

        <!-- Benefits -->
        <div class="panel panel-success">
          <div id="benefitsBox" class="panel-collapse collapse">
            <div class="panel-body">
              <ul>

                 <li>Riverside camping experience</li>
                <li>Rafting + Cliff Jumping (Optional)</li>
                <li>Perfect for Groups, Families & Office Trips</li>
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
                <li>10 Swiss Camps (3 Pax each)</li>
                <!-- <li>5 Deluxe Camps (4 Pax each)</li> -->
                <li>Basic Rooms Available (on request)</li>
                <li>Extra guests accommodated with sleeping bags/shared setup</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Meal Plan -->
        <div class="panel panel-danger">
          <div id="mealBox" class="panel-collapse collapse">
            <div class="panel-body">
              <strong>2 Breakfasts:</strong>
              <ul><li>Tea/Coffee, Paratha, Toast, Fruits, Mineral Water</li></ul>
              <strong>1 Lunch:</strong>
              <ul><li>Rajma/Chana, Rice, Roti, Veg Curry, Salad</li></ul>
              <strong>2 Dinners:</strong>
              <ul><li>Paneer Dish, Dal, Sabji, Roti, Rice, Sweet Dish, Mineral Water</li></ul>
            </div>
          </div>
        </div>
      </div>

      <hr>
      <h4>Contact for Booking</h4>
      <p>
        <a href="tel:8750610304">8750610304</a> / <a href="tel:+911204992853">120-499-2853</a><br>
        Rishikesh Holiday Package
      </p>

      <a href="InqueryForm.php" class="btn btn-primary btn-block btn-lg">Book Now</a>
    </div>
  </div>
</div>

<?php include("includes/footer.php"); ?>
