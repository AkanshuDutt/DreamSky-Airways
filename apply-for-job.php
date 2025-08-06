<?php
$pageTitle = "Apply for Job | Dream Sky Airways Pvt Ltd.";
$pageDescription = "Join the Dream Sky Airways team! Apply for exciting career opportunities in airport and hotel management with our user-friendly job application form.";
$pageCanonical = "https://www.dreamskyairways.com/job-application.php";
$pageRobots = 'index,follow';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

include('includes/header.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $allowed_types = ['application/pdf', 'image/jpeg', 'image/png'];
    $max_file_size = 2 * 1024 * 1024; // 2 MB
    $file_error = false;
    $upload_dir = 'uploads/';
    $upload_file = '';

    // Create uploads directory if it doesn't exist
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }

    // Handle file upload
    if (isset($_FILES['certificate']) && $_FILES['certificate']['error'] === UPLOAD_ERR_OK) {
        if ($_FILES['certificate']['size'] > $max_file_size) {
            echo "<script>alert('Uploaded file is too large. Max allowed size is 2 MB.');</script>";
            $file_error = true;
        } elseif (!in_array($_FILES['certificate']['type'], $allowed_types)) {
            echo "<script>alert('Invalid file type. Only PDF, JPG, and PNG are allowed.');</script>";
            $file_error = true;
        } else {
            $upload_file = $upload_dir . basename($_FILES['certificate']['name']);
            if (!move_uploaded_file($_FILES['certificate']['tmp_name'], $upload_file)) {
                echo "<script>alert('Failed to upload file.');</script>";
                $file_error = true;
            }
        }
    }

    if (!$file_error) {
        // Sanitize form inputs
        $name = htmlspecialchars($_POST['name']);
        $father_name = htmlspecialchars($_POST['father_name']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);
        $gender = htmlspecialchars($_POST['gender']);
        $education = htmlspecialchars($_POST['education']);
        $apply_for = htmlspecialchars($_POST['apply_for']);
        $address = htmlspecialchars($_POST['address']);
        $state = htmlspecialchars($_POST['state']);
        $pincode = htmlspecialchars($_POST['pincode']);
        $pan = htmlspecialchars($_POST['pan']);
        $admission_code = htmlspecialchars($_POST['admission_code']);
        $dob = htmlspecialchars($_POST['dob']);

        // Prepare HTML email content
        $html_content = "
        <html>
        <head>
            <style>
                table { border-collapse: collapse; width: 100%; }
                th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
                th { background-color: #f2f2f2; }
                .footer { margin-top: 20px; font-size: 12px; color: #555; }
            </style>
        </head>
        <body>
            <div class='container'>
                <h2>Job Application</h2>
                <table>
                    <tr><th>Full Name</th><td>$name</td></tr>
                    <tr><th>Father's Name</th><td>$father_name</td></tr>
                    <tr><th>Phone Number</th><td>$phone</td></tr>
                    <tr><th>Email</th><td>$email</td></tr>
                    <tr><th>Gender</th><td>$gender</td></tr>
                    <tr><th>Education Level</th><td>$education</td></tr>
                    <tr><th>Applying For</th><td>$apply_for</td></tr>
                    <tr><th>Address</th><td>$address</td></tr>
                    <tr><th>State</th><td>$state</td></tr>
                    <tr><th>Pincode</th><td>$pincode</td></tr>
                    <tr><th>PAN Number</th><td>$pan</td></tr>
                    <tr><th>Admission Code</th><td>$admission_code</td></tr>
                    <tr><th>Date of Birth</th><td>$dob</td></tr>
                </table>
                <div class='footer'>Sent from Dream Sky Airways Job Application</div>
            </div>
        </body>
        </html>";

        // Initialize PHPMailer
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'dreamskyairways@gmail.com';
            $mail->Password = 'drmo oqyk xkys pfex'; // Use your App Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('noreply@dreamskyairways.com', 'Dream Sky Airways');
            $mail->addAddress('dreamskyairways@gmail.com');
            $mail->addReplyTo($email, $name);
            if ($upload_file) {
                $mail->addAttachment($upload_file);
            }
            $mail->isHTML(true);
            $mail->Subject = 'Job Application from ' . $name;
            $mail->Body = $html_content;

            $mail->send();

            // Store data for modal
            $modal_data = [
                'name' => $name,
                'father_name' => $father_name,
                'phone' => $phone,
                'email' => $email,
                'gender' => $gender,
                'education' => $education,
                'apply_for' => $apply_for,
                'address' => $address,
                'state' => $state,
                'pincode' => $pincode,
                'pan' => $pan,
                'admission_code' => $admission_code,
                'dob' => $dob
            ];

        } catch (Exception $e) {
            echo "<script>alert('Failed to send application. Error: {$mail->ErrorInfo}');</script>";
        }

        // Clean up uploaded file
        if ($upload_file && file_exists($upload_file)) {
            unlink($upload_file);
        }
    }
}
?>

<!-- Existing styles remain unchanged -->
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

    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        width: 90%;
        max-width: 500px;
        position: relative;
        text-align: center;
    }

    .close {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 24px;
        cursor: pointer;
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
    <form action="" method="post" enctype="multipart/form-data" id="jobApplicationForm">
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

<!-- Modal HTML -->
<div id="applicationModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h3>Application Submitted Successfully!</h3>
        <p>Thank you for applying! Our team will contact you soon.</p>
        <button onclick="toggleDetails()" class="btn btn-primary">View Details</button>
        <div id="applicationDetails" style="display: none; margin-top: 20px;">
            <p><strong>Full Name:</strong> <?php echo isset($modal_data['name']) ? $modal_data['name'] : ''; ?></p>
            <p><strong>Father's Name:</strong> <?php echo isset($modal_data['father_name']) ? $modal_data['father_name'] : ''; ?></p>
            <p><strong>Phone Number:</strong> <?php echo isset($modal_data['phone']) ? $modal_data['phone'] : ''; ?></p>
            <p><strong>Email:</strong> <?php echo isset($modal_data['email']) ? $modal_data['email'] : ''; ?></p>
            <p><strong>Gender:</strong> <?php echo isset($modal_data['gender']) ? $modal_data['gender'] : ''; ?></p>
            <p><strong>Education Level:</strong> <?php echo isset($modal_data['education']) ? $modal_data['education'] : ''; ?></p>
            <p><strong>Applying For:</strong> <?php echo isset($modal_data['apply_for']) ? $modal_data['apply_for'] : ''; ?></p>
            <p><strong>Address:</strong> <?php echo isset($modal_data['address']) ? $modal_data['address'] : ''; ?></p>
            <p><strong>State:</strong> <?php echo isset($modal_data['state']) ? $modal_data['state'] : ''; ?></p>
            <p><strong>Pincode:</strong> <?php echo isset($modal_data['pincode']) ? $modal_data['pincode'] : ''; ?></p>
            <p><strong>PAN Number:</strong> <?php echo isset($modal_data['pan']) ? $modal_data['pan'] : ''; ?></p>
            <p><strong>Admission Code:</strong> <?php echo isset($modal_data['admission_code']) ? $modal_data['admission_code'] : ''; ?></p>
            <p><strong>Date of Birth:</strong> <?php echo isset($modal_data['dob']) ? $modal_data['dob'] : ''; ?></p>
            <p><strong>Aviation Certificate:</strong> <?php echo $upload_file ? 'Uploaded successfully' : 'Not uploaded'; ?></p>
            <hr>
            <p style="color: red; font-weight: bold;">
                🔴 <em>Note:</em> In case of emergency, please contact us at <strong>+91-8750610304</strong>.
            </p>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($modal_data)) { ?>
            document.getElementById('jobApplicationForm').style.display = 'none';
            document.getElementById('applicationModal').style.display = 'flex';
        <?php } ?>
    });

    document.querySelector('form').addEventListener('submit', function(e) {
        const name = document.getElementById('name');
        const fatherName = document.getElementById('father_name');
        const phone = document.getElementById('phone');
        const pincode = document.getElementById('pincode');
        const pan = document.getElementById('pan');
        const certificate = document.getElementById('certificate');

        const nameRegex = /^[A-Za-z\s]+$/;
        const phoneRegex = /^[0-9]{10}$/;
        const pincodeRegex = /^[0-9]{6}$/;
        const panRegex = /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/;
        const maxFileSize = 2 * 1024 * 1024; // 2 MB

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

        if (certificate.files.length > 0 && certificate.files[0].size > maxFileSize) {
            document.getElementById('file-error').style.display = 'block';
            certificate.value = '';
            isValid = false;
        } else {
            document.getElementById('file-error').style.display = 'none';
        }

        if (!isValid) {
            e.preventDefault();
        }
    });

    function closeModal() {
        document.getElementById('applicationModal').style.display = 'none';
        document.getElementById('jobApplicationForm').style.display = 'block';
    }

    function toggleDetails() {
        const details = document.getElementById('applicationDetails');
        const button = document.querySelector('.modal-content button');
        if (details.style.display === 'none') {
            details.style.display = 'block';
            button.textContent = 'Hide Details';
        } else {
            details.style.display = 'none';
            button.textContent = 'View Details';
        }
    }
</script>

<?php include('includes/footer.php'); ?>