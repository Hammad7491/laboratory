{{-- resources/views/bundles/section1.blade.php --}}

<section class="eg-bundles">

  <!-- HERO -->
  <div class="egb-hero">
    <img
      src="https://images.pexels.com/photos/8460035/pexels-photo-8460035.jpeg?auto=compress&cs=tinysrgb&w=1600"
      alt="Medical professional preparing wellness and diagnostic kits"
      class="egb-hero-img">

    <div class="egb-hero-overlay"></div>

    <div class="egb-hero-inner">
      <p class="egb-kicker">Service Bundles</p>

      <h1 class="egb-title">Complete Care Packages</h1>

      <p class="egb-sub">
        Personalized medical bundles designed for wellness, diagnostics, employment screening, and full family care.
      </p>
    </div>
  </div>

  <!-- GRID -->
  <div class="egb-wrap">
    <div class="egb-grid">

      <!-- 1 -->
      <article class="egb-card">
        <div class="egb-pill">Health & Wellness</div>
        <h2>Health & Wellness Package</h2>
        <p class="egb-desc">A preventive health pack to monitor yearly wellness and routine medical care.</p>

        <ul class="egb-list">
          <li>Annual Screening Labs</li>
          <li>COVID-19 Test</li>
          <li>Vital Sign Check</li>
          <li>Routine Lab Work</li>
        </ul>
      </article>

      <!-- 2 -->
      <article class="egb-card">
        <div class="egb-pill">Employment</div>
        <h2>Employment & Compliance Package</h2>
        <p class="egb-desc">Essential screenings for employment, transportation, and regulated industries.</p>

        <ul class="egb-list">
          <li>Pre-Employment Screening</li>
          <li>DOT / Drug Testing</li>
          <li>Fingerprinting</li>
          <li>Background Checks</li>
        </ul>
      </article>

      <!-- 3 -->
      <article class="egb-card">
        <div class="egb-pill">Rejuvenation</div>
        <h2>Wellness & Rejuvenation</h2>
        <p class="egb-desc">Revitalize your energy and hydration with our focused wellness treatments.</p>

        <ul class="egb-list">
          <li>Vitamin Panel Draw</li>
          <li>IV Hydration Therapy</li>
        </ul>
      </article>

      <!-- 4 -->
      <article class="egb-card">
        <div class="egb-pill">Genetics</div>
        <h2>Genetics & Ancestry</h2>
        <p class="egb-desc">Accurate DNA and ancestry collections done with professional chain-of-custody.</p>

        <ul class="egb-list">
          <li>DNA Testing</li>
          <li>Ancestry Tests</li>
          <li>Paternity Tests</li>
        </ul>
      </article>

      <!-- 5 -->
      <article class="egb-card egb-primary">
        <div class="egb-pill egb-pill-primary">Premium</div>
        <h2>Premium All-In-One Bundle</h2>
        <p class="egb-desc">
          A complete package combining wellness, genetic, diagnostic and employment services.
        </p>

        <ul class="egb-list">
          <li>All services from every bundle</li>
          <li>Top choice for families & executives</li>
          <li>Corporate health & compliance ready</li>
        </ul>
      </article>

    </div>
  </div>

  <!-- CTA -->
  <div class="egb-cta">
    <div class="egb-wrap egb-cta-inner">
      <h3>Need a personalized bundle?</h3>
      <p>We create tailored packages for families, care facilities, and corporate teams.</p>
      <a href="{{ route('contactus') }}" class="egb-btn">Request Custom Package</a>
    </div>
  </div>

</section>


<style>

  .eg-bundles{
    --navy:#001F3F;
    --teal:#00b894;
    --cyan:#00c2ff;
    --ink:#15233c;
    --grad:linear-gradient(135deg,#00b894,#00c2ff);

    font-family:'Poppins', sans-serif;
    color:var(--ink);
    padding:26px 0 40px;
    background:#f4f7ff;
  }

  .egb-wrap{
    max-width:1100px;
    margin:0 auto;
    padding:0 18px;
  }

  /* HERO */
  .egb-hero{
    position:relative;
    border-radius:22px;
    overflow:hidden;
    max-width:1100px;
    margin:20px auto;
    box-shadow:0 14px 40px rgba(0,40,85,.15);
  }

  .egb-hero-img{
    width:100%;
    height:420px;
    object-fit:cover;
    filter:saturate(108%) brightness(1.08);
  }

  .egb-hero-overlay{
    position:absolute;
    inset:0;
    background:linear-gradient(180deg, rgba(10,20,40,0.45), rgba(10,20,40,0.55));
  }

  .egb-hero-inner{
    position:absolute;
    inset:0;
    display:grid;
    place-items:center;
    text-align:center;
    color:#fff;
    padding:22px;
  }

  .egb-kicker{
    font-size:12px;
    letter-spacing:.25em;
    text-transform:uppercase;
    opacity:.85;
  }

  .egb-title{
    font-size:clamp(32px,6vw,52px);
    font-weight:800;
    margin:4px 0;
  }

  .egb-sub{
    max-width:700px;
    margin:8px auto 0;
    font-size:15.5px;
    opacity:.95;
  }

  /* GRID */
  .egb-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(260px,1fr));
    gap:24px;
    margin-top:30px;
  }

  .egb-card{
    background:#fff;
    border:1px solid rgba(2,6,23,.06);
    border-radius:20px;
    padding:20px 18px;
    box-shadow:0 16px 34px rgba(2,6,23,.06);
    transition:.22s ease;
  }

  .egb-card:hover{
    transform:translateY(-5px);
    box-shadow:0 24px 45px rgba(2,6,23,.14);
  }

  .egb-pill{
    display:inline-block;
    padding:7px 13px;
    background:#e2f1ff;
    border-radius:999px;
    font-size:11px;
    text-transform:uppercase;
    font-weight:600;
    letter-spacing:.12em;
    margin-bottom:10px;
    color:var(--navy);
  }

  .egb-pill-primary{
    background:var(--grad);
    color:#fff;
    box-shadow:0 8px 18px rgba(0,194,255,.35);
  }

  .egb-card h2{
    font-size:20px;
    font-weight:700;
    margin-bottom:6px;
    color:#0a1b37;
  }

  .egb-desc{
    color:#58627a;
    font-size:14.8px;
    margin-bottom:12px;
  }

  .egb-list{
    list-style:none;
    display:grid;
    gap:7px;
    margin:0;
    padding:0;
    color:#24334f;
    font-size:14.5px;
  }

  .egb-list li::before{
    content:"•";
    font-weight:900;
    color:var(--teal);
    margin-right:6px;
  }

  .egb-primary{
    border-color:rgba(0,194,255,.35);
    background:radial-gradient(circle at 0 0, rgba(0,194,255,.18), transparent 50%) #fff;
  }

  /* CTA */
  .egb-cta{
    background:var(--navy);
    border-radius:18px;
    margin-top:40px;
    box-shadow:0 18px 40px rgba(0,40,85,.25);
  }

  .egb-cta-inner{
    text-align:center;
    color:#fff;
    padding:28px 0;
  }

  .egb-btn{
    display:inline-block;
    padding:13px 22px;
    border-radius:14px;
    background:var(--grad);
    color:#001F3F;
    font-weight:700;
    text-decoration:none;
    box-shadow:0 14px 28px rgba(0,40,85,.25);
  }

  .egb-btn:hover{
    filter:saturate(115%);
  }

  @media (max-width:520px){
    .egb-hero-img{height:320px;}
    .egb-card{padding:16px;}
  }

</style>
