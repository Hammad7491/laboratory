<!-- HERO SECTION START -->
<section class="eg-hero" style="position:relative; isolation:isolate; min-height:82vh; display:grid; place-items:center; overflow:hidden;">

  <!-- VIDEO BACKGROUND -->
  <video class="eg-hero-video" autoplay muted loop playsinline
    style="
      position:absolute; inset:0;
      width:100%; height:100%;
      object-fit:cover;
      z-index:-3;
      filter:saturate(108%);
    ">
    <source src="{{ asset('assets/images/videos/hero.mp4') }}" type="video/mp4">
  </video>

  <!-- DARK GRADIENT OVERLAY -->
  <div class="eg-hero-bg" style="
      position:absolute; inset:0;
      background:linear-gradient(180deg, rgba(8,14,28,.55), rgba(8,14,28,.55));
      z-index:-2;">
  </div>

  <!-- CONTENT -->
  <div class="eg-hero-inner" style="width:min(1200px,92%); margin-inline:auto; text-align:center; color:#fff;">

    <!-- MAIN TAGLINE -->
    <div class="eg-subtext"
      style="
        margin-top:18px;
        font:700 clamp(26px,5vw,52px)/1.25 'Poppins';
      ">

      <!-- WE TEST (white) -->
      <span style="
        display:block;
        color:#ffffff;
        text-shadow:0 3px 10px rgba(0,0,0,.35);
      ">
        Professional testing
      </span>

      <!-- YOU RELAX AT HOME (Genix matching gradient + white highlight) -->
      <span style="
        display:block;
        margin-top:4px;
        font-weight:700;
        background:
          linear-gradient(180deg, rgba(255,255,255,0.28), rgba(255,255,255,0)) ,   /* subtle white shine */
          linear-gradient(90deg,#00B894,#00C2FF);                                  /* Genix gradient */
        -webkit-background-clip:text;
        background-clip:text;
        color:transparent;
        text-shadow:0 2px 6px rgba(0,0,0,0.12);    /* very soft shadow, no darkness */
      ">
        Wherever you a need us
      </span>

    </div>

    <!-- KICKER -->
    <p class="eg-kicker"
      style="margin:16px 0 70px 0; font:500 14px/1.2 'Poppins';  text-transform:uppercase; opacity:.95;">
      Welcome – Convenience Testing & Wellness Services
    </p>

    <!-- CTA BUTTON -->
    <div style="display:flex; gap:14px; justify-content:center; flex-wrap:wrap;">
      <a href="{{ route('contactus') }}" class="eg-btn-primary"
        style="display:inline-block; padding:14px 26px; border-radius:12px;
          background:linear-gradient(135deg,#001F3F,#00509E); color:#fff; text-decoration:none;
          font:500 16px/1 'Poppins';
          box-shadow:0 14px 28px rgba(0,31,63,.35);
          transition:transform .12s ease, filter .2s ease;">
        Book Appointment
      </a>
    </div>

  </div>
</section>
<!-- HERO SECTION END -->
