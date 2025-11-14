<!-- PHLEBOTOMY PAGE: HERO + CONTENT -->
<section class="svc-phleb">

  <!-- HERO SECTION -->
  <div class="svc-hero">
    <img src="{{ asset('assets/images/p2.png') }}" alt="Mobile phlebotomy professional drawing blood at home" class="svc-hero-img">

    <div class="svc-hero-overlay"></div>

    <div class="svc-hero-text">
      <div>
        <p class="svc-kicker">EmmaGenix Services</p>
        <h1 class="svc-hero-title">Phlebotomy Services</h1>
        <p class="svc-hero-sub">
          Professional, reliable blood draws—delivered where you are. Skip the waiting room and let our certified team come
          to your home, office, or care facility with hospital-grade standards.
        </p>
      </div>
    </div>
  </div>

  <!-- MAIN CONTAINER -->
  <div class="svc-container">

    <div class="svc-intro">

      <div>
        <h2 class="svc-heading">
          <span class="black">Mobile Phlebotomy,</span>
          <span class="gradient">On Your Schedule</span>
        </h2>

        <p class="svc-text">
          Our Mobile Phlebotomy Service brings professional, reliable blood draw services directly to your home, workplace, or
          healthcare facility. No long lines — we come to you with everything needed for a clean and comfortable draw.
        </p>

        <p class="svc-text">
          Every visit follows strict safety and labeling protocols. Results are routed to your preferred laboratory or provider,
          including Quest Diagnostics, LabCorp, and other partnered labs.
        </p>

        <ul class="svc-list">
          <li>
            <span class="svc-bullet"></span>
            <span>Pediatric, adult, and senior-friendly care with gentle techniques and extra time for comfort.</span>
          </li>
          <li>
            <span class="svc-bullet"></span>
            <span>Routine blood work, physician-ordered panels, and wellness testing (fasting or non-fasting).</span>
          </li>
          <li>
            <span class="svc-bullet"></span>
            <span>Lab test collections and courier drop-off to Quest, LabCorp & more — paperwork handled for you.</span>
          </li>
        </ul>
      </div>

      <!-- SIDE CARD -->
      <aside class="svc-side">
        <h3 class="svc-side-title">What to Expect</h3>
        <ol class="svc-steps">
          <li>Book a time window that works for you.</li>
          <li>Our phlebotomist arrives with all sterile supplies.</li>
          <li>Quick ID & order verification; gentle blood draw.</li>
          <li>Samples labeled & delivered to your lab.</li>
          <li>Results go to your provider or patient portal.</li>
        </ol>

        <a href="#book" class="svc-btn">Book Mobile Draw</a>
      </aside>
    </div>
  </div>

  <!-- GALLERY -->
  <div class="svc-gallery">
    <div class="svc-gallery-grid">

      <figure class="svc-fig">
        <img src="{{ asset('assets/images/p1.png') }}" class="svc-fig-img">
        <figcaption class="svc-fig-cap">At-home convenience with clinical standards.</figcaption>
      </figure>

      <figure class="svc-fig">
        <img src="{{ asset('assets/images/p3.png') }}" class="svc-fig-img">
        <figcaption class="svc-fig-cap">Secure labeling and tracked transport to your lab.</figcaption>
      </figure>

      <figure class="svc-fig">
        <img src="{{ asset('assets/images/p4.png') }}" class="svc-fig-img">
        <figcaption class="svc-fig-cap">Pediatric to senior-care: gentle, patient-first approach.</figcaption>
      </figure>

    </div>
  </div>

  <!-- FAQ -->
  <div class="svc-faq">
    <details class="svc-faq-item">
      <summary>Do I need a doctor’s order?</summary>
      <div>For most tests, yes. Wellness screenings may be available without a doctor’s order depending on your location.</div>
    </details>

    <details class="svc-faq-item">
      <summary>Which labs do you support?</summary>
      <div>We collect for Quest Diagnostics, LabCorp, and many regional labs.</div>
    </details>

    <details class="svc-faq-item">
      <summary>How should I prepare?</summary>
      <div>Follow your provider’s instructions (such as fasting). Stay hydrated and keep your ID/order ready.</div>
    </details>
  </div>

  <!-- CTA -->
  <div class="svc-cta">
    <a href="#book" class="svc-btn-lg">Schedule a Mobile Blood Draw</a>
  </div>
</section>

<!-- RESPONSIVE CSS -->
<style>
  .svc-phleb { padding-top:18px; font-family:'Poppins', sans-serif; }

  /* HERO */
  .svc-hero {
    position:relative;
    border-radius:18px;
    max-width:1100px;
    margin:0 auto 28px;
    overflow:hidden;
  }

  .svc-hero-img {
    width:100%;
    height:420px;
    object-fit:cover;
  }

  /* RESPONSIVE HERO HEIGHT */
  @media (max-width:768px){
    .svc-hero-img { height:320px; }
  }
  @media (max-width:480px){
    .svc-hero-img { height:250px; }
  }

  .svc-hero-overlay {
    position:absolute;
    inset:0;
    background:linear-gradient(180deg,rgba(10,18,36,.55),rgba(10,18,36,.55));
  }

  .svc-hero-text {
    position:absolute; inset:0;
    display:grid; place-items:center;
    text-align:center; color:#fff;
    padding:24px;
  }

  .svc-kicker { margin-bottom:6px; letter-spacing:.25em; font-size:13px; }

  .svc-hero-title {
    font-weight:500;
    font-size:clamp(28px,6vw,52px);
    margin:0;
  }

  .svc-hero-sub {
    max-width:760px;
    margin:12px auto 0;
    font-size:clamp(14px,2vw,17px);
    opacity:.95;
  }

  /* MAIN CONTENT */
  .svc-container { max-width:1100px; margin:auto; padding:0 16px; }

  .svc-intro {
    display:grid;
    grid-template-columns:1.2fr .8fr;
    gap:28px;
  }

  @media (max-width:920px){
    .svc-intro { grid-template-columns:1fr; }
  }

  .svc-heading { font-size:26px; line-height:1.25; }
  .gradient { background:linear-gradient(135deg,#00c291,#00b0b9);
              -webkit-background-clip:text; -webkit-text-fill-color:transparent; }

  .svc-text { font-size:16px; line-height:1.8; color:#24324a; margin-bottom:12px; }

  .svc-list { list-style:none; padding:0; display:grid; gap:10px; }
  .svc-list li { display:flex; gap:10px; }
  .svc-bullet {
    width:10px; height:10px; border-radius:50%;
    background:linear-gradient(135deg,#001F3F,#00509E); margin-top:8px;
  }

  /* CARD */
  .svc-side {
    background:#fff; padding:18px; border-radius:14px;
    border:1px solid rgba(2,6,23,.06);
    box-shadow:0 10px 24px rgba(2,6,23,.06);
  }

  .svc-side-title { font-size:18px; margin-bottom:8px; }

  .svc-steps { font-size:14.5px; line-height:1.8; padding-left:18px; }

  .svc-btn, .svc-btn-lg {
    display:inline-block;
    padding:12px 16px;
    border-radius:10px;
    background:linear-gradient(135deg,#001F3F,#00509E);
    color:#fff; text-decoration:none;
    font-size:14.5px; font-weight:500;
    box-shadow:0 12px 22px rgba(0,40,85,.25);
  }

  .svc-btn-lg {
    padding:14px 22px;
    font-size:16px;
    border-radius:12px;
  }

  /* GALLERY */
  .svc-gallery { max-width:1100px; margin:26px auto 6px; padding:0 16px; }
  .svc-gallery-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:14px; }

  @media (max-width:768px){
    .svc-gallery-grid { grid-template-columns:1fr; }
  }

  .svc-fig { border-radius:14px; overflow:hidden; box-shadow:0 8px 18px rgba(2,6,23,.06); }
  .svc-fig-img { width:100%; height:220px; object-fit:cover; }
  .svc-fig-cap { padding:10px 12px; font-size:14px; }

  /* FAQ */
  .svc-faq { max-width:980px; margin:20px auto; padding:0 16px; }
  .svc-faq-item {
    background:#fff;
    border:1px solid rgba(2,6,23,.08);
    border-radius:12px;
    padding:14px 16px;
    margin-bottom:10px;
  }
  .svc-faq-item summary { cursor:pointer; font-weight:500; }

  /* CTA */
  .svc-cta { text-align:center; margin:30px auto 40px; }
</style>
