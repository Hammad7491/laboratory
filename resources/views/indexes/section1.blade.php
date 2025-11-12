<!-- HERO SECTION START -->
<section class="eg-hero" style="position:relative; isolation:isolate; min-height:82vh; display:grid; place-items:center; overflow:hidden;">

  <!-- Background image (wellness/medical themed) -->
  <div class="eg-hero-bg" style="
      position:absolute; inset:0;
      background:
        linear-gradient(180deg, rgba(8,14,28,.55), rgba(8,14,28,.55)),
        url('https://images.pexels.com/photos/3825529/pexels-photo-3825529.jpeg?auto=compress&cs=tinysrgb&w=1600') 
        center/cover no-repeat;
      filter: saturate(108%);
      z-index:-2;"></div>

  <!-- Subtle pattern overlay -->
  <div aria-hidden="true" style="
      position:absolute;inset:0;z-index:-1;opacity:.25;mix-blend:overlay;
      background-image: radial-gradient(#fff 1px, transparent 1px);
      background-size: 3px 3px;"></div>

  <!-- Content -->
  <div class="eg-hero-inner" style="width:min(1200px, 92%); margin-inline:auto; text-align:center; color:#fff;">

    <!-- Top kicker -->
    <p class="eg-kicker" style="
        margin:0 0 18px 0;
        font: 500 14px/1.2 'Poppins', ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
        letter-spacing:.35em; text-transform:uppercase; opacity:.95;">
      Welcome – Convenience Testing & Wellness Services
    </p>

    <!-- Main heading -->
    <h1 class="eg-title" style="
        margin:0;
        font: 600 clamp(42px, 8vw, 110px)/1 'Poppins', ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
        letter-spacing:.01em;">
      WELLNESS
      <span class="eg-script" style="
          display:block; margin-top:.15em;
          font: 400 clamp(28px, 6vw, 84px)/.9 'Pacifico', cursive;
          color:#00b894; text-shadow:0 8px 24px rgba(0,0,0,.35);">
        reimagined
      </span>
    </h1>

    <!-- Subheading pill -->
    <div class="eg-pill" style="
        display:inline-block; margin: clamp(18px, 3.5vh, 28px) 0 24px 0; padding:14px 22px;
        border-radius:14px; border:1.5px solid rgba(255,255,255,.65);
        background:rgba(255,255,255,.06); backdrop-filter: blur(6px);
        font: 500 clamp(12px, 1.8vw, 16px)/1.2 'Poppins', ui-sans-serif;
        letter-spacing:.38em; text-transform:uppercase;">
      Discover fast, at-home lab testing & IV therapy
    </div>

    <!-- CTA -->
    <div style="display:flex; gap:14px; justify-content:center; flex-wrap:wrap;">
      <a href="#book" class="eg-btn-primary" style="
          display:inline-block; padding:14px 26px; border-radius:12px;
          background:linear-gradient(135deg,#001F3F,#00509E); color:#fff; text-decoration:none;
          font:500 16px/1 'Poppins', ui-sans-serif;
          box-shadow:0 14px 28px rgba(0,31,63,.35);
          transition: transform .12s ease, filter .2s ease;">
        Book Appointment
      </a>
    </div>
  </div>
</section>
<!-- HERO SECTION END -->

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"/>

<style>
  /* Hover effects for CTAs */
  .eg-btn-primary:hover{
    transform:translateY(-2px);
    filter:saturate(115%);
    box-shadow:0 18px 36px rgba(0,31,63,.45);
  }

  /* Small screens tweaks */
  @media (max-width: 520px){
    .eg-pill{
      letter-spacing:.28em !important;
      padding:12px 16px !important;
    }
  }
</style>
