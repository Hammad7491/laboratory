<!-- BACKGROUND CHECK PAGE: HERO + CONTENT -->
<section class="svc-bgc">

  <!-- HERO -->
  <div class="svc-hero">
    <img
      src="https://images.pexels.com/photos/8112191/pexels-photo-8112191.jpeg?auto=compress&cs=tinysrgb&w=1600"
      alt="Background screening and identity verification"
      class="svc-hero-img">

    <div class="svc-hero-overlay"></div>

    <div class="svc-hero-text">
      <div>
        <p class="svc-kicker">EmmaGenix Services</p>
        <h1 class="svc-title">Background Check &amp; Screening</h1>
        <p class="svc-sub">
          Identity verification and compliant screenings for hiring, licensing, credentialing, and placement—organized,
          accurate, and handled with care.
        </p>
      </div>
    </div>
  </div>

  <!-- BODY -->
  <div class="svc-container">
    <div class="svc-intro">

      <div>
        <!-- Dual-color headline -->
        <h2 class="svc-heading">
          <span class="dark">Reliable, Compliant</span>
          <span class="gradient">Background Screening</span>
          <span class="dark">for Teams &amp; Talent</span>
        </h2>

        <p class="svc-text">
          From identity and right-to-work checks to drug testing coordination and credential verification, we streamline
          onboarding while maintaining strict documentation, privacy, and chain-of-custody where required.
        </p>

        <p class="svc-text">
          We partner with compliant data providers and labs to deliver clean, auditable records. Our mobile team can
          visit your office for bulk hires or meet individual candidates on site.
        </p>

        <ul class="svc-list">
          <li>
            <span class="dot"></span>
            <span>Identity verification, employment/education checks, and credential validation</span>
          </li>
          <li>
            <span class="dot"></span>
            <span>Drug testing &amp; medicals coordination (pre-employment / compliance programs)</span>
          </li>
          <li>
            <span class="dot"></span>
            <span>Clear audit trail, privacy protection, and document management</span>
          </li>
        </ul>
      </div>

      <!-- SIDE CARD -->
      <aside class="svc-side">
        <h3 class="svc-side-title">How It Works</h3>
        <ol class="svc-steps">
          <li>Share your screening package &amp; candidate list.</li>
          <li>We verify identity and collect required consents.</li>
          <li>Checks are performed with compliant data partners.</li>
          <li>Results and documents delivered securely to HR.</li>
        </ol>
        <a href="{{ route('contactus') }}" class="svc-btn">
          Request Screening Setup
        </a>
      </aside>
    </div>
  </div>

  <!-- IMAGE STRIP (3 PICS) -->
  <div class="svc-gallery">
    <div class="svc-gallery-grid">
      <figure class="svc-fig">
        <img
          src="{{ asset('assets/images/back1.png') }}"
          alt="Fingerprint scan for identity verification"
          class="svc-fig-img">
        <figcaption class="svc-fig-cap">
          Identity &amp; right-to-work verification.
        </figcaption>
      </figure>

      <figure class="svc-fig">
        <img
          src="{{ asset('assets/images/back2.png') }}"
          alt="Document review for background screening"
          class="svc-fig-img">
        <figcaption class="svc-fig-cap">
          Credentials and document validation.
        </figcaption>
      </figure>

      <figure class="svc-fig">
        <img
          src="{{ asset('assets/images/back3.png') }}"
          alt="Team onboarding success"
          class="svc-fig-img">
        <figcaption class="svc-fig-cap">
          Faster onboarding with clean, auditable records.
        </figcaption>
      </figure>
    </div>
  </div>

  <!-- FAQS -->
  <div class="svc-faq">
    <details class="faq-item">
      <summary>Which checks can you run?</summary>
      <div>
        Packages can include identity &amp; right-to-work, employment &amp; education verification, credential/license
        checks, references, and drug testing coordination. We’ll tailor the bundle to your policy and industry.
      </div>
    </details>

    <details class="faq-item">
      <summary>How do you handle privacy?</summary>
      <div>
        We follow strict consent, data-minimization, and retention policies. Results are delivered securely to authorized
        HR contacts only, and we maintain a clear audit trail.
      </div>
    </details>

    <details class="faq-item">
      <summary>Can you support bulk hiring events?</summary>
      <div>
        Yes—our mobile team can come to your office or event site, collect consents and documents, and coordinate any
        required testing to accelerate onboarding.
      </div>
    </details>
  </div>

  <!-- CTA -->
  <div class="svc-cta">
    <a href="{{ route('contactus') }}" class="svc-btn-lg">
      Start Background Screening
    </a>
  </div>
</section>

<!-- PAGE-SCOPED RESPONSIVE CSS -->
<style>
  .svc-bgc {
    padding-top:18px;
    font-family:'Poppins', sans-serif;
  }

  /* HERO */
  .svc-hero {
    position:relative;
    overflow:hidden;
    border-radius:18px;
    max-width:1100px;
    margin:0 auto 28px;
  }

  .svc-hero-img {
    width:100%;
    height:420px;
    object-fit:cover;
    display:block;
    filter:saturate(104%);
  }

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
    position:absolute;
    inset:0;
    display:grid;
    place-items:center;
    text-align:center;
    color:#fff;
    padding:24px;
  }

  .svc-kicker {
    margin:0 0 6px;
    letter-spacing:.25em;
    text-transform:uppercase;
    font:500 13px/1.2 Poppins, sans-serif;
  }

  .svc-title {
    margin:0;
    font:500 clamp(32px,6vw,56px)/1.05 Poppins, sans-serif;
  }

  .svc-sub {
    max-width:760px;
    margin:12px auto 0;
    font:400 clamp(14px,2vw,17px)/1.6 Poppins, sans-serif;
    opacity:.95;
  }

  /* BODY */
  .svc-container {
    max-width:1100px;
    margin:0 auto;
    padding:0 16px;
  }

  .svc-intro {
    display:grid;
    grid-template-columns:1.2fr .8fr;
    gap:28px;
    align-items:start;
  }

  @media (max-width:920px){
    .svc-intro { grid-template-columns:1fr; }
  }

  .svc-heading {
    font:500 26px/1.25 Poppins, sans-serif;
    margin:0 0 10px;
  }

  .dark { color:#0f1f3a; }

  .gradient {
    background:linear-gradient(135deg,#00b894 0%, #00c2ff 100%);
    -webkit-background-clip:text;
    background-clip:text;
    -webkit-text-fill-color:transparent;
  }

  .svc-text {
    font:400 16px/1.8 Poppins, sans-serif;
    color:#24324a;
    margin:0 0 12px;
  }

  .svc-list {
    list-style:none;
    padding:0;
    margin:16px 0 0;
    display:grid;
    gap:10px;
  }

  .svc-list li {
    display:flex;
    gap:10px;
    align-items:flex-start;
  }

  .dot {
    width:10px;
    height:10px;
    border-radius:50%;
    background:linear-gradient(135deg,#06b6d4,#7c3aed);
    margin-top:8px;
    flex-shrink:0;
  }

  /* SIDE CARD */
  .svc-side {
    background:#fff;
    border:1px solid rgba(2,6,23,.06);
    border-radius:14px;
    padding:18px;
    box-shadow:0 10px 24px rgba(2,6,23,.06);
  }

  .svc-side-title {
    font:500 18px/1.4 Poppins, sans-serif;
    color:#0f1f3a;
    margin:0 0 8px;
  }

  .svc-steps {
    margin:0;
    padding-left:18px;
    font:400 14.5px/1.8 Poppins, sans-serif;
    color:#23304a;
  }

  .svc-btn {
    display:inline-block;
    margin-top:12px;
    padding:12px 16px;
    border-radius:10px;
    background:linear-gradient(135deg,#001F3F,#00509E);
    color:#fff;
    text-decoration:none;
    font:500 14.5px/1 Poppins, sans-serif;
    box-shadow:0 12px 22px rgba(0,40,85,.25);
  }

  /* GALLERY */
  .svc-gallery {
    max-width:1100px;
    margin:26px auto 6px;
    padding:0 16px;
  }

  .svc-gallery-grid {
    display:grid;
    gap:14px;
    grid-template-columns:1fr 1fr 1fr;
  }

  @media (max-width:768px){
    .svc-gallery-grid { grid-template-columns:1fr; }
  }

  .svc-fig {
    margin:0;
    border-radius:14px;
    overflow:hidden;
    border:1px solid rgba(2,6,23,.06);
    box-shadow:0 8px 18px rgba(2,6,23,.06);
  }

  .svc-fig-img {
    width:100%;
    height:220px;
    object-fit:cover;
  }

  .svc-fig-cap {
    padding:10px 12px;
    font:400 14px/1.6 Poppins, sans-serif;
    color:#334155;
  }

  /* FAQS */
  .svc-faq {
    max-width:980px;
    margin:20px auto 0;
    padding:0 16px;
  }

  .faq-item {
    background:#fff;
    border:1px solid rgba(2,6,23,.08);
    border-radius:12px;
    padding:14px 16px;
    margin-bottom:10px;
  }

  .faq-item summary {
    cursor:pointer;
    font:500 15px/1.5 Poppins, sans-serif;
    color:#0f1f3a;
  }

  .faq-item div {
    font:400 14.5px/1.75 Poppins, sans-serif;
    color:#334155;
    padding-top:8px;
  }

  /* CTA */
  .svc-cta {
    max-width:980px;
    margin:20px auto 36px;
    padding:0 16px;
    text-align:center;
  }

  .svc-btn-lg {
    display:inline-block;
    padding:14px 22px;
    border-radius:12px;
    background:linear-gradient(135deg,#001F3F,#00509E);
    color:#fff;
    text-decoration:none;
    font:500 16px/1 Poppins, sans-serif;
    box-shadow:0 14px 28px rgba(0,40,85,.28);
    transition:transform .12s ease, filter .2s ease;
  }
</style>
