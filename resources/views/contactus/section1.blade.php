{{-- resources/views/contactus/section1.blade.php --}}

<section class="eg-contact">

  <!-- HERO -->
  <div class="egc-hero">
    <img
      src="https://images.pexels.com/photos/8460035/pexels-photo-8460035.jpeg?auto=compress&cs=tinysrgb&w=1920"
      alt="Phlebotomist handling blood sample tubes in a medical lab">
    <div class="egc-hero-overlay"></div>

    <div class="egc-hero-inner">
      <p class="egc-kicker">Contact EmmaGenix</p>
      <h1 class="egc-title">We’re ready to help</h1>
      <p class="egc-sub">Tell us what you need—mobile phlebotomy, lab testing, DNA/drug screens, IV hydration, or more.</p>
    </div>
  </div>

  <!-- CONTENT -->
  <div class="egc-wrap egc-grid">

    <!-- Left: Contact details -->
    <aside class="egc-card">
      <h2 class="egc-h2">Get in touch</h2>
      <p class="egc-p">Prefer talking? Reach us anytime and we’ll schedule a convenient mobile visit.</p>

      <ul class="egc-list">
        <li>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
            <path d="M21 15v4a2 2 0 0 1-2 2c-9.94 0-18-8.06-18-18a2 2 0 0 1 2-2h4l2 5-3 2a14 14 0 0 0 6 6l2-3 5 2z"/>
          </svg>
          201-688-0338
        </li>


        <li>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
            <path d="M21 15v4a2 2 0 0 1-2 2c-9.94 0-18-8.06-18-18a2 2 0 0 1 2-2h4l2 5-3 2a14 14 0 0 0 6 6l2-3 5 2z"/>
          </svg>
          908-613-2200
        </li>
        <li>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
            <path d="M4 4h16a2 2 0 0 1 2 2v1l-10 6L2 7V6a2 2 0 0 1 2-2Zm18 6.6V18a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-7.4l10 6 10-6Z"/>
          </svg>
          info@emmagenix.com
        </li>
        <li class="egc-hours">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2a10 10 0 1 0 .001 20.001A10 10 0 0 0 12 2Zm0 2a8 8 0 1 1 0 16A8 8 0 0 1 12 4Zm-1 2h2v5.17l3.12 3.11-1.42 1.42L11 12.59V6Z"/>
          </svg>
          <div>
            <div class="egc-hours-title">Business Hours</div>
            <div class="egc-hours-text">
              Mon – Fri: 8:30 am – 5:30 pm<br>
              Saturday: 8:30 am – 2:30 pm
            </div>
          </div>
        </li>
      </ul>

      <div class="egc-badgewrap">
        <span class="egc-badge">HIPAA-aware</span>
        <span class="egc-badge">AABB partners</span>
        <span class="egc-badge">Mobile & on-site</span>
      </div>
    </aside>

    <!-- Right: Form -->
    <div class="egc-card">
      <h2 class="egc-h2">Book Appointment</h2>

      {{-- Optional server flashes if you ever post to backend --}}
      {{--
      @if(session('status'))
        <div class="egc-alert success">{{ session('status') }}</div>
      @endif

      @if ($errors->any())
        <div class="egc-alert error">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      --}}

      <form id="egcForm" class="egc-form" method="POST" action="" novalidate>
        @csrf

        <div class="egc-row">
          <div class="egc-field">
            <label for="first_name">First name</label>
            <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" placeholder="John" required>
          </div>

          <div class="egc-field">
            <label for="last_name">Last name</label>
            <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" placeholder="Doe" required>
          </div>
        </div>

        <div class="egc-row">
          <div class="egc-field">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="you@example.com" required>
          </div>

          <div class="egc-field">
            <label for="phone">Phone number</label>
            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+1 (___) ___-____" inputmode="tel" pattern="[\d\+\-\(\)\s]{7,}" required>
          </div>
        </div>

        <div class="egc-field">
          <label for="need">Which type of service do you need?</label>
          <select id="need" name="need" required>
            <option value="" disabled selected>Select a service</option>
            <option value="Phlebotomy">Phlebotomy</option>
            <option value="Covid-19 Test">Covid-19 Test</option>
            <option value="Background Check">Background Check</option>
            <option value="Pre-vital Sign Check">Pre-vital Sign Check</option>
            <option value="Pre-employment Verification">Pre-employment Verification</option>
            <option value="Drug Test">Drug Test</option>
            <option value="DNA Test">DNA Test</option>
            <option value="Live FingerPrint Screen">Live FingerPrint Screen</option>
            <option value="IV Hydration">IV Hydration</option>
          </select>
        </div>

        <div class="egc-field">
          <label for="comment">Comment</label>
          <textarea id="comment" name="comment" rows="4" placeholder="Share any details (address, preferred time window, physician order, lab kit info, etc.)">{{ old('comment') }}</textarea>
        </div>

        {{-- Honeypot (spam guard) --}}
        <input type="text" name="hp_field" style="display:none" tabindex="-1" autocomplete="off" />

        <div class="egc-actions">
          <button id="egcSubmit" type="submit" class="egc-btn">Send Request</button>
          <p class="egc-mini">By submitting, you agree to our <a href="#">Privacy Policy</a>.</p>
        </div>

        <!-- Status line for EmailJS feedback -->
        <p id="egcStatus" style="margin-top:10px;font-weight:600;"></p>
      </form>
    </div>
  </div>

  <!-- Band -->
  <div class="egc-band">
    <div class="egc-wrap egc-band-inner">
      <h3>Mobile care—on your schedule.</h3>
      <p>Home, office, clinic, events, assisted-living & hospice. We come to you.</p>
    </div>
  </div>
</section>

<style>
  .eg-contact{--navy:#001F3F;--navy2:#0a1b37;--ink:#16233d;--muted:#5c6b89;
              --grad:linear-gradient(135deg,#00b894 0%,#00c2ff 60%);font-family:'Poppins',ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;color:var(--ink)}
  .egc-wrap{max-width:1200px;margin:0 auto;padding:0 18px}

  /* HERO */
  .egc-hero{position:relative;overflow:hidden;border-radius:22px;margin:18px auto;max-width:1200px}
  .egc-hero img{width:100%;height:420px;object-fit:cover;display:block;filter:saturate(106%)}
  .egc-hero-overlay{position:absolute;inset:0;background:linear-gradient(180deg,rgba(10,18,36,.55),rgba(10,18,36,.55))}
  .egc-hero-inner{position:absolute;inset:0;display:grid;place-items:center;text-align:center;color:#fff;padding:24px}
  .egc-kicker{letter-spacing:.28em;text-transform:uppercase;font-weight:600;font-size:12px;margin:0 0 8px;opacity:.95}
  .egc-title{margin:.2rem 0;font-weight:800;font-size:clamp(30px,5.6vw,48px)}
  .egc-sub{max-width:760px;margin:8px auto 0;opacity:.95;font-size:clamp(14px,2vw,16px)}

  /* GRID */
  .egc-grid{display:grid;gap:22px;margin:18px 0 10px;grid-template-columns:1fr 1fr}
  .egc-card{background:#fff;border:1px solid rgba(2,6,23,.06);border-radius:18px;padding:18px;box-shadow:0 18px 36px rgba(2,6,23,.06)}
  .egc-h2{font-weight:800;color:var(--navy);font-size:clamp(20px,3.4vw,26px);margin:0 0 8px}
  .egc-p{color:#2b3b5a;margin:0 0 12px;line-height:1.8}

  /* Info list */
  .egc-list{list-style:none;margin:12px 0;padding:0;display:grid;gap:10px}
  .egc-list li{display:flex;align-items:center;gap:8px;color:#213150}
  .egc-hours{align-items:flex-start}
  .egc-hours-title{font-weight:600;font-size:13px;color:#001F3F;margin-bottom:2px}
  .egc-hours-text{font-size:13px;color:#425578;line-height:1.5}

  .egc-badgewrap{display:flex;flex-wrap:wrap;gap:8px;margin-top:10px}
  .egc-badge{font-size:12.5px;padding:8px 10px;border-radius:999px;border:1px solid #cde7ff;background:#f5fbff;color:#0a3a64}

  /* Form */
  .egc-form{margin-top:4px}
  .egc-row{display:grid;gap:12px;grid-template-columns:1fr 1fr}
  .egc-field{display:grid;gap:6px}
  .egc-field label{font-size:13px;color:#24324a;font-weight:600}
  .egc-field input,
  .egc-field textarea,
  .egc-field select{
    border-radius:12px;border:1px solid #d7e3ff;background:#f9fbff;outline:none;
    padding:12px 14px;font:500 14.5px/1.5 Poppins,ui-sans-serif;color:#0f1f3a;
    transition:border-color .15s, box-shadow .15s, background .15s;
  }
  .egc-field textarea{min-height:120px;resize:vertical}
  .egc-field input::placeholder,
  .egc-field textarea::placeholder{color:#7b8aab}

  .egc-field select{
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    background-image:
      linear-gradient(45deg, transparent 50%, #7b8aab 50%),
      linear-gradient(135deg, #7b8aab 50%, transparent 50%);
    background-position:
      calc(100% - 16px) calc(50% - 3px),
      calc(100% - 11px) calc(50% - 3px);
    background-size:5px 5px,5px 5px;
    background-repeat:no-repeat;
  }

  .egc-field input:focus,
  .egc-field textarea:focus,
  .egc-field select:focus{
    border-color:#7fb8ff;box-shadow:0 0 0 4px rgba(127,184,255,.25);background:#fff;
  }

  .egc-actions{display:flex;align-items:center;gap:12px;margin-top:10px;flex-wrap:wrap}
  .egc-btn{
    display:inline-block;padding:12px 18px;border-radius:12px;color:#fff;text-decoration:none;border:none;cursor:pointer;
    background:linear-gradient(135deg,var(--navy),#00509E);box-shadow:0 12px 24px rgba(0,40,85,.25);font-weight:700
  }
  .egc-btn:hover{filter:saturate(112%);transform:translateY(-1px)}
  .egc-mini{font-size:12.5px;color:#58709a}
  .egc-mini a{color:#00509E;text-decoration:none}
  .egc-mini a:hover{text-decoration:underline}

  /* Alerts */
  .egc-alert{border-radius:12px;padding:10px 12px;margin:8px 0;font-size:14px}
  .egc-alert.success{background:#ecfff4;border:1px solid #b8f0ce;color:#0f5132}
  .egc-alert.error{background:#fff3f1;border:1px solid #ffd2ca;color:#842029}
  .egc-alert.error ul{margin:0;padding-left:18px}

  /* Band */
  .egc-band{background:#f6f9ff;border-top:1px solid #e5efff;margin:16px 0 0}
  .egc-band-inner{text-align:center;padding:18px 0}
  .egc-band h3{margin:.2rem 0;font-size:clamp(18px,3.2vw,24px);color:var(--navy)}
  .egc-band p{margin:2px 0 0;color:#2b3b5a}

  /* Responsive */
  @media (max-width:1024px){.egc-hero img{height:380px}}
  @media (max-width:860px){
    .egc-grid{grid-template-columns:1fr}
    .egc-row{grid-template-columns:1fr}
    .egc-hero img{height:340px}
  }
  @media (max-width:520px){
    .egc-hero{border-radius:16px}
    .egc-hero img{height:300px}
  }
</style>

<!-- EmailJS (Browser SDK) -->
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

@verbatim
<script>
  // EmailJS configuration
  const EMAILJS_PUBLIC_KEY  = "Vty8OfMFupURMn9_8";   // public key
  const EMAILJS_SERVICE_ID  = "service_k6xlh9n";     // Gmail service
  const EMAILJS_TEMPLATE_ID = "template_lx5r89k";    // Appointment template

  // Initialize EmailJS
  (function () {
    emailjs.init({ publicKey: EMAILJS_PUBLIC_KEY });
  })();

  const $ = (s) => document.querySelector(s);
  const setStatus = (msg, type = "info") => {
    const el = $("#egcStatus");
    if (!el) return;
    el.textContent = msg;
    el.style.color =
      type === "success" ? "#0f5132" :
      type === "error"   ? "#842029" :
                           "#1f2a44";
  };

  $("#egcForm").addEventListener("submit", async (e) => {
    e.preventDefault();
    const form = e.target;
    const btn  = $("#egcSubmit");

    // Honeypot
    if (form.hp_field && form.hp_field.value) {
      setStatus("Blocked as spam.", "error");
      return;
    }

    const params = {
      first_name:   form.first_name.value.trim(),
      last_name:    form.last_name.value.trim(),
      email:        form.email.value.trim(),
      phone:        form.phone.value.trim(),
      need:         form.need.value.trim(),
      comment:      form.comment.value.trim(),
      submitted_at: new Date().toLocaleString(),
      name: `${form.first_name.value.trim()} ${form.last_name.value.trim()}`.trim(),
      message: form.comment.value.trim()
    };

    if (!params.first_name || !params.last_name || !params.email || !params.phone || !params.need) {
      setStatus("Please fill in all required fields.", "error");
      return;
    }

    try {
      btn.disabled = true;
      btn.style.opacity = 0.6;
      setStatus("Sending...");

      const res = await emailjs.send(EMAILJS_SERVICE_ID, EMAILJS_TEMPLATE_ID, params);

      if (res.status === 200) {
        setStatus("Appointment request sent successfully!", "success");
        form.reset();
      } else {
        throw new Error("Unexpected EmailJS response: " + res.status);
      }
    } catch (err) {
      console.error("EmailJS error:", err);
      let extra = "";
      if (err && err.text) extra = " (" + err.text + ")";
      else if (err && err.message) extra = " (" + err.message + ")";
      else if (err && err.status) extra = " (status " + err.status + ")";
      setStatus("Failed to send. Please try again." + extra, "error");
    } finally {
      btn.disabled = false;
      btn.style.opacity = 1;
    }
  });
</script>
@endverbatim
