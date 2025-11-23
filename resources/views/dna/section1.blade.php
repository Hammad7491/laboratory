<!-- DNA TEST SERVICE PAGE -->
<section class="svc-dna">

  <!-- HERO -->
  <div class="dna-hero">
    <img
      src="https://images.pexels.com/photos/2280547/pexels-photo-2280547.jpeg?auto=compress&cs=tinysrgb&w=1600"
      alt="Digital visualization of a DNA double helix"
      class="dna-hero-img">

    <div class="dna-hero-overlay"></div>

    <div class="dna-hero-text">
      <div>
        <p class="dna-kicker">EmmaGenix Services</p>
        <h1 class="dna-title">DNA Testing &amp; Genetic Insights</h1>
        <p class="dna-sub">
          Fast, confidential, and accurate DNA testing for parentage, ancestry, immigration, and legal verification —
          processed in certified laboratories.
        </p>
      </div>
    </div>
  </div>

  <!-- MAIN CONTENT -->
  <div class="dna-wrap">
    <div class="dna-grid">
      <div>
        <h2 class="dna-heading">
          <span class="dna-dark">Accurate, Accredited</span>
          <span class="dna-gradient">DNA Testing</span>
          <span class="dna-dark">You Can Trust</span>
        </h2>

        <p class="dna-text">
          EmmaGenix provides reliable DNA collection and testing services conducted by AABB-accredited partner labs.
          Whether you need results for legal, immigration, or personal reasons, our trained clinicians ensure secure
          chain-of-custody and quick turnaround.
        </p>

        <p class="dna-text">
          Testing is simple, painless, and discreet—typically using a cheek swab collected at your home, clinic, or
          workplace. Results are delivered electronically or in sealed hard copy as you prefer.
        </p>

        <ul class="dna-list">
          <li>
            <span class="dna-dot"></span>
            <span>Legal paternity &amp; maternity verification</span>
          </li>
          <li>
            <span class="dna-dot"></span>
            <span>Ancestry, relationship, and sibling DNA testing</span>
          </li>
          <li>
            <span class="dna-dot"></span>
            <span>Immigration &amp; forensic DNA services (AABB compliant)</span>
          </li>
        </ul>
      </div>

      <!-- SIDE CARD -->
      <aside class="dna-side">
        <h3 class="dna-side-title">Available Tests</h3>
        <ol class="dna-steps">
          <li>Paternity / maternity verification</li>
          <li>Legal court-admissible DNA tests</li>
          <li>Immigration (AABB) &amp; relationship testing</li>
          <li>Genetic wellness and ancestry reports</li>
        </ol>
        <a href="{{ route('contactus') }}" class="dna-btn">
          Schedule DNA Test
        </a>
      </aside>
    </div>
  </div>

  <!-- DNA GALLERY -->
  <div class="dna-gallery-wrap">
    <div class="dna-gallery">

      <!-- Swab collection (now actually a swab) -->
      <figure class="dna-fig">
        <img
           src="{{ asset('assets/images/DNA.png') }}" 
          alt="Scientist analyzing DNA visualization on screen"
          class="dna-fig-img">
        <figcaption class="dna-fig-cap">
          Quick and painless cheek-swab DNA collection.
        </figcaption>
      </figure>

      <!-- DNA helix visualization -->
      <figure class="dna-fig">
        <img
          src="https://images.pexels.com/photos/2280547/pexels-photo-2280547.jpeg?auto=compress&cs=tinysrgb&w=1200"
          alt="DNA double helix digital structure"
          class="dna-fig-img">
        <figcaption class="dna-fig-cap">
          Advanced DNA analysis for clear genetic links.
        </figcaption>
      </figure>

      <!-- Lab sequencing / equipment (also DNA-related now) -->
      <figure class="dna-fig">
        <img
          src="{{ asset('assets/images/base.png') }}" 
          alt="Scientist working with DNA data in a modern lab"
          class="dna-fig-img">
        <figcaption class="dna-fig-cap">
          Certified lab processing for accurate, trusted results.
        </figcaption>
      </figure>

    </div>
  </div>

  <!-- FAQS -->
  <div class="dna-faq">
    <details class="dna-faq-item">
      <summary>Is the DNA test painful?</summary>
      <div>
        No—collection uses a simple cheek swab that is completely painless and safe for adults and children.
      </div>
    </details>

    <details class="dna-faq-item">
      <summary>Are the results legally valid?</summary>
      <div>
        Yes. For legal or immigration testing, we follow strict chain-of-custody procedures and work with AABB-accredited
        laboratories so reports are court-admissible where applicable.
      </div>
    </details>

    <details class="dna-faq-item">
      <summary>How long do results take?</summary>
      <div>
        Most DNA results are available within 3–5 business days, depending on the test type and lab processing times.
      </div>
    </details>
  </div>

  <!-- CTA -->
  <div class="dna-cta">
    <a href="{{ route('contactus') }}" class="dna-btn-lg">
      Book a DNA Test
    </a>
  </div>
</section>

<!-- PAGE-SCOPED RESPONSIVE CSS -->
<style>
  .svc-dna{
    padding-top:18px;
    font-family:'Poppins',sans-serif;
  }

  /* HERO */
  .dna-hero{
    position:relative;
    overflow:hidden;
    border-radius:18px;
    max-width:1100px;
    margin:0 auto 28px;
  }
  .dna-hero-img{
    width:100%;
    height:420px;
    object-fit:cover;
    display:block;
    filter:saturate(108%);
  }
  .dna-hero-overlay{
    position:absolute;
    inset:0;
    background:linear-gradient(180deg,rgba(10,18,36,.55),rgba(10,18,36,.55));
  }
  .dna-hero-text{
    position:absolute;
    inset:0;
    display:grid;
    place-items:center;
    text-align:center;
    color:#fff;
    padding:24px;
  }
  .dna-kicker{
    margin:0 0 6px;
    letter-spacing:.25em;
    text-transform:uppercase;
    font:500 13px/1.2 Poppins,sans-serif;
  }
  .dna-title{
    margin:0;
    font:500 clamp(32px,6vw,56px)/1.05 Poppins,sans-serif;
  }
  .dna-sub{
    max-width:760px;
    margin:12px auto 0;
    font:400 clamp(14px,2vw,17px)/1.6 Poppins,sans-serif;
    opacity:.95;
  }

  /* MAIN GRID */
  .dna-wrap{
    max-width:1100px;
    margin:0 auto;
    padding:0 16px;
  }
  .dna-grid{
    display:grid;
    grid-template-columns:1.2fr .8fr;
    gap:28px;
    align-items:flex-start;
  }
  @media (max-width:920px){
    .dna-grid{ grid-template-columns:1fr; }
  }

  .dna-heading{
    font:500 26px/1.25 Poppins,sans-serif;
    margin:0 0 10px;
  }
  .dna-dark{ color:#0f1f3a; }
  .dna-gradient{
    background:linear-gradient(135deg,#00b894 0%,#00c2ff 100%);
    -webkit-background-clip:text;
    background-clip:text;
    -webkit-text-fill-color:transparent;
    margin:0 .25rem;
    display:inline-block;
  }
  .dna-text{
    font:400 16px/1.8 Poppins,sans-serif;
    color:#24324a;
    margin:0 0 12px;
  }

  .dna-list{
    list-style:none;
    padding:0;
    margin:16px 0 0;
    display:grid;
    gap:10px;
  }
  .dna-list li{
    display:flex;
    gap:10px;
    align-items:flex-start;
  }
  .dna-dot{
    width:10px;
    height:10px;
    border-radius:50%;
    background:linear-gradient(135deg,#06b6d4,#7c3aed);
    margin-top:8px;
    flex-shrink:0;
  }

  /* SIDE CARD */
  .dna-side{
    background:#fff;
    border:1px solid rgba(2,6,23,.06);
    border-radius:14px;
    padding:18px;
    box-shadow:0 10px 24px rgba(2,6,23,.06);
  }
  .dna-side-title{
    font:500 18px/1.4 Poppins,sans-serif;
    color:#0f1f3a;
    margin:0 0 8px;
  }
  .dna-steps{
    margin:0;
    padding-left:18px;
    font:400 14.5px/1.8 Poppins,sans-serif;
    color:#23304a;
  }
  .dna-btn{
    display:inline-block;
    margin-top:12px;
    padding:12px 16px;
    border-radius:10px;
    background:linear-gradient(135deg,#001F3F,#00509E);
    color:#fff;
    text-decoration:none;
    font:500 14.5px/1 Poppins,sans-serif;
    box-shadow:0 12px 22px rgba(0,40,85,.25);
  }

  /* GALLERY */
  .dna-gallery-wrap{
    max-width:1100px;
    margin:26px auto 6px;
    padding:0 16px;
  }
  .dna-gallery{
    display:grid;
    gap:14px;
    grid-template-columns:repeat(3,1fr);
  }
  @media (max-width:768px){
    .dna-gallery{ grid-template-columns:1fr; }
  }
  .dna-fig{
    margin:0;
    border-radius:14px;
    overflow:hidden;
    border:1px solid rgba(2,6,23,.06);
    box-shadow:0 8px 18px rgba(2,6,23,.06);
  }
  .dna-fig-img{
    width:100%;
    height:220px;
    object-fit:cover;
    display:block;
  }
  .dna-fig-cap{
    padding:10px 12px;
    font:400 14px/1.6 Poppins,sans-serif;
    color:#334155;
  }

  /* FAQ */
  .dna-faq{
    max-width:980px;
    margin:20px auto 0;
    padding:0 16px;
  }
  .dna-faq-item{
    background:#fff;
    border:1px solid rgba(2,6,23,.08);
    border-radius:12px;
    padding:14px 16px;
    margin-bottom:10px;
  }
  .dna-faq-item summary{
    cursor:pointer;
    font:500 15px/1.5 Poppins,sans-serif;
    color:#0f1f3a;
  }
  .dna-faq-item div{
    font:400 14.5px/1.75 Poppins,sans-serif;
    color:#334155;
    padding-top:8px;
  }

  /* CTA */
  .dna-cta{
    max-width:980px;
    margin:20px auto 36px;
    padding:0 16px;
    text-align:center;
  }
  .dna-btn-lg{
    display:inline-block;
    padding:14px 22px;
    border-radius:12px;
    background:linear-gradient(135deg,#001F3F,#00509E);
    color:#fff;
    text-decoration:none;
    font:500 16px/1 Poppins,sans-serif;
    box-shadow:0 14px 28px rgba(0,40,85,.28);
  }

  /* EXTRA HERO HEIGHT TWEAKS FOR SMALL DEVICES */
  @media (max-width:768px){
    .dna-hero-img{ height:320px; }
  }
  @media (max-width:480px){
    .dna-hero-img{ height:260px; border-radius:12px; }
    .dna-hero{ border-radius:12px; }
  }
</style>
