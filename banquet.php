<?php
$pageCanonical = "http://localhost/_public_html/packages-policy.php";
$pageRobots = "index, follow";
include("includes/header.php");
?>
<style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      overflow-x: hidden;
    }

    .banner {
      position: relative;
      text-align: center;
      padding: 200px 60px;
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      color: #fff;
      overflow: hidden;
      z-index: 1;
    }

     .banner::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
      opacity: 0.3;
      z-index: -1;
      animation: bannerZoom 20s infinite ease-in-out; }

      .banner::before {
      background: url('https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
      animation: fadeImage1 20s infinite;
    }

     @keyframes bannerZoom {
      0% { transform: scale(1); }
      50% { transform: scale(1.1); }
      100% { transform: scale(1); }
    }

    .banner h1 {
      font-size: 60px;
      font-family: 'Playfair Display', serif;
      color: #ffd700;
      text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.7);
      animation: fadeInDown 1.5s ease-out;
    }

    .banner p {
      font-size: 20px;
      margin-top: 10px;
      color: #f0f0f0;
      animation: fadeInUp 1.5s ease-out 0.3s;
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

    .form-container {
      width: 600px;
      margin: 60px auto;
      padding: 90px;
      background: rgba(255, 255, 255, 0.95);
      border-radius: 25px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
      border: 1px solid rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(10px);
      transform: translateY(0);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .form-container:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
    }

    .form-container h2 {
      text-align: center;
      font-size: 34px;
      margin-bottom: 40px;
      color: #1e3c72;
      font-family: 'Playfair Display', serif;
      position: relative;
    }

    .form-container h2::after {
      content: '';
      width: 60px;
      height: 3px;
      background: #ffd700;
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
    }

    form {
      display: grid;
      gap: 25px;
    }

    input, select, textarea {
      width: 100%;
      padding: 16px;
      border: 1px solid #ddd;
      border-radius: 10px;
      background: #f9f9f9;
      color: #333;
      font-size: 16px;
      transition: all 0.3s ease;
    }

    input::placeholder,
    textarea::placeholder {
      color: #888;
    }

    input:focus, textarea:focus, select:focus {
      outline: none;
      border-color: #ffd700;
      background: #fff;
      box-shadow: 0 0 10px rgba(255, 215, 0, 0.3);
    }

    textarea {
      resize: vertical;
      min-height: 120px;
    }

    button {
      background: linear-gradient(45deg, #ffd700, #ffaa00);
      color: #1e3c72;
      padding: 16px;
      font-size: 18px;
      font-weight: 600;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    button:hover {
      background: linear-gradient(45deg, #ffaa00, #ffd700);
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    button:active {
      transform: translateY(0);
    }

    @media (max-width: 768px) {
      .form-container {
        padding: 30px;
        margin: 20px;
      }

      .banner h1 {
        font-size: 40px;
      }

      .banner p {
        font-size: 16px;
      }

      .form-container h2 {
        font-size: 26px;
      }
    }
  </style>
</head>
<body>
  <div class="banner">
    <h1>Banquet Booking</h1>
    <p>Elevate Your Celebration with Elegance and Style</p>
  </div>

  <div class="form-container">
    <h2>Reserve Your Celebration</h2>
    <form action="#" method="POST">
      <input type="text" name="name" placeholder="Your Full Name" required />
      <input type="email" name="email" placeholder="Email Address" required />
      <input type="tel" name="phone" placeholder="Contact Number" required />
      <input type="date" name="date" required />
      <input type="time" name="time" required />
      <input type="number" name="guests" placeholder="No. of Guests" min="1" required />
      <select name="occasion" required>
        <option value="">Select Occasion</option>
        <option>Wedding</option>
        <option>Birthday</option>
        <option>Engagement</option>
        <option>Corporate Event</option>
        <option>Other</option>
      </select>
      <textarea name="message" placeholder="Additional Information (Optional)"></textarea>
      <button type="submit">Book Now</button>
    </form>
  </div>



<?php include("includes/footer.php"); ?>