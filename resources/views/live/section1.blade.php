<!-- LIVE FINGERPRINT SCREEN (LIVE SCAN): HERO + CONTENT -->
<section class="svc-live" style="padding-top:18px;">
  <!-- Hero -->
  <div class="live-hero" style="position:relative; overflow:hidden; border-radius:18px; max-width:1100px; margin:0 auto 28px;">
    <img
      src="https://images.pexels.com/photos/3184326/pexels-photo-3184326.jpeg?auto=compress&cs=tinysrgb&w=1600"
      alt="Technician performing live fingerprint scan"
      style="width:100%; height:420px; object-fit:cover; display:block; filter:saturate(106%);">
    <div style="position:absolute; inset:0; background:linear-gradient(180deg,rgba(10,18,36,.55),rgba(10,18,36,.55));"></div>

    <div style="position:absolute; inset:0; display:grid; place-items:center; text-align:center; color:#fff; padding:24px;">
      <div>
        <p style="margin:0 0 6px; letter-spacing:.25em; text-transform:uppercase; font:500 13px/1.2 Poppins, sans-serif;">
          EmmaGenix Services
        </p>
        <h1 style="margin:0; font:500 clamp(32px,6vw,56px)/1.05 Poppins, sans-serif;">
          Live Fingerprint Screen (Live Scan)
        </h1>
        <p style="max-width:760px; margin:12px auto 0; font:400 clamp(14px,2vw,17px)/1.6 Poppins, sans-serif; opacity:.95;">
          Fast, secure, and compliant fingerprint capture for licensing, background checks, employment onboarding, and credentialing.
          We come to your location or host you at a partner site—no long lines, no hassle.
        </p>
      </div>
    </div>
  </div>

  <!-- Main -->
  <div class="live-wrap" style="max-width:1100px; margin:0 auto; padding:0 16px;">
    <div class="live-grid" style="display:grid; grid-template-columns:1.2fr .8fr; gap:28px; align-items:start;">
      <div>
        <h2 style="font:500 26px/1.25 Poppins, sans-serif; margin:0 0 10px;">
          <span style="color:#0f1f3a;">Digital, Inkless</span>
          <span style="background:linear-gradient(135deg,#00b894 0%, #00c2ff 100%); -webkit-background-clip:text; background-clip:text; -webkit-text-fill-color:transparent; margin:0 .25rem; display:inline-block;">
            Live Scan
          </span>
          <span style="color:#0f1f3a;">You Can Trust</span>
        </h2>

        <p style="font:400 16px/1.8 Poppins, sans-serif; color:#24324a; margin:0 0 12px;">
          EmmaGenix captures high-quality, FBI/State-grade electronic fingerprints using optical live-scan equipment.
          Submissions are exported or transmitted per the requesting agency’s format (FBI EFTS/EBTS, state portals, or card printouts).
        </p>

        <ul style="list-style:none; padding:0; margin:16px 0; display:grid; gap:10px;">
          <li style="display:flex; gap:10px; align-items:flex-start;">
            <span style="width:10px; height:10px; border-radius:50%; background:linear-gradient(135deg,#06b6d4,#7c3aed); margin-top:8px;"></span>
            <span style="font:400 15.5px/1.7 Poppins, sans-serif; color:#1a2644;">FBI/State compliant live scan with quality scoring and recapture if needed</span>
          </li>
          <li style="display:flex; gap:10px; align-items:flex-start;">
            <span style="width:10px; height:10px; border-radius:50%; background:linear-gradient(135deg,#06b6d4,#7c3aed); margin-top:8px;"></span>
            <span style="font:400 15.5px/1.7 Poppins, sans-serif; color:#1a2644;">Employment, professional licensing, healthcare, education &amp; volunteer programs</span>
          </li>
          <li style="display:flex; gap:10px; align-items:flex-start;">
            <span style="width:10px; height:10px; border-radius:50%; background:linear-gradient(135deg,#06b6d4,#7c3aed); margin-top:8px;"></span>
            <span style="font:400 15.5px/1.7 Poppins, sans-serif; color:#1a2644;">Mobile onsite group events &amp; individual appointments</span>
          </li>
        </ul>
      </div>

      <!-- Side Card -->
      <aside style="background:#fff; border:1px solid rgba(2,6,23,.06); border-radius:14px; padding:18px; box-shadow:0 10px 24px rgba(2,6,23,.06);">
        <h3 style="font:500 18px/1.4 Poppins, sans-serif; color:#0f1f3a; margin:0 0 8px;">What to Bring</h3>
        <ol style="margin:0; padding-left:18px; font:400 14.5px/1.8 Poppins, sans-serif; color:#23304a;">
          <li>Valid government photo ID</li>
          <li>ORI/Agency Code or Request Form (if provided)</li>
          <li>Payment method &amp; any reference numbers</li>
        </ol>
        <a href="{{ route('contactus') }}" style="display:inline-block; margin-top:12px; padding:12px 16px; border-radius:10px; background:linear-gradient(135deg,#001F3F,#00509E); color:#fff; text-decoration:none; font:500 14.5px/1 Poppins, sans-serif; box-shadow:0 12px 22px rgba(0,40,85,.25);">
          Schedule Live Scan
        </a>
      </aside>
    </div>
  </div>

  <!-- Gallery (relevant images) -->
  <div style="max-width:1100px; margin:26px auto 6px; padding:0 16px;">
    <div class="live-gallery" style="display:grid; gap:14px; grid-template-columns:1fr 1fr 1fr;">
      <figure style="margin:0; border-radius:14px; overflow:hidden; border:1px solid rgba(2,6,23,.06); box-shadow:0 8px 18px rgba(2,6,23,.06);">
        <img
          src="{{ asset('assets/images/live.jpg') }}"
          alt="Close-up of fingerprint scanning sensor"
          style="width:100%; height:220px; object-fit:cover;">
        <figcaption style="padding:10px 12px; font:400 14px/1.6 Poppins, sans-serif; color:#334155;">
          Optical live-scan capture with anti-smear surface.
        </figcaption>
      </figure>

      <figure style="margin:0; border-radius:14px; overflow:hidden; border:1px solid rgba(2,6,23,.06); box-shadow:0 8px 18px rgba(2,6,23,.06);">
        <img
          src="{{ asset('assets/images/live2.jpg') }}"
          alt="Technician guiding applicant for fingerprinting"
          style="width:100%; height:220px; object-fit:cover;">
        <figcaption style="padding:10px 12px; font:400 14px/1.6 Poppins, sans-serif; color:#334155;">
          Guided rolls & flats for high quality scores.
        </figcaption>
      </figure>

      <figure style="margin:0; border-radius:14px; overflow:hidden; border:1px solid rgba(2,6,23,.06); box-shadow:0 8px 18px rgba(2,6,23,.06);">
        <img
          src="https://images.pexels.com/photos/8353809/pexels-photo-8353809.jpeg?auto=compress&cs=tinysrgb&w=1200"
          alt="Secure submission and background report"
          style="width:100%; height:220px; object-fit:cover;">
        <figcaption style="padding:10px 12px; font:400 14px/1.6 Poppins, sans-serif; color:#334155;">
          Secure transmission or card output per agency rules.
        </figcaption>
      </figure>
    </div>
  </div>

  <!-- FAQs -->
  <div style="max-width:980px; margin:20px auto 0; padding:0 16px;">
    <details style="background:#fff;border:1px solid rgba(2,6,23,.08);border-radius:12px;padding:14px 16px;margin-bottom:10px;">
      <summary style="cursor:pointer; font:500 15px/1.5 Poppins, sans-serif; color:#0f1f3a;">Do you support FBI & state formats?</summary>
      <div style="font:400 14.5px/1.75 Poppins, sans-serif; color:#334155; padding-top:8px;">
        Yes—our system supports FBI EFTS/EBTS specifications, state live-scan portals, and printing FD-258 cards if required.
      </div>
    </details>

    <details style="background:#fff;border:1px solid rgba(2,6,23,.08);border-radius:12px;padding:14px 16px;margin-bottom:10px;">
      <summary style="cursor:pointer; font:500 15px/1.5 Poppins, sans-serif; color:#0f1f3a;">Can you come to our office for a group?</summary>
      <div style="font:400 14.5px/1.75 Poppins, sans-serif; color:#334155; padding-top:8px;">
        Absolutely. We set up a mobile station and fingerprint teams or classes on-site—perfect for onboarding days and compliance deadlines.
      </div>
    </details>

    <details style="background:#fff;border:1px solid rgba(2,6,23,.08);border-radius:12px;padding:14px 16px;">
      <summary style="cursor:pointer; font:500 15px/1.5 Poppins, sans-serif; color:#0f1f3a;">How long does a live scan take?</summary>
      <div style="font:400 14.5px/1.75 Poppins, sans-serif; color:#334155; padding-top:8px;">
        Most appointments take 10–15 minutes. We review quality scores in-session and recapture fingers as needed.
      </div>
    </details>
  </div>

  <!-- CTA -->
  <div style="max-width:980px; margin:20px auto 36px; padding:0 16px; text-align:center;">
    <a href="{{ route('contactus') }}" style="display:inline-block; padding:14px 22px; border-radius:12px; background:linear-gradient(135deg,#001F3F,#00509E); color:#fff; text-decoration:none; font:500 16px/1 Poppins, sans-serif; box-shadow:0 14px 28px rgba(0,40,85,.28); transition:transform .12s ease, filter .2s ease;">
      Book Live Fingerprint Screen
    </a>
  </div>
</section>

<style>
  /* RESPONSIVE: Live Scan page */
  @media (max-width: 1024px){
    .live-hero img{ height:380px !important; }
    .live-grid{ grid-template-columns:1fr !important; }
  }
  @media (max-width: 820px){
    .live-hero img{ height:340px !important; }
    .live-gallery{ grid-template-columns:1fr 1fr !important; }
  }
  @media (max-width: 560px){
    .live-hero{ border-radius:12px !important; }
    .live-hero img{ height:300px !important; }
    .live-gallery{ grid-template-columns:1fr !important; }
  }
</style>
