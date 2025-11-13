<!-- HEADER START -->
<header class="eg-header" style="position:fixed;top:0;left:0;right:0;width:100%;z-index:999;background:#fff;box-shadow:0 6px 18px rgba(15,23,42,.06);padding:14px 0;transition:box-shadow .2s ease, padding .2s ease;">
  <div class="eg-wrap" style="max-width:1200px;margin:0 auto;padding:0 20px;display:flex;align-items:center;justify-content:space-between;gap:16px;box-sizing:border-box;">

    <!-- Brand (logo + dual-color name) -->
    <a href="{{ url('/') }}" class="eg-brand" style="display:flex;align-items:center;gap:12px;text-decoration:none;">
      <img src="{{ asset('assets/images/logo.png') }}" alt="EmmaGenix logo" class="eg-logo">
      <span class="eg-brand-name">
        <span class="eg-emma">Emma</span><span class="eg-genix">Genix</span>
      </span>
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
                <li><a href="{{ route('covid') }}">Covid-19 Test</a></li>
                <li><a href="{{ route('background') }}">Background Check</a></li>
                <li><a href="{{ route('vital') }}">Pre-vital Sign Check</a></li>
                <li><a href="{{ route('employment') }}">Pre-employment Verification</a></li>
              </ul>
            </div>
            <div class="eg-mega-col">
              <div class="eg-mega-title">SERVICES AVAILABLE AT SELECT LOCATIONS</div>
              <ul class="eg-mega-list">
                <li><a href="{{ route('drug') }}">Drug Test</a></li>
                <li><a href="{{ route('dna') }}">DNA Test</a></li>
                <li><a href="{{ route('live') }}">Live FingerPrint Screen</a></li>
                <li><a href="{{ route('hydration') }}">IV Hydration</a></li>
              </ul>
            </div>
          </div>
        </li>

        <li><a href="{{ route('location') }}" class="eg-link">Locations</a></li>
        <li><a href="{{ route('aboutus') }}" class="eg-link">About Us</a></li>
        <li><a href="{{ route('contactus') }}" class="eg-link eg-cta">Contact Us</a></li>
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

<!-- FONT -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>

<style>
  .sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0;}
  .eg-header, .eg-header *{font-family:'Poppins',ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;box-sizing:border-box}
  html,body{max-width:100%;overflow-x:hidden}

  /* Brand styles */
  .eg-logo{width:42px;height:42px;object-fit:contain;border-radius:10px;display:block;box-shadow:0 8px 18px rgba(0,0,0,.06);}
  .eg-brand-name{display:inline-flex;align-items:center;gap:4px;line-height:1}
  .eg-emma{font-weight:700;font-size:24px;color:#001F3F;letter-spacing:.2px}
  .eg-genix{font-weight:700;font-size:24px;letter-spacing:.2px;background:linear-gradient(135deg,#00b894 0%, #00c2ff 100%);-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;}

  /* Desktop show/hide helpers */
  @media (min-width:992px){.d-lg-block{display:block!important}.d-lg-none{display:none!important}}
  @media (max-width:991.98px){.d-lg-block{display:none!important}.d-lg-none{display:inline-grid!important}.eg-emma,.eg-genix{font-size:22px}}

  /* Menu base */
  .eg-menu{list-style:none;margin:0;padding:0;display:flex;align-items:center;gap:6px}
  .eg-link{ text-decoration:none;color:#26334f;font-weight:500;font-size:15.5px;padding:10px 14px;border-radius:12px;display:inline-flex;align-items:center;gap:8px;transition:background-color .2s,color .2s,box-shadow .2s,transform .06s; }
  .eg-link:hover{ color:#002855; background:linear-gradient(180deg,#e6f0ff,#f4f8ff); box-shadow:0 6px 16px rgba(0,40,85,.12); }

  /* CONTACT US button — force static navy in ALL states (override .eg-link:hover) */
  .eg-link.eg-cta,
  .eg-link.eg-cta:hover,
  .eg-link.eg-cta:focus,
  .eg-link.eg-cta:active,
  .eg-link.eg-cta:visited{
    background:#001F3F !important;
    color:#fff !important;
    border:1px solid transparent !important;
    box-shadow:0 8px 20px rgba(0,40,85,.20) !important;
    transform:none !important;
    filter:none !important;
  }

  /* Mega dropdown — navy theme */
  .eg-has-mega{position:relative}
  .eg-caret{transition:transform .18s ease}
  .eg-has-mega:hover .eg-caret{transform:rotate(180deg)}
  .eg-has-mega .eg-mega{
    position:absolute;left:50%;top:calc(100% + 8px);transform:translate(-50%,8px) scale(.98);
    background:#fff;border:1px solid rgba(15,23,42,.06);border-radius:18px;box-shadow:0 22px 46px rgba(15,23,42,.12);
    padding:18px;width:clamp(560px, 70vw, 980px);max-width:calc(100vw - 32px);
    display:grid;grid-template-columns:1fr 1fr;gap:28px;opacity:0;pointer-events:none;transition:opacity .15s, transform .15s;
  }
  .eg-has-mega .eg-mega::before{content:"";position:absolute;left:0;right:0;top:-12px;height:14px}
  .eg-has-mega:hover .eg-mega, .eg-has-mega:focus-within .eg-mega{opacity:1;pointer-events:auto;transform:translate(-50%,0) scale(1)}

  .eg-mega-col{display:flex;flex-direction:column;gap:10px;min-width:0}
  .eg-mega-title{font-size:13px;letter-spacing:.5px;color:#002855;font-weight:600;text-transform:uppercase}
  .eg-mega-list{list-style:none;margin:0;padding:0;display:grid;gap:10px}
  .eg-mega-list a{ text-decoration:none;color:#002855 !important;font-weight:400;font-size:16px;padding:6px 8px;border-radius:10px;border:1px solid transparent;transition:background .15s,border-color .15s,color .15s; }
  .eg-mega-list a:hover{ background:#f0f6ff;border-color:#cdddf5;color:#001F3F !important; }

  /* Mobile sheet */
  .eg-mobile{display:none;position:absolute;top:100%;left:0;width:100%;background:#fff;border-top:1px solid rgba(2,6,23,.06);box-shadow:0 16px 36px rgba(2,6,23,.1)}
  .eg-mobile.show{display:block}
  .eg-m-list{list-style:none;margin:0;padding:14px}
  .eg-m-list>li{margin:8px 0}
  .eg-mobile a{display:block;padding:14px 12px;border-radius:12px;text-decoration:none;font-weight:400;color:#22304a;border:1px solid rgba(2,6,23,.06);background:#fff}
  .eg-mobile a:hover{background:#f0f6ff;color:#002855}

  .eg-m-cta,
  .eg-m-cta:hover,
  .eg-m-cta:focus,
  .eg-m-cta:active{
    background:#001F3F!important;color:#fff!important;border:none!important;
    box-shadow:0 8px 20px rgba(0,40,85,.20)!important;transform:none!important;filter:none!important;
  }

  .eg-m-acc-btn{width:100%;display:flex;justify-content:space-between;align-items:center;padding:14px 12px;border-radius:12px;font-weight:500;border:1px solid rgba(2,6,23,.06);background:#fff;color:#22304a;cursor:pointer;}
  .eg-m-mega{display:none;gap:10px;margin-top:8px;border-left:3px solid #c9daf7;padding:8px 10px}
  .eg-m-mega-col{display:flex;flex-direction:column;gap:6px}
  .eg-m-mega-title{font-size:12px;color:#002855;font-weight:600}
  .eg-m-acc.open .eg-m-mega{display:grid;grid-template-columns:1fr 1fr}

  /* Fixed header: stronger shadow + tighter padding when scrolled */
  .eg-header.is-scrolled{box-shadow:0 10px 24px rgba(15,23,42,.10);padding:10px 0 !important}
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

  // ARIA sync for Services hover (desktop)
  (function(){
    const trigger = document.querySelector('.eg-mega-trigger');
    const holder  = document.querySelector('.eg-has-mega');
    if(!trigger || !holder) return;
    holder.addEventListener('mouseenter', ()=> trigger.setAttribute('aria-expanded','true'));
    holder.addEventListener('mouseleave', ()=> trigger.setAttribute('aria-expanded','false'));
  })();

  // Spacer + scrolled state
  (function(){
    const header = document.querySelector('.eg-header');
    const spacer = document.createElement('div');
    spacer.id = 'eg-header-spacer';
    document.body.prepend(spacer);
    function setSpacer(){ spacer.style.height = header.offsetHeight + 'px'; }
    setSpacer();
    window.addEventListener('resize', setSpacer);
    function onScroll(){ if(window.scrollY > 8){ header.classList.add('is-scrolled'); } else { header.classList.remove('is-scrolled'); } }
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
  })();
</script>
