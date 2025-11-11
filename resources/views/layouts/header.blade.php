<!-- HEADER START -->
<header style="background-color: white; padding: 20px 0; box-shadow: 0 2px 10px rgba(0,0,0,0.05); z-index: 999; position: relative;">
  <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; justify-content: space-between; align-items: center;">

    <!-- Logo -->
    <a href="{{ url('/') }}" style="font-size: 28px; font-weight: bold; font-family: Arial, sans-serif; text-decoration: none;">
      <span style="color: orange;">Harris</span><span style="color: #555;"> Digital</span>
    </a>

    <!-- Hamburger Toggle -->
    <button class="menu-toggle d-lg-none" onclick="document.getElementById('mobileMenu').classList.toggle('show');"
      style="background: none; border: none; font-size: 24px;">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Desktop Menu -->
    <nav class="d-none d-lg-block">
      <ul style="list-style: none; display: flex; gap: 30px; margin: 0; padding: 0; font-size: 16px;">
        <li><a href="" style="color: black; text-decoration: none;">Home</a></li>
        <li><a href="" style="color: black; text-decoration: none;">Website Packages</a></li>
        <li><a href="" style="color: black; text-decoration: none;">Portfolio</a></li>
        <li><a href="" style="color: black; text-decoration: none;">Web Hosting</a></li>
        <li><a href="" style="color: black; text-decoration: none;">Support</a></li>
        <li><a href="" style="color: black; text-decoration: none;">Contact Us</a></li>
      </ul>
    </nav>
  </div>

  <!-- Mobile Menu -->
  <div id="mobileMenu" class="mobile-nav">
    <ul>
      <li><a href="">Home</a></li>
      <li><a href="">Website Packages</a></li>
      <li><a href="">Portfolio</a></li>
      <li><a href="">Web Hosting</a></li>
      <li><a href="">Support</a></li>
      <li><a href=" ">Contact Us</a></li>
    </ul>
  </div>
</header>
<!-- HEADER END -->

<!-- FONT AWESOME (ensure it's loaded) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<!-- CSS FOR RESPONSIVE MENU -->
<style>
  .mobile-nav {
    display: none;
    background: white;
    width: 100%;
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
  }

  .mobile-nav.show {
    display: block;
  }

  .mobile-nav ul {
    list-style: none;
    padding: 20px;
    margin: 0;
  }

  .mobile-nav ul li {
    margin-bottom: 10px;
    text-align: center;
  }

  .mobile-nav ul li a {
    display: block;
    padding: 12px;
    color: black;
    text-decoration: none;
    font-size: 16px;
  }

  .mobile-nav ul li a:hover {
    background-color: #f0f0f0;
    border-radius: 5px;
  }

  @media (min-width: 992px) {
    .d-lg-block { display: block !important; }
    .d-lg-none { display: none !important; }
  }

  @media (max-width: 991.98px) {
    .d-lg-block { display: none !important; }
    .d-lg-none { display: inline-block !important; }
  }
</style>
