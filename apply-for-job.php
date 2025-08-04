<?php 
$pageTitle = "About Us | Dream Sky Airways Pvt Ltd.";
$pageDescription = "Discover the story behind Dream Sky Airways. As India's leading tour and travel company, we are committed to providing exceptional travel experiences, including flight bookings, hotel reservations, and customized holiday packages.";
$pageCanonical = "https://www.dreamskyairways.com/who-we-are.php"; // Adjust URL as necessary
$pageRobots = 'index,follow';

include('includes/header.php');
?>
<style>
    .breadcumb{
        background-image: url('assets/images/breadcumb-bg.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 350px;
    }
    .breadcumb h2{
        position: absolute;
        top:40%;
        left: 10%;
        color: white;
    }
    
    .apply-form {
      padding: 40px 20px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .apply-form h3 {
      margin-bottom: 30px;
      font-weight: bold;
    }

    .orange-input {
      background-color: #f78d1e;
      color: white;
      border: none;
    }

    .orange-input::placeholder {
      color: white;
      opacity: 0.8;
    }

    .form-control {
      height: 45px;
      font-size: 14px;
      margin-bottom: 15px;
      border-radius: 0;
    }

    .submit-btn {
      background-color: #f78d1e;
      border: none;
      color: white;
      padding: 10px 30px;
      font-size: 16px;
      border-radius: 25px;
    }

    .file-upload {
      margin-top: 10px;
    }

    label {
      font-weight: normal;
    }
    @media(max-width:768px){
        .certificate{
            margin-top: 0px !important;
        }
        .breadcumb h2 {
    position: absolute;
    top: 50% !important;
    left: 10%;
    color: white;
}
    }
</style>

<div class="breadcumb">
    <h2>Apply For Job</h2>
</div>

<div class="container apply-form">
    <h3>Apply For Job</h3>
    <form action="#" method="post" enctype="multipart/form-data">

      <div class="row">
        <div class="col-sm-6">
          <input type="text" class="form-control orange-input" placeholder="Name*" name="name" required>
        </div>
        <div class="col-sm-6">
          <input type="text" class="form-control orange-input" placeholder="Father's Name*" name="father_name" required>
        </div>

        <div class="col-sm-6">
          <input type="tel" class="form-control orange-input" placeholder="Phone*" name="phone" required>
        </div>
        <div class="col-sm-6">
          <input type="email" class="form-control orange-input" placeholder="Email*" name="email" required>
        </div>

        <div class="col-sm-6">
          <select class="form-control orange-input" name="gender" required>
            <option value="">Select Gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
          </select>
        </div>
        <div class="col-sm-6">
          <select class="form-control orange-input" name="education" required>
            <option value="">Select Education</option>
            <option>10th</option>
            <option>12th</option>
            <option>Graduation</option>
            <option>Post Graduation</option>
          </select>
        </div>

        <div class="col-sm-6">
          <select class="form-control orange-input" name="apply_for" required>
            <option value="">Select Apply For</option>
            <option>Airport Management</option>
            <option>Hotel Management</option>
          </select>
        </div>
        <div class="col-sm-6">
          <textarea class="form-control orange-input" placeholder="Your Address..." name="address" rows="1" required></textarea>
        </div>

        <div class="col-sm-6">
          <select class="form-control orange-input" name="state" required>
                                                        <option value="select_designation">Select State</option>
                                                        <option value="andhra_pradesh">Andhra Pradesh</option>
                                                        <option value="aruanchal_pradesh">Aruanchal Pradesh</option>
                                                        <option value="assam">Assam</option>
                                                        <option value="bihar">Bihar</option>
                                                        <option value="chattishgarh">Chattishgarh</option>
                                                        <option value="delhi">Delhi</option>
                                                        <option value="goa">Goa</option>
                                                        <option value="gujarat">Gujarat</option>
                                                        <option value="haryana">Haryana</option>
                                                        <option value="himachal_pradesh">Himachal Pradesh</option>
                                                        <option value="jharkhand">Jharkhand</option>
                                                        <option value="karnataka">Karnataka</option>
                                                        <option value="kerala">Kerala</option>
                                                        <option value="madhya_pradesh">Madhya Pradesh</option>
                                                        <option value="maharashtra">Maharashtra</option>
                                                        <option value="manipur">Manipur</option>
                                                        <option value="meghalaya">Meghalaya</option>
                                                        <option value="mizoram">Mizoram</option>
                                                        <option value="nagaland">Nagaland</option>
                                                        <option value="odisha">Odisha</option>
                                                        <option value="punjab">Punjab</option>
                                                        <option value="rajasthan">Rajasthan</option>
                                                        <option value="sikkim">Sikkim</option>
                                                        <option value="travel_tourism">Tamil Nadu</option>
                                                        <option value="telangana">Telangana</option>
                                                        <option value="tripura">Tripura</option>
                                                        <option value="uttar_pradesh">Uttar Pradesh</option>
                                                        <option value="uttrakhand">Uttrakhand</option>
                                                        <option value="west_bengal">West Bengal</option>
                                                   
          </select>
        </div>
        <div class="col-sm-6" style="margin-top: -50px;">
          <input type="text" class="form-control orange-input" placeholder="Pincode*" name="pincode" required>
        </div>

        <div class="col-sm-6">
          <input type="text" class="form-control orange-input" placeholder="Pan Number*" name="pan" required>
        </div>
        <div class="col-sm-6" style="margin-top: -50px;">
          <input type="text" class="form-control orange-input" placeholder="Admission Code*" name="admission_code" required>
        </div>

        <div class="col-sm-6">
          <label>DOB</label>
          <input type="date" class="form-control orange-input" name="dob" required>
        </div>

        <div class="col-sm-6 certificate" style="margin-top: -80px;">
          <label>Aviation Certificate Upload</label>
          <input type="file" class="form-control orange-input file-upload" name="certificate">
        </div>

        <div class="col-sm-12 text-center" style="margin-top: 20px;">
          <button type="submit" class="submit-btn">Submit</button>
        </div>

      </div>
    </form>
  </div>

<!-- /container -->
<?php include('includes/footer.php') ?>