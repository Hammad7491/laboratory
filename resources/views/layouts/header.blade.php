<!-- HEADER START -->
<header class="eg-header" style="position:sticky;top:0;z-index:999;background:#fff;box-shadow:0 6px 18px rgba(15,23,42,.06);padding:14px 0;">
  <div class="eg-wrap" style="max-width:1200px;margin:0 auto;padding:0 20px;display:flex;align-items:center;justify-content:space-between;gap:16px;box-sizing:border-box;">

    <!-- Brand -->
    <a href="{{ url('/') }}" class="eg-brand" style="display:flex;align-items:center;gap:10px;text-decoration:none;">
      <span style="display:grid;place-items:center;width:40px;height:40px;border-radius:12px;background:linear-gradient(135deg,#06b6d4,#7c3aed);color:#fff;box-shadow:0 10px 20px rgba(124,58,237,.25);">
        <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor"><path d="M9 2h6v2h-1v5.6l4.8 4.8A4 4 0 0 1 17.6 20H6.4A4 4 0 0 1 3.2 14.4L8 9.6V4H9V2z"/></svg>
      </span>
      <span class="eg-name">Emma<span style="opacity:.9;">Genix</span></span>
    </a>

    <!-- Toggle (Mobile) -->
    <button id="egToggle" class="d-lg-none" aria-expanded="false"
            style="background:#fff;border:1px solid rgba(2,6,23,.08);width:44px;height:44px;border-radius:12px;display:grid;place-items:center;box-shadow:0 8px 16px rgba(2,6,23,.06);">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M3 6h18M3 12h18M3 18h18" stroke="#1f2a44" stroke-width="2" stroke-linecap="round"/></svg>
      <span class="sr-only">Toggle navigation</span>
    </button>

    <!-- Desktop Nav -->
    <nav class="d-lg-block" aria-label="Primary" style="display:none;">
      <ul class="eg-menu">
        <li><a href="{{ url('/') }}" class="eg-link">Home</a></li>

        <!-- Services (Hover to open) -->
        <li class="eg-has-mega">
          <a href="#" class="eg-link eg-mega-trigger" aria-haspopup="true" aria-expanded="false">
            Services
            <!-- Inline caret (reliable) -->
            <svg class="eg-caret" width="14" height="14" viewBox="0 0 24 24" aria-hidden="true" style="margin-left:6px;">
              <path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>

          <!-- Mega Dropdown -->
          <div class="eg-mega" role="menu" aria-label="Services">
            <div class="eg-mega-col">
              <div class="eg-mega-title">SERVICES AVAILABLE ALL LOCATIONS</div>
              <ul class="eg-mega-list">
                <li><a href="{{ route('phlebotomy') }}">Phlebotomy</a></li>

                <li><a href="#">Covid-19 Test</a></li>
                <li><a href="#">Background Check</a></li>
                <li><a href="#">Pre-vital Sign Check</a></li>
                <li><a href="#">Pre-employment Verification</a></li>
              </ul>
            </div>
            <div class="eg-mega-col">
              <div class="eg-mega-title">SERVICES AVAILABLE AT SELECT LOCATIONS</div>
              <ul class="eg-mega-list">
                <li><a href="#">Drug Test</a></li>
                <li><a href="#">DNA Test</a></li>
                <li><a href="#">Live FingerPrint Screen</a></li>
                <li><a href="#">IV Hydration</a></li>
              </ul>
            </div>
          </div>
        </li>

        <li><a href="#locations" class="eg-link">Locations</a></li>
        <li><a href="#about" class="eg-link">About Us</a></li>
        <li><a href="#contact" class="eg-link eg-cta">Contact Us</a></li>
      </ul>
    </nav>
  </div>

  <!-- Mobile Sheet -->
  <div id="egMobile" class="eg-mobile" role="dialog" aria-modal="true" aria-label="Mobile navigation">
    <ul class="eg-m-list">
      <li><a href="{{ url('/') }}">Home</a></li>

      <li class="eg-m-acc">
        <button class="eg-m-acc-btn" type="button" aria-expanded="false" aria-controls="mServices">
          Services
          <svg width="14" height="14" viewBox="0 0 24 24" aria-hidden="true"><path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <div id="mServices" class="eg-m-mega">
          <div class="eg-m-mega-col">
            <div class="eg-m-mega-title">All Locations</div>
            <a href="#">Phlebotomy</a>
            <a href="#">Covid-19 Test</a>
            <a href="#">Background Check</a>
            <a href="#">Pre-vital Sign Check</a>
            <a href="#">Pre-employment Verification</a>
          </div>
          <div class="eg-m-mega-col">
            <div class="eg-m-mega-title">Select Locations</div>
            <a href="#">Drug Test</a>
            <a href="#">DNA Test</a>
            <a href="#">Live FingerPrint Screen</a>
            <a href="#">IV Hydration</a>
          </div>
        </div>
      </li>

      <li><a href="#locations">Locations</a></li>
      <li><a href="#about">About Us</a></li>
      <li><a class="eg-m-cta" href="#contact">Contact Us</a></li>
    </ul>
  </div>
</header>
<!-- HEADER END -->

<!-- FONT (same light look) -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet"/>

<style>


  /* --- Force navy blue for ALL service names --- */
  .eg-mega-list a{
    color:#002855 !important;              /* deep navy */
  }
  .eg-mega-list a:hover{
    color:#001F3F !important;              /* darker navy on hover */
    background:#eef4ff;                    /* soft blue hover bg */
    border-color:#cdddf5;
  }

  /* Mobile services (accordion mega) */
  .eg-m-mega a{
    color:#002855 !important;
  }
  .eg-m-mega a:hover{
    color:#001F3F !important;
    background:#eef4ff;
    border-color:#cdddf5;
  }
  .sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0;}
  .eg-header, .eg-header *{font-family:'Poppins',ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;box-sizing:border-box}
  html,body{max-width:100%;overflow-x:hidden}

  @media (min-width:992px){.d-lg-block{display:block!important}.d-lg-none{display:none!important}}
  @media (max-width:991.98px){.d-lg-block{display:none!important}.d-lg-none{display:inline-grid!important}}

  .eg-name{font-weight:500;font-size:23px;color:#1f2a44;letter-spacing:.2px}

  /* Menu base */
  .eg-menu{list-style:none;margin:0;padding:0;display:flex;align-items:center;gap:6px}
  .eg-link{
    text-decoration:none;color:#26334f;font-weight:500;font-size:15.5px;
    padding:10px 14px;border-radius:12px;display:inline-flex;align-items:center;gap:8px;
    transition:background-color .2s,color .2s,box-shadow .2s,transform .06s;
  }
  .eg-link:hover{color:#002855;background:linear-gradient(180deg,#e6f0ff,#f4f8ff);box-shadow:0 6px 16px rgba(0,40,85,.12)}
  .eg-cta{
    background:linear-gradient(135deg,#001F3F,#00509E);
    color:#fff!important;border:1px solid rgba(255,255,255,.45);
    box-shadow:0 10px 22px rgba(0,40,85,.28)
  }
  .eg-cta:hover{filter:saturate(115%);transform:translateY(-1px);box-shadow:0 12px 26px rgba(0,40,85,.35)}

  /* Mega dropdown — navy theme */
  .eg-has-mega{position:relative}
  .eg-caret{transition:transform .18s ease}
  .eg-has-mega:hover .eg-caret{transform:rotate(180deg)}

  .eg-has-mega .eg-mega{
    position:absolute;
    left:50%; top:calc(100% + 8px);
    transform:translate(-50%,8px) scale(.98);
    background:#fff;border:1px solid rgba(15,23,42,.06);
    border-radius:18px;box-shadow:0 22px 46px rgba(15,23,42,.12);
    padding:18px;
    width:clamp(560px, 70vw, 980px);
    max-width:calc(100vw - 32px);
    display:grid;grid-template-columns:1fr 1fr;gap:28px;
    opacity:0;pointer-events:none;transition:opacity .15s, transform .15s;
  }
  .eg-has-mega .eg-mega::before{content:"";position:absolute;left:0;right:0;top:-12px;height:14px}
  .eg-has-mega:hover .eg-mega,
  .eg-has-mega:focus-within .eg-mega{opacity:1;pointer-events:auto;transform:translate(-50%,0) scale(1)}

  .eg-mega-col{display:flex;flex-direction:column;gap:10px;min-width:0}
  .eg-mega-title{
    font-size:13px;letter-spacing:.5px;color:#002855;font-weight:600;text-transform:uppercase
  }
  .eg-mega-list{list-style:none;margin:0;padding:0;display:grid;gap:10px}
  .eg-mega-list a{
    text-decoration:none;color:#1a2644;font-weight:400;font-size:16px;
    padding:6px 8px;border-radius:10px;border:1px solid transparent;
    transition:background .15s,border-color .15s,color .15s;
  }
  .eg-mega-list a:hover{
    background:#f0f6ff;
    border-color:#cdddf5;
    color:#002855;
  }

  /* Mobile sheet */
  .eg-mobile{display:none;position:absolute;top:100%;left:0;width:100%;background:#fff;
    border-top:1px solid rgba(2,6,23,.06);box-shadow:0 16px 36px rgba(2,6,23,.1)}
  .eg-mobile.show{display:block}
  .eg-m-list{list-style:none;margin:0;padding:14px}
  .eg-m-list>li{margin:8px 0}
  .eg-mobile a{display:block;padding:14px 12px;border-radius:12px;text-decoration:none;font-weight:400;color:#22304a;
    border:1px solid rgba(2,6,23,.06);background:#fff}
  .eg-mobile a:hover{background:#f0f6ff;color:#002855}
  .eg-m-cta{
    background:linear-gradient(135deg,#001F3F,#00509E)!important;
    color:#fff!important;border-color:transparent!important;
    box-shadow:0 10px 22px rgba(0,40,85,.25)
  }

  .eg-m-acc-btn{
    width:100%;display:flex;justify-content:space-between;align-items:center;
    padding:14px 12px;border-radius:12px;font-weight:500;border:1px solid rgba(2,6,23,.06);
    background:#fff;color:#22304a;cursor:pointer;
  }
  .eg-m-mega{display:none;gap:10px;margin-top:8px;border-left:3px solid #c9daf7;padding:8px 10px}
  .eg-m-mega-col{display:flex;flex-direction:column;gap:6px}
  .eg-m-mega-title{font-size:12px;color:#002855;font-weight:600}
  .eg-m-acc.open .eg-m-mega{display:grid;grid-template-columns:1fr 1fr}
</style>


<script>
  // Mobile open/close
  (function(){
    const t = document.getElementById('egToggle');
    const m = document.getElementById('egMobile');
    const header = document.querySelector('.eg-header');
    const open = ()=>{ m.classList.add('show'); t.setAttribute('aria-expanded','true'); };
    const close = ()=>{ m.classList.remove('show'); t.setAttribute('aria-expanded','false'); };
    t?.addEventListener('click', ()=> m.classList.contains('show') ? close() : open());
    document.addEventListener('click', e => { if(!header.contains(e.target)) close(); });
    document.addEventListener('keydown', e => { if(e.key==='Escape') close(); });

    const acc = document.querySelector('.eg-m-acc');
    const btn = acc?.querySelector('.eg-m-acc-btn');
    btn?.addEventListener('click', ()=> acc.classList.toggle('open'));
    m.querySelectorAll('a').forEach(a => a.addEventListener('click', close));
  })();

  // ARIA sync for Services hover
  (function(){
    const trigger = document.querySelector('.eg-mega-trigger');
    const holder  = document.querySelector('.eg-has-mega');
    if(!trigger || !holder) return;
    holder.addEventListener('mouseenter', ()=> trigger.setAttribute('aria-expanded','true'));
    holder.addEventListener('mouseleave', ()=> trigger.setAttribute('aria-expanded','false'));
  })();
</script>
