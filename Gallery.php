<?php 
$pageTitle = "Gallery | Dream Sky Airways Pvt Ltd."; 
$pageDescription = "Gallery of Dream Sky Airways - Images and Videos."; 
$pageCanonical = "https://www.dreamskyairways.com/gallery.php"; 
$pageRobots = 'index,follow';  

// Videos Array 
$galleryVideos = [
    "assets/images/Teamimages/video1.mp4",
    "assets/images/Teamimages/video 2.mp4"
];  

// Gallery Images 
$galleryImages = [
    "assets/images/Teamimages/img (5).jpg",
    "assets/images/Teamimages/img (2).jpg",
    "assets/images/Teamimages/img (3).jpg",
    "assets/images/Teamimages/img (4).jpg",
    "assets/images/Teamimages/img (1).jpg",
    "assets/images/Teamimages/img (6).jpg",
    "assets/images/Teamimages/img (7).jpg",
    "assets/images/Teamimages/img (8).jpg",
    "assets/images/Teamimages/img (9).jpg",
    "assets/images/Teamimages/img (10).jpg",
]; 
?>  

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">  

<style> 
body.gallery-page { background: #fff !important; }  

.breadcumb {
  background: url('assets/images/GalBanner.webp') center center/cover no-repeat;
padding: 120px 0;
  color: white;
  position: relative;
  text-align: center;
}

/* Optional dark overlay on image for better text visibility */
.breadcumb::before {
  content: '';
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.4); /* change opacity as needed */
  z-index: 1;
}

.breadcumb h2 {
  font-size: 36px;
  font-weight: 700;
  margin: 0;
  position: relative;
  z-index: 2; /* ensures text appears above overlay */
}
/* Image Grid */
.image-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 15px;
  margin-top: 30px;
}
.image-grid img {
  width: 100%;
  height: 180px;
  object-fit: cover;
  border-radius: 10px;
  cursor: pointer;
  transition: transform 0.3s, box-shadow 0.3s;
}
.image-grid img:hover {
  transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,0.3);
}

/* Video Frame */
.video-frame {
  width: 100%;
  max-width: 800px;
  height: 400px;
  margin: 40px auto;
  border-radius: 15px;
  overflow: hidden;
  background: #000;
  box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}
.video-frame video {
  width: 100%;
  height: 100%;
  object-fit: cover;
  pointer-events: none; /* disables controls */
}

/* Section Titles */
.section-title {
  text-align: center;
  margin: 40px 0 20px;
  font-weight: 700;
  font-size: 26px;
  background: linear-gradient(90deg, #ff512f, #dd2476);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Intro Text */
.intro-text {
  max-width: 800px;
  margin: 20px auto;
  text-align: center;
  font-size: 18px;
  font-weight: 500;
  background: linear-gradient(90deg, #f7971e, #ffd200);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Back Button */
.back-btn {
  position: fixed;
  top: 20px;
  left: 20px;
  z-index: 2000;
  background: linear-gradient(90deg, #ff512f, #dd2476);
  color: #fff;
  border: none;
  margin-top: 300px;
  padding: 10px 20px;
  font-weight: bold;
  border-radius: 5px;
  cursor: pointer;
}
.back-btn:hover {
  background: #444;
}

@media (max-width: 768px) {
  .video-frame {
    height: 250px;
  }
  .image-grid img {
    height: 150px;
  }
}
</style>

<!-- Back Button -->
<button class="back-btn" onclick="window.location.href='index.php'">←</button>  

<!-- Page Title -->
<div class="breadcumb text-center">   
  <div class="container">     
    <h2>Gallery</h2>   
  </div> 
</div>  

<section class="wrapper_inner mt-5 mb-5 gallery-page">   
  <div class="container">      

    <!-- Company Intro -->     
    <div class="intro-text">       
      <p>
        At <strong>Dream Sky Airways Pvt. Ltd.</strong>, our greatest strength is our people. 
        We believe every employee is a valued part of our journey, contributing passion, innovation, and dedication. 
        Together, we create a culture of growth, respect, and excellence where every team member can soar higher.       
      </p>     
    </div>      

    <!-- Gallery Grid -->     
    <h3 class="section-title">Team Gallery</h3>     
    <div class="image-grid">
      <?php foreach($galleryImages as $img) { ?>
        <img src="<?= $img ?>" alt="Gallery Image" onclick="openModal('<?= $img ?>')">
      <?php } ?>
    </div>

    <!-- Videos Section -->
    <h3 class="section-title">Our Videos</h3>
    <?php foreach($galleryVideos as $vid) { ?>
      <div class="video-frame">
        <video autoplay loop muted playsinline>
          <source src="<?= $vid ?>" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    <?php } ?>

  </div>
</section>

<!-- Image Modal -->
<!-- Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-transparent border-0 position-relative">

      <!-- Close Button -->
      <button type="button" class="btn-close position-absolute top-0 end-0 m-2" data-bs-dismiss="modal" aria-label="Close" style="z-index: 1055; background-color: white;"></button>

      <!-- Modal Image -->
      <img id="modalImage" src="" class=" rounded" style="max-height: 80vh; object-fit: contain;">
    </div>
  </div>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
<script>
function openModal(imgSrc) {
  document.getElementById('modalImage').src = imgSrc;
  new bootstrap.Modal(document.getElementById('imageModal')).show();
}
</script>

