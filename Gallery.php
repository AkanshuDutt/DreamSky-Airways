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

/* Breadcrumb Section */
.breadcumb { 
  background: linear-gradient(90deg, #ff7eb3, #65c7f7, #0052d4); 
  padding: 40px 0; 
  color: white; 
} 
.breadcumb h2 { font-size: 32px; font-weight: 700; margin: 0; }  

/* Carousel Images */
.carousel-item img {   
  width: 100%;   
  height: 400px;   
  object-fit: cover;   
  border-radius: 10px;   
  cursor: pointer;  
}  

/* Responsive Image Height */
@media (max-width: 768px) {
  .carousel-item img {
    height: 50vh; /* 50% of screen height on small devices */
  }
  .video-frame {
    height: 350px; /* smaller height for videos on mobile */
  }
  .video-inside-frame {
    height: 350px;
  }
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

/* Back Button */
.back-btn {   
  position: fixed;   
  top: 20px;   
  left: 20px;   
  z-index: 2000;   
  background: linear-gradient(90deg, #ff512f, #dd2476);  
  color: #fff;   
  border: none;    
  margin-top:120px;  
  padding: 10px 20px;  
  font-weight: bold;  
  border-radius: 5px;  
  cursor: pointer;  
} 
.back-btn:hover { background: #444; }  

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

/* Video Frame */
.video-frame {  
  width: 100%;  
  max-width: 800px;  
  height:400px;     
  margin: auto;  
  border: 4px solid #222;  
  border-radius: 12px;  
  overflow: hidden;  
  position: relative;  
  background: #000; 
}  
.video-inside-frame {  
  width: 100%;  
  height: 400px;  
  object-fit: cover;  
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

    <!-- Gallery Slider -->     
    <h3 class="section-title"> Team Gallery </h3>     
    <div id="galleryCarousel" class="carousel slide mb-5" data-bs-ride="carousel" data-bs-interval="2000">       
      <div class="carousel-inner">         
        <?php foreach($galleryImages as $index => $img) { ?>           
          <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">             
            <img src="<?= $img ?>" alt="Gallery Image" onclick="openModal('<?= $img ?>')">           
          </div>         
        <?php } ?>       
      </div>       
      <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">         
        <span class="carousel-control-prev-icon"></span>       
      </button>       
      <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">         
        <span class="carousel-control-next-icon"></span>       
      </button>     
    </div>      

    <!-- Video Section -->   
    <h3 class="section-title">Our Videos</h3> 
    <div class="video-frame">   
      <div id="videoCarousel" class="carousel slide" data-bs-ride="false">     
        <div class="carousel-inner">       
          <?php foreach($galleryVideos as $index => $vid) { ?>         
            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">           
              <video autoplay muted controls playsinline class="video-inside-frame">             
                <source src="<?= $vid ?>" type="video/mp4">             
                Your browser does not support the video tag.           
              </video>         
            </div>       
          <?php } ?>     
        </div>     
        <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">       
          <span class="carousel-control-prev-icon"></span>     
        </button>     
        <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">       
          <span class="carousel-control-next-icon"></span>     
        </button>   
      </div> 
    </div>     
  </div> 
</section>  

<!-- Popup Modal --> 
<div class="modal fade" id="imageModal" tabindex="-1">   
  <div class="modal-dialog modal-dialog-centered modal-lg">     
    <div class="modal-content bg-transparent border-0">       
      <img id="modalImage" src="" class="w-100 rounded">     
    </div>   
  </div> 
</div>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
<script> 
function openModal(imgSrc) {   
  document.getElementById('modalImage').src = imgSrc;   
  new bootstrap.Modal(document.getElementById('imageModal')).show(); 
}  

// Pause other videos when sliding 
const videoCarousel = document.getElementById('videoCarousel'); 
videoCarousel.addEventListener('slid.bs.carousel', function () {   
  const videos = videoCarousel.querySelectorAll('video');   
  videos.forEach(v => v.pause());    
  const activeVideo = videoCarousel.querySelector('.carousel-item.active video');   
  if (activeVideo) {     
    activeVideo.play();   
  } 
}); 
</script>
