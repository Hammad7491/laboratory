{{-- READY TO GET STARTED SECTION --}}
<section class="eg-get-started">
  <div class="egc-wrap">
    <div class="eg-get-card">
      <h2 class="eg-get-title">Ready to Get Started?</h2>
      <p class="eg-get-sub">
        Call us today to schedule mobile phlebotomy, DNA testing, drug screens, IV hydration, and more.
        Emergency service emails are typically answered within <strong>15–20 minutes</strong>.
      </p>

      <div class="eg-get-actions">
        <!-- Call Now button -->
        <a href="tel:2016880338" class="eg-get-btn eg-get-call">
          <span class="eg-get-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M21 15v4a2 2 0 0 1-2 2C9.94 21 3 14.06 3 5a2 2 0 0 1 2-2h4l2 5-3 2a10 10 0 0 0 6 6l2-3 5 2z"
                    stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
          <span class="eg-get-text">
            <span class="eg-get-label">Call Now</span>
            <span class="eg-get-main">201-688-0338</span>
          </span>
        </a>

        <!-- Email Us button -->
        <a href="mailto:info@emmagenix.com" class="eg-get-btn eg-get-email">
          <span class="eg-get-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <rect x="3" y="5" width="18" height="14" rx="2"
                    stroke="currentColor" stroke-width="1.6"/>
              <path d="M4 7l8 6 8-6"
                    stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
          <span class="eg-get-text">
            <span class="eg-get-label">Email Us</span>
            <span class="eg-get-main">info@emmagenix.com</span>
          </span>
        </a>
      </div>
    </div>
  </div>
</section>

<style>
  .eg-get-started{
    font-family:'Poppins',ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;
    background:#f6f9ff;
    padding:24px 0 32px;
  }
  .eg-get-card{
    max-width:960px;
    margin:0 auto;
    background:#ffffff;
    border-radius:22px;
    border:1px solid rgba(2,6,23,.06);
    box-shadow:0 18px 40px rgba(2,6,23,.08);
    padding:26px 22px 28px;
    text-align:center;
  }
  .eg-get-title{
    margin:.2rem 0;
    font-size:clamp(22px,3vw,28px);
    font-weight:800;
    color:#001F3F;
  }
  .eg-get-sub{
    max-width:640px;
    margin:6px auto 20px;
    font-size:14.5px;
    color:#4a5a7c;
    line-height:1.7;
  }

  .eg-get-actions{
    display:flex;
    justify-content:center;
    gap:14px;
    flex-wrap:wrap;
  }

  .eg-get-btn{
    display:flex;
    align-items:center;
    gap:10px;
    padding:12px 20px;
    border-radius:999px;
    text-decoration:none;
    min-width:240px;
    justify-content:center;
    transition:transform .12s ease, box-shadow .12s ease, background .12s ease;
    font-size:14px;
  }
  .eg-get-icon{
    width:32px;
    height:32px;
    border-radius:999px;
    display:grid;
    place-items:center;
  }
  .eg-get-text{
    display:flex;
    flex-direction:column;
    align-items:flex-start;
  }
  .eg-get-label{
    font-size:11px;
    text-transform:uppercase;
    letter-spacing:.16em;
    opacity:.9;
  }
  .eg-get-main{
    font-size:15px;
    font-weight:700;
    line-height:1.2;
  }

  /* Primary: Call button */
  .eg-get-call{
    background:linear-gradient(135deg,#00b894 0%,#00c2ff 60%);
    color:#ffffff;
    box-shadow:0 14px 26px rgba(0,150,200,.35);
    border:1px solid transparent;
  }
  .eg-get-call .eg-get-icon{
    background:rgba(255,255,255,.18);
    color:#ffffff;
  }
  .eg-get-call .eg-get-label{color:#e0f7ff;}
  .eg-get-call .eg-get-main{color:#ffffff;}
  .eg-get-call:hover{
    transform:translateY(-1px);
    box-shadow:0 18px 32px rgba(0,150,200,.42);
  }

  /* Secondary: Email button */
  .eg-get-email{
    background:#ffffff;
    color:#001F3F;
    border:1px solid #c8ddff;
    box-shadow:0 10px 20px rgba(2,6,23,.04);
  }
  .eg-get-email .eg-get-icon{
    background:#f1f5ff;
    color:#00509E;
  }
  .eg-get-email .eg-get-label{color:#6a7aa0;}
  .eg-get-email .eg-get-main{color:#001F3F;}
  .eg-get-email:hover{
    transform:translateY(-1px);
    box-shadow:0 14px 26px rgba(2,6,23,.08);
    background:#f9fbff;
  }

  /* Responsive */
  @media (max-width:640px){
    .eg-get-card{
      border-radius:18px;
      padding:22px 16px 24px;
    }
    .eg-get-btn{
      width:100%;
    }
    .eg-get-text{
      align-items:center;
    }
  }
</style>
