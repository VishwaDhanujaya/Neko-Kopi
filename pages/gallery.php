<?php
$page      = 'gallery';
$pageTitle = 'Gallery — Neko & Kopi Cat Café Colombo';
$pageDesc  = 'Step into our visual sanctuary. Explore our beloved resident cats, cozy wooden seating spaces, custom coffees, and sweet and savoury shop creations.';
require __DIR__ . '/../includes/base.php';
require_once '../includes/header.php';

$galleryItems = [
  // Cats
  [
    'title' => 'Mochi',
    'cat'   => 'cats',
    'tag'   => 'Resident Cat',
    'badge' => 'badge-dark',
    'desc'  => 'Our white marshmallow, sleeping in cardboard boxes.',
    'img'   => 'cat_mochi.png'
  ],
  [
    'title' => 'Kopi',
    'cat'   => 'cats',
    'tag'   => 'Resident Cat',
    'badge' => 'badge-dark',
    'desc'  => 'Our brave ginger barista counter manager.',
    'img'   => 'cat_kopi.png'
  ],
  [
    'title' => 'Miso',
    'cat'   => 'cats',
    'tag'   => 'Resident Cat',
    'badge' => 'badge-dark',
    'desc'  => 'Quiet calico who loves curled naps in the book library.',
    'img'   => 'cat_miso.png'
  ],
  [
    'title' => 'Sakura',
    'cat'   => 'cats',
    'tag'   => 'Resident Cat',
    'badge' => 'badge-dark',
    'desc'  => 'Tortoiseshell star who loves chasing golden sunbeams.',
    'img'   => 'cat_sakura.png'
  ],
  // Space
  [
    'title' => 'Cozy Nook Seating',
    'cat'   => 'space',
    'tag'   => 'Café & Space',
    'badge' => 'badge-amber',
    'desc'  => 'Warm wooden seating with soft green houseplants.',
    'img'   => 'seating.png'
  ],
  [
    'title' => 'Fresh Drip Coffee',
    'cat'   => 'space',
    'tag'   => 'Café & Space',
    'badge' => 'badge-amber',
    'desc'  => 'Premium custom roasts, brewed fresh daily.',
    'img'   => 'coffee.png'
  ],
  [
    'title' => 'Sanctuary Corner',
    'cat'   => 'space',
    'tag'   => 'Café & Space',
    'badge' => 'badge-amber',
    'desc'  => 'A peaceful home-like space designed to help you slow down.',
    'img'   => 'hero.png'
  ],
  // Shop Food
  [
    'title' => 'Earth Matcha Latte',
    'cat'   => 'shop',
    'tag'   => 'Shop Highlight',
    'badge' => '',
    'desc'  => 'Layered premium ceremonial matcha with coconut cream.',
    'img'   => 'menu_matcha.png'
  ],
  [
    'title' => 'Premium Katsu Sando',
    'cat'   => 'shop',
    'tag'   => 'Shop Highlight',
    'badge' => '',
    'desc'  => 'Crispy chicken katsu with sweet cabbage on milk bread.',
    'img'   => 'menu_sando.png'
  ],
  [
    'title' => 'Steaming Ramyeon Bowl',
    'cat'   => 'shop',
    'tag'   => 'Shop Highlight',
    'badge' => '',
    'desc'  => 'Korean noodles with soft boiled egg and spring leeks.',
    'img'   => 'menu_ramyeon.png'
  ]
];
?>

<!-- PAGE HEADER -->
<section class="pt-[62px] relative overflow-hidden" style="background:#FBFBFA;" id="gallery-header">
  <div class="max-w-3xl mx-auto px-5 sm:px-8 py-16 text-center">
    <div class="reveal">
      <span class="badge mb-5 inline-flex">
        <i data-lucide="image" class="w-3.5 h-3.5 text-sage"></i>
        Visual Sanctuary
      </span>
    </div>
    <h1 class="reveal reveal-delay-1 section-heading mb-4">Café Gallery</h1>
    <p class="reveal reveal-delay-2 section-subheading mx-auto mb-6">
      Explore the purrfect cozy corners, resident companion cats, and exquisite artisan creations that make Neko &amp; Kopi a home away from home.
    </p>
  </div>
</section>

<!-- STICKY GALLERY TABS -->
<div class="sticky top-[62px] z-40 tab-scroll-container" style="background:rgba(251,251,250,0.85);backdrop-filter:blur(24px);border-bottom:1px solid rgba(0,0,0,0.045);" id="gallery-tabs-bar">
  <div class="max-w-6xl mx-auto px-5 sm:px-8 py-3.5 flex md:justify-center gap-2.5 overflow-x-auto scrollbar-hide">
    <button id="gtab-all" class="cat-tab active" data-filter="all">
      <i data-lucide="layout-grid" class="w-3.5 h-3.5"></i>
      All Photos
    </button>
    <button id="gtab-cats" class="cat-tab" data-filter="cats">
      <i data-lucide="cat" class="w-3.5 h-3.5"></i>
      Resident Cats
    </button>
    <button id="gtab-space" class="cat-tab" data-filter="space">
      <i data-lucide="armchair" class="w-3.5 h-3.5"></i>
      Cozy Space
    </button>
    <button id="gtab-shop" class="cat-tab" data-filter="shop">
      <i data-lucide="shopping-bag" class="w-3.5 h-3.5"></i>
      Shop &amp; Food
    </button>
  </div>
</div>

<!-- GALLERY GRID CONTENT -->
<section style="background:#FBFBFA; min-height: 60vh;" id="gallery-content-section" class="py-12">
  <div class="max-w-6xl mx-auto px-5 sm:px-8">
    <div id="gallery-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 transition-all duration-300">
      
      <?php foreach ($galleryItems as $i => $item): ?>
      <div class="card overflow-hidden group gallery-item-card transition-all duration-300" 
           data-item-cat="<?=$item['cat']?>">
        <div class="h-64 overflow-hidden relative">
          <img src="<?=$base?>/assets/images/<?=$item['img']?>" 
               alt="<?=$item['title']?>" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
          <div class="absolute top-3 left-3">
            <span class="badge <?=$item['badge']?>"><?=$item['tag']?></span>
          </div>
        </div>
        <div class="p-5 flex flex-col gap-1.5">
          <h3 class="font-serif text-base font-bold" style="color:#2C1E15;"><?=$item['title']?></h3>
          <p class="text-xs leading-relaxed" style="color:#8B6850; font-family:'Nunito',sans-serif;"><?=$item['desc']?></p>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>

<!-- INTERACTIVE GALLERY SCRIPT -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  const tabs = document.querySelectorAll('#gallery-tabs-bar button[data-filter]');
  const cards = document.querySelectorAll('.gallery-item-card');
  const grid = document.getElementById('gallery-grid');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      // 1. Remove active state from all tabs
      tabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');

      const filterValue = tab.getAttribute('data-filter');

      // 1.5 Smoothly scroll to the start of the gallery content grid
      const contentSection = document.getElementById('gallery-content-section');
      if (contentSection) {
        const navbarHeight = 62;
        const tabsBarHeight = 50;
        const targetOffset = contentSection.offsetTop - (navbarHeight + tabsBarHeight);
        window.scrollTo({
          top: targetOffset,
          behavior: 'smooth'
        });
      }

      // 2. Fade grid out for transition reflow
      grid.style.opacity = '0';
      grid.style.transform = 'translateY(10px)';

      setTimeout(() => {
        // 3. Show/hide corresponding cards
        cards.forEach(card => {
          const itemCat = card.getAttribute('data-item-cat');
          if (filterValue === 'all' || itemCat === filterValue) {
            card.classList.remove('hidden');
          } else {
            card.classList.add('hidden');
          }
        });

        // Force a layout reflow
        grid.offsetHeight;

        // 4. Fade back in with smooth slide-up
        grid.style.opacity = '1';
        grid.style.transform = 'translateY(0)';
      }, 250);
    });
  });
});
</script>

<style>
#gallery-grid {
  transition: opacity 250ms ease, transform 250ms ease;
}
</style>

<?php require_once '../includes/footer.php'; ?>
