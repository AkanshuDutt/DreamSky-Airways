<?php
$pageTitle = "Packages Enquiry | Dream Sky Airways Pvt Ltd.";
$pageDescription = "Enquire about travel packages with Dream Sky Airways. Fill the form and our team will reach out to you with complete details.";
$pageCanonical = "https://www.dreamskyairways.com/package-enquiry.php"; 
$pageRobots = 'index,follow';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

include('includes/header.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $allowed_types = ['application/pdf', 'image/jpeg', 'image/png'];
    $max_file_size = 1048576; 
    $file_error = false;
    $upload_dir = 'uploads/';
    $upload_file = '';

    if (isset($_FILES['id_proof']) && $_FILES['id_proof']['error'] === UPLOAD_ERR_OK) {
        if ($_FILES['id_proof']['size'] > $max_file_size) {
            echo "<script>alert('Uploaded file is too large. Max allowed size is 1 MB.');</script>";
            $file_error = true;
        } elseif (!in_array($_FILES['id_proof']['type'], $allowed_types)) {
            echo "<script>alert('Invalid file type. Only PDF, JPG, and PNG are allowed.');</script>";
            $file_error = true;
        } else {
            $upload_file = $upload_dir . basename($_FILES['id_proof']['name']);
            if (!move_uploaded_file($_FILES['id_proof']['tmp_name'], $upload_file)) {
                echo "<script>alert('Failed to upload file.');</script>";
                $file_error = true;
            }
        }
    } else {
        echo "<script>alert('Please upload an ID proof.');</script>";
        $file_error = true;
    }

    if (!$file_error) {
        $full_name = htmlspecialchars($_POST['full_name']);
        $father_name = htmlspecialchars($_POST['father_name']);
        $email = htmlspecialchars($_POST['email']);
        $city = htmlspecialchars($_POST['city']);
        $state = htmlspecialchars($_POST['state']);
        $contact = htmlspecialchars($_POST['contact_number']);
        $address = htmlspecialchars($_POST['address']);
        $message = htmlspecialchars($_POST['message']);

        $html_content = "
        <html>
        <head>
           
       
        </head>
        <body>
            <div class='container'>
                <h2> Package Enquiry</h2>
                <table>
                    <tr><th>Full Name</th><td>$full_name</td></tr>
                    <tr><th>Father's Name</th><td>$father_name</td></tr>
                    <tr><th>Email</th><td>$email</td></tr>
                    <tr><th>City</th><td>$city</td></tr>
                    <tr><th>State</th><td>$state</td></tr>
                    <tr><th>Contact Number</th><td>$contact</td></tr>
                    <tr><th>Address</th><td>$address</td></tr>
                    <tr><th>Message</th><td>$message</td></tr>
                </table>
                <div class='footer'>Sent from Dream Sky Airways Enquiry </div>
            </div>
        </body>
        </html>";

        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; 
            $mail->SMTPAuth = true;
            $mail->Username = 'dreamskyairways@gmail.com'; 
            $mail->Password = 'drmo oqyk xkys pfex'; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

         
            $mail->setFrom('noreply@dreamskyairways.com', 'Dream Sky Airways');
            $mail->addAddress('dreamskyairways@gmail.com'); 
            $mail->addReplyTo($email, $full_name);
            $mail->addAttachment($upload_file); 
            $mail->isHTML(true);
            $mail->Subject = ' Package Enquiry ' . $full_name;
            $mail->Body = $html_content;

                  $mail->send();

            echo "
<div id='enquiryModal' class='modal'>
  <div class='modal-content'>
    <span class='close' onclick='closeModal()'>&times;</span>
    <h3>Thank you for your enquiry!</h3>
    <p><strong>Full Name:</strong> $full_name</p>
    <p><strong>Father's Name:</strong> $father_name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>City:</strong> $city</p>
    <p><strong>State:</strong> $state</p>
    <p><strong>Contact Number:</strong> $contact</p>
    <p><strong>Address:</strong> $address</p>
    <p><strong>Message:</strong> $message</p>
    <p><strong>ID Proof:</strong> Uploaded successfully</p>
    <hr>
    <p style='color: red; font-weight: bold;'>
        🔴 <em>Note:</em> In case of emergency, please contact us at <strong>+91-8750610304</strong>.
    </p>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('packageForm').style.display = 'none'; // Hide form
    document.getElementById('enquiryModal').style.display = 'block'; // Show modal
  });

  function closeModal() {
    document.getElementById('enquiryModal').style.display = 'none';
  }
</script>
";


        } catch (Exception $e) {
            echo "<script>alert('Failed to send enquiry. Error: {$mail->ErrorInfo}');</script>";
        }

        if (file_exists($upload_file)) {
            unlink($upload_file);
        }
    }
}
?>

<style>
    label {
        font-weight: 600;
        margin-bottom: 5px;
        display: block;
    }
    .form-control {
        border: 1px solid #ccc;
        border-radius: 6px;
        padding: 8px 12px;
        font-size: 15px;
        margin-bottom: 15px;
        width: 100%;
    }
    textarea.form-control { resize: vertical; }
    .btn-primary {
        background: #007bff;
        border: none;
        padding: 10px 25px;
        font: 600 16px inherit;
        border-radius: 30px;
    }
    .btn-primary:hover { background: #0056b3; }
    .cont_submit { text-align: center; }
    .wrapper_inner { padding: 30px 0; }
    @media (max-width:768px){
        .form-group .col-md-6,
        .form-group .col-md-12 { margin-bottom: 15px; }
    }
</style>

<div class="breadcumb text-center">
    <h2>PACKAGE ENQUIRY</h2>
</div>

<section class="wrapper_inner mt-5 mb-5" style="margin:0px 0;">
    <div class="container">
        <div class="middle_area">
            <div class="row">
                <div class="col-md-12 contactus">
                    <div class="transprent-img">
                        <form id="packageForm" action="" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6">
                                        <label>Full Name *</label>
                                        <input type="text" name="full_name" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label>Father's Name *</label>
                                        <input type="text" name="father_name" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row marT10">
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6">
                                        <label>Email ID *</label>
                                        <input type="email" name="email" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label>ID Proof (Upload) *</label>
                                        <input type="file" name="id_proof" class="form-control" accept=".pdf,.jpg,.jpeg,.png" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row marT10">
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6">
                                        <label>City *</label>
                                        <input type="text" name="city" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label>State *</label>
                                        <input type="text" name="state" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row marT10">
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6">
                                        <label>Contact Number *</label>
                                        <input type="text" name="contact_number" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label>Full Address *</label>
                                        <input type="text" name="address" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row marT10">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Message *</label>
                                        <textarea name="message" rows="6" class="form-control" style="resize:none" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row marT10">
                                <div class="col-md-12 pedT20 cont_submit">
                                    <input type="submit" value="Submit Enquiry" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
                                </div>
                            </div>
                        </form>
                    </div> 
                </div> 
            </div> 
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>