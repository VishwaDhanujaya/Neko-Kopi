<?php
$page = 'home';
$pageTitle = 'Neko & Kopi Catfé — Cat Café in Colombo, Sri Lanka';
$pageDesc = 'Step into Neko & Kopi Catfé — Colombo\'s cat café. Artisan coffee, resident cats, and a creative sanctuary at Nawala Road.';
require_once __DIR__ . '/../includes/base.php';
require_once __DIR__ . '/../includes/header.php';
?>

<!-- ═══════════════════════════════════════
     HERO — Dramatic & Vibrant
══════════════════════════════════════════ -->
<section class="relative flex items-center justify-center overflow-hidden snap-start pt-24 pb-12 lg:py-0" id="hero"
  style="min-height:100vh;">
  
  <!-- Glowing Background Orbs -->
  <div class="glow-orb glow-orb-brown w-[450px] h-[450px] top-1/2 left-1/3 -translate-x-1/2 -translate-y-1/2 mix-blend-multiply opacity-25 animate-pulse"></div>
  <div class="glow-orb bg-amber-400 w-[350px] h-[350px] top-1/4 left-2/3 mix-blend-multiply opacity-20 animate-float" style="animation-delay: 1s;"></div>
  
  <div class="relative z-10 max-w-[1300px] mx-auto px-6 w-full flex flex-col justify-center">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
      
      <!-- Left Column: Typography & CTAs -->
      <div class="lg:col-span-7 flex flex-col items-center lg:items-start text-center lg:text-left">
        <div class="reveal mb-6 inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/80 backdrop-blur-md shadow-apple-subtle border border-black/5">
          <span class="relative flex h-2.5 w-2.5">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-theme-brown opacity-75"></span>
            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-theme-brown"></span>
          </span>
          <span class="text-xs font-bold tracking-wide uppercase text-black">Now Brewing in Colombo</span>
        </div>

        <h1 class="reveal reveal-delay-1 leading-[0.95] tracking-[-0.05em] font-black text-black mb-6" style="font-size:clamp(3.5rem, 8vw, 6.5rem);">
          Creative.<br>
          <span class="text-theme-brown">Caffeinated.</span><br>
          Cats.
        </h1>

        <p class="reveal reveal-delay-2 text-lg md:text-xl text-gray-muted max-w-xl mb-8 font-medium tracking-tight">
          Escape to Neko & Kopi Catfé. A sanctuary where artisan coffee meets our purring companions. Step in, slow down, stay a while.
        </p>

        <div class="reveal reveal-delay-3 flex flex-wrap justify-center lg:justify-start gap-4">
          <a href="<?= neko_page_url('menu') ?>" id="hero-cta-menu" class="btn-primary text-base px-8 py-3.5">
            Explore Menu
          </a>
          <a href="https://maps.app.goo.gl/qPYiibj1WKDyJf3J6" id="hero-cta-maps" target="_blank" rel="noopener"
            class="btn-outline text-base px-8 py-3.5 bg-white">
            Visit Us
          </a>
        </div>
      </div>

      <!-- Right Column: Premium Hero Image Frame -->
      <div class="lg:col-span-5 flex justify-center w-full mt-8 lg:mt-0">
        <div class="reveal reveal-delay-4 w-full max-w-[280px] sm:max-w-[340px] lg:max-w-[420px] aspect-[4/5] rounded-[2.5rem] overflow-hidden shadow-apple-card border border-black/5 relative group bg-white p-3">
          <div class="w-full h-full rounded-[2rem] overflow-hidden relative">
            <img src="<?= neko_image_url('hero.webp', 'Hero Image', 1200, 1500) ?>" alt="Neko & Kopi Catfé Sanctuary" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/10 to-transparent pointer-events-none"></div>
            <!-- Dynamic Label Overlay inside the photo frame -->
            <div class="absolute bottom-6 left-6 right-6 text-left">
              <span class="badge badge-light mb-2">Sanctuary View</span>
              <p class="text-white text-sm font-semibold tracking-tight">Step into Colombo's cozy cat escape</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Scroll Down Indicator -->
  <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-30 flex flex-col items-center animate-bounce text-gray-muted/80 hidden md:flex">
    <span class="text-[10px] uppercase tracking-widest font-semibold mb-1">Scroll</span>
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
  </div>
</section>

<!-- ═══════════════════════════════════════
     WHAT MAKES US SPECIAL (Bento Box)
══════════════════════════════════════════ -->
<section class="section-pad relative z-30 snap-start" id="highlights">
  <div class="max-w-[1200px] mx-auto px-6">

    <div class="text-center mb-16 reveal">
      <h2 class="section-heading mb-4">A Place Like<br>No Other</h2>
      <p class="section-subheading mx-auto">Designed for comfort, creativity, and cats.</p>
    </div>

    <!-- Bento Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 auto-rows-[280px]">
      
      <!-- Large Card (2 cols) -->
      <div class="bento-card md:col-span-2 relative p-8 flex flex-col justify-end overflow-hidden reveal group">
        <img src="<?= neko_image_url('cats.webp', 'Cats Showcase', 800, 600) ?>" alt="Cats Placeholder" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent pointer-events-none"></div>
        <div class="relative z-10">
          <div class="badge badge-light mb-4">8 Resident Cats</div>
          <h3 class="text-3xl font-bold text-white mb-2 tracking-tight">Purring Companions</h3>
          <p class="text-white/80 max-w-md font-medium">Meet our resident cats, each with their own personality and favourite nap spot.</p>
        </div>
      </div>

      <!-- Small Card -->
      <div class="bento-card p-8 flex flex-col gap-4 reveal reveal-delay-1 bg-gradient-to-br from-white to-gray-50">
        <div class="icon-box icon-box-lg bg-theme-brown text-white shadow-theme-glow">
          <i data-lucide="coffee" class="w-6 h-6"></i>
        </div>
        <div class="mt-auto">
          <h3 class="text-xl font-bold text-black mb-2 tracking-tight">Signature Drinks</h3>
          <p class="text-gray-muted text-sm font-medium leading-relaxed">From silky Neko Lattes to floral Sakura Chai — crafted with care.</p>
        </div>
      </div>

      <!-- Small Card -->
      <div class="bento-card p-8 flex flex-col gap-4 reveal bg-white">
        <div class="icon-box icon-box-lg bg-black text-white">
          <i data-lucide="sofa" class="w-6 h-6"></i>
        </div>
        <div class="mt-auto">
          <h3 class="text-xl font-bold text-black mb-2 tracking-tight">Cosy Atmosphere</h3>
          <p class="text-gray-muted text-sm font-medium leading-relaxed">Wooden nooks, trailing plants, and warm lights.</p>
        </div>
      </div>

      <!-- Wide Card (2 cols) -->
      <div class="bento-card md:col-span-2 p-8 flex flex-col justify-center reveal reveal-delay-1 bg-theme-brown text-white relative overflow-hidden group">
        <div class="absolute right-0 top-0 w-64 h-64 bg-white/20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3 group-hover:scale-110 transition-transform duration-700"></div>
        <div class="relative z-10 max-w-lg">
          <div class="badge badge-dark mb-4 text-white bg-black/20 border-white/10">Nawala Road</div>
          <h3 class="text-3xl font-bold text-white mb-3 tracking-tight">Your Creative Sanctuary</h3>
          <p class="text-white/90 font-medium mb-6">Whether you're working, creating, or simply resting, this is your corner of calm. Bring your laptop, grab a brew, and stay awhile.</p>
          <a href="<?= neko_page_url('contact') ?>" class="inline-flex items-center gap-2 font-bold hover:underline">
            Find Us <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════
     SIGNATURE DRINKS & FOOD (Segmented Controls)
══════════════════════════════════════════ -->
<section class="section-pad bg-white relative snap-start" id="featured">
  <div class="max-w-[1200px] mx-auto px-6">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12 reveal">
      <div>
        <h2 class="section-heading mb-3">Menu Highlights</h2>
        <p class="section-subheading">Crafted recipes, custom sips, and halal-friendly bites.</p>
      </div>
      
      <!-- Apple-style Segmented Control -->
      <div class="segmented-control">
        <button id="btn-drinks" class="cat-tab active home-menu-tab" onclick="switchHomeMenu('drinks')">
          Signature Drinks
        </button>
        <button id="btn-food" class="cat-tab home-menu-tab" onclick="switchHomeMenu('food')">
          Signature Food
        </button>
      </div>
    </div>

    <!-- Drinks Grid -->
    <div id="home-drinks-grid" class="grid grid-cols-1 md:grid-cols-3 gap-6 home-menu-content">
      <?php $drinks = [
        ['name' => 'Ceremonial Matcha Latte', 'desc' => 'Artisan ceremonial Uji matcha whisked and layered over creamy milk.', 'price' => 'Rs. 1,280', 'tag' => 'Signature', 'img' => neko_image_url('matcha-latte.webp', 'Ceremonial Matcha Latte', 400, 300)],
        ['name' => 'Classic Cafe Latte', 'desc' => 'Smooth, bold double shot of espresso with silky, velvety microfoam.', 'price' => 'Rs. 850', 'tag' => 'Best Seller', 'img' => neko_image_url('latte.webp', 'Classic Cafe Latte', 400, 300)],
        ['name' => 'Salted Caramel Latte', 'desc' => 'Rich espresso combined with steamed milk and sweet, buttery caramel syrup.', 'price' => 'Rs. 950', 'tag' => 'Fan Favourite', 'img' => neko_image_url('caramel-latte.webp', 'Salted Caramel Latte', 400, 300)],
      ];
      foreach ($drinks as $i => $d): ?>
        <div class="bento-card p-6 flex flex-col gap-4 reveal reveal-delay-<?= $i ?>">
          <div class="h-40 rounded-xl overflow-hidden mb-2 bg-gray-50">
            <img src="<?=$d['img']?>" class="w-full h-full object-cover">
          </div>
          <div class="flex items-center justify-between mt-auto">
            <span class="badge"><?=$d['tag']?></span>
          </div>
          <div>
            <h3 class="text-lg font-bold text-black tracking-tight mb-1"><?= $d['name'] ?></h3>
            <p class="text-sm text-gray-muted font-medium"><?= $d['desc'] ?></p>
          </div>
          <div class="flex items-center justify-between pt-4 mt-2 border-t border-black/5">
            <span class="text-lg font-black text-theme-brown"><?= $d['price'] ?></span>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Food Grid -->
    <div id="home-food-grid" class="grid grid-cols-1 md:grid-cols-3 gap-6 home-menu-content" style="display: none;">
      <?php $food = [
        ['name' => 'Crispy Chicken Gyoza', 'desc' => 'Pan-fried Japanese dumplings with a savory chicken and veggie filling, served with dip.', 'price' => 'Rs. 1,200', 'tag' => 'Popular', 'img' => neko_image_url('gyoza.webp', 'Crispy Chicken Gyoza', 400, 300)],
        ['name' => 'Chicken Katsu Curry', 'desc' => 'Crispy chicken katsu served over steamed rice with a rich, aromatic Japanese curry.', 'price' => 'Rs. 2,450', 'tag' => 'Signature', 'img' => neko_image_url('katsu-curry.webp', 'Chicken Katsu Curry', 400, 300)],
        ['name' => 'Steaming Hakata Ramen', 'desc' => 'Rich broth with fresh noodles, tender chicken slice, seasoned egg, and green onions.', 'price' => 'Rs. 2,100', 'tag' => 'Chef Choice', 'img' => neko_image_url('ramen.webp', 'Steaming Hakata Ramen', 400, 300)],
      ];
      foreach ($food as $i => $f): ?>
        <div class="bento-card p-6 flex flex-col gap-4">
          <div class="h-40 rounded-xl overflow-hidden mb-2 bg-gray-50">
            <img src="<?=$f['img']?>" class="w-full h-full object-cover">
          </div>
          <div class="flex items-center justify-between mt-auto">
            <span class="badge"><?=$f['tag']?></span>
          </div>
          <div>
            <h3 class="text-lg font-bold text-black tracking-tight mb-1"><?= $f['name'] ?></h3>
            <p class="text-sm text-gray-muted font-medium"><?= $f['desc'] ?></p>
          </div>
          <div class="flex items-center justify-between pt-4 mt-2 border-t border-black/5">
            <span class="text-lg font-black text-theme-brown"><?= $f['price'] ?></span>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-12 reveal">
      <a href="<?= neko_page_url('menu') ?>" id="featured-cta-menu" class="btn-black">
        Explore Full Menu
      </a>
    </div>
  </div>
</section>

<!-- HOME MENU TAB SWITCHER SCRIPT -->
<script>
  function switchHomeMenu(category) {
    const drinksGrid = document.getElementById('home-drinks-grid');
    const foodGrid = document.getElementById('home-food-grid');
    const btnDrinks = document.getElementById('btn-drinks');
    const btnFood = document.getElementById('btn-food');

    const activeGrid = category === 'drinks' ? drinksGrid : foodGrid;
    const inactiveGrid = category === 'drinks' ? foodGrid : drinksGrid;
    const activeBtn = category === 'drinks' ? btnDrinks : btnFood;
    const inactiveBtn = category === 'drinks' ? btnFood : btnDrinks;

    activeBtn.classList.add('active');
    inactiveBtn.classList.remove('active');

    inactiveGrid.style.opacity = '0';
    inactiveGrid.style.transform = 'translateY(8px) scale(0.98)';
    inactiveGrid.style.transition = 'all 0.3s cubic-bezier(0.16, 1, 0.3, 1)';

    setTimeout(() => {
      inactiveGrid.style.display = 'none';
      activeGrid.style.display = 'grid';
      activeGrid.style.opacity = '0';
      activeGrid.style.transform = 'translateY(8px) scale(0.98)';
      activeGrid.offsetHeight; // Reflow
      activeGrid.style.transition = 'all 0.4s cubic-bezier(0.16, 1, 0.3, 1)';
      activeGrid.style.opacity = '1';
      activeGrid.style.transform = 'translateY(0) scale(1)';
    }, 250);
  }
</script>

<!-- ═══════════════════════════════════════
     EVENTS BANNER
══════════════════════════════════════════ -->
<section class="section-pad relative snap-start" id="events-teaser">
  <div class="max-w-[1200px] mx-auto px-6">
    <div class="rounded-[3rem] overflow-hidden reveal bg-black text-white relative shadow-apple-card group">
      
      <div class="absolute inset-0 bg-cover bg-center opacity-50 group-hover:scale-105 transition-transform duration-1000" style="background-image: url('<?= neko_image_url('event-banner.webp', 'Event Banner', 1200, 600) ?>');"></div>
      <div class="absolute inset-0 bg-black/60"></div>
      
      <div class="relative z-10 flex flex-col items-center text-center p-14 md:p-24 max-w-3xl mx-auto">
        <div class="badge badge-dark mb-6 border-white/10 bg-white/10 backdrop-blur-md">What's On</div>
        <h2 class="text-4xl md:text-5xl font-black text-white mb-6 tracking-tight">Something's Always Happening</h2>
        <p class="text-lg text-white/60 font-medium mb-10 max-w-xl">
          Cat adoption days, live acoustic evenings, art workshops — there's always a warm reason to visit.
        </p>
        <a href="<?= neko_page_url('events') ?>" id="events-teaser-cta" class="btn-primary px-8 py-4 text-base">
          View Upcoming Events
        </a>
      </div>

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════
     FIND US
══════════════════════════════════════════ -->
<section class="section-pad snap-start" id="find-us">
  <div class="max-w-3xl mx-auto text-center reveal">
    <h2 class="section-heading mb-6">Find Your Corner</h2>
    <p class="text-xl font-semibold text-black mb-4 tracking-tight">
      319/4, 05 Nawala Rd, Colombo 00500, Sri Lanka
    </p>

    <!-- Real-time Opening Status Badge -->
    <div class="flex justify-center mb-6">
      <div id="cafe-status-badge" class="hidden items-center gap-2 px-4 py-2 rounded-full text-xs font-bold uppercase tracking-widest transition-all duration-300">
        <span class="w-2.5 h-2.5 rounded-full relative flex">
          <span class="animate-ping absolute inline-flex h-full w-full rounded-full opacity-75"></span>
          <span class="relative inline-flex rounded-full h-2.5 w-2.5"></span>
        </span>
        <span id="cafe-status-text"></span>
      </div>
    </div>

    <div class="flex flex-wrap justify-center gap-4">
      <a href="https://maps.app.goo.gl/qPYiibj1WKDyJf3J6" id="find-us-maps" target="_blank" rel="noopener"
        class="btn-black">
        <i data-lucide="map-pin" class="w-4 h-4"></i>
        Get Directions
      </a>
      <a href="https://wa.me/94724783406?text=Hello%20Neko%20%26%20Kopi!" id="find-us-whatsapp" target="_blank"
        rel="noopener" class="btn-whatsapp">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
        </svg>
        WhatsApp
      </a>
    </div>
  </div>

<!-- OPENING STATUS SCRIPT -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  function checkCafeStatus() {
    const statusBadge = document.getElementById('cafe-status-badge');
    const statusText = document.getElementById('cafe-status-text');
    const dot = statusBadge?.querySelector('.w-2\\.5.h-2\\.5 span:last-child');
    const ping = statusBadge?.querySelector('.animate-ping');

    if (!statusBadge || !statusText) return;

    const now = new Date();
    const utc = now.getTime() + (now.getTimezoneOffset() * 60000);
    const colomboTime = new Date(utc + (3600000 * 5.5));

    const day = colomboTime.getDay();
    const hours = colomboTime.getHours();
    const minutes = colomboTime.getMinutes();
    const timeVal = hours + minutes / 60;

    const isOpenDay = (day === 3 || day === 4 || day === 5 || day === 6 || day === 0);
    const isOpenHour = (timeVal >= 9 && timeVal < 21);

    statusBadge.classList.remove('hidden');
    statusBadge.classList.add('inline-flex');

    if (isOpenDay && isOpenHour) {
      statusBadge.style.background = 'rgba(37,211,102,0.1)';
      statusBadge.style.color = '#1FAD53';
      if (dot) dot.style.background = '#1FAD53';
      if (ping) ping.style.background = '#1FAD53';
      statusText.textContent = 'Open Now';
    } else {
      statusBadge.style.background = 'rgba(0,0,0,0.05)';
      statusBadge.style.color = '#1C1C1E';
      if (dot) dot.style.background = '#8E8E93';
      if (ping) ping.style.background = '#8E8E93';

      let reopeningMsg = 'Closed — Reopening Wednesday 9 AM';
      if (day === 3 || day === 4 || day === 5 || day === 6) {
        if (timeVal < 9) reopeningMsg = 'Closed — Opening today at 9 AM';
        else if (timeVal >= 21) reopeningMsg = 'Closed — Opening tomorrow at 9 AM';
      } else if (day === 0) {
        if (timeVal < 9) reopeningMsg = 'Closed — Opening today at 9 AM';
        else if (timeVal >= 21) reopeningMsg = 'Closed — Reopening Wednesday 9 AM';
      }
      statusText.textContent = reopeningMsg;
    }
  }

  checkCafeStatus();
  setInterval(checkCafeStatus, 30000);
});
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
