<?php
$pageTitle = "Contact Us | Dream Sky Airways Pvt Ltd.";
$pageDescription = "Get in touch with Dream Sky Airways. Our dedicated team is here to assist you with any inquiries regarding flight bookings, travel services, and more. Reach out today!";
$pageCanonical = "https://www.dreamskyairways.com/contact-us.php";
$pageRobots = 'index,follow';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

include('includes/header.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $allowed_types = ['application/pdf', 'image/jpeg', 'image/png'];
    $max_file_size = 2 * 1024 * 1024; // 2 MB
    $file_error = false;
    $upload_dir = 'Uploads/';
    $upload_file = '';

    // Create uploads directory if it doesn't exist
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }

    // Handle optional file upload
    if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] === UPLOAD_ERR_OK) {
        if ($_FILES['attachment']['size'] > $max_file_size) {
            echo "<script>alert('Uploaded file is too large. Max allowed size is 2 MB.');</script>";
            $file_error = true;
        } elseif (!in_array($_FILES['attachment']['type'], $allowed_types)) {
            echo "<script>alert('Invalid file type. Only PDF, JPG, and PNG are allowed.');</script>";
            $file_error = true;
        } else {
            $upload_file = $upload_dir . basename($_FILES['attachment']['name']);
            if (!move_uploaded_file($_FILES['attachment']['tmp_name'], $upload_file)) {
                echo "<script>alert('Failed to upload file.');</script>";
                $file_error = true;
            }
        }
    }

    if (!$file_error) {
        // Sanitize form inputs
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);

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
                <h2>Contact Us Enquiry</h2>
                <table>
                    <tr><th>Name</th><td>$name</td></tr>
                    <tr><th>Email</th><td>$email</td></tr>
                    <tr><th>Phone Number</th><td>$phone</td></tr>
                    <tr><th>Subject</th><td>$subject</td></tr>
                    <tr><th>Message</th><td>$message</td></tr>
                </table>
                <div class='footer'>Sent from Dream Sky Airways Contact Form</div>
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
            $mail->Password = 'drmo oqyk xkys pfex'; // Replace with your App Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('noreply@dreamskyairways.com', 'Dream Sky Airways');
            $mail->addAddress('dreamskyairways@gmail.com');
            $mail->addReplyTo($email, $name);
            if ($upload_file) {
                $mail->addAttachment($upload_file);
            }
            $mail->isHTML(true);
            $mail->Subject = 'Contact Enquiry: ' . $subject;
            $mail->Body = $html_content;

            $mail->send();

            // Store data for modal
            $modal_data = [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'subject' => $subject,
                'message' => $message
            ];

        } catch (Exception $e) {
            echo "<script>alert('Failed to send message. Error: {$mail->ErrorInfo}');</script>";
        }

        // Clean up uploaded file
        if ($upload_file && file_exists($upload_file)) {
            unlink($upload_file);
        }
    }
}
?>

<style>
/* ===== BREADCUMB ===== */
.breadcumb {
    background-image: url('assets/images/contact.jpg');
    background-size: cover;
    height: 510px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    text-align: center;
    color: white;
}

.breadcumb h2 {
    font-size: 48px;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
    z-index: 1;
}

/* ===== SECTION SPACING ===== */
.wrapper_inner {
    padding: 50px 15px;
}

/* ===== CONTACT INFO SECTION ===== */
.cont-information .contbox {
    margin-bottom: 30px;
    padding: 15px;
    background: #f9f9f9;
    border-radius: 6px;
    box-shadow: 0 0 8px rgba(0,0,0,0.1);
}

.contbox h3 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 10px;
    color: #333;
}

.contbox a {
    font-size: 16px;
    color: #333;
    display: block;
    text-decoration: none;
    margin-bottom: 5px;
}

.contbox a:hover {
    color: #007bff;
}

/* ===== FORM SECTION ===== */
.contactus {
    background: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.contactus h2 {
    font-size: 30px;
    margin-bottom: 25px;
    font-weight: 700;
}

.form-group {
    margin-bottom: 20px;
}

.form-control {
    padding: 10px;
    font-size: 15px;
    width: 100%;
    border-radius: 4px;
    border: 1px solid #ccc;
}

.cont_submit .btn {
    padding: 12px 30px;
    font-size: 16px;
    border-radius: 4px;
    background: #007bff;
    border: none;
    color: white;
}

.cont_submit .btn:hover {
    background: #0056b3;
}

/* ===== MODAL STYLES ===== */
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

.error {
    color: red;
    font-size: 12px;
    margin-top: 5px;
    display: none;
}

/* ===== RESPONSIVE LAYOUT ===== */
@media (max-width: 768px) {
    .breadcumb h2 {
        font-size: 32px;
    }
    .contbox {
        text-align: center;
    }
    .form-group .col-md-6,
    .form-group .col-md-12 {
        width: 100%;
        padding: 0;
    }
    .contactus,
    .cont-information {
        margin-bottom: 30px;
    }
}
</style>

<div class="breadcumb">
    <h2>CONTACT US</h2>
</div>

<section class="wrapper_inner">
    <div class="container">
        <div class="row">
            <!-- ===== CONTACT INFO LEFT ===== -->
            <div class="col-md-4 col-sm-12 cont-information">
                <div class="contbox">
                    <h3><i class="fa fa-phone"></i> Helpline Number</h3>
                    <a href="tel:8750610304">+91 8750610304</a>
                    <a href="tel:911204992853">+91-120-499-2853</a>
                </div>

                <div class="contbox">
                    <h3><i class="fa fa-envelope"></i> Write us on!</h3>
                    <a href="mailto:info@dreamskyairways.com">info@dreamskyairways.com</a>
                    <a href="mailto:hr@dreamskyairways.com">hr@dreamskyairways.com</a>
                </div>

                <div class="contbox">
                    <h3><i class="fa fa-map-marker"></i> Address</h3>
                    <a>Dream Sky Airways Pvt. Ltd.<br/>A-43 Noida Sector-63, Near Dainik Jagaran,<br/>Gautam Budh Nagar 201301</a>
                </div>
            </div>

            <!-- ===== CONTACT FORM RIGHT ===== -->
            <div class="col-md-8 col-sm-12 contactus">
                <div class="transprent-img">
                    <h2><strong>Contact</strong> Us</h2>
                    <form id="contactForm" action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="csrf_token" value="secure-token-here">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Your Name*</label>
                                <input type="text" name="name" class="form-control" pattern="[A-Za-z\s]+" required oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, ''); validateName();" />
                                <span id="name-error" class="error">Name should only contain letters and spaces</span>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Your Email Address*</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Phone Number*</label>
                                <input type="tel" name="phone" class="form-control" pattern="[0-9]{10}" maxlength="10" required oninput="this.value = this.value.replace(/[^0-9]/g, ''); validatePhone();" />
                                <span id="phone-error" class="error">Please enter exactly 10 digits</span>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Subject*</label>
                                <input type="text" name="subject" class="form-control" required>
                            </div>

                            <div class="form-group col-md-12">
                                <label>Message*</label>
                                <textarea name="message" rows="5" class="form-control" required style="resize: none;"></textarea>
                            </div>

                            <div class="form-group col-md-12">
                                <label>Attachment (Optional, Max 2 MB)</label>
                                <input type="file" name="attachment" class="form-control" accept=".pdf,.jpg,.jpeg,.png">
                                <span id="file-error" class="error">File size must be less than 2 MB</span>
                            </div>

                            <div class="form-group col-md-12 cont_submit">
                                <input type="submit" value="Send Message" class="btn btn-primary btn-lg">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal HTML -->
<div id="contactModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h3>Message Sent Successfully!</h3>
        <p>Thank you for contacting us! Our team will respond to you soon.</p>
        <button onclick="toggleDetails()" class="btn btn-primary">View Details</button>
        <div id="contactDetails" style="display: none; margin-top: 20px;">
            <p><strong>Name:</strong> <?php echo isset($modal_data['name']) ? $modal_data['name'] : ''; ?></p>
            <p><strong>Email:</strong> <?php echo isset($modal_data['email']) ? $modal_data['email'] : ''; ?></p>
            <p><strong>Phone Number:</strong> <?php echo isset($modal_data['phone']) ? $modal_data['phone'] : ''; ?></p>
            <p><strong>Subject:</strong> <?php echo isset($modal_data['subject']) ? $modal_data['subject'] : ''; ?></p>
            <p><strong>Message:</strong> <?php echo isset($modal_data['message']) ? $modal_data['message'] : ''; ?></p>
            <p><strong>Attachment:</strong> <?php echo $upload_file ? 'Uploaded successfully' : 'Not uploaded'; ?></p>
            <hr>
            <p style="color: red; font-weight: bold;">
                🔴 <em>Note:</em> In case of emergency, please contact us at <strong>+91-8750610304</strong>.
            </p>
        </div>
    </div>
</div>

<script>
function validateName() {
    const nameInput = document.querySelector('input[name="name"]');
    const nameError = document.getElementById('name-error');
    const nameRegex = /^[A-Za-z\s]+$/;

    if (!nameRegex.test(nameInput.value)) {
        nameError.style.display = 'block';
    } else {
        nameError.style.display = 'none';
    }
}

function validatePhone() {
    const phoneInput = document.querySelector('input[name="phone"]');
    const phoneError = document.getElementById('phone-error');
    const phoneRegex = /^[0-9]{10}$/;

    if (!phoneRegex.test(phoneInput.value)) {
        phoneError.style.display = 'block';
        phoneError.textContent = 'Please enter exactly 10 digits';
    } else {
        phoneError.style.display = 'none';
    }
}

document.addEventListener('DOMContentLoaded', function () {
    <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($modal_data)) { ?>
        document.getElementById('contactForm').style.display = 'none';
        document.getElementById('contactModal').style.display = 'flex';
    <?php } ?>

    // File size validation
    const fileInput = document.querySelector('input[name="attachment"]');
    fileInput.addEventListener('change', function () {
        const file = this.files[0];
        const fileError = document.getElementById('file-error');
        const maxFileSize = 2 * 1024 * 1024; // 2 MB
        if (file && file.size > maxFileSize) {
            fileError.style.display = 'block';
            this.value = '';
        } else {
            fileError.style.display = 'none';
        }
    });
});

function closeModal() {
    document.getElementById('contactModal').style.display = 'none';
    document.getElementById('contactForm').style.display = 'block';
}

function toggleDetails() {
    const details = document.getElementById('contactDetails');
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