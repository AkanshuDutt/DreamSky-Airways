<?php 
$pageTitle = "About Us | Dream Sky Airways Pvt Ltd.";
$pageDescription = "Discover the story behind Dream Sky Airways. As India's leading tour and travel company, we are committed to providing exceptional travel experiences, including flight bookings, hotel reservations, and customized holiday packages.";
$pageCanonical = "https://www.dreamskyairways.com/who-we-are.php";
$pageRobots = 'index,follow';

include('includes/header.php');
?>

<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }

  body {
    overflow-x: hidden;
    width: 100%;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
  }

  .breadcumb {
    position: relative;
    min-height: clamp(250px, 45vw, 350px);
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    overflow: hidden;
    height: 500px;
  }

  .slideshow {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
  }

  .slideshow img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0;
    transition: opacity 1s ease-in-out;
  }

  .slideshow img.active {
    opacity: 1;
  }

  .breadcumb::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(0, 51, 102, 0.6), rgba(0, 153, 204, 0.4));
    z-index: 0;
  }

  .breadcumb h2 {
    position: relative;
    color: #fff;
    font-size: clamp(32px, 8vw, 56px);
    font-weight: 700;
    text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.7);
    z-index: 1;
    margin: 0;
    animation: fadeInDown 1s ease-out;
  }

  .breadcumb p {
    position: relative;
    color: #f0f0f0;
    font-size: clamp(16px, 3vw, 20px);
    margin-top: 10px;
    z-index: 1;
    animation: fadeInUp 1s ease-out 0.3s;
    animation-fill-mode: backwards;
  }

  @keyframes fadeInDown {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }
 
.container.inner-container-static {
  width: 100%;
  max-width: 1140px;
  margin: 0 auto;
  padding: 0 clamp(10px, 3vw, 20px);
  box-sizing: border-box;
}



  .pages_hed.heading-page {
    font-size: clamp(22px, 5vw, 32px);
    font-weight: bold;
    margin-bottom: clamp(15px, 3vw, 20px);
    color: #333;
    text-align: center;
  }

  .inner-content h1 {
    font-size: clamp(20px, 4.5vw, 28px);
    font-weight: bold;
    margin-bottom: clamp(10px, 2vw, 15px);
    color: #1e3c72;
    font-style: italic;
    text-align: center;
  }

  .inner-content p {
    font-size: clamp(14px, 3vw, 16px);
    color: #666;
    line-height: 1.6;
    margin-bottom: clamp(10px, 2vw, 15px);
  }

  .clearfix {
    clear: both;
  }

  /* Responsive Design */
  @media (max-width: 992px) {
    .breadcumb {
      min-height: clamp(200px, 40vw, 300px);
    }

    .breadcumb h2 {
      font-size: clamp(28px, 7vw, 44px);
    }

    .breadcumb p {
      font-size: clamp(14px, 2.8vw, 18px);
    }

    .main-field.static-page-container {
      padding: clamp(15px, 4vw, 30px) clamp(8px, 2.5vw, 15px);
    }

    .container.inner-container-static {
      padding: 0 clamp(8px, 2.5vw, 15px);
    }

    .pages_hed.heading-page {
      font-size: clamp(20px, 4.5vw, 26px);
    }

    .inner-content h1 {
      font-size: clamp(18px, 4vw, 24px);
    }
  }

  @media (max-width: 768px) {
    .breadcumb {
      min-height: clamp(180px, 35vw, 250px);
    }

    .breadcumb h2 {
      font-size: clamp(24px, 6vw, 36px);
    }

    .breadcumb p {
      font-size: clamp(13px, 2.5vw, 16px);
    }

    .main-field.static-page-container {
      padding: clamp(12px, 3.5vw, 25px) clamp(6px, 2vw, 12px);
    }

    .container.inner-container-static {
      padding: 0 clamp(6px, 2vw, 12px);
    }

    .pages_hed.heading-page {
      font-size: clamp(18px, 4vw, 24px);
    }

    .inner-content h1 {
      font-size: clamp(16px, 3.8vw, 22px);
    }

    .inner-content p {
      font-size: clamp(13px, 2.8vw, 15px);
    }
  }

  @media (max-width: 576px) {
    .breadcumb {
      min-height: clamp(150px, 30vw, 200px);
    }

    .breadcumb h2 {
      font-size: clamp(20px, 5vw, 28px);
    }

    .breadcumb p {
      font-size: clamp(12px, 2.5vw, 14px);
    }

    .main-field.static-page-container {
      padding: clamp(10px, 3vw, 20px) clamp(5px, 2vw, 10px);
    }

    .container.inner-container-static {
      padding: 0 clamp(5px, 2vw, 10px);
    }

    .pages_hed.heading-page {
      font-size: clamp(16px, 3.8vw, 22px);
    }

    .inner-content h1 {
      font-size: clamp(14px, 3.5vw, 20px);
    }

    .inner-content p {
      font-size: clamp(12px, 2.5vw, 14px);
    }
  }
</style>

<div class="breadcumb">
  <div class="slideshow">
    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1920&q=80" alt="Travel Destination 1" class="active">
    <!-- <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d7200?auto=format&fit=crop&w=1920&q=80" alt="Travel Destination 2"> -->
    <!-- <img src="https://images.unsplash.com/photo-1498855926480-d98b57eeb168?auto=format&fit=crop&w=1920&q=80" alt="Travel Destination 3"> -->
  </div>
  <h2>ABOUT US</h2>
  <!-- <p>Discover Your Journey with Dream Sky Airways</p> -->
</div>

<div class="main-field static-page-container mobile_tabp0">
  <h3 class="pages_hed heading-page">About Dream Sky Airways</h3>
  <div class="clearfix"></div>
  <div class="container inner-container-static inner-content">
    <h1><strong><em>Dream Sky Airways Pvt Ltd</em></strong></h1>
    <p>Dream Sky Airways Pvt. Ltd. is recognized by MCA, MSME & NCT Certified.</p>
    <p>At Dream Sky Airways Services, we are committed to providing free assistance to those in search of their ideal careers in the aviation sector. Our main objective is to help you fulfill your career goals and offer outstanding job placement services while providing the best travel packages and services.</p>
    <p>Dream Sky Airways was founded with a vision to revolutionize the travel industry by offering unique and personalized travel experiences. With years of experience in aviation, we recognized the growing demand for a service that not only transports passengers but also enriches their journeys. Our commitment to excellence and innovation has allowed us to expand our services to include not just tours and travel, but also specialized job placement services for those looking to soar in the aviation field.</p>
    <p>We have the knowledge and experience to match bright people like you with the best career prospects thanks to our extensive network of contacts and in-depth knowledge of the aviation business. Whether you work as a pilot, member of the cabin crew, ground crew, or in any other aviation-related capacity, we are dedicated to creating opportunities that support your professional objectives.</p>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('.slideshow img');
    let currentIndex = 0;

    function changeImage() {
      images[currentIndex].classList.remove('active');
      currentIndex = (currentIndex + 1) % images.length;
      images[currentIndex].classList.add('active');
    }

    setInterval(changeImage, 5000); // Change image every 5 seconds
  });
</script>

<?php include('includes/footer.php'); ?>