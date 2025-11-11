<!-- HERO SECTION START -->
<section style="background-color: #f2f2fc; padding: 70px 0 0; position: relative; overflow: hidden;">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; align-items: center; justify-content: space-between; gap: 20px; padding: 0 40px; flex-wrap: wrap;">

        <!-- LEFT TEXT -->
        <div style="flex: 1 1 52%; min-width: 300px;">
            <p style="font-size: 16px; color: #666; margin-bottom: 12px;">Creating websites since 2001</p>
            <h3 style="font-size: 35px; font-weight: 700; color: #111; line-height: 1.3; margin-bottom: 20px;">
                Website Design from only £299
            </h3>
            <p style="font-size: 17px; color: #333; max-width: 550px;">
                We provide cost-effective web design, reliable web hosting, and SEO services for small businesses throughout the UK.
            </p>
        </div>

        <!-- RIGHT IMAGE WITH FADE-IN -->
        <div style="flex: 1 1 45%; text-align: right; overflow: hidden;">
            <img src="{{ asset('assets/images/pic1.webp') }}" 
                 alt="Website Examples" 
                 style="max-width: 320px; width: 100%; height: auto; border-radius: 6px; transform: translateX(100px); opacity: 0; transition: transform 1.5s ease, opacity 1.5s ease;"
                 class="hero-img">
        </div>

    </div>

    <!-- ✅ BOTTOM CURVE TOUCHING IMAGE -->
    <svg viewBox="0 0 1440 220" xmlns="http://www.w3.org/2000/svg" style="display: block; width: 100%;">
        <path fill="#ffffff" fill-opacity="1"
              d="M0,160 C360,240 1080,80 1440,160 L1440,320 L0,320 Z">
        </path>
    </svg>
</section>

<!-- Fade-in Animation Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const heroImg = document.querySelector('.hero-img');
        setTimeout(() => {
            heroImg.style.transform = 'translateX(0)';
            heroImg.style.opacity = '1';
        }, 200);
    });
</script>
<!-- HERO SECTION END -->
