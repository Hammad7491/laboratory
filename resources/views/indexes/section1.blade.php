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

    <p class="eg-kicker"
      style="margin:0 0 18px 0; font:500 14px/1.2 'Poppins'; letter-spacing:.35em; text-transform:uppercase; opacity:.95;">
      Welcome – Convenience Testing & Wellness Services
    </p>

    <h1 class="eg-title"
      style="margin:0; font:600 clamp(42px,8vw,110px)/1 'Poppins'; letter-spacing:.01em;">
      WELLNESS
    </h1>

    <!-- SIMPLE WHITE SUBTEXT -->
    <div class="eg-subtext"
      style="
        margin-top:18px;
        font:400 clamp(22px,5vw,48px)/1.3 'Poppins';
        color:#ffffff;
      ">
      Wellness at your doorstep<br>
      Fast, easy, at-home testing
    </div>

    <div class="eg-pill"
      style="display:inline-block; margin: clamp(18px,3.5vh,28px) 0 24px 0;
        padding:14px 22px; border-radius:14px;
        border:1.5px solid rgba(255,255,255,.65);
        background:rgba(255,255,255,.06); backdrop-filter:blur(6px);
        font:500 clamp(12px,1.8vw,16px)/1.2 'Poppins';
        letter-spacing:.38em; text-transform:uppercase;">
      Discover fast, at-home lab testing & IV therapy
    </div>

    <div style="display:flex; gap:14px; justify-content:center; flex-wrap:wrap;">
      <a href="#book" class="eg-btn-primary"
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

<style>
  .eg-btn-primary:hover{
    transform:translateY(-2px);
    filter:saturate(115%);
    box-shadow:0 18px 36px rgba(0,31,63,.45);
  }

  @media (max-width: 520px){
    .eg-pill{
      letter-spacing:.28em !important;
      padding:12px 16px !important;
    }
    .eg-hero{
      min-height: 70vh !important;
    }
  }

  @media (max-width: 768px){
    .eg-hero-video{
      object-position:center;
    }
  }
</style>
