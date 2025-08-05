<?php 
$pageTitle = "Frequently Asked Questions (FAQ) | Dream Sky Airways Pvt Ltd.";
$pageDescription = "Find answers to the most common questions about Dream Sky Airways. From booking procedures to travel policies, our FAQ page provides the information you need for a smooth travel experience.";
$pageCanonical = "https://www.dreamskyairways.com/faq-page.php"; // Correct URL
$pageRobots = 'index,follow';

include('includes/header.php');
?>

<style>
.faq-banner {
    background: url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=compress&cs=tinysrgb&dpr=2&h=650&w=1200') no-repeat center center;
    background-size: cover;
    height: 490px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
}

.faq-banner h2 {
    font-size: 48px;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
    margin: 0;
}

@media (max-width: 768px) {
    .faq-banner h2 {
        font-size: 32px;
    }
}
</style>

<div class="faq-banner">
    <!-- <h2>Frequently Asked Questions</h2> -->
</div>

<div class="main-field static-page-container mobile_tabp0">
    <h3 class="pages_hed heading-page">FAQ Page</h3>
    <div class="clearfix"></div>
    <div class="container inner-container-static inner-content">
        <p><strong>Frequently Asked Questions (FAQ)</strong></p>

        <p><strong>Q: How can I contact dreamskyairways.com?</strong></p>
        <ul>
            <li>A: You can reach us at [your contact details, e.g., phone number, email address, office address]. Our customer support team is available [mention hours or days of operation].</li>
        </ul>

        <p><strong>2. Booking and Reservations:</strong></p>

        <p><strong>Q: How do I make a reservation?</strong></p>
        <ul>
            <li>A: You can easily make a reservation through our website. Alternatively, you can contact our customer support team for assistance.</li>
        </ul>

        <p><strong>Q: What payment methods do you accept?</strong></p>
        <ul>
            <li>A: We accept payments via e.g., credit cards, bank transfers. Please refer to our booking page for more details.</li>
        </ul>

        <p><strong>Q: Can I modify or cancel my reservation?</strong></p>
        <ul>
            <li>A: Yes, you can modify or cancel your reservation. Please refer to our cancellation policy for details on fees and procedures.</li>
        </ul>

        <p><strong>3. Travel Destinations and Packages:</strong></p>

        <p><strong>Q: What destinations does dreamskyairways.com offer services to?</strong></p>
        <ul>
            <li>A: We offer services to a wide range of destinations globally. Visit our website for a list of featured destinations.</li>
        </ul>

        <p><strong>Q: Do you offer customizable travel packages?</strong></p>
        <ul>
            <li>A: Yes, we specialize in creating personalized and customizable travel packages. Contact our team to discuss your preferences and requirements.</li>
        </ul>

        <p><strong>Q: Are your tour packages all-inclusive?</strong></p>
        <ul>
            <li>A: Our packages vary. Some are all-inclusive, while others offer flexibility with optional add-ons. Check the details on each package for specific inclusions.</li>
        </ul>

        <p>policy details how we collect, use, and protect your information. You can read it&nbsp;</p>
    </div>
</div>
<!-- /container -->

<?php include('includes/footer.php') ?>
