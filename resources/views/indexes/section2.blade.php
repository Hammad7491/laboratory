<!-- SERVICES GRID (EmmaGenix) -->
<section class="eg-services" style="padding:42px 0; font-family:'Poppins',ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;">
  <div style="max-width:1200px;margin:0 auto;padding:0 18px;">

    <!-- Section Heading -->
    <header style="text-align:center;margin-bottom:28px;">
      <h2 style="margin:0 0 6px 0;font-weight:600;font-size:clamp(22px,3.6vw,34px);letter-spacing:.02em;color:#001F3F;">
        Convenience Testing &amp; Wellness Services
      </h2>
      <p style="margin:0;color:#51607a;font-size:15px;">
        On-demand lab testing and wellness care—delivered with hospital-grade standards.
      </p>
      <div style="width:82px;height:4px;margin:14px auto 0;border-radius:999px;background:linear-gradient(135deg,#001F3F,#00509E);"></div>
    </header>

    <!-- Cards -->
    <div class="eg-svc-grid">
      <!-- Phlebotomy -->
      <article class="eg-card">
        <figure class="eg-card-img">
          <img src="https://images.pexels.com/photos/8460152/pexels-photo-8460152.jpeg?auto=compress&cs=tinysrgb&w=1200" 
               alt="Mobile Phlebotomy" loading="lazy">
        </figure>
        <h3 class="eg-card-title">
          <a href="{{ route('phlebotomy') }}">Phlebotomy</a>
        </h3>
        <p class="eg-card-text">
          Certified, mobile blood draws at your home, office, or facility. Gentle, pediatric-to-senior care with secure labeling and fast lab drop-off.
        </p>
      </article>

      <!-- IV Hydration -->
      <article class="eg-card">
        <figure class="eg-card-img">
          <img src="https://images.pexels.com/photos/3844581/pexels-photo-3844581.jpeg?auto=compress&cs=tinysrgb&w=1200" 
               alt="IV Hydration" loading="lazy">
        </figure>
        <h3 class="eg-card-title"><a href="#">IV Hydration</a></h3>
        <p class="eg-card-text">
          Replenish fluids, vitamins, and electrolytes with clinically formulated IV drips to support energy, recovery, and overall wellness.
        </p>
      </article>

      <!-- Micronutrients -->
      <article class="eg-card">
        <figure class="eg-card-img">
          <img src="https://images.pexels.com/photos/3844586/pexels-photo-3844586.jpeg?auto=compress&cs=tinysrgb&w=1200" 
               alt="Micronutrients" loading="lazy">
        </figure>
        <h3 class="eg-card-title"><a href="#">Micronutrients</a></h3>
        <p class="eg-card-text">
          Targeted nutrient therapies (vitamins, amino acids, antioxidants) delivered by professionals to optimize cellular health.
        </p>
      </article>

      <!-- Drug Test -->
      <article class="eg-card">
        <figure class="eg-card-img">
          <img src="https://images.pexels.com/photos/8442460/pexels-photo-8442460.jpeg?auto=compress&cs=tinysrgb&w=1200" 
               alt="Drug Testing" loading="lazy">
        </figure>
        <h3 class="eg-card-title"><a href="#">Drug Test</a></h3>
        <p class="eg-card-text">
          Rapid and lab-confirmed screenings for pre-employment, compliance, and workplace safety—scheduled on-site or mobile.
        </p>
      </article>

      <!-- DNA Test -->
      <article class="eg-card">
        <figure class="eg-card-img">
          <img src="https://images.pexels.com/photos/3825529/pexels-photo-3825529.jpeg?auto=compress&cs=tinysrgb&w=1200" 
               alt="DNA Testing" loading="lazy">
        </figure>
        <h3 class="eg-card-title"><a href="#">DNA Test</a></h3>
        <p class="eg-card-text">
          Legal and informational DNA collection with verified chain-of-custody where required. Discreet, accurate, and secure.
        </p>
      </article>

      <!-- Covid-19 Test -->
      <article class="eg-card">
        <figure class="eg-card-img">
          <img src="https://images.pexels.com/photos/3825528/pexels-photo-3825528.jpeg?auto=compress&cs=tinysrgb&w=1200" 
               alt="COVID-19 Testing" loading="lazy">
        </figure>
        <h3 class="eg-card-title"><a href="#">Covid-19 Test</a></h3>
        <p class="eg-card-text">
          Rapid antigen and RT-PCR collection with certified handling and swift result routing to your provider or employer.
        </p>
      </article>

      <!-- Background Check -->
      <article class="eg-card">
        <figure class="eg-card-img">
          <img src="https://images.pexels.com/photos/7735770/pexels-photo-7735770.jpeg?auto=compress&cs=tinysrgb&w=1200" 
               alt="Background Check" loading="lazy">
        </figure>
        <h3 class="eg-card-title"><a href="#">Background Check</a></h3>
        <p class="eg-card-text">
          Identity verification and compliant screening solutions for hiring, licensing, and placement programs.
        </p>
      </article>

      <!-- Pre-employment Verification -->
      <article class="eg-card">
        <figure class="eg-card-img">
          <img src="https://images.pexels.com/photos/7735673/pexels-photo-7735673.jpeg?auto=compress&cs=tinysrgb&w=1200" 
               alt="Pre-employment Verification" loading="lazy">
        </figure>
        <h3 class="eg-card-title"><a href="#">Pre-employment Verification</a></h3>
        <p class="eg-card-text">
          End-to-end onboarding checks: drug testing, document collection, and verification—streamlined for HR teams.
        </p>
      </article>
    </div>

  </div>
</section>

<style>
  /* Grid layout */
  .eg-svc-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:18px;
  }
  @media (max-width: 1024px){ .eg-svc-grid{ grid-template-columns:repeat(2,1fr);} }
  @media (max-width: 620px){ .eg-svc-grid{ grid-template-columns:1fr;} }

  /* Card */
  .eg-card{
    background:#fff;
    border:1px solid rgba(2,6,23,.06);
    border-radius:14px;
    box-shadow:0 10px 24px rgba(2,6,23,.06);
    padding:12px 14px 16px;
    transition:transform .15s ease, box-shadow .2s ease, border-color .2s ease;
  }
  .eg-card:hover{
    transform:translateY(-3px);
    border-color:#cdddf5;
    box-shadow:0 18px 36px rgba(0,40,85,.12);
  }

  .eg-card-img{
    margin:0 0 10px 0; border-radius:10px; overflow:hidden;
    aspect-ratio: 16 / 10; background:#f6f8fc;
  }
  .eg-card-img img{ width:100%; height:100%; object-fit:cover; display:block; }

  .eg-card-title{
    margin:8px 0 6px; text-align:center;
    font-size:clamp(16px,2.2vw,20px); line-height:1.25; font-weight:700;
    letter-spacing:.02em;
  }
  .eg-card-title a{
    color:#001F3F; text-decoration:none;
    background:linear-gradient(90deg,#001F3F,#00509E);
    -webkit-background-clip:text; -webkit-text-fill-color:transparent;
  }
  .eg-card-text{
    margin:0; color:#52607a; font-weight:400; font-size:14.5px; line-height:1.7; text-align:center;
  }
</style>
