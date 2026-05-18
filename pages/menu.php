<?php
$page      = 'menu';
$pageTitle = 'Menu — Neko & Kopi Cat Café Colombo';
$pageDesc  = 'Explore the Neko & Kopi menu — artisan coffees, teas, signature drinks, snacks and desserts. Order via Uber Eats or visit us in Colombo.';
$base      = '/NekoCafe';
require_once '../includes/header.php';

$menuData = [
  'coffee' => [
    'label' => 'Coffee',
    'icon'  => 'coffee',
    'items' => [
      ['name'=>'Espresso',          'desc'=>'Double shot of our house blend, rich and bold.',                    'price'=>'Rs. 350'],
      ['name'=>'Americano',         'desc'=>'Espresso diluted with hot water — clean and smooth.',               'price'=>'Rs. 390'],
      ['name'=>'Cappuccino',        'desc'=>'Equal parts espresso, steamed milk, and velvety foam.',             'price'=>'Rs. 490'],
      ['name'=>'Neko Latte',        'desc'=>'Signature latte with cat paw art, vanilla &amp; oat milk.',         'price'=>'Rs. 590'],
      ['name'=>'Caramel Macchiato', 'desc'=>'Layered espresso over vanilla-infused steamed milk with caramel.',  'price'=>'Rs. 620'],
      ['name'=>'Cold Brew',         'desc'=>'12-hour cold steeped coffee — smooth, low acid, served over ice.',  'price'=>'Rs. 550'],
    ],
  ],
  'tea' => [
    'label' => 'Tea',
    'icon'  => 'leaf',
    'items' => [
      ['name'=>'Ceylon Black Tea',   'desc'=>'Classic Sri Lankan black tea, robust and bright.',                      'price'=>'Rs. 320'],
      ['name'=>'Jasmine Green Tea',  'desc'=>'Delicate green tea blossomed with jasmine flowers.',                    'price'=>'Rs. 370'],
      ['name'=>'Chamomile Honey',    'desc'=>'Calming chamomile with local raw honey and lemon.',                     'price'=>'Rs. 380'],
      ['name'=>'Mint Refresh',       'desc'=>'Fresh peppermint steeped with a slice of ginger.',                      'price'=>'Rs. 360'],
      ['name'=>'Masala Chai',        'desc'=>'Spiced Ceylon tea with cardamom, ginger, cinnamon &amp; steamed milk.', 'price'=>'Rs. 450'],
    ],
  ],
  'signature' => [
    'label' => 'Signature Drinks',
    'icon'  => 'star',
    'items' => [
      ['name'=>'Sakura Chai',       'desc'=>'Ceylon black tea with rose, cardamom &amp; steamed milk.',            'price'=>'Rs. 520'],
      ['name'=>'Forest Matcha',     'desc'=>'Ceremonial matcha with coconut milk, honey &amp; black sesame.',      'price'=>'Rs. 650'],
      ['name'=>'Lavender Fog',      'desc'=>'Earl grey, lavender syrup &amp; steamed oat milk.',                   'price'=>'Rs. 580'],
      ['name'=>'Paw Print Mocha',   'desc'=>'Dark chocolate mocha with cat paw cocoa art &amp; whipped cream.',    'price'=>'Rs. 610'],
      ['name'=>'Sunset Iced Latte', 'desc'=>'Cold brew layered with passionfruit, orange &amp; vanilla milk.',     'price'=>'Rs. 640'],
      ['name'=>'Honey Ginger Soda', 'desc'=>'Sparkling water with house-made ginger syrup &amp; fresh honey.',    'price'=>'Rs. 420'],
    ],
  ],
  'snacks' => [
    'label' => 'Snacks & Desserts',
    'icon'  => 'cake',
    'items' => [
      ['name'=>'Butter Croissant',     'desc'=>'Freshly baked, golden, flaky — classic.',                              'price'=>'Rs. 380'],
      ['name'=>'Cat-Shaped Cookies',   'desc'=>'Shortbread cookies iced in the likeness of our resident cats.',        'price'=>'Rs. 290'],
      ['name'=>'Matcha Cheesecake',    'desc'=>'Creamy no-bake matcha cheesecake on a graham cracker base.',           'price'=>'Rs. 650'],
      ['name'=>'Banana Bread Slice',   'desc'=>'Moist, walnut-studded banana bread served warm.',                      'price'=>'Rs. 390'],
      ['name'=>'Seasonal Fruit Tart',  'desc'=>'Crisp pastry shell with vanilla custard &amp; seasonal local fruits.', 'price'=>'Rs. 520'],
      ['name'=>'Pancake Stack',        'desc'=>'Fluffy Japanese-style pancakes with maple syrup &amp; butter.',        'price'=>'Rs. 580'],
    ],
  ],
];
?>

<!-- PAGE HEADER -->
<section class="pt-[62px] relative overflow-hidden" style="background:#FBFBFA;" id="menu-header">
  <div class="max-w-3xl mx-auto px-5 sm:px-8 py-16 text-center">
    <div class="reveal">
      <span class="badge badge-amber mb-5 inline-flex">
        <i data-lucide="leaf" class="w-3.5 h-3.5 text-sage"></i>
        Fresh Daily
      </span>
    </div>
    <h1 class="reveal reveal-delay-1 section-heading mb-4">Our Menu</h1>
    <p class="reveal reveal-delay-2 section-subheading mx-auto mb-8">
      Every item is crafted with seasonal ingredients and served with care.
      Order in-café or get it delivered via Uber Eats.
    </p>
    <a href="https://www.ubereats.com" id="menu-header-uber" target="_blank" rel="noopener"
       class="reveal reveal-delay-3 btn-amber inline-flex">
      <i data-lucide="bike" class="w-4 h-4"></i>
      Order on Uber Eats
    </a>
  </div>
</section>

<!-- STICKY CATEGORY TABS -->
<div class="sticky top-[62px] z-40" style="background:rgba(251,251,250,0.85);backdrop-filter:blur(24px);border-bottom:1px solid rgba(0,0,0,0.045);" id="menu-tabs-bar">
  <div class="max-w-6xl mx-auto px-5 sm:px-8 py-3.5 flex gap-2.5 overflow-x-auto scrollbar-hide">
    <button id="tab-all" class="cat-tab active" data-category="all">
      <i data-lucide="layout-grid" class="w-3.5 h-3.5"></i>
      All
    </button>
    <?php foreach ($menuData as $key => $section): ?>
    <button id="tab-<?=$key?>" class="cat-tab" data-category="<?=$key?>">
      <i data-lucide="<?=$section['icon']?>" class="w-3.5 h-3.5"></i>
      <?=$section['label']?>
    </button>
    <?php endforeach; ?>
  </div>
</div>

<!-- MENU CONTENT -->
<section style="background:#FBFBFA;" id="menu-content">
  <div class="max-w-6xl mx-auto px-5 sm:px-8 py-14">

  <?php foreach ($menuData as $key => $section): ?>
  <div class="menu-section mb-14" data-category="<?=$key?>" id="section-<?=$key?>">

    <!-- Section Header -->
    <div class="flex items-center gap-3 mb-8 reveal">
      <div class="icon-box icon-box-lg icon-box-amber">
        <i data-lucide="<?=$section['icon']?>" class="w-5 h-5"></i>
      </div>
      <div>
        <h2 style="font-family:'Playfair Display',serif;font-size:1.6rem;color:#3A2A1E;line-height:1.2;"><?=$section['label']?></h2>
        <div class="divider mt-1.5"></div>
      </div>
    </div>

    <!-- 2-column menu grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-0">
      <div class="card-flat px-6 reveal reveal-delay-1">
        <?php $items = $section['items'];
              $half  = ceil(count($items)/2);
              for ($i = 0; $i < $half; $i++):
                $item = $items[$i]; ?>
        <div class="menu-item">
          <div class="flex-1 min-w-0">
            <div class="menu-item-name"><?=$item['name']?></div>
            <div class="menu-item-desc"><?=$item['desc']?></div>
          </div>
          <div class="menu-item-price"><?=$item['price']?></div>
        </div>
        <?php endfor; ?>
      </div>
      <div class="card-flat px-6 reveal reveal-delay-2">
        <?php for ($i = $half; $i < count($items); $i++):
                $item = $items[$i]; ?>
        <div class="menu-item">
          <div class="flex-1 min-w-0">
            <div class="menu-item-name"><?=$item['name']?></div>
            <div class="menu-item-desc"><?=$item['desc']?></div>
          </div>
          <div class="menu-item-price"><?=$item['price']?></div>
        </div>
        <?php endfor; ?>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</section>

<!-- UBER EATS BANNER -->
<section style="background:#FBFBFA;" class="pb-16" id="menu-uber-banner">
  <div class="max-w-6xl mx-auto px-5 sm:px-8">
  <div class="rounded-3xl overflow-hidden reveal"
       style="background:linear-gradient(135deg,#C4956A 0%,#7A5533 100%);">
    <div class="flex flex-col md:flex-row items-center gap-6 p-8 md:p-10">
      <div class="w-14 h-14 rounded-2xl flex items-center justify-center flex-shrink-0"
           style="background:rgba(255,255,255,0.15);">
        <i data-lucide="bike" class="w-7 h-7 text-white"></i>
      </div>
      <div class="flex-1 text-center md:text-left">
        <h2 style="font-family:'Playfair Display',serif;font-size:1.5rem;color:#fff;margin-bottom:0.35rem;">Can't make it in?</h2>
        <p style="font-family:'Nunito',sans-serif;font-size:0.875rem;color:rgba(255,255,255,0.80);line-height:1.6;max-width:440px;">
          Order your favourite Neko &amp; Kopi drinks and snacks for delivery. Same café love, delivered to your door.
        </p>
      </div>
      <a href="https://www.ubereats.com" id="uber-banner-cta" target="_blank" rel="noopener"
         class="flex-shrink-0 inline-flex items-center gap-2 px-6 py-3 rounded-full font-bold text-sm"
         style="background:#fff;color:#7A5533;font-family:'Nunito',sans-serif;transition:all .2s ease;text-decoration:none;"
         onmouseover="this.style.background='#FAF6F0'" onmouseout="this.style.background='#fff'">
        Order Now
        <i data-lucide="arrow-right" class="w-4 h-4"></i>
      </a>
    </div>
  </div>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
