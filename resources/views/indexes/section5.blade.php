{{-- resources/views/home/partials/states.blade.php --}}

<section class="eg-home-states">
  <div class="egc-wrap">

    <header class="eg-home-header">
      <p class="eg-home-kicker">SERVICE AREAS</p>
      <h2 class="eg-home-title">
        Everything You Need to Know About Our Coverage
      </h2>
    </header>

    <div class="eg-home-grid">

      {{-- CARD 01 – NEW JERSEY --}}
      <article class="eg-home-card">
        <div class="eg-home-step">01</div>
        <h3 class="eg-home-card-title">New Jersey</h3>
        <p class="eg-home-card-text">
          Our primary base of operations. We provide statewide mobile phlebotomy,
          lab testing, and diagnostic services—at homes, offices, clinics, and
          community facilities across New Jersey.
        </p>
        <a href="{{ url('/location') }}" class="eg-home-card-btn">
          View Locations
        </a>
      </article>

      {{-- CARD 02 – NEW YORK --}}
      <article class="eg-home-card eg-home-card-highlight">
        <div class="eg-home-step">02</div>
        <h3 class="eg-home-card-title">New York</h3>
        <p class="eg-home-card-text">
          Serving the greater New York City area, including Manhattan, Brooklyn,
          Queens, Bronx, and Staten Island—bringing mobile services directly to
          patients and providers.
        </p>
        <a href="{{ url('/location') }}" class="eg-home-card-btn">
          View Locations
        </a>
      </article>

      {{-- CARD 03 – PENNSYLVANIA --}}
      <article class="eg-home-card">
        <div class="eg-home-step">03</div>
        <h3 class="eg-home-card-title">Pennsylvania</h3>
        <p class="eg-home-card-text">
          Growing coverage across Pennsylvania, including Philadelphia,
          Pittsburgh, Scranton, Altoona, Erie, Bethlehem, and Harrisburg, with
          flexible scheduling for mobile phlebotomy and diagnostics.
        </p>
        <a href="{{ url('/location') }}" class="eg-home-card-btn">
          View Locations
        </a>
      </article>

    </div>
  </div>
</section>

<style>
  .eg-home-states{
    --navy:#001F3F;   /* LOGO COLOR */
    --muted:#6b7693;
    font-family:'Poppins',ui-sans-serif,system-ui;
    padding:40px 0 46px;
    background:radial-gradient(circle at top,#f3f5ff 0%,#eef4ff 28%,#f9fbff 60%,#ffffff 100%);
  }

  .egc-wrap{
    max-width:1200px;
    margin:0 auto;
    padding:0 18px;
  }

  .eg-home-header{
    text-align:center;
    margin-bottom:26px;
  }
  .eg-home-kicker{
    text-transform:uppercase;
    letter-spacing:.26em;
    font-size:11px;
    font-weight:600;
    color:#7a86a8;
    margin-bottom:6px;
  }
  .eg-home-title{
    margin:0;
    font-size:clamp(24px,4vw,30px);
    font-weight:800;
    color:#111827;
  }

  .eg-home-grid{
    display:grid;
    grid-template-columns:repeat(3,minmax(0,1fr));
    gap:18px;
  }

  .eg-home-card{
    background:#ffffff;
    border-radius:22px;
    padding:22px 20px 20px;
    box-shadow:0 18px 40px rgba(15,23,42,.07);
    border:1px solid rgba(148,163,184,.18);
    position:relative;
    overflow:hidden;
    display:flex;
    flex-direction:column;
  }

  .eg-home-card-highlight{
    box-shadow:0 22px 52px rgba(0,31,63,.25);
    border-color:rgba(0,31,63,.4);
  }

  .eg-home-card::before{
    content:"";
    position:absolute;
    inset:-60px -40px auto auto;
    background:radial-gradient(circle at 10% 10%,rgba(0,31,63,.22),transparent 60%);
    opacity:.9;
    pointer-events:none;
  }

  /* 01,02,03 navy blue */
  .eg-home-step{
    font-size:30px;
    font-weight:800;
    color:var(--navy);
    margin-bottom:4px;
  }

  .eg-home-card-title{
    font-size:16px;
    text-transform:uppercase;
    letter-spacing:.16em;
    font-weight:700;
    color:var(--navy);
    margin:0 0 10px;
  }

  .eg-home-card-text{
    font-size:14px;
    line-height:1.8;
    color:var(--muted);
    margin:0 0 16px;
    flex:1 1 auto;
  }

  /* BUTTON COLOR NAVY BLUE */
  .eg-home-card-btn{
    align-self:flex-start;
    padding:8px 18px;
    border-radius:999px;
    font-size:13px;
    font-weight:600;
    text-decoration:none;
    color:#ffffff;
    background:linear-gradient(135deg, #001F3F, #003466);
    box-shadow:0 10px 24px rgba(0,31,63,.35);
    transition:transform .12s ease, box-shadow .12s ease, filter .12s ease;
  }

  .eg-home-card-btn:hover{
    transform:translateY(-1px);
    filter:saturate(115%);
    box-shadow:0 14px 32px rgba(0,31,63,.45);
  }

  /* Responsive */
  @media (max-width:992px){
    .eg-home-grid{
      grid-template-columns:repeat(2,minmax(0,1fr));
    }
  }
  @media (max-width:720px){
    .eg-home-grid{
      grid-template-columns:1fr;
    }
    .eg-home-card{
      border-radius:18px;
    }
  }
</style>
