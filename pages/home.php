<?php
$page = 'home';
$pageTitle = 'Neko & Kopi — Cozy Cat Café in Colombo, Sri Lanka';
$pageDesc = 'Step into Neko & Kopi — Colombo\'s warmest cat café. Artisan coffee, resident cats, and a Ghibli-inspired atmosphere at Nawala Road.';
$base = '/NekoCafe';
require_once '../includes/header.php';
?>

<!-- ═══════════════════════════════════════
     HERO
══════════════════════════════════════════ -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden" id="hero">
  <div id="hero-bg" class="absolute inset-0 bg-cover bg-center bg-no-repeat will-change-transform"
    style="background-image:url('<?= $base ?>/assets/images/hero.png');"></div>
  <div class="absolute inset-0"
    style="background:linear-gradient(to bottom,rgba(42,25,10,.40) 0%,rgba(42,25,10,.18) 40%,rgba(250,246,240,.95) 100%);">
  </div>

  <div
    class="relative z-10 text-center px-6 py-10 sm:py-14 max-w-2xl mx-auto rounded-[2rem] border border-white/60 shadow-xl bg-white/75 backdrop-blur-md">
    <div class="reveal">
      <span class="badge mb-6 inline-flex">
        <i data-lucide="map-pin" class="w-3.5 h-3.5 text-sage"></i>
        Nawala, Colombo, Sri Lanka
      </span>
    </div>
    <h1 class="reveal reveal-delay-1"
      style="font-family:'Playfair Display',serif;font-size:clamp(2.75rem,8vw,4.5rem);color:#2D1E15;line-height:1.1;margin-bottom:1.25rem;">
      Neko &amp; <span style="color:#4A6E56;font-style:italic;">Kopi</span>
    </h1>
    <p class="reveal reveal-delay-2"
      style="font-family:'Nunito',sans-serif;font-size:1.025rem;color:#4A382A;max-width:480px;margin:0 auto 2.25rem;line-height:1.65;font-weight:500;">
      A home-like sanctuary where artisan coffee meets eight purring companions. Step in, slow down, stay a while.
    </p>
    <div class="reveal reveal-delay-3 flex flex-wrap justify-center gap-3">
      <a href="<?= $base ?>/menu" id="hero-cta-menu" class="btn-primary">
        <i data-lucide="utensils" class="w-4 h-4"></i>
        View Menu
      </a>
      <a href="https://maps.app.goo.gl/qPYiibj1WKDyJf3J6" id="hero-cta-maps" target="_blank" rel="noopener"
        class="btn-outline">
        <i data-lucide="map-pin" class="w-4 h-4"></i>
        Visit Us
      </a>
      <a href="https://www.ubereats.com" id="hero-cta-uber" target="_blank" rel="noopener" class="btn-amber">
        <i data-lucide="bike" class="w-4 h-4"></i>
        Uber Eats
      </a>
    </div>
  </div>

  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-1.5 animate-bounce"
    style="color:rgba(58,42,30,0.5);">
    <span
      style="font-family:'Nunito',sans-serif;font-size:0.65rem;letter-spacing:0.15em;text-transform:uppercase;">Scroll</span>
    <i data-lucide="chevron-down" class="w-4 h-4"></i>
  </div>
</section>

<!-- ═══════════════════════════════════════
     WHAT MAKES US SPECIAL
══════════════════════════════════════════ -->
<section class="section-pad" style="background:#FBFBFA;" id="highlights">
  <div class="max-w-6xl mx-auto">

    <div class="mb-14 reveal">
      <div class="eyebrow mb-3">
        <i data-lucide="sparkles" class="w-3.5 h-3.5"></i>
        What Makes Us Special
      </div>
      <h2 class="section-heading">A Place Like No Other</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

      <?php $highlights = [
        ['img' => 'cats.png', 'icon' => 'cat', 'h' => 'Our Resident Cats', 'p' => 'Meet our eight resident cats — each with their own personality, favourite nap spot, and opinion on your croissant.', 'tag' => '8 Resident Cats'],
        ['img' => 'coffee.png', 'icon' => 'coffee', 'h' => 'Signature Drinks', 'p' => 'From our silky Neko Latte to floral Sakura Chai — every cup is crafted with locally-sourced, seasonal ingredients.', 'tag' => '30+ Beverages'],
        ['img' => 'seating.png', 'icon' => 'sofa', 'h' => 'Cosy Atmosphere', 'p' => 'Wooden nooks, trailing plants, warm Edison lights — designed to feel like your favourite corner of a beloved home.', 'tag' => 'Nawala Road'],
      ];
      foreach ($highlights as $i => $h): ?>
        <div class="card overflow-hidden reveal reveal-delay-<?= $i + 1 ?>">
          <div class="h-52 overflow-hidden">
            <img src="<?= $base ?>/assets/images/<?= $h['img'] ?>" alt="<?= $h['h'] ?>"
              class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
          </div>
          <div class="p-6">
            <div class="flex items-start justify-between gap-3 mb-3">
              <div class="icon-box">
                <i data-lucide="<?= $h['icon'] ?>" class="w-4 h-4"></i>
              </div>
              <span class="badge"><?= $h['tag'] ?></span>
            </div>
            <h3 style="font-family:'Playfair Display',serif;font-size:1.2rem;color:#3A2A1E;margin-bottom:0.5rem;">
              <?= $h['h'] ?>
            </h3>
            <p style="font-family:'Nunito',sans-serif;font-size:0.875rem;color:#8B6850;line-height:1.65;"><?= $h['p'] ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════
     ABOUT
══════════════════════════════════════════ -->
<section class="section-pad" style="background:#FFFFFF;" id="about">
  <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

    <div class="reveal order-2 lg:order-1 relative">
      <div class="rounded-3xl overflow-hidden" style="box-shadow:0 12px 48px rgba(90,50,20,0.14);">
        <img src="<?= $base ?>/assets/images/hero.png" alt="The cozy interior of Neko & Kopi"
          class="w-full h-[420px] object-cover">
      </div>
      <div class="absolute -bottom-5 -right-5 hidden md:flex flex-col items-center gap-1 rounded-2xl p-4"
        style="background:#C4956A;color:#fff;box-shadow:0 6px 20px rgba(196,149,106,0.38);">
        <i data-lucide="award" class="w-5 h-5"></i>
        <span style="font-family:'Playfair Display',serif;font-size:0.8rem;font-weight:500;white-space:nowrap;">Cat
          Approved</span>
      </div>
    </div>

    <div class="reveal reveal-delay-2 order-1 lg:order-2 flex flex-col gap-5">
      <div class="eyebrow">
        <i data-lucide="book-open" class="w-3.5 h-3.5"></i>
        Our Story
      </div>
      <div class="divider"></div>
      <h2 class="section-heading">
        More Than a Café —<br>
        <em style="color:#72997C;">A Creative Sanctuary</em>
      </h2>
      <p class="section-subheading">
        We believe the best moments happen slowly... over a warm cup, a good book, and a cat curled up beside you.
        Whether you're working, creating, or simply resting, this is your corner of calm.
      </p>

      <!-- Integrated Key Guidelines & Features -->
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 my-3 py-4 border-y border-beige/30"
        style="font-family:'Nunito',sans-serif;">
        <div class="flex items-center gap-2.5">
          <div class="w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0"
            style="background:rgba(114,153,124,0.08);color:#72997C;">
            <i data-lucide="cat" class="w-4 h-4"></i>
          </div>
          <div>
            <p class="text-xs font-bold text-text uppercase tracking-wide">Pet Friendly</p>
            <p class="text-[10px] text-text-light">Your pets are welcome</p>
          </div>
        </div>

        <div class="flex items-center gap-2.5">
          <div class="w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0"
            style="background:rgba(174,126,91,0.08);color:#AE7E5B;">
            <i data-lucide="coffee" class="w-4 h-4"></i>
          </div>
          <div>
            <p class="text-xs font-bold text-text uppercase tracking-wide">BYOB</p>
            <p class="text-[10px] text-text-light">Bring your own bottle</p>
          </div>
        </div>

        <div class="flex items-center gap-2.5">
          <div class="w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0"
            style="background:rgba(114,153,124,0.08);color:#72997C;">
            <i data-lucide="check-circle" class="w-4 h-4"></i>
          </div>
          <div>
            <p class="text-xs font-bold text-text uppercase tracking-wide">Halal Friendly</p>
            <p class="text-[10px] text-text-light">100% Halal ingredients</p>
          </div>
        </div>
      </div>

      <div class="flex flex-wrap gap-3 mt-2">
        <a href="<?= $base ?>/menu" id="about-cta-menu" class="btn-primary">
          <i data-lucide="utensils" class="w-4 h-4"></i>
          Explore Our Menu
        </a>
        <a href="<?= $base ?>/contact" id="about-cta-contact" class="btn-outline">
          <i data-lucide="map-pin" class="w-4 h-4"></i>
          Find Us
        </a>
      </div>
    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════
     SIGNATURE DRINKS
══════════════════════════════════════════ -->
<section class="section-pad" style="background:#FBFBFA;" id="featured">
  <div class="max-w-6xl mx-auto">
    <div class="text-center mb-10 reveal">
      <div class="eyebrow mb-3 justify-center">
        <i data-lucide="coffee" class="w-3.5 h-3.5"></i>
        From Our Menu
      </div>
      <h2 class="section-heading">Signature Creations</h2>
      <p class="section-subheading mx-auto mt-4">Each recipe is a crafted story — from comforting custom sips to
        halal-friendly street bites.</p>
    </div>

    <!-- Tab Buttons -->
    <div class="flex justify-center gap-3.5 mb-10 reveal">
      <button id="btn-drinks" class="home-menu-tab cat-tab active" onclick="switchHomeMenu('drinks')">
        <i data-lucide="coffee" class="w-3.5 h-3.5"></i>
        Signature Drinks
      </button>
      <button id="btn-food" class="home-menu-tab cat-tab" onclick="switchHomeMenu('food')">
        <i data-lucide="utensils" class="w-3.5 h-3.5"></i>
        Signature Food (Halal)
      </button>
    </div>

    <!-- Drinks Grid -->
    <div id="home-drinks-grid" class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12 home-menu-content">
      <?php $drinks = [
        ['name' => 'Dalgona Iced Kopi', 'desc' => 'Frothy whipped coffee over sweet chilled milk.', 'price' => 'Rs. 650', 'icon' => 'coffee', 'tag' => 'Best Seller'],
        ['name' => 'Vietnamese Iced Kopi', 'desc' => 'Strong dark coffee dripped over creamy condensed milk.', 'price' => 'Rs. 760', 'icon' => 'coffee', 'tag' => 'Fan Favourite'],
        ['name' => 'Earth Matcha Latte', 'desc' => 'Ceremonial Japanese matcha layered with thick milk.', 'price' => 'Rs. 1,280', 'icon' => 'sprout', 'tag' => 'Signature'],
      ];
      foreach ($drinks as $i => $d): ?>
        <div class="card p-6 flex flex-col gap-4 reveal reveal-delay-<?= $i + 1 ?>">
          <div class="flex items-center justify-between">
            <div class="icon-box icon-box-lg">
              <i data-lucide="<?= $d['icon'] ?>" class="w-5 h-5"></i>
            </div>
            <span class="badge badge-amber"><?= $d['tag'] ?></span>
          </div>
          <div>
            <h3 style="font-family:'Playfair Display',serif;font-size:1.15rem;color:#3A2A1E;margin-bottom:0.35rem;">
              <?= $d['name'] ?>
            </h3>
            <p style="font-family:'Nunito',sans-serif;font-size:0.85rem;color:#8B6850;line-height:1.6;"><?= $d['desc'] ?>
            </p>
          </div>
          <div class="flex items-center justify-between mt-auto pt-4"
            style="border-top:1px solid rgba(196,149,106,0.18);">
            <span
              style="font-family:'Playfair Display',serif;font-size:1.1rem;color:#A07850;font-weight:600;"><?= $d['price'] ?></span>
            <a href="<?= $base ?>/menu" class="flex items-center gap-1 text-xs font-bold"
              style="color:#72997C;font-family:'Nunito',sans-serif;text-decoration:none;">
              Full menu <i data-lucide="arrow-right" class="w-3 h-3"></i>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Food Grid (Halal) -->
    <div id="home-food-grid" class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12 home-menu-content hidden">
      <?php $food = [
        ['name' => 'Korean Fried Chicken', 'desc' => 'Crispy, double-fried boneless chicken glazed with sweet, savory, and spicy Korean sauces.', 'price' => 'Rs. 1,500 (6 Pcs)', 'icon' => 'utensils', 'tag' => '100% Halal'],
        ['name' => 'Double Katsu Sando', 'desc' => 'Premium Japanese milk bread filled with crispy chicken katsu, fresh cabbage, and Bulldog sauce.', 'price' => 'Rs. 2,250', 'icon' => 'flame', 'tag' => 'Popular'],
        ['name' => 'Japanese Curry Rice', 'desc' => 'Rich, slow-simmered aromatic golden curry served over premium sushi rice with crispy katsu.', 'price' => 'Rs. 1,850', 'icon' => 'soup', 'tag' => '100% Halal'],
      ];
      foreach ($food as $i => $f): ?>
        <div class="card p-6 flex flex-col gap-4">
          <div class="flex items-center justify-between">
            <div class="icon-box icon-box-lg icon-box-amber">
              <i data-lucide="<?= $f['icon'] ?>" class="w-5 h-5"></i>
            </div>
            <span class="badge badge-amber"><?= $f['tag'] ?></span>
          </div>
          <div>
            <h3 style="font-family:'Playfair Display',serif;font-size:1.15rem;color:#3A2A1E;margin-bottom:0.35rem;">
              <?= $f['name'] ?>
            </h3>
            <p style="font-family:'Nunito',sans-serif;font-size:0.85rem;color:#8B6850;line-height:1.6;"><?= $f['desc'] ?>
            </p>
          </div>
          <div class="flex items-center justify-between mt-auto pt-4"
            style="border-top:1px solid rgba(196,149,106,0.18);">
            <span
              style="font-family:'Playfair Display',serif;font-size:1.1rem;color:#A07850;font-weight:600;"><?= $f['price'] ?></span>
            <a href="<?= $base ?>/menu" class="flex items-center gap-1 text-xs font-bold"
              style="color:#72997C;font-family:'Nunito',sans-serif;text-decoration:none;">
              Full menu <i data-lucide="arrow-right" class="w-3 h-3"></i>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center reveal">
      <a href="<?= $base ?>/menu" id="featured-cta-menu" class="btn-primary">
        <i data-lucide="utensils" class="w-4 h-4"></i>
        See Full Menu
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

    // Smooth CSS Transition
    inactiveGrid.style.opacity = '0';
    inactiveGrid.style.transform = 'translateY(8px)';
    inactiveGrid.style.transition = 'all 0.25s ease';

    setTimeout(() => {
      inactiveGrid.classList.add('hidden');
      activeGrid.classList.remove('hidden');
      activeGrid.style.opacity = '0';
      activeGrid.style.transform = 'translateY(8px)';

      // Force a reflow
      activeGrid.offsetHeight;

      activeGrid.style.transition = 'all 0.3s ease';
      activeGrid.style.opacity = '1';
      activeGrid.style.transform = 'translateY(0)';
    }, 200);
  }
</script>

<!-- ═══════════════════════════════════════
     EVENTS BANNER
══════════════════════════════════════════ -->
<section class="section-pad" style="background:#FFFFFF;" id="events-teaser">
  <div class="max-w-6xl mx-auto">
    <div class="rounded-3xl overflow-hidden reveal" style="background:linear-gradient(135deg,#7A9E7E 0%,#4E7856 100%);">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
        <div class="p-10 md:p-14 flex flex-col gap-5 justify-center">
          <div class="eyebrow" style="color:rgba(255,255,255,0.7);">
            <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
            What's On
          </div>
          <h2
            style="font-family:'Playfair Display',serif;font-size:clamp(1.6rem,4vw,2.4rem);color:#fff;line-height:1.2;">
            Something's Always Happening
          </h2>
          <p
            style="font-family:'Nunito',sans-serif;font-size:0.9rem;color:rgba(255,255,255,0.80);line-height:1.7;max-width:380px;">
            Cat adoption days, live acoustic evenings, art workshops — there's always a warm reason to visit Neko &amp;
            Kopi.
          </p>
          <a href="<?= $base ?>/events" id="events-teaser-cta" class="btn-amber self-start">
            <i data-lucide="calendar" class="w-4 h-4"></i>
            View All Events
          </a>
        </div>
        <div class="hidden md:block relative overflow-hidden min-h-[280px]">
          <img src="<?= $base ?>/assets/images/cats.png" alt="Live events at Neko & Kopi"
            class="absolute inset-0 w-full h-full object-cover opacity-80">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════
     FIND US
══════════════════════════════════════════ -->
<section class="section-pad" style="background:#FBFBFA;" id="find-us">
  <div class="max-w-3xl mx-auto text-center reveal">
    <div class="eyebrow justify-center mb-4">
      <i data-lucide="map-pin" class="w-3.5 h-3.5"></i>
      Visit Us
    </div>
    <h2 class="section-heading mb-4">Come Find Your Corner</h2>
    <p class="section-subheading mx-auto mb-3">
      319/4, 05 Nawala Rd, Colombo 00500, Sri Lanka
    </p>
    <!-- Real-time Pulsing Opening Status Badge -->
    <div class="flex justify-center mb-4 font-sans">
      <div id="cafe-status-badge" class="hidden items-center gap-2 px-3 py-1.5 rounded-full text-[11px] font-extrabold uppercase tracking-wide transition-all duration-300">
        <span class="w-2 h-2 rounded-full relative flex">
          <span class="animate-ping absolute inline-flex h-full w-full rounded-full opacity-75"></span>
          <span class="relative inline-flex rounded-full h-2 w-2"></span>
        </span>
        <span id="cafe-status-text"></span>
      </div>
    </div>
    <p style="font-family:'Nunito',sans-serif;font-size:0.9rem;color:#A07850;margin-bottom:2.5rem;">
      Open Wed – Sun &middot; 9:00 AM – 9:00 PM &middot; CLOSED Monday & Tuesday
    </p>
    <div class="flex flex-wrap justify-center gap-3">
      <a href="https://maps.app.goo.gl/qPYiibj1WKDyJf3J6" id="find-us-maps" target="_blank" rel="noopener"
        class="btn-primary">
        <i data-lucide="map-pin" class="w-4 h-4"></i>
        Open in Maps
      </a>
      <a href="https://wa.me/94724783406?text=Hello%20Neko%20%26%20Kopi!" id="find-us-whatsapp" target="_blank"
        rel="noopener" class="btn-whatsapp">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
          <path
            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
        </svg>
        WhatsApp Us
      </a>
    </div>
  </div>
<!-- INTERACTIVE UX ENHANCEMENTS SCRIPT -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  // 1. Mouse Parallax effect on Hero background (Desktop only)
  const hero = document.getElementById('hero');
  const heroBg = document.getElementById('hero-bg');
  
  if (hero && heroBg && window.innerWidth > 768) {
    heroBg.style.transition = 'transform 0.15s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
    
    hero.addEventListener('mousemove', (e) => {
      const x = (window.innerWidth / 2 - e.clientX) / 80;
      const y = (window.innerHeight / 2 - e.clientY) / 80;
      heroBg.style.transform = `translate(${x}px, ${y}px) scale(1.06)`;
    });
    
    hero.addEventListener('mouseleave', () => {
      heroBg.style.transform = 'translate(0px, 0px) scale(1)';
    });
  }

  // 2. Real-time Colombo Opening Status Check (Wed-Sun, 9AM-9PM Colombo Time)
  function checkCafeStatus() {
    const statusBadge = document.getElementById('cafe-status-badge');
    const statusText = document.getElementById('cafe-status-text');
    const dot = statusBadge?.querySelector('.w-2.h-2 span:last-child');
    const ping = statusBadge?.querySelector('.animate-ping');
    
    if (!statusBadge || !statusText) return;
    
    // Get current date/time in Colombo (UTC+5.30)
    const now = new Date();
    const utc = now.getTime() + (now.getTimezoneOffset() * 60000);
    const colomboTime = new Date(utc + (3600000 * 5.5));
    
    const day = colomboTime.getDay(); // 0: Sun, 1: Mon, 2: Tue, 3: Wed, 4: Thu, 5: Fri, 6: Sat
    const hours = colomboTime.getHours();
    const minutes = colomboTime.getMinutes();
    const timeVal = hours + minutes / 60;
    
    // Cafe open Wed (3) through Sun (0) between 9:00 AM (9) and 9:00 PM (21)
    const isOpenDay = (day === 3 || day === 4 || day === 5 || day === 6 || day === 0);
    const isOpenHour = (timeVal >= 9 && timeVal < 21);
    
    statusBadge.classList.remove('hidden');
    statusBadge.classList.add('inline-flex');
    
    if (isOpenDay && isOpenHour) {
      statusBadge.style.background = 'rgba(114,153,124,0.12)';
      statusBadge.style.color = '#4E7856';
      statusBadge.style.border = '1px solid rgba(114,153,124,0.3)';
      if (dot) dot.style.background = '#4E7856';
      if (ping) ping.style.background = '#4E7856';
      statusText.textContent = 'OPEN NOW — Come snuggle with cats!';
    } else {
      statusBadge.style.background = 'rgba(196,149,106,0.12)';
      statusBadge.style.color = '#A07850';
      statusBadge.style.border = '1px solid rgba(196,149,106,0.3)';
      if (dot) dot.style.background = '#A07850';
      if (ping) ping.style.background = '#A07850';
      
      let reopeningMsg = 'CLOSED NOW — Reopening Wednesday at 9:00 AM';
      if (day === 3 || day === 4 || day === 5 || day === 6) {
        if (timeVal < 9) {
          reopeningMsg = 'CLOSED NOW — Opening today at 9:00 AM!';
        } else if (timeVal >= 21) {
          reopeningMsg = 'CLOSED NOW — Opening tomorrow at 9:00 AM!';
        }
      } else if (day === 0) {
        if (timeVal < 9) {
          reopeningMsg = 'CLOSED NOW — Opening today at 9:00 AM!';
        } else if (timeVal >= 21) {
          reopeningMsg = 'CLOSED NOW — Reopening Wednesday at 9:00 AM';
        }
      } else {
        // Monday or Tuesday
        reopeningMsg = 'CLOSED NOW — Reopening Wednesday at 9:00 AM';
      }
      statusText.textContent = reopeningMsg;
    }
  }

  checkCafeStatus();
  setInterval(checkCafeStatus, 30000);
});
</script>

<?php require_once '../includes/footer.php'; ?>