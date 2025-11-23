<!-- COVID-19 TEST PAGE: HERO + CONTENT -->
<section class="svc-covid">

  <!-- HERO -->
  <div class="svc-hero">
    <img
      src="https://images.pexels.com/photos/5863389/pexels-photo-5863389.jpeg?auto=compress&cs=tinysrgb&w=1600"
      alt="Healthcare professional collecting a nasal swab for COVID-19 test"
      class="svc-hero-img">

    <div class="svc-hero-overlay"></div>

    <div class="svc-hero-text">
      <div>
        <p class="svc-kicker">EmmaGenix Services</p>

        <h1 class="svc-title">COVID-19 Testing &amp; Collection</h1>

        <p class="svc-sub">
          Mobile &amp; on-site PCR and Rapid Antigen collection with certified handling and fast,
          secure result routing to your provider, portal, or employer.
        </p>
      </div>
    </div>
  </div>

  <!-- CONTENT -->
  <div class="svc-container">

    <div class="svc-intro">
      <div>

        <h2 class="svc-heading">
          <span class="dark">Mobile COVID-19</span>
          <span class="gradient">Testing</span>
          <span class="dark">, On Your Schedule</span>
        </h2>

        <p class="svc-text">
          We collect samples where you are—home, office, school, or event—so you avoid long lines and last-minute stress.
          Our team follows strict identity checks, labeling, and chain-of-custody procedures.
        </p>

        <p class="svc-text">
          Choose <strong>Rapid Antigen</strong> for fast screening or <strong>PCR</strong> for travel, surgery,
          and diagnostic confirmation. Results are routed securely to your provider or employer.
        </p>

        <ul class="svc-list">
          <li><span class="dot"></span><span><strong>PCR & Rapid Antigen</strong> (nasal, per lab protocol)</span></li>
          <li><span class="dot"></span><span><strong>Certified handling</strong> and chain-of-custody compliance</span></li>
          <li><span class="dot"></span><span><strong>Employer & travel</strong> documentation support</span></li>
        </ul>
      </div>

      <!-- SIDE CARD -->
      <aside class="svc-side">
        <h3 class="svc-side-title">What to Expect</h3>

        <ol class="svc-steps">
          <li>Book the window that works for you.</li>
          <li>ID & consent checks; gentle collection.</li>
          <li>Specimens labeled, stored & couriered.</li>
          <li>Results sent to provider / portal / employer.</li>
        </ol>

        <a href="#book" class="svc-btn">Book Appointment</a>
      </aside>
    </div>
  </div>

  <!-- GALLERY -->
  <div class="svc-gallery">
    <div class="svc-gallery-grid">

      <figure class="svc-fig">
        <img src="{{ asset('assets/images/covid1.jpg') }}"
             class="svc-fig-img">
        <figcaption class="svc-fig-cap">Gentle, lab-protocol nasal swab collection.</figcaption>
      </figure>

      <figure class="svc-fig">
        <img src="https://images.pexels.com/photos/4031867/pexels-photo-4031867.jpeg?auto=compress&cs=tinysrgb&w=1200"
             class="svc-fig-img">
        <figcaption class="svc-fig-cap">PCR for travel, surgery, and diagnostics.</figcaption>
      </figure>

      <figure class="svc-fig">
        <img src="https://images.pexels.com/photos/3952234/pexels-photo-3952234.jpeg?auto=compress&cs=tinysrgb&w=1200"
             class="svc-fig-img">
        <figcaption class="svc-fig-cap">Secure labeling & tracked courier delivery.</figcaption>
      </figure>

    </div>
  </div>

  <!-- FAQ -->
  <div class="svc-faq">

    <details class="faq-item">
      <summary>Which test should I choose—Rapid Antigen or PCR?</summary>
      <div>Antigen is fast screening. PCR is required for travel, pre-op and clinical confirmation.</div>
    </details>

    <details class="faq-item">
      <summary>How quickly will I get results?</summary>
      <div>Antigen is usually same-day. PCR is typically 24–48 hours depending on the lab.</div>
    </details>

    <details class="faq-item">
      <summary>What should I prepare?</summary>
      <div>Bring ID, provider order, consent and travel documents. Avoid nasal sprays before collection.</div>
    </details>

  </div>

  <!-- CTA -->
  <div class="svc-cta">
    <a href="#book" class="svc-btn-lg">Schedule COVID-19 Collection</a>
  </div>

</section>

<!-- RESPONSIVE CSS -->
<style>

  /* GENERAL */
  .svc-covid { padding-top:18px; font-family:'Poppins', sans-serif; }
  .svc-container { max-width:1100px; margin:auto; padding:0 16px; }

  /* HERO */
  .svc-hero {
    position:relative;
    max-width:1100px;
    margin:0 auto 28px;
    border-radius:18px;
    overflow:hidden;
  }

  .svc-hero-img {
    width:100%;
    height:420px;
    object-fit:cover;
    filter:saturate(104%);
  }

  @media (max-width:768px){
    .svc-hero-img { height:320px; }
  }
  @media (max-width:480px){
    .svc-hero-img { height:250px; }
  }

  .svc-hero-overlay {
    position:absolute; inset:0;
    background:linear-gradient(180deg,rgba(10,18,36,.55),rgba(10,18,36,.55));
  }

  .svc-hero-text {
    position:absolute; inset:0;
    color:#fff; display:grid; place-items:center;
    text-align:center; padding:24px;
  }

  .svc-kicker { letter-spacing:.25em; text-transform:uppercase; font-size:13px; }

  .svc-title {
    margin:0;
    font-size:clamp(32px,6vw,56px);
    font-weight:500;
  }

  .svc-sub {
    max-width:760px;
    margin:12px auto 0;
    font-size:clamp(14px,2vw,17px);
  }

  /* CONTENT GRID */
  .svc-intro {
    display:grid;
    grid-template-columns:1.2fr .8fr;
    gap:28px;
    align-items:start;
  }

  @media (max-width:920px){
    .svc-intro { grid-template-columns:1fr; }
  }

  .svc-heading { font-size:26px; margin-bottom:12px; }
  .dark { color:#0f1f3a; }
  .gradient {
    background:linear-gradient(135deg,#00b894,#00c2ff);
    -webkit-background-clip:text; -webkit-text-fill-color:transparent;
  }

  .svc-text { font-size:16px; color:#24324a; line-height:1.8; }

  /* BULLET LIST */
  .svc-list { list-style:none; padding:0; margin-top:16px; display:grid; gap:12px; }
  .svc-list li { display:flex; gap:10px; }
  .dot {
    width:10px; height:10px; margin-top:7px;
    border-radius:50%;
    background:linear-gradient(135deg,#06b6d4,#7c3aed);
  }

  /* SIDE CARD */
  .svc-side {
    background:#fff;
    padding:18px;
    border-radius:14px;
    border:1px solid rgba(2,6,23,.06);
    box-shadow:0 10px 24px rgba(2,6,23,.06);
  }

  .svc-side-title { font-size:18px; margin-bottom:8px; }

  .svc-steps {
    padding-left:18px;
    font-size:14.5px;
    line-height:1.8;
    color:#23304a;
  }

  .svc-btn {
    display:inline-block;
    margin-top:12px;
    padding:12px 16px;
    border-radius:10px;
    background:linear-gradient(135deg,#001F3F,#00509E);
    color:#fff; text-decoration:none;
    box-shadow:0 12px 22px rgba(0,40,85,.25);
    font-size:14.5px;
  }

  /* GALLERY */
  .svc-gallery { max-width:1100px; margin:26px auto; padding:0 16px; }

  .svc-gallery-grid {
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:14px;
  }

  @media (max-width:768px){
    .svc-gallery-grid { grid-template-columns:1fr; }
  }

  .svc-fig { border-radius:14px; overflow:hidden; box-shadow:0 8px 18px rgba(2,6,23,.06); }
  .svc-fig-img { width:100%; height:220px; object-fit:cover; }
  .svc-fig-cap { padding:10px 12px; font-size:14px; }

  /* FAQ */
  .svc-faq { max-width:980px; margin:20px auto; padding:0 16px; }

  .faq-item {
    background:#fff;
    border:1px solid rgba(2,6,23,.08);
    border-radius:12px;
    padding:14px 16px;
    margin-bottom:12px;
  }

  .faq-item summary { cursor:pointer; font-weight:500; color:#0f1f3a; }
  .faq-item div { margin-top:8px; font-size:14.5px; color:#334155; line-height:1.75; }

  /* CTA */
  .svc-cta { text-align:center; margin:20px auto 40px; }
  .svc-btn-lg {
    display:inline-block;
    padding:14px 22px;
    border-radius:12px;
    background:linear-gradient(135deg,#001F3F,#00509E);
    color:#fff; text-decoration:none;
    font-size:16px;
    box-shadow:0 14px 28px rgba(0,40,85,.28);
  }

</style>
