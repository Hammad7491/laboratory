<!-- ABOUT / PROMISE SECTION (enhanced) -->
<section class="eg-about v2" aria-labelledby="eg-about-title">
  <div class="ega-wrap">

    <!-- Decorative ribbon -->
    <div class="ega-ribbon" aria-hidden="true"></div>

    <!-- Card-like container -->
    <div class="ega-panel">
      <div class="ega-grid">

        <!-- TEXT -->
        <div class="ega-col">
          <header class="ega-head">
            <h2 id="eg-about-title">
              <span>Advanced</span>
              <span class="eg-dual">Mobile Phlebotomy Professionals</span>
              <span>provide exceptional mobile phlebotomy services in West Orange, NJ.</span>
            </h2>
            <div class="ega-underline"></div>
          </header>

          <p class="ega-lead">
            We deliver quality, affordable, and worry-free phlebotomy services for everyone. By coming to you in the
            environment where you’re most comfortable, we remove the stress of traffic, long waits, and tight schedules.
            Book your appointment, upload your documents, and leave the rest to our certified team.
          </p>

          <!-- Value list (2 columns on desktop, 1 on mobile) -->
          <div class="ega-list-2c">
            <ul>
              <li><strong>Integrity</strong>, honesty and ethical behavior</li>
              <li>Dedication to <strong>empowering others</strong> and responsive support</li>
              <li>Professional excellence and <strong>high performance</strong></li>
            </ul>
            <ul>
              <li>Mutual respect, dignity, and <strong>diversity</strong></li>
              <li>Team participation, contribution, and <strong>collaboration</strong></li>
              <li>Ongoing <strong>growth</strong>, development, and leadership</li>
            </ul>
          </div>

          <p class="ega-copy">
            Our staff is experienced with pediatric, adult, adolescent, special-needs, and geriatric patients. We collect
            <em>blood, urine, swabs, hair, and nails</em> with strict chain-of-custody and specimen accuracy. Whether you’re
            at work, at home, or simply avoiding long wait times—let us come to you. We’re here to deliver hospital-grade
            quality at an affordable cost.
          </p>

          <a href="{{ route('contactus') }}" class="ega-cta navy">Book a Mobile Draw</a>
        </div>

        <!-- IMAGE (direct external image) -->
        <figure class="ega-media">
          <img
            src="{{ asset('assets/images/black.jpg') }}"
            alt="Certified mobile phlebotomist drawing blood at home"
            loading="lazy">
        </figure>
      </div>
    </div>
  </div>
</section>

<style>
  .eg-about.v2{
    background:#ffffff; 
    padding:56px 0; 
    font-family:'Poppins', ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; 
    color:#1a2845; 
    position:relative;
  }
  .eg-about .ega-wrap{ max-width:1200px; margin:0 auto; padding:0 18px; }

  /* soft decorative ribbon behind the panel */
  .eg-about .ega-ribbon{
    height:120px; 
    width:100%;
    background:linear-gradient(90deg,rgba(0,31,63,.06),rgba(0,184,148,.08),rgba(25,194,255,.06));
    filter:blur(30px);
    border-radius:999px;
    margin-bottom:26px;
  }

  /* panel/card */
  .ega-panel{
    background:#fff;
    border:1px solid rgba(2,6,23,.08);
    border-radius:22px;
    padding:26px 22px;
    box-shadow:0 18px 48px rgba(10,15,35,.10);
  }

  .ega-grid{ 
    display:grid; gap:28px; 
    grid-template-columns: 1.08fr .92fr; 
    align-items:center; 
  }
  @media (max-width: 960px){ .ega-grid{ grid-template-columns:1fr; } }

  /* Heading with dual color + underline accent */
  .ega-head h2{ 
    margin:0 0 10px; 
    font-weight:700; 
    line-height:1.15; 
    font-size:clamp(22px,3.6vw,38px); 
    letter-spacing:.01em; 
  }
  .ega-head h2 span{ color:#0f1f3a; }
  .eg-dual{
    background:linear-gradient(135deg,#00b894 0%, #00cec9 60%, #19c2ff 100%);
    -webkit-background-clip:text; -webkit-text-fill-color:transparent;
    display:inline-block; margin:0 .25rem;
  }
  .ega-underline{
    width:96px; height:4px; border-radius:999px;
    background:linear-gradient(135deg,#001F3F,#00b894);
    box-shadow:0 6px 16px rgba(0,31,63,.25);
  }

  .ega-lead{ margin:10px 0 14px; font-size:clamp(14px,2vw,16px); line-height:1.8; color:#2a3a5a; }
  .ega-copy{ margin:12px 0 16px; font-size:clamp(14px,2vw,15.5px); line-height:1.8; color:#2a3a5a; }

  /* Two-column bullet lists */
  .ega-list-2c{ display:grid; grid-template-columns:1fr 1fr; gap:8px 24px; margin:12px 0 6px; }
  @media (max-width: 720px){ .ega-list-2c{ grid-template-columns:1fr; } }
  .ega-list-2c ul{ margin:0; padding-left:0; list-style:none; }
  .ega-list-2c li{ 
    margin:8px 0; color:#253659; padding-left:30px; position:relative;
  }
  .ega-list-2c li::before{
    content:""; position:absolute; left:0; top:.35em; width:18px; height:18px; border-radius:50%;
    background:linear-gradient(135deg,#00b894,#19c2ff);
    box-shadow:0 4px 10px rgba(25,194,255,.25);
    -webkit-mask: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="white"><path d="M9.2 16.2 4.9 11.9l1.4-1.4 2.9 2.9 8.4-8.4 1.4 1.4z"/></svg>') center/14px 14px no-repeat;
            mask: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="white"><path d="M9.2 16.2 4.9 11.9l1.4-1.4 2.9 2.9 8.4-8.4 1.4 1.4z"/></svg>') center/14px 14px no-repeat;
  }

  /* CTA — NAVY BLUE */
  .ega-cta.navy{
    display:inline-block; margin-top:10px; padding:12px 18px; border-radius:12px; text-decoration:none;
    color:#fff; font-weight:700; letter-spacing:.2px;
    background:#001F3F; 
    border:1px solid #0e2b6b;
    box-shadow:0 12px 26px rgba(0,31,63,.28);
    transition:transform .15s ease, box-shadow .2s ease, filter .2s ease;
  }
  .ega-cta.navy:hover{ 
    transform:translateY(-2px); 
    filter:saturate(110%); 
    box-shadow:0 18px 36px rgba(0,31,63,.36);
  }

  /* Image styling with gradient frame */
  .ega-media{ margin:0; }
  .ega-media img{
    width:100%; height:auto; display:block; border-radius:18px;
    border:2px solid transparent;
    background:
      linear-gradient(#fff,#fff) padding-box,
      linear-gradient(135deg,#00b894,#19c2ff) border-box;
    box-shadow:0 20px 40px rgba(15,17,36,.20);
  }
</style>
