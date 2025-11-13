{{-- resources/views/location/section1.blade.php --}}

<section class="eg-locations">

  <!-- HERO -->
  <div class="egc-wrap">
    <header class="eg-loc-hero">
      <p class="eg-loc-kicker">Service Areas</p>
      <h1 class="eg-loc-title">Locations We Cover</h1>
      <p class="eg-loc-sub">
        EmmaGenix provides mobile phlebotomy and diagnostic services across New Jersey, New York,
        and Pennsylvania. We come to your home, office, clinic, or community site—wherever you need us.
      </p>
    </header>

    <!-- GRID -->
    <div class="eg-loc-grid">

      {{-- NEW JERSEY CARD --}}
      <article class="eg-loc-card eg-loc-primary">
        <div class="eg-loc-pill">New Jersey</div>
        <h2>Statewide Mobile Coverage</h2>
        <p>
          Based in New Jersey, EmmaGenix proudly serves patients and providers across the state with
          flexible, on-site phlebotomy and lab services.
        </p>

        <div class="eg-loc-subtitle">Common Areas We Serve</div>
        <ul class="eg-loc-list three-cols">
          <li>Newark</li>
          <li>Jersey City</li>
          <li>Paterson</li>
          <li>Elizabeth</li>
          <li>Trenton</li>
          <li>Clifton</li>
          <li>Passaic</li>
          <li>Hoboken</li>
          <li>Bayonne</li>
          <li>East Orange</li>
          <li>Union City</li>
          <li>West Orange</li>
        </ul>

        <p class="eg-loc-note">
          Don’t see your city listed? Reach out—we likely cover your area in New Jersey.
        </p>
      </article>

      {{-- NEW YORK CARD --}}
      <article class="eg-loc-card">
        <div class="eg-loc-pill">New York</div>
        <h2>Greater New York City Area</h2>
        <p>
          We provide mobile services throughout New York City, making it easy for patients and
          clinics to schedule on-site draws and testing.
        </p>

        <div class="eg-loc-subtitle">We Currently Serve</div>
        <ul class="eg-loc-list two-cols">
          <li>Manhattan</li>
          <li>Brooklyn</li>
          <li>Queens</li>
          <li>Bronx</li>
          <li>Staten Island</li>
        </ul>

        <p class="eg-loc-note">
          Ask us about availability for surrounding New York neighborhoods and facilities.
        </p>
      </article>

      {{-- PENNSYLVANIA CARD --}}
      <article class="eg-loc-card">
        <div class="eg-loc-pill">Pennsylvania</div>
        <h2>Expanding Service Across PA</h2>
        <p>
          EmmaGenix is actively serving patients and partner organizations across Pennsylvania,
          with growing coverage across the state.
        </p>

        <div class="eg-loc-subtitle">We Currently Serve</div>
        <ul class="eg-loc-list two-cols">
          <li>Philadelphia</li>
          <li>Pittsburgh</li>
          <li>Scranton</li>
          <li>Altoona</li>
          <li>Erie</li>
          <li>Bethlehem</li>
          <li>Harrisburg</li>
        </ul>

        <p class="eg-loc-note">
          For PA scheduling details and availability, please contact our care coordination team.
        </p>
      </article>

    </div>
  </div>

  <!-- SMALL CTA STRIP -->
  <div class="eg-loc-cta">
    <div class="egc-wrap eg-loc-cta-inner">
      <p>Not sure if we cover your address? Call <strong>201-688-0338</strong> or email
        <a href="mailto:info@emmagenix.com">info@emmagenix.com</a> and we’ll confirm for you.</p>
    </div>
  </div>
</section>

{{-- FONT (if not already loaded in layout) --}}
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>

<style>
  .eg-locations{
    --navy:#001F3F;
    --navy-soft:#0b2345;
    --teal:#00b894;
    --cyan:#00c2ff;
    --muted:#5e6b86;
    font-family:'Poppins',ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;
    color:#16233d;
    background:#f4f7ff;
    padding:28px 0 40px;
  }

  .egc-wrap{
    max-width:1200px;
    margin:0 auto;
    padding:0 18px;
  }

  /* HERO */
  .eg-loc-hero{
    text-align:center;
    margin-bottom:26px;
  }
  .eg-loc-kicker{
    text-transform:uppercase;
    letter-spacing:.24em;
    font-size:11px;
    font-weight:600;
    color:#6f7ea3;
    margin-bottom:6px;
  }
  .eg-loc-title{
    font-size:clamp(26px,4vw,34px);
    font-weight:800;
    color:var(--navy);
    margin-bottom:8px;
  }
  .eg-loc-sub{
    max-width:720px;
    margin:0 auto;
    font-size:14.5px;
    color:var(--muted);
    line-height:1.8;
  }

  /* GRID LAYOUT */
  .eg-loc-grid{
    display:grid;
    grid-template-columns:repeat(3, minmax(0,1fr));
    gap:18px;
    margin-top:24px;
  }

  .eg-loc-card{
    background:#ffffff;
    border-radius:22px;
    padding:20px 18px 18px;
    box-shadow:0 18px 34px rgba(2,6,23,.07);
    border:1px solid rgba(15,23,42,.05);
    position:relative;
    overflow:hidden;
  }
  .eg-loc-card::before{
    content:"";
    position:absolute;
    inset:auto -40px -40px auto;
    width:140px;
    height:140px;
    background:radial-gradient(circle at 30% 30%,rgba(0,194,255,.24),transparent 60%);
    opacity:.9;
    pointer-events:none;
  }

  /* Highlight NJ card */
  .eg-loc-card.eg-loc-primary{
    background: radial-gradient(circle at 0 0, rgba(0,194,255,.15), transparent 55%) #ffffff;
    border-color: rgba(0,194,255,.3);
  }

  .eg-loc-pill{
    display:inline-flex;
    align-items:center;
    padding:5px 12px;
    border-radius:999px;
    font-size:11px;
    font-weight:600;
    text-transform:uppercase;
    letter-spacing:.16em;
    color:var(--navy);
    background:#e7f3ff;
    margin-bottom:10px;
  }

  .eg-loc-card h2{
    font-size:18px;
    font-weight:700;
    color:var(--navy-soft);
    margin:0 0 6px;
  }

  .eg-loc-card p{
    font-size:14px;
    color:var(--muted);
    line-height:1.7;
    margin:0 0 10px;
  }

  .eg-loc-subtitle{
    font-size:12px;
    text-transform:uppercase;
    letter-spacing:.16em;
    font-weight:600;
    color:#7682a0;
    margin:8px 0 6px;
  }

  .eg-loc-list{
    list-style:none;
    margin:0 0 8px;
    padding:0;
    display:grid;
    gap:4px 14px;
    font-size:13.5px;
    color:#24334f;
  }
  .eg-loc-list li::before{
    content:"•";
    margin-right:6px;
    color:var(--teal);
  }
  .eg-loc-list.two-cols{
    grid-template-columns:repeat(2,minmax(0,1fr));
  }
  .eg-loc-list.three-cols{
    grid-template-columns:repeat(3,minmax(0,1fr));
  }

  .eg-loc-note{
    font-size:12.5px;
    color:#7a869f;
    margin-top:6px;
  }

  .eg-loc-pa-line{
    font-weight:500;
    color:#24334f;
    margin-top:4px;
  }

  /* CTA STRIP */
  .eg-loc-cta{
    margin-top:26px;
    background:#001F3F;
  }
  .eg-loc-cta-inner{
    padding:12px 18px 14px;
    text-align:center;
  }
  .eg-loc-cta-inner p{
    margin:0;
    font-size:13.5px;
    color:#e7eefc;
  }
  .eg-loc-cta-inner strong{
    color:#ffffff;
  }
  .eg-loc-cta-inner a{
    color:#00c2ff;
    text-decoration:none;
    font-weight:500;
  }
  .eg-loc-cta-inner a:hover{
    text-decoration:underline;
  }

  /* RESPONSIVE */
  @media (max-width:992px){
    .eg-loc-grid{
      grid-template-columns:repeat(2,minmax(0,1fr));
    }
    .eg-loc-list.three-cols{
      grid-template-columns:repeat(2,minmax(0,1fr));
    }
  }
  @media (max-width:720px){
    .eg-loc-grid{
      grid-template-columns:1fr;
    }
    .eg-loc-card{
      border-radius:18px;
    }
  }
</style>
