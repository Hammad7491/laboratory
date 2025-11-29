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
          <p class="egc-sub">
            Tell us what you need—mobile phlebotomy, lab testing, DNA/drug screens, IV hydration, or more.
          </p>
        </div>
      </div>

      <!-- CONTENT -->
      <div class="egc-wrap">
        <div class="egc-grid">

          <!-- LEFT SIDE -->
          <aside class="egc-card">
            <h2 class="egc-h2">Get in touch</h2>
            <p class="egc-p">Prefer talking? Reach us anytime and we’ll schedule a convenient mobile visit.</p>

            <ul class="egc-list">
              <li>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M21 15v4a2 2 0 0 1-2 2c-9.94 0-18-8.06-18-18a2 2 0 0 1 2-2h4l2 5-3 2a14 14 0 0 0 6 6l2-3 5 2z"/></svg>
                201-688-0338
              </li>

              <li>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M21 15v4a2 2 0 0 1-2 2c-9.94 0-18-8.06-18-18a2 2 0 0 1 2-2h4l2 5-3 2a14 14 0 0 0 6 6l2-3 5 2z"/></svg>
                908-613-2200
              </li>

              <li>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16a2 2 0 0 1 2 2v1l-10 6L2 7V6a2 2 0 0 1 2-2h4l2 5-3 2a14 14 0 0 0 6 6l2-3 5 2z"/></svg>
                info@emmagenix.com
              </li>

              <li class="egc-hours">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 1 0 .001 20.001A10 10 0 0 0 12 2Zm0 2a8 8 0 1 1 0 16A8 8 0 0 1 12 4Zm-1 2h2v5.17l3.12 3.11-1.42 1.42L11 12.59V6Z"/></svg>
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

          <!-- RIGHT SIDE (FORM) -->
          <div class="egc-card">
            <h2 class="egc-h2">Book Appointment</h2>

            {{-- EmailJS handles the send --}}
            <form id="egcForm" class="egc-form">
              @csrf

              <div class="egc-row">
                <div class="egc-field">
                  <label>First name</label>
                  <input type="text" name="first_name" placeholder="John" required>
                </div>

                <div class="egc-field">
                  <label>Last name</label>
                  <input type="text" name="last_name" placeholder="Doe" required>
                </div>
              </div>

              <div class="egc-row">
                <div class="egc-field">
                  <label>Email</label>
                  <input type="email" name="email" placeholder="you@example.com" required>
                </div>

                <div class="egc-field">
                  <label>Phone</label>
                  <input type="tel" name="phone" placeholder="+1 (___) ___-____" required>
                </div>
              </div>

              <div class="egc-field">
                <label>Which type of service do you need?</label>
                <select name="need" required>
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

              {{-- Appointment Date (Date Picker) --}}
              <div class="egc-field egc-field-date">
                <label for="appointment_date">Preferred appointment date</label>
                <input
                  id="appointment_date"
                  type="date"
                  name="appointment_date"
                  min="{{ date('Y-m-d') }}"
                  required
                >
              </div>

              <div class="egc-field">
                <label>Comment</label>
                <textarea name="comment" rows="4" placeholder="Share any details..."></textarea>
              </div>

              <div class="egc-actions">
                <button id="egcSubmit" type="submit" class="egc-btn">Send Request</button>
              </div>

              <p id="egcStatus" style="margin-top:10px;font-weight:600;"></p>

            </form>
          </div>
        </div>
      </div>

      <!-- BAND -->
      <div class="egc-band">
        <div class="egc-wrap egc-band-inner">
          <h3>Mobile care—on your schedule.</h3>
          <p>Home, office, clinic, events, assisted-living & hospice. We come to you.</p>
        </div>
      </div>
    </section>

    <!-- ============================
        EMAILJS SCRIPT
        ============================ -->
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script>
        const EMAILJS_PUBLIC_KEY  = "khtiQhrM1qILxywg2";
        const EMAILJS_SERVICE_ID  = "service_tk8erpl";
        const EMAILJS_TEMPLATE_ID = "template_tiyet9y";

        emailjs.init({ publicKey: EMAILJS_PUBLIC_KEY });

        const form   = document.getElementById("egcForm");
        const btn    = document.getElementById("egcSubmit");
        const status = document.getElementById("egcStatus");

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            btn.disabled = true;
            status.innerHTML = "Sending...";
            status.style.color = "#444";

            emailjs.sendForm(EMAILJS_SERVICE_ID, EMAILJS_TEMPLATE_ID, "#egcForm")
                .then(function () {
                    status.innerHTML = "Appointment sent successfully!";
                    status.style.color = "#0f5132";
                    form.reset();
                    btn.disabled = false;
                })
                .catch(function (error) {
                    console.error("EmailJS error:", error);
                    status.innerHTML = "Error sending email: " + (error.text || "Please try again later.");
                    status.style.color = "#842029";
                    btn.disabled = false;
                });
        });
    </script>

    <!-- ============================
        CSS
        ============================ -->
    <style>
      .eg-contact{
        --navy:#001F3F;--navy2:#0a1b37;--ink:#16233d;--muted:#5c6b89;
        --grad:linear-gradient(135deg,#00b894 0%,#00c2ff 60%);
        font-family:'Poppins',ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;
        color:var(--ink);
        padding:24px 0 40px;
      }

      .egc-wrap{
        max-width:1200px;
        margin:0 auto;
        padding:0 18px;
      }

      /* HERO */
      .egc-hero{
        position:relative;
        overflow:hidden;
        border-radius:22px;
        margin:18px auto;
        max-width:1200px;
      }
      .egc-hero img{
        width:100%;
        height:420px;
        object-fit:cover;
        display:block;
        filter:saturate(106%);
      }
      .egc-hero-overlay{
        position:absolute;
        inset:0;
        background:linear-gradient(180deg,rgba(10,18,36,.55),rgba(10,18,36,.55));
      }
      .egc-hero-inner{
        position:absolute;
        inset:0;
        display:grid;
        place-items:center;
        text-align:center;
        color:#fff;
        padding:24px;
      }
      .egc-kicker{
        letter-spacing:.28em;
        text-transform:uppercase;
        font-weight:600;
        font-size:12px;
        margin:0 0 8px;
        opacity:.95;
      }
      .egc-title{
        margin:.2rem 0;
        font-weight:800;
        font-size:clamp(30px,5.6vw,48px);
      }
      .egc-sub{
        max-width:760px;
        margin:8px auto 0;
        opacity:.95;
        font-size:clamp(14px,2vw,16px);
      }

      /* GRID – centered cards */
      .egc-grid{
        display:flex;
        flex-wrap:wrap;
        gap:22px;
        margin:18px auto 10px;
        justify-content:center;
        align-items:flex-start;
        max-width:1100px;
      }

      .egc-card{
        background:#fff;
        border:1px solid rgba(2,6,23,.06);
        border-radius:18px;
        padding:18px;
        box-shadow:0 18px 36px rgba(2,6,23,.06);
        flex:1 1 360px;
        max-width:520px;
      }

      .egc-h2{
        font-weight:800;
        color:var(--navy);
        font-size:clamp(20px,3.4vw,26px);
        margin:0 0 8px;
      }
      .egc-p{
        color:#2b3b5a;
        margin:0 0 12px;
        line-height:1.8;
      }

      /* Info list */
      .egc-list{
        list-style:none;
        margin:12px 0;
        padding:0;
        display:grid;
        gap:10px;
      }
      .egc-list li{
        display:flex;
        align-items:center;
        gap:8px;
        color:#213150;
        font-size:14px;
      }
      .egc-hours{
        align-items:flex-start;
      }
      .egc-hours-title{
        font-weight:600;
        font-size:13px;
        color:#001F3F;
        margin-bottom:2px;
      }
      .egc-hours-text{
        font-size:13px;
        color:#425578;
        line-height:1.5;
      }

      .egc-badgewrap{
        display:flex;
        flex-wrap:wrap;
        gap:8px;
        margin-top:10px;
      }
      .egc-badge{
        font-size:12.5px;
        padding:8px 10px;
        border-radius:999px;
        border:1px solid #cde7ff;
        background:#f5fbff;
        color:#0a3a64;
      }

      /* Form */
      .egc-form{margin-top:4px;}
      .egc-row{
        display:grid;
        gap:12px;
        grid-template-columns:1fr 1fr;
      }
      .egc-field{
        display:grid;
        gap:6px;
      }
      .egc-field label{
        font-size:13px;
        color:#24324a;
        font-weight:600;
      }
      .egc-field input,
      .egc-field textarea,
      .egc-field select{
        border-radius:12px;
        border:1px solid #d7e3ff;
        background:#f9fbff;
        outline:none;
        padding:12px 14px;
        font:500 14.5px/1.5 Poppins,ui-sans-serif;
        color:#0f1f3a;
        transition:border-color .15s, box-shadow .15s, background .15s;
      }
      .egc-field textarea{
        min-height:120px;
        resize:vertical;
      }
      .egc-field input::placeholder,
      .egc-field textarea::placeholder{
        color:#7b8aab;
      }

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

      /* Make sure date input is visible and sized nicely */
      .egc-field-date input[type="date"]{
        min-height:46px;
      }

      .egc-field input:focus,
      .egc-field textarea:focus,
      .egc-field select:focus{
        border-color:#7fb8ff;
        box-shadow:0 0 0 4px rgba(127,184,255,.25);
        background:#fff;
      }

      .egc-actions{
        display:flex;
        align-items:center;
        gap:12px;
        margin-top:10px;
        flex-wrap:wrap;
      }
      .egc-btn{
        display:inline-block;
        padding:12px 18px;
        border-radius:12px;
        color:#fff;
        text-decoration:none;
        border:none;
        cursor:pointer;
        background:linear-gradient(135deg,var(--navy),#00509E);
        box-shadow:0 12px 24px rgba(0,40,85,.25);
        font-weight:700;
      }
      .egc-btn:hover{
        filter:saturate(112%);
        transform:translateY(-1px);
      }

      /* Band */
      .egc-band{
        background:#f6f9ff;
        border-top:1px solid #e5efff;
        margin:16px 0 0;
      }
      .egc-band-inner{
        text-align:center;
        padding:18px 0;
      }
      .egc-band h3{
        margin:.2rem 0;
        font-size:clamp(18px,3.2vw,24px);
        color:var(--navy);
      }
      .egc-band p{
        margin:2px 0 0;
        color:#2b3b5a;
      }

      /* ====================
        RESPONSIVE
        ==================== */

      /* Tablets & down */
      @media (max-width: 860px){
        .egc-hero{
          margin:12px auto 16px;
          border-radius:18px;
        }
        .egc-hero img{
          height:340px;
        }

        .egc-grid{
          max-width:640px;
          margin:16px auto 10px;
        }

        .egc-card{
          flex:1 1 100%;
          max-width:640px;
        }

        .egc-row{
          grid-template-columns:1fr;
        }
      }

      /* Small phones */
      @media (max-width: 520px){
        .egc-wrap{
          padding:0 14px;
        }
        .egc-hero{
          border-radius:16px;
        }
        .egc-hero img{
          height:300px;
        }
        .egc-card{
          padding:16px;
          border-radius:16px;
        }
        .egc-band-inner{
          padding:14px 0 18px;
        }
      }
    </style>
