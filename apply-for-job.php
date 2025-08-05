<?php 
$pageTitle = "Apply for Job | Dream Sky Airways Pvt Ltd.";
$pageDescription = "Join the Dream Sky Airways team! Apply for exciting career opportunities in airport and hotel management with our user-friendly job application form.";
$pageCanonical = "https://www.dreamskyairways.com/job-application.php";
$pageRobots = 'index,follow';

include('includes/header.php');
?>
<style>
    .breadcrumb-section {
        background: linear-gradient(rgba(125, 196, 240, 0.65)), url('assets/images/job-application-banner.jpg');
        background-size: cover;
        background-position: center;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
    }

    .breadcrumb-section h2 {
        font-size: 3.5rem;
        font-weight: bold;
        font-family: Arial, sans-serif;
        font-style: normal;
    }

    .application-form {
        padding: 50px 20px;
        max-width: 1000px;
        margin: 0 auto;
        background: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .application-form h3 {
        margin-bottom: 30px;
        font-weight: 600;
        color: #333;
        text-align: center;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-control {
        height: 50px;
        font-size: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
        background: #fff;
        transition: border-color 0.3s;
    }

    .form-control:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
    }

    .form-control::placeholder {
        color: #888;
        opacity: 1;
    }

    .submit-btn {
        background: #007bff;
        border: none;
        color: white;
        padding: 12px 40px;
        font-size: 16px;
        border-radius: 30px;
        transition: background 0.3s;
    }

    .submit-btn:hover {
        background: #0056b3;
    }

    .file-upload {
        margin-top: 10px;
    }

    label {
        font-weight: 500;
        color: #333;
        margin-bottom: 5px;
        display: block;
    }

    .error {
        color: red;
        font-size: 12px;
        margin-top: 5px;
        display: none;
    }

    @media (max-width: 768px) {
        .breadcrumb-section {
            height: 200px;
            padding: 10px;
        }

        .breadcrumb-section h2 {
            font-size: 2rem;
            padding: 10px;
        }

        .application-form {
            padding: 30px 15px;
        }

        .form-control {
            height: auto;
            font-size: 14px;
        }

        .submit-btn {
            width: 100%;
            font-size: 16px;
        }
    }

    @media (max-width: 480px) {
        .breadcrumb-section h2 {
            font-size: 1.7rem;
        }

        .application-form {
            padding: 20px 10px;
        }

        label {
            font-size: 14px;
        }

        .form-control {
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .submit-btn {
            font-size: 15px;
        }
    }
</style>

<div class="breadcrumb-section">
    <h2>Job Application</h2>
</div>

<div class="container application-form">
    <h3>Apply for a Career with Us</h3>
    <form action="#" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12 col-sm-6 form-group">
                <label for="name">Full Name*</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Full Name" name="name" pattern="[A-Za-z\s]+" title="Name should only contain letters and spaces" required>
                <div class="error" id="name-error">Name should only contain letters and spaces</div>
            </div>

            <div class="col-12 col-sm-6 form-group">
                <label for="father_name">Father's Name*</label>
                <input type="text" class="form-control" id="father_name" placeholder="Enter Father's Name" name="father_name" pattern="[A-Za-z\s]+" required>
                <div class="error" id="father_name-error">Only letters and spaces allowed</div>
            </div>

            <div class="col-12 col-sm-6 form-group">
                <label for="phone">Phone Number*</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone" pattern="[0-9]{10}" maxlength="10" required>
                <span id="phone-error" class="error">Please enter exactly 10 digits</span>
            </div>

            <div class="col-12 col-sm-6 form-group">
                <label for="email">Email Address*</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email Address" name="email" required>
            </div>

            <div class="col-12 col-sm-6 form-group">
                <label for="gender">Gender*</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="col-12 col-sm-6 form-group">
                <label for="education">Education Level*</label>
                <select class="form-control" id="education" name="education" required>
                    <option value="">Select Education</option>
                    <option value="10th">10th</option>
                    <option value="12th">12th</option>
                    <option value="graduation">Graduation</option>
                    <option value="post_graduation">Post Graduation</option>
                </select>
            </div>

            <div class="col-12 col-sm-6 form-group">
                <label for="apply_for">Applying For*</label>
                <select class="form-control" id="apply_for" name="apply_for" required>
                    <option value="">Select Position</option>
                    <option value="airport_management">Airport Management</option>
                    <option value="hotel_management">Hotel Management</option>
                </select>
            </div>

            <div class="col-12 col-sm-6 form-group">
                <label for="address">Address*</label>
                <textarea class="form-control" id="address" placeholder="Enter Your Address" name="address" rows="3" style="resize:none" required></textarea>
            </div>

            <div class="col-12 col-sm-6 form-group">
                <label for="state">State*</label>
                <select class="form-control" id="state" name="state" required>
                    <option value="">Select State</option>
                    <option value="delhi">Delhi</option>
                    <option value="uttar_pradesh">Uttar Pradesh</option>
                    <option value="maharashtra">Maharashtra</option>
                    <option value="bihar">Bihar</option>
                    <!-- Add other states here -->
                </select>
            </div>

            <div class="col-12 col-sm-6 form-group">
                <label for="pincode">Pincode*</label>
                <input type="text" class="form-control" id="pincode" placeholder="Enter Pincode" name="pincode" pattern="[0-9]{6}" required>
                <div class="error" id="pincode-error">Pincode must be exactly 6 digits</div>
            </div>

            <div class="col-12 col-sm-6 form-group">
                <label for="pan">PAN Number*</label>
                <input type="text" class="form-control" id="pan" placeholder="Enter PAN Number" name="pan" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}" required>
                <div class="error" id="pan-error">PAN must be in the format ABCDE1234F</div>
            </div>

            <div class="col-12 col-sm-6 form-group">
                <label for="admission_code">Admission Code*</label>
                <input type="text" class="form-control" id="admission_code" placeholder="Enter Admission Code" name="admission_code" required>
            </div>

            <div class="col-12 col-sm-6 form-group">
                <label for="dob">Date of Birth*</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>

            <div class="col-12 col-sm-6 form-group">
    <label for="certificate">Aviation Certificate Upload (Max 2 MB)</label>
    <input type="file" class="form-control file-upload" id="certificate" name="certificate" accept=".pdf,.jpg,.jpeg,.png">
    <small class="text-danger" id="file-error" style="display:none;">File size must be less than 2 MB.</small>
</div>

            <div class="col-12 text-center form-group">
                <button type="submit" class="submit-btn">Submit Application</button>
            </div>
        </div>
    </form>
</div>

<script>
    document.querySelector('form').addEventListener('submit', function(e) {
        const name = document.getElementById('name');
        const fatherName = document.getElementById('father_name');
        const phone = document.getElementById('phone');
        const pincode = document.getElementById('pincode');
        const pan = document.getElementById('pan');

        const nameRegex = /^[A-Za-z\s]+$/;
        const phoneRegex = /^[0-9]{10}$/;
        const pincodeRegex = /^[0-9]{6}$/;
        const panRegex = /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/;

        let isValid = true;

        if (!nameRegex.test(name.value)) {
            document.getElementById('name-error').style.display = 'block';
            isValid = false;
        } else {
            document.getElementById('name-error').style.display = 'none';
        }

        if (!nameRegex.test(fatherName.value)) {
            document.getElementById('father_name-error').style.display = 'block';
            isValid = false;
        } else {
            document.getElementById('father_name-error').style.display = 'none';
        }

        if (!phoneRegex.test(phone.value)) {
            document.getElementById('phone-error').style.display = 'block';
            isValid = false;
        } else {
            document.getElementById('phone-error').style.display = 'none';
        }

        if (!pincodeRegex.test(pincode.value)) {
            document.getElementById('pincode-error').style.display = 'block';
            isValid = false;
        } else {
            document.getElementById('pincode-error').style.display = 'none';
        }

        if (!panRegex.test(pan.value)) {
            document.getElementById('pan-error').style.display = 'block';
            isValid = false;
        } else {
            document.getElementById('pan-error').style.display = 'none';
        }

        if (!isValid) {
            e.preventDefault();

            document.getElementById('certificate').addEventListener('change', function () {
        const file = this.files[0];
        const error = document.getElementById('file-error');
        if (file && file.size > 2 * 1024 * 1024) {
            error.style.display = 'block';
            this.value = ""; // Clear file input
        } else {
            error.style.display = 'none';
        }
    });
        }
        
    });
</script>

<?php include('includes/footer.php') ?>
