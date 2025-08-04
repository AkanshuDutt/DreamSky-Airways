<?php 
$pageTitle = "Our Service | Dream Sky Airways Pvt Ltd.";
$pageDescription = "Discover the story behind Dream Sky Airways. As India's leading tour and travel company, we are committed to providing exceptional travel experiences, including flight bookings, hotel reservations, and customized holiday packages.";
$pageCanonical = "https://www.dreamskyairways.com/service.php"; // Adjust URL as necessary
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
    
     .service-section {
      padding: 60px 20px;
    }

    .service-card {
      margin-bottom: 60px;
      background: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .service-img img {
      width: 100%;
      height: auto;
      display: block;
    }

    .service-content {
      padding: 30px;
    }

    .service-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 15px;
      color: #f78d1e;
    }

    @media (min-width: 768px) {
      .service-card.alt .service-img {
        float: right;
      }

      /*.service-card.alt .service-content {*/
      /*  text-align: right;*/
      /*}*/
    }
</style>

<div class="breadcumb">
    <!--<img src="assets/images/breadcumb-bg.jpg" width="100%">-->
    <h2>OUR SERVICES </h2>
</div>


<div class="container service-section">

  <div class="row service-card">
    <div class="col-sm-6 service-img">
      <img src="assets/images/service/flight-booking.jpg" alt="Flight Booking">
    </div>
    <div class="col-sm-6 service-content">
      <h2 class="service-title">Flight Booking</h2>
      <p>Our Flight Booking service provides seamless and efficient air travel arrangements for both domestic and international destinations. We offer competitive fares, instant ticket confirmation, and 24/7 customer support to ensure a hassle-free booking experience. Whether you're planning a family vacation, a business trip, or a last-minute getaway, our flight reservation system is designed to cater to all types of travelers. With partnerships across major airlines, we guarantee the best deals and flexible options to suit every budget. Our user-friendly interface allows for easy search, comparison, and booking. Additionally, we assist with special requests like meal preferences, seat selection, and excess baggage arrangements. Trust our expertise to deliver reliable, timely, and cost-effective air travel solutions tailored to your itinerary. Travel smart and book your flights with confidence through our professional and secure platform, designed to make your journey as smooth as possible.</p>
    </div>
  </div>

  <div class="row service-card alt">
    <div class="col-sm-6 service-img">
      <img src="assets/images/service/hotel-booking.webp" alt="Hotel Booking">
    </div>
    <div class="col-sm-6 service-content">
      <h2 class="service-title">Hotel Booking</h2>
      <p>Our Hotel Booking service ensures a comfortable and affordable stay no matter where your travels take you. We provide access to a vast selection of hotels ranging from budget-friendly accommodations to luxurious five-star properties. Our platform features real-time availability, transparent pricing, and authentic customer reviews to help you make informed decisions. Whether you're booking a solo stay, a romantic getaway, or a group trip, we offer personalized hotel recommendations based on your preferences. Enjoy exclusive deals, instant confirmation, and dedicated customer support for any booking-related queries. Our service also covers special requests such as early check-in, late check-out, and accessibility needs. With a secure and user-friendly booking process, we take the stress out of travel planning. Choose us for dependable hotel reservations that match your comfort and convenience expectations every time you travel.</p>
    </div>
  </div>

  <div class="row service-card">
    <div class="col-sm-6 service-img">
      <img src="assets/images/service/Holiday-Packages.png" alt="Holiday Packages">
    </div>
    <div class="col-sm-6 service-content">
      <h2 class="service-title">Holiday Packages</h2>
      <p>Our expertly curated Holiday Packages are designed to give you a complete and memorable travel experience. From exotic beach getaways to cultural city tours and adventure treks, we offer a wide variety of travel themes to suit every taste and budget. Each package includes flights, accommodations, local transportation, guided sightseeing, and more—carefully arranged to ensure your comfort and satisfaction. We customize packages to meet specific needs, including honeymoon trips, family vacations, and corporate retreats. Our dedicated travel consultants work closely with clients to plan itineraries that are exciting, well-paced, and value-packed. With a focus on quality service and client happiness, we make sure every holiday is worry-free and filled with joy. Let us take the stress out of planning so you can focus on making lifelong memories.</p>
    </div>
  </div>

  <div class="row service-card alt">
    <div class="col-sm-6 service-img">
      <img src="assets/images/service/HR-Recruiter-Service.jpg" alt="HR Recruiter Service">
    </div>
    <div class="col-sm-6 service-content">
      <h2 class="service-title">HR Recruiter Service</h2>
      <p>Our HR Recruiter Service is tailored to meet the dynamic hiring needs of businesses across industries. We specialize in sourcing, screening, and placing top talent through a structured and transparent recruitment process. Our expert recruiters leverage industry knowledge, cutting-edge tools, and extensive networks to find candidates who match your specific requirements. Whether you need entry-level staff or seasoned professionals, we provide scalable hiring solutions that save time and reduce hiring costs. We also assist with job descriptions, interview coordination, offer negotiation, and onboarding support. Our commitment to quality and confidentiality ensures you receive only the best-fit candidates. With a deep understanding of workforce trends and company culture alignment, our service guarantees long-term employee satisfaction and retention. Partner with us to build a team that drives growth and innovation.</p>
    </div>
  </div>

  <div class="row service-card">
    <div class="col-sm-6 service-img">
      <img src="assets/images/service/Air-Ticket-SupportExecutive.jpg" alt="Air Ticket Support Executive">
    </div>
    <div class="col-sm-6 service-content">
      <h2 class="service-title">Air Ticket Support Executive</h2>
      <p>Our Air Ticket Support Executive service is designed to provide travelers with reliable assistance throughout the ticketing process. Our experienced support team is trained to handle booking inquiries, fare comparisons, cancellations, rescheduling, and special travel needs. We prioritize fast response times and customer satisfaction, ensuring that every client receives timely updates and clear guidance. Our team also works behind the scenes with travel agents and airlines to resolve ticketing issues efficiently. Whether you're managing a large group booking or need help with a last-minute itinerary change, our support executives are equipped to assist professionally. We combine human interaction with smart automation to streamline ticket-related services and minimize disruptions. Rely on us for comprehensive ticket support that’s always one call or click away.</p>
    </div>
  </div>

  <div class="row service-card alt">
    <div class="col-sm-6 service-img">
      <img src="assets/images/service/Tourism-Management.png" alt="Tourism Management">
    </div>
    <div class="col-sm-6 service-content">
      <h2 class="service-title">Tourism Management</h2>
      <p>Our Tourism Management service encompasses the planning, development, and coordination of tourism programs that enhance traveler satisfaction while promoting local economies. We work with stakeholders including local authorities, hospitality providers, and travel agencies to create sustainable and engaging travel experiences. From destination marketing to visitor support, we handle all aspects of tourism operations with a strategic and professional approach. Our services include data-driven planning, training for tourism personnel, policy guidance, and infrastructure development. We also offer customized tourism solutions for regions looking to attract specific types of visitors. With a focus on quality, sustainability, and innovation, our tourism management efforts contribute to both economic growth and cultural preservation. Trust us to manage your tourism operations efficiently and make your destination a preferred choice among global travelers.</p>
    </div>
  </div>

  <div class="row service-card">
    <div class="col-sm-6 service-img">
      <img src="assets/images/service/Customer-Service.webp" alt="Customer Service">
    </div>
    <div class="col-sm-6 service-content">
      <h2 class="service-title">Customer Service</h2>
      <p>Our Customer Service solutions are designed to enhance client satisfaction and build long-term loyalty across all touchpoints. We provide trained customer service representatives who handle inquiries, complaints, and feedback professionally and empathetically. Our services include multichannel support via phone, email, chat, and social media to ensure 24/7 availability. We also offer CRM integration, reporting tools, and performance tracking to maintain service excellence. Whether you need support for e-commerce, travel bookings, or technical queries, we tailor our solutions to match your brand voice and goals. Our commitment to quality ensures a positive customer experience that boosts retention and reputation. Choose our customer service outsourcing to streamline your operations while maintaining high standards of client care.</p>
    </div>
  </div>

  <div class="row service-card alt">
    <div class="col-sm-6 service-img">
      <img src="assets/images/service/Travel-Insurance.avif" alt="Travel Insurance">
    </div>
    <div class="col-sm-6 service-content">
      <h2 class="service-title">Travel Insurance</h2>
      <p>Our Travel Insurance service offers comprehensive coverage to protect you from unexpected travel disruptions. Whether it's trip cancellations, medical emergencies, lost luggage, or flight delays, we provide reliable insurance solutions tailored to individual or group needs. We partner with reputed insurance providers to bring you flexible plans that offer global protection and quick claims processing. Our team also assists with policy selection, premium comparisons, and coverage clarifications. With increasing uncertainties in travel, having the right insurance ensures peace of mind wherever you go. Our commitment is to safeguard your travel investment and personal well-being throughout your journey. Get insured with confidence and travel smartly with our dependable insurance solutions.</p>
    </div>
  </div>

</div>

<!-- /container -->
<?php include('includes/footer.php') ?>