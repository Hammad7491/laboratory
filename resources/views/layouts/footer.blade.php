<!-- FOOTER START -->
<footer class="eg-footer" role="contentinfo">
  <div class="egf-wrap">

    <!-- Brand + short blurb -->
    <div class="egf-col">
      <a href="{{ url('/') }}" class="egf-brand">
        <img src="{{ asset('assets/images/logo.png') }}" alt="EmmaGenix logo" class="egf-logo-img">
        <span class="egf-brand-name">
          <span class="egf-emma">Emma</span><span class="egf-genix">Genix</span>
        </span>
      </a>
      <p class="egf-text">
        Mobile phlebotomy, testing, and wellness—delivered to your door with hospital-grade standards and friendly care.
      </p>

      <div class="egf-social">
        <a href="#" aria-label="Facebook" class="egf-s">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M13 22v-8h3l1-3h-4V8a1 1 0 0 1 1-1h3V4h-3a4 4 0 0 0-4 4v3H7v3h3v8h3z"/></svg>
        </a>
        <a href="#" aria-label="Instagram" class="egf-s">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm0 2a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H7zm5 3a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 2.2A2.8 2.8 0 1 0 12 16.8 2.8 2.8 0 0 0 12 9.2zm5.1-1.6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/></svg>
        </a>
        <a href="#" aria-label="LinkedIn" class="egf-s">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M6 9H3v12h3V9zm-1.5-6A1.75 1.75 0 1 0 6.25 4 1.76 1.76 0 0 0 4.5 3zM21 21h-3v-6.5c0-3.2-4-3-4 0V21h-3V9h3v1.8C15 9.1 21 8.9 21 14.2V21z"/></svg>
        </a>
      </div>
    </div>

    <!-- Quick Links -->
    <div class="egf-col">
      <h4 class="egf-title">Quick Links</h4>
      <ul class="egf-list">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#locations">Locations</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>

    <!-- Services -->
    <div class="egf-col">
      <h4 class="egf-title">Services</h4>
      <ul class="egf-list">
        <li><a href="{{ route('phlebotomy') }}">Phlebotomy</a></li>
        <li><a href="#">Drug Test</a></li>
        <li><a href="#">DNA Test</a></li>
        <li><a href="#">Covid-19 Test</a></li>
        <li><a href="#">IV Hydration</a></li>
      </ul>
    </div>

    <!-- Contact -->
    <div class="egf-col">
      <h4 class="egf-title">Get in Touch</h4>
      <ul class="egf-contact">
        <li>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a9 9 0 0 0-9 9c0 6 9 11 9 11s9-5 9-11a9 9 0 0 0-9-9zm0 12.5a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7z"/></svg>
          West Orange, NJ
        </li>
        <li>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M21 15v4a2 2 0 0 1-2 2c-9.94 0-18-8.06-18-18a2 2 0 0 1 2-2h4l2 5-3 2a14 14 0 0 0 6 6l2-3 5 2z"/></svg>
          (000) 123-4567
        </li>
        <li>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16a2 2 0 0 1 2 2v1l-10 6L2 7V6a2 2 0 0 1 2-2Zm18 6.6V18a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-7.4l10 6 10-6Z"/></svg>
          hello@emmagenix.com
        </li>
        <li>
          <a class="egf-btn" href="#contact">Book an Appointment</a>
        </li>
      </ul>
    </div>

  </div>

  <div class="egf-bottom">
    <p>© <span id="egfYear"></span> EmmaGenix. All rights reserved.</p>
    <p class="egf-mini">
      <a href="#">Privacy</a> · <a href="#">Terms</a>
    </p>
  </div>
</footer>
<!-- FOOTER END -->

<style>
  .eg-footer{
    background:#0a1b37;
    color:#dbe6ff;
    padding-top:28px;
    font-family:'Poppins',ui-sans-serif,system-ui,-apple-system,'Segoe UI',Roboto,Arial,sans-serif;
  }
  .egf-wrap{
    max-width:1200px; margin:0 auto; padding:0 18px 8px;
    display:grid; gap:22px; grid-template-columns:1.1fr .8fr .8fr 1fr;
  }
  @media (max-width: 980px){ .egf-wrap{ grid-template-columns:1fr 1fr; } }
  @media (max-width: 560px){ .egf-wrap{ grid-template-columns:1fr; } }

  /* Brand */
  .egf-brand{ display:flex; align-items:center; gap:12px; text-decoration:none; color:#fff; }
  .egf-logo-img{
    width:44px; height:44px; object-fit:contain; border-radius:10px; display:block;
    box-shadow:0 8px 18px rgba(0,0,0,.12);
    background:transparent;
  }
  .egf-brand-name{ display:inline-flex; align-items:center; gap:4px; line-height:1; }
  .egf-emma{ font-weight:700; font-size:22px; letter-spacing:.2px;
  background:linear-gradient(135deg,#00b894 0%, #00c2ff 100%); 
-webkit-background-clip:text; background-clip:text; -webkit-text-fill-color:transparent; }
  .egf-genix{
    font-weight:700; font-size:22px; letter-spacing:.2px;
    background:linear-gradient(135deg,#00b894 0%, #00c2ff 100%);
    -webkit-background-clip:text; background-clip:text; -webkit-text-fill-color:transparent;
  }

  .egf-text{ margin:10px 0 12px; color:#b9c7ec; font-size:14.5px; line-height:1.7; }

  .egf-title{ margin:4px 0 10px; font-weight:700; font-size:15px; letter-spacing:.3px; color:#ffffff; }
  .egf-list{ list-style:none; padding:0; margin:0; display:grid; gap:8px; }
  .egf-list a{ color:#cfe0ff; text-decoration:none; font-size:14.5px; }
  .egf-list a:hover{ color:#ffffff; text-decoration:underline; }

  .egf-contact{ list-style:none; padding:0; margin:0; display:grid; gap:10px; }
  .egf-contact li{ display:flex; align-items:center; gap:8px; color:#cfe0ff; font-size:14.5px; }

  /* Socials */
  .egf-social{ display:flex; gap:10px; }
  .egf-s{
    display:grid; place-items:center; width:34px; height:34px; border-radius:10px; color:#0a1b37;
    background:#ffffff; text-decoration:none; border:1px solid rgba(255,255,255,.35);
    transition:transform .15s ease, filter .2s ease;
  }
  .egf-s:hover{ transform:translateY(-2px); filter:saturate(115%); }

  /* CTA button in footer */
  .egf-btn{
    display:inline-block; margin-top:4px; padding:10px 14px; border-radius:10px; text-decoration:none;
    color:#0a1b37; font-weight:700; background:linear-gradient(135deg,#00b894,#19c2ff);
    box-shadow:0 10px 22px rgba(25,194,255,.25);
  }
  .egf-btn:hover{ filter:saturate(115%); }

  /* Bottom bar */
  .egf-bottom{
    border-top:1px solid rgba(255,255,255,.08);
    margin-top:18px; padding:12px 18px;
    display:flex; align-items:center; justify-content:space-between; gap:10px;
    max-width:1200px; margin-left:auto; margin-right:auto; color:#a9b8de; font-size:13.5px;
  }
  .egf-bottom a{ color:#cfe0ff; text-decoration:none; }
  .egf-bottom a:hover{ text-decoration:underline; }
  .egf-mini{ opacity:.9; }
</style>

<script>
  // year
  (function(){ document.getElementById('egfYear').textContent = new Date().getFullYear(); })();
</script>
