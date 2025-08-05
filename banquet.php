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
      padding: 150px 20px;
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
      animation: bannerZoom 20s infinite ease-in-out;
    }

    @keyframes bannerZoom {
      0% { transform: scale(1); }
      50% { transform: scale(1.1); }
      100% { transform: scale(1); }
    }

    .banner h1 {
      font-size: clamp(32px, 8vw, 60px);
      font-family: 'Playfair Display', serif;
      color: #ffd700;
      text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.7);
      animation: fadeInDown 1.5s ease-out;
    }

    .banner p {
      font-size: clamp(16px, 4vw, 20px);
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
      width: min(90%, 600px);
      margin: 40px auto;
      padding: clamp(20px, 5vw, 40px);
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
      font-size: clamp(24px, 6vw, 34px);
      margin-bottom: 30px;
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
      gap: 20px;
    }

    input, select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 10px;
      background: #f9f9f9;
      color: #333;
      font-size: clamp(14px, 3vw, 16px);
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
      min-height: 100px;
    }

    button {
      background: linear-gradient(45deg, #ffd700, #ffaa00);
      color: #1e3c72;
      padding: 12px;
      font-size: clamp(16px, 4vw, 18px);
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

    .error {
      color: #ff0000;
      font-size: clamp(12px, 2.5vw, 14px);
      margin-top: 5px;
      display: none;
    }

    /* Enhanced Responsive Design */
    @media (max-width: 1024px) {
      .banner {
        padding: 100px 20px;
      }

      .form-container {
        width: 95%;
        margin: 30px auto;
      }
    }

    @media (max-width: 768px) {
      .banner {
        padding: 80px 15px;
      }

      .form-container {
        padding: 25px;
        margin: 20px 15px;
      }

      .form-container h2 {
        margin-bottom: 20px;
      }

      input, select, textarea {
        padding: 10px;
      }

      button {
        padding: 10px;
      }
    }

    @media (max-width: 480px) {
      .banner {
        padding: 60px 10px;
      }

      .banner h1 {
        font-size: clamp(24px, 6vw, 32px);
      }

      .banner p {
        font-size: clamp(14px, 3.5vw, 16px);
      }

      .form-container {
        padding: 20px;
        margin: 15px 10px;
        border-radius: 15px;
      }

      .form-container h2 {
        font-size: clamp(20px, 5vw, 24px);
      }

      .form-container h2::after {
        width: 40px;
      }

      input, select, textarea {
        padding: 8px;
        font-size: clamp(12px, 2.5vw, 14px);
      }

      textarea {
        min-height: 80px;
      }

      button {
        padding: 8px;
        font-size: clamp(14px, 3.5vw, 16px);
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
    <form action="#" method="POST" onsubmit="return validateForm()">
      <input type="text" id="name" name="name" placeholder="Your Full Name" pattern="[A-Za-z\s]+" required oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, ''); validateName();" />
      <span id="name-error" class="error">Please enter only letters and spaces</span>
      <input type="email" name="email" placeholder="Email Address" required />
      <input type="tel" id="phone" name="phone" placeholder="Contact Number (10 digits)" pattern="[0-9]{10}" maxlength="10" required oninput="this.value = this.value.replace(/[^0-9]/g, ''); validatePhone();" />
      <span id="phone-error" class="error">Please enter exactly 10 digits</span>
      <input type="date" id="date" name="date" required />
      <span id="date-error" class="error">Please select a valid future date</span>
      <input type="time" name="time" required />
      <input type="number" id="guests" name="guests" placeholder="No. of Guests (up to 999)" min="1" max="999" required oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 3); validateGuests();" />
      <span id="guests-error" class="error">Please enter up to 3 digits</span>
      <select name="occasion" required>
        <option value="">Select Occasion</option>
        <option>Wedding</option>
        <option>Birthday</option>
        <option>Engagement</option>
        <option>Corporate Event</option>
        <option>Other</option>
      </select>
      <!-- <textarea name="message" placeholder="Additional Information (Optional)"></textarea> -->
      <button type="submit">Book Now</button>
    </form>
  </div>

  <script>
    // Set min and max dates for the date input
    document.addEventListener('DOMContentLoaded', function() {
      const today = new Date();
      const minDate = today.toISOString().split('T')[0]; // Today's date
      const maxDate = '2030-12-31'; // Reasonable future date
      const dateInput = document.getElementById('date');
      dateInput.setAttribute('min', minDate);
      dateInput.setAttribute('max', maxDate);
    });

    function validateName() {
      const nameInput = document.getElementById('name');
      const nameError = document.getElementById('name-error');
      const nameValue = nameInput.value;

      if (!/^[A-Za-z\s]+$/.test(nameValue) && nameValue !== '') {
        nameError.style.display = 'block';
        return false;
      } else {
        nameError.style.display = 'none';
        return true;
      }
    }

    function validatePhone() {
      const phoneInput = document.getElementById('phone');
      const phoneError = document.getElementById('phone-error');
      const phoneValue = phoneInput.value;

      if (phoneValue.length !== 10 || !/^\d{10}$/.test(phoneValue)) {
        phoneError.style.display = 'block';
        return false;
      } else {
        phoneError.style.display = 'none';
        return true;
      }
    }

    function validateGuests() {
      const guestsInput = document.getElementById('guests');
      const guestsError = document.getElementById('guests-error');
      const guestsValue = guestsInput.value;

      if (guestsValue.length > 3 || !/^\d{1,3}$/.test(guestsValue) || guestsValue < 1) {
        guestsError.style.display = 'block';
        return false;
      } else {
        guestsError.style.display = 'none';
        return true;
      }
    }

    function validateDate() {
      const dateInput = document.getElementById('date');
      const dateError = document.getElementById('date-error');
      const selectedDate = new Date(dateInput.value);
      const today = new Date();
      today.setHours(0, 0, 0, 0); // Reset time for comparison
      const maxDate = new Date('2030-12-31');

      if (!dateInput.value || selectedDate < today || selectedDate > maxDate) {
        dateError.style.display = 'block';
        return false;
      } else {
        dateError.style.display = 'none';
        return true;
      }
    }

    function validateForm() {
      return validateName() && validatePhone() && validateGuests() && validateDate();
    }
  </script>

<?php include("includes/footer.php"); ?>