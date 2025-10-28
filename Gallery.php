<?php 
$pageTitle = "Gallery | Dream Sky Airways Pvt Ltd."; 
$pageDescription = "Gallery of Dream Sky Airways - Images and Videos."; 
$pageCanonical = "https://www.dreamskyairways.com/gallery.php"; 
$pageRobots = 'index,follow';  

// Gallery Sections
$gallerySections = [
  "Cabins" => [
    ["src" => "assets/images/Teamimages/Founder cabin.jpg", "title" => "Founder Cabin"],
  ],
  "Office Area" => [
    ["src" => "assets/images/Teamimages/Office.jpg", "title" => "Office View"],
    ["src" => "assets/images/Teamimages/Working Area.jpg", "title" => "Working Area"],
    ["src" => "assets/images/Teamimages/Working_area (2).jpg", "title" => "Working Area"],
    ["src" => "assets/images/Teamimages/Working_area.jpg", "title" => "Working Area"]
  ],
  "Reception & Waiting" => [
    ["src" => "assets/images/Teamimages/Reception Area.jpg", "title" => "Reception Area"],
    ["src" => "assets/images/Waiting Area.jpg", "title" => "Waiting Area"]
  ],
  "Pooja & Success" => [
    ["src" => "assets/images/Teamimages/Pooja-area.jpg", "title" => "Pooja Area"],
    ["src" => "assets/images/Teamimages/SuccessGallery.jpg", "title" => "Success Gallery"]
  ]
];
?>  

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?= $pageTitle ?></title>
  <meta name="description" content="<?= $pageDescription ?>" />
  <link rel="canonical" href="<?= $pageCanonical ?>" />
  <meta name="robots" content="<?= $pageRobots ?>" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root {
      --primary: #ff512f;
      --secondary: #dd2476;
      --dark: #222;
      --light: #f8f9fa;
    }

    body.gallery-page {
      background: #fff;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    /* Back Button - Fixed & Responsive */
    .back-btn {
      position: fixed;
      top: 15px;
      left: 15px;
      z-index: 2000;
      background: linear-gradient(90deg, var(--primary), var(--secondary));
      color: #fff;
      border: none;
      padding: 10px 16px;
      font-weight: bold;
      border-radius: 50px;
      cursor: pointer;
      font-size: 16px;
      box-shadow: 0 4px 12px rgba(255,81,47,0.3);
      transition: all 0.3s ease;
    }
    .back-btn:hover {
      background: var(--dark);
      transform: translateY(-2px);
    }

    /* Breadcrumb Banner */
    .breadcumb {
      background: url('assets/images/GalBanner.webp') center center/cover no-repeat;
      padding: 100px 20px;
      color: white;
      position: relative;
      text-align: center;
      min-height: 300px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .breadcumb::before {
      content: '';
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.5);
      z-index: 1;
    }
    .breadcumb h2 {
      font-size: clamp(28px, 5vw, 40px);
      font-weight: 700;
      position: relative;
      z-index: 2;
      margin: 0;
    }

    /* Section Title */
    .section-title {
      text-align: center;
      margin: 50px 0 30px;
      font-weight: 700;
      font-size: clamp(22px, 4vw, 28px);
      background: linear-gradient(90deg, var(--primary), var(--secondary));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    /* Category Cards */
    .category-card {
      cursor: pointer;
      transition: all 0.3s ease;
      border-radius: 16px;
      overflow: hidden;
      background: #fff;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      height: 100%;
    }
    .category-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 30px rgba(0,0,0,0.18);
    }
    .category-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      transition: transform 0.4s ease;
    }
    .category-card:hover img {
      transform: scale(1.1);
    }
    .category-card h5 {
      text-align: center;
      padding: 14px 10px;
      background: var(--light);
      margin: 0;
      font-weight: 600;
      font-size: 1rem;
      color: var(--dark);
    }

    /* Image Grid */
    .image-grid {
      display: none;
    }
    .image-grid.active {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 20px;
      animation: fadeIn 0.6s ease;
      padding: 0 10px;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(15px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .image-grid .image-box {
      position: relative;
      overflow: hidden;
      border-radius: 14px;
      cursor: pointer;
      box-shadow: 0 4px 14px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
    }
    .image-grid .image-box:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 25px rgba(0,0,0,0.2);
    }
    .image-grid img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      transition: transform 0.4s ease;
    }
    .image-grid .image-box:hover img {
      transform: scale(1.08);
    }

    /* Image Title */
    .img-title {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: linear-gradient(to top, rgba(0,0,0,0.85), transparent);
      color: #fff;
      text-align: center;
      padding: 18px 10px 10px;
      font-weight: 600;
      font-size: 14px;
      letter-spacing: 0.5px;
    }

    /* Back to Sections Button */
    .section-back {
      display: none;
      margin: 30px auto;
      background: linear-gradient(90deg, var(--primary), var(--secondary));
      color: #fff;
      border: none;
      padding: 10px 22px;
      font-weight: bold;
      border-radius: 50px;
      cursor: pointer;
      font-size: 15px;
      box-shadow: 0 4px 12px rgba(255,81,47,0.3);
    }
    .section-back.active {
      display: block;
    }
    .section-back:hover {
      background: var(--dark);
    }

    /* Map Section */
    .map-section {
      margin: 70px 0 40px;
      padding: 0 15px;
    }
    .map-section h3 {
      text-align: center;
      margin-bottom: 20px;
      color: var(--dark);
      font-weight: 700;
      font-size: clamp(18px, 4vw, 24px);
    }
    .map-container {
      width: 100%;
      height: 380px;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
      border: 3px solid #eee;
    }
    .map-container iframe {
      width: 100%;
      height: 100%;
      border: 0;
    }

    /* Modal */
    .modal-content {
      background: rgba(0,0,0,0.92);
      border: none;
      border-radius: 14px;
      padding: 10px;
    }
    .modal img {
      width: 100%;
      max-height: 80vh;
      object-fit: contain;
      border-radius: 10px;
    }
    .close-modal {
      position: absolute;
      top: 12px;
      right: 18px;
      font-size: 32px;
      color: #fff;
      cursor: pointer;
      z-index: 10;
      background: rgba(0,0,0,0.5);
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.2s;
    }
    .close-modal:hover {
      background: var(--primary);
      transform: scale(1.1);
    }

    /* Responsive Adjustments */
    @media (max-width: 992px) {
      .category-card img { height: 180px; }
      .image-grid img { height: 200px; }
    }
    @media (max-width: 768px) {
      .breadcumb { padding: 80px 15px; }
      .category-card img { height: 160px; }
      .image-grid img { height: 180px; }
      .map-container { height: 320px; }
      .back-btn { top: 10px; left: 10px; padding: 8px 14px; font-size: 14px; }
    }
    @media (max-width: 576px) {
      .breadcumb { padding: 70px 10px; min-height: 250px; }
      .section-title { margin: 40px 0 20px; }
      .category-card { margin-bottom: 15px; }
      .category-card img { height: 140px; }
      .image-grid { gap: 15px; padding: 0 5px; }
      .image-grid img { height: 160px; }
      .img-title { font-size: 13px; padding: 14px 8px 8px; }
      .map-container { height: 280px; }
      .section-back { padding: 8px 18px; font-size: 14px; }
    }
    @media (max-width: 400px) {
      .image-grid { grid-template-columns: 1fr; }
      .image-grid img { height: 200px; }
    }
  </style>
</head>
<body class="gallery-page">

  <button class="back-btn" onclick="window.location.href='index.php'">Back</button>

  <div class="breadcumb">
    <div class="container">
      <h2>Gallery</h2>
    </div>
  </div>

  <section class="wrapper_inner mt-5 mb-5">
    <div class="container">

      <h3 class="section-title">Explore Our Gallery</h3>

      <!-- Category Cards -->
      <div id="categoryList" class="row g-4">
        <?php foreach($gallerySections as $section => $images) { 
          if (empty($images)) continue;
        ?>
          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="category-card" onclick="openSection('<?= preg_replace('/\s+/', '', $section) ?>')">
              <img src="<?= $images[0]['src'] ?>" alt="<?= $section ?>">
              <h5><?= $section ?></h5>
            </div>
          </div>
        <?php } ?>
      </div>

      <!-- Back to Sections -->
      <button id="sectionBack" class="section-back" onclick="backToCategories()">Back to Sections</button>

      <!-- Image Grids -->
      <?php foreach($gallerySections as $section => $images) { 
        if (empty($images)) continue;
        $id = preg_replace('/\s+/', '', $section);
      ?>
        <div id="<?= $id ?>" class="image-grid mt-5">
          <?php foreach($images as $img) { ?>
            <div class="image-box" onclick="openModal('<?= $img['src'] ?>')">
              <img src="<?= $img['src'] ?>" alt="<?= $img['title'] ?>">
              <div class="img-title"><?= $img['title'] ?></div>
            </div>
          <?php } ?>
        </div>
      <?php } ?>

    </div>
  </section>

  <!-- Google Map -->
  <section class="map-section">
    <div class="container">
      <h3>Find Us at Noida Sector 63</h3>
      <div class="map-container">
        <iframe 
          src="https://www.google.com/maps?q=A-43+Sector+63+Noida+Uttar+Pradesh+201301&output=embed"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="imageModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <span class="close-modal" onclick="closeModal()">×</span>
        <img id="modalImage" src="" alt="Full View">
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function openSection(id) {
      document.getElementById('categoryList').style.display = 'none';
      document.getElementById('sectionBack').classList.add('active');
      document.querySelectorAll('.image-grid').forEach(s => s.classList.remove('active'));
      const el = document.getElementById(id);
      el.classList.add('active');
      el.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    function backToCategories() {
      document.querySelectorAll('.image-grid').forEach(s => s.classList.remove('active'));
      document.getElementById('categoryList').style.display = 'flex';
      document.getElementById('sectionBack').classList.remove('active');
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    let modal;
    function openModal(src) {
      document.getElementById('modalImage').src = src;
      modal = new bootstrap.Modal(document.getElementById('imageModal'));
      modal.show();
    }
    function closeModal() {
      if (modal) modal.hide();
    }

    // Close on ESC
    document.addEventListener('keydown', e => {
      if (e.key === 'Escape') closeModal();
    });
  </script>
</body>
</html>