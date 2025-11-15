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
        <!-- Call Now -->
        <a href="tel:2016880338" class="eg-get-btn eg-get-call">
          <span class="eg-get-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
              <path d="M21 15v4a2 2 0 0 1-2 2C9.94 21 3 14.06 3 5a2 2 0 0 1 2-2h4l2 5-3 2a10 10 0 0 0 6 6l2-3 5 2z"
                stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
          <span class="eg-get-text">
            <span class="eg-get-label">Call Now</span>
            <span class="eg-get-main">201-688-0338</span>
          </span>
        </a>

        <!-- Email Us -->
        <a href="mailto:info@emmagenix.com" class="eg-get-btn eg-get-email">
          <span class="eg-get-icon">
            <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <rect x="3" y="5" width="18" height="14" rx="2" stroke-width="1.6"/>
              <path d="M4 7l8 6 8-6" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
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
/* LIGHT SECTION BACKGROUND */
.eg-get-started{
  padding:36px 0 40px;
  background:#f6f9ff;
  font-family:'Poppins',ui-sans-serif,system-ui;
}

/* NAVY BLUE ROUNDED BOX */
.eg-get-card{
  max-width:1200px;
  margin:0 auto;
  background:#001F3F; /* NAVY BLUE */
  border-radius:32px;
  padding:48px 30px 50px;
  box-shadow:0 25px 50px rgba(0,0,0,.35);
  text-align:center;
  color:#ffffff;
}

/* TITLE */
.eg-get-title{
  color:#ffffff;
  font-size:clamp(26px,3vw,34px);
  font-weight:800;
  margin-bottom:8px;
}

/* SUB TEXT */
.eg-get-sub{
  max-width:760px;
  margin:0 auto 32px;
  font-size:16px;
  color:#e3e9f4;
  line-height:1.7;
}

/* BUTTONS WRAP */
.eg-get-actions{
  display:flex;
  justify-content:center;
  gap:20px;
  flex-wrap:wrap;
}

/* SHARED BUTTON DESIGN */
.eg-get-btn{
  display:flex;
  align-items:center;
  gap:12px;
  padding:16px 26px;
  border-radius:999px;
  text-decoration:none;
  min-width:260px;
  justify-content:center;
  font-size:15px;
  font-weight:600;
  transition:.2s;
}

/* ICON STYLE */
.eg-get-icon{
  width:40px;
  height:40px;
  display:flex;
  justify-content:center;
  align-items:center;
  border-radius:50%;
}

/* TEXT */
.eg-get-label{
  font-size:12px;
  text-transform:uppercase;
  opacity:.8;
}

.eg-get-main{
  font-size:18px;
  font-weight:700;
}

/* CALL BUTTON */
.eg-get-call{
  background:linear-gradient(135deg,#00b894 0%,#00c2ff 70%);
  color:white;
  box-shadow:0 16px 32px rgba(0,150,200,.40);
}

.eg-get-call .eg-get-icon{
  background:rgba(255,255,255,.22);
}

/* EMAIL BUTTON */
.eg-get-email{
  background:white;
  color:#001F3F;
  border:1px solid #cfe2ff;
}

.eg-get-email .eg-get-icon{
  background:#eef4ff;
  color:#00509E;
}

@media(max-width:640px){
  .eg-get-btn{
    width:100%;
  }
}
</style>
