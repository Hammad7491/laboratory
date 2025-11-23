<!-- PRE-VITAL SIGN CHECK: HERO + CONTENT (RESPONSIVE) -->
<section class="svc-vital" style="padding-top:18px;">
  <!-- Hero -->
  <div class="svc-hero">
    <img
      class="svc-hero-img"
      src="https://images.pexels.com/photos/7579831/pexels-photo-7579831.jpeg?auto=compress&cs=tinysrgb&w=1600"
      alt="Clinician checking temperature as part of vital signs screening">
    <div class="svc-hero-mask"></div>

    <div class="svc-hero-center">
      <div>
        <p class="svc-kicker">EmmaGenix Services</p>
        <h1 class="svc-title">Pre-vital Sign Check</h1>
        <p class="svc-sub">
          Fast, accurate vitals before your appointment, procedure, or lab draw—completed at home, your office, or on site.
        </p>
      </div>
    </div>
  </div>

  <!-- Main copy -->
  <div class="svc-wrap">
    <div class="svc-intro">
      <div>
        <h2 class="svc-h2">
          <span class="svc-h2-dark">Accurate, Mobile</span>
          <span class="svc-h2-gradient">Vital Signs</span>
          <span class="svc-h2-dark">You Can Trust</span>
        </h2>

        <p class="svc-p">
          Our clinicians capture baseline vital signs using calibrated medical-grade equipment and document results
          according to your provider’s requirements. Perfect for pre-visit triage, infusion/IV therapy, lab work,
          and wellness checks.
        </p>

        <p class="svc-p">
          Results can be securely routed to your care team or attached to your visit paperwork—saving time and reducing
          delays on the day of service.
        </p>

        <ul class="svc-ul">
          <li class="svc-li">
            <span class="svc-dot"></span>
            <span>Blood pressure (manual/automatic), heart rate, respiratory rate</span>
          </li>
          <li class="svc-li">
            <span class="svc-dot"></span>
            <span>Temperature (non-contact / oral) and oxygen saturation (SpO<sub>2</sub>) via pulse oximetry</span>
          </li>
          <li class="svc-li">
            <span class="svc-dot"></span>
            <span>Height/weight, BMI (when requested) and symptom review checklist</span>
          </li>
        </ul>
      </div>

      <!-- Side card -->
      <aside class="svc-card">
        <h3 class="svc-card-title">What We Measure</h3>
        <ol class="svc-ol">
          <li>Blood pressure &amp; pulse (sitting/standing if needed)</li>
          <li>Temperature &amp; oxygen saturation (SpO<sub>2</sub>)</li>
          <li>Respiratory rate &amp; general assessment</li>
          <li>Height/weight (BMI) per request</li>
        </ol>
        <a href="{{ route('contactus') }}" class="svc-btn">Schedule Pre-vitals</a>
      </aside>
    </div>
  </div>

  <!-- Image strip (relevant vitals imagery) -->
  <div class="svc-wrap">
    <div class="svc-gallery">
      <figure class="svc-fig">
        <img
          src="{{ asset('assets/images/vital1.jpg') }}"
          alt="Blood pressure measurement with cuff">
        <figcaption>Accurate blood pressure and pulse readings.</figcaption>
      </figure>

      <figure class="svc-fig">
        <img
          src="{{ asset('assets/images/vital2.jpg') }}"
          alt="Pulse oximeter measuring oxygen saturation">
        <figcaption>Pulse-oximetry for SpO<sub>2</sub> monitoring.</figcaption>
      </figure>

      <figure class="svc-fig">
        <img
          src="https://images.pexels.com/photos/7579833/pexels-photo-7579833.jpeg?auto=compress&cs=tinysrgb&w=1200"
          alt="Clinician using non-contact thermometer">
        <figcaption>Non-contact temperature checks and symptom review.</figcaption>
      </figure>
    </div>
  </div>

  <!-- FAQs -->
  <div class="svc-wrap">
    <div class="svc-faqs">
      <details class="svc-faq">
        <summary>Where can you perform pre-vitals?</summary>
        <div>
          We can visit your home, office, clinic, or event site. For group sessions, we set up a clean station with
          calibrated devices and follow infection-control protocols.
        </div>
      </details>

      <details class="svc-faq">
        <summary>How are results shared?</summary>
        <div>
          Results can be provided to you immediately, uploaded to your intake paperwork, or securely sent to your
          provider upon request.
        </div>
      </details>

      <details class="svc-faq">
        <summary>Can you combine with other services?</summary>
        <div>
          Yes—pre-vital checks pair perfectly with mobile phlebotomy, IV therapy, and pre-employment programs to
          streamline your workflow.
        </div>
      </details>
    </div>
  </div>

  <!-- CTA -->
  <div class="svc-wrap">
    <div class="svc-cta">
      <a href="{{ route('contactus') }}" class="svc-btn svc-btn-lg">Book Pre-vital Sign Check</a>
    </div>
  </div>
</section>

<style>
  .svc-vital, .svc-vital * {
    font-family:'Poppins', ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
    box-sizing:border-box;
  }

  /* Container */
  .svc-wrap{ max-width:1100px; margin:0 auto; padding:0 16px; }

  /* Hero */
  .svc-hero{
    position:relative; overflow:hidden; border-radius:18px;
    max-width:1100px; margin:0 auto 28px;
  }
  .svc-hero-img{
    width:100%; height:420px; object-fit:cover; display:block; filter:saturate(104%);
  }
  .svc-hero-mask{ position:absolute; inset:0; background:linear-gradient(180deg,rgba(10,18,36,.55),rgba(10,18,36,.55)); }
  .svc-hero-center{
    position:absolute; inset:0; display:grid; place-items:center; text-align:center; color:#fff; padding:24px;
  }
  .svc-kicker{
    margin:0 0 6px; letter-spacing:.25em; text-transform:uppercase; font:500 13px/1.2 Poppins, sans-serif; opacity:.95;
  }
  .svc-title{ margin:0; font:500 clamp(28px,7vw,56px)/1.05 Poppins, sans-serif; }
  .svc-sub{ max-width:760px; margin:12px auto 0; font:400 clamp(13px,2vw,17px)/1.6 Poppins, sans-serif; opacity:.95; }

  /* Intro grid */
  .svc-intro{
    display:grid; grid-template-columns:1.2fr .8fr; gap:28px; align-items:start;
  }

  .svc-h2{ font:500 26px/1.25 Poppins, sans-serif; margin:0 0 10px; }
  .svc-h2-dark{ color:#0f1f3a; }
  .svc-h2-gradient{
    background:linear-gradient(135deg,#00b894 0%, #00c2ff 100%);
    -webkit-background-clip:text; background-clip:text; -webkit-text-fill-color:transparent;
    display:inline-block; margin:0 .25rem;
  }

  .svc-p{ font:400 16px/1.8 Poppins, sans-serif; color:#24324a; margin:0 0 12px; }

  .svc-ul{ list-style:none; padding:0; margin:16px 0 0; display:grid; gap:10px; }
  .svc-li{ display:flex; gap:10px; align-items:flex-start; color:#1a2644; font:400 15.5px/1.7 Poppins, sans-serif; }
  .svc-dot{ width:10px; height:10px; border-radius:50%; margin-top:8px; background:linear-gradient(135deg,#06b6d4,#7c3aed); }

  /* Side card */
  .svc-card{
    background:#fff; border:1px solid rgba(2,6,23,.06); border-radius:14px; padding:18px;
    box-shadow:0 10px 24px rgba(2,6,23,.06);
  }
  .svc-card-title{ font:500 18px/1.4 Poppins, sans-serif; color:#0f1f3a; margin:0 0 8px; }
  .svc-ol{ margin:0; padding-left:18px; font:400 14.5px/1.8 Poppins, sans-serif; color:#23304a; }

  .svc-btn{
    display:inline-block; margin-top:12px; padding:12px 16px; border-radius:10px;
    background:linear-gradient(135deg,#001F3F,#00509E); color:#fff; text-decoration:none;
    font:500 14.5px/1 Poppins, sans-serif; box-shadow:0 12px 22px rgba(0,40,85,.25);
    transition:transform .12s ease, filter .2s ease;
  }
  .svc-btn:hover{ transform:translateY(-2px); filter:saturate(112%); }
  .svc-btn-lg{ padding:14px 22px; font-size:16px; }

  /* Gallery */
  .svc-gallery{
    display:grid; gap:14px; grid-template-columns:1fr 1fr 1fr; margin:26px 0 6px;
  }
  .svc-fig{
    margin:0; border-radius:14px; overflow:hidden; border:1px solid rgba(2,6,23,.06); box-shadow:0 8px 18px rgba(2,6,23,.06);
    background:#f6f8fc;
  }
  .svc-fig img{ width:100%; height:220px; object-fit:cover; display:block; }
  .svc-fig figcaption{ padding:10px 12px; font:400 14px/1.6 Poppins, sans-serif; color:#334155; }

  /* FAQs */
  .svc-faqs{ max-width:980px; margin:20px auto 0; }
  .svc-faq{
    background:#fff; border:1px solid rgba(2,6,23,.08); border-radius:12px; padding:14px 16px; margin-bottom:10px;
  }
  .svc-faq summary{
    cursor:pointer; font:500 15px/1.5 Poppins, sans-serif; color:#0f1f3a; outline:none;
  }
  .svc-faq div{ font:400 14.5px/1.75 Poppins, sans-serif; color:#334155; padding-top:8px; }

  /* CTA bottom */
  .svc-cta{ text-align:center; margin:20px 0 36px; }

  /* -------------------- RESPONSIVE -------------------- */
  /* Large tablets and down */
  @media (max-width: 1024px){
    .svc-hero-img{ height:380px; }
    .svc-intro{ grid-template-columns: 1fr; }
  }

  /* Tablets and large phones */
  @media (max-width: 820px){
    .svc-hero-img{ height:340px; }
    .svc-gallery{ grid-template-columns:1fr 1fr; }
  }

  /* Phones */
  @media (max-width: 560px){
    .svc-hero{ border-radius:12px; }
    .svc-hero-img{ height:300px; }
    .svc-sub{ padding:0 6px; }
    .svc-gallery{ grid-template-columns:1fr; }
    .svc-btn, .svc-btn-lg{ width:100%; text-align:center; }
  }

  /* Small phones (<=360px) */
  @media (max-width: 360px){
    .svc-hero-img{ height:260px; }
    .svc-kicker{ font-size:12px; letter-spacing:.2em; }
    .svc-title{ font-size:26px; }
  }

  /* High DPI sharpening for images */
  @media (min-resolution: 2dppx){
    .svc-hero-img{ image-rendering:auto; }
  }

  /* Respect reduced motion */
  @media (prefers-reduced-motion: reduce){
    .svc-btn{ transition:none; }
  }
</style>
