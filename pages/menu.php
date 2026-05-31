<?php
$page      = 'menu';
$pageTitle = 'Menu — Neko & Kopi Cat Café Colombo';
$pageDesc  = 'Explore the Neko & Kopi menu — artisan coffees, teas, signature drinks, snacks and desserts. Order via Uber Eats or visit us in Colombo.';
require_once __DIR__ . '/../includes/base.php';
require_once __DIR__ . '/../includes/header.php';

$menuData = [
  'snacks' => [
    'label' => 'Snacks',
    'icon'  => 'utensils',
    'desc'  => 'Delectable street bites, crispy finger foods, and traditional Japanese-style snacks to accompany your drinks.',
    'image' => 'menu_sando.png',
    'items' => [
      [
        'name' => 'Korean Fried Chicken',
        'desc' => 'Crispy, double-fried chicken glazed with sweet, savory, and spicy Korean sauces.',
        'options' => ['6 PCS' => 'Rs. 1,500', '12 PCS' => 'Rs. 2,540']
      ],
      [
        'name' => 'Mini Tteokbokki',
        'desc' => 'Chewy Korean rice cakes simmered in a sweet and spicy gochujang chili sauce.',
        'options' => ['With Gochujang' => 'Rs. 1,890', 'With Half Boiled Egg' => 'Rs. 1,990']
      ],
      [
        'name' => 'Spicy Fried Tofu',
        'desc' => 'Golden fried tofu cubes tossed in a spicy chili seasoning and aromatic spices.',
        'options' => ['6 PCS' => 'Rs. 1,200', '12 PCS' => 'Rs. 2,200']
      ],
      [
        'name' => 'Battered Chili Prawns',
        'desc' => 'Plump, crispy battered prawns tossed in a sweet-spicy chili glaze.',
        'options' => ['6 PCS' => 'Rs. 1,890', '12 PCS' => 'Rs. 3,450']
      ],
      [
        'name' => 'Chicken Katsu Bucket',
        'desc' => 'Crispy, panko-breaded tender chicken strips served in a shareable bucket.',
        'options' => ['3 PCS' => 'Rs. 1,720', '6 PCS' => 'Rs. 2,300', '12 PCS' => 'Rs. 3,640']
      ],
      [
        'name' => 'French Fries',
        'desc' => 'Perfectly golden potato fries, available plain or loaded with chicken katsu toppings.',
        'options' => ['Just Fries' => 'Rs. 800', 'Loaded Katsu Fries' => 'Rs. 2,100']
      ],
      [
        'name' => 'Dumplings (Steamed/Fried)',
        'desc' => 'Juicy dumplings filled with fresh ingredients, served steamed or crispy fried.',
        'options' => ['Vegetables (6 PCS)' => 'Rs. 1,790', 'Chicken (6 PCS)' => 'Rs. 2,600', 'Seafood (6 PCS)' => 'Rs. 3,200']
      ],
      [
        'name' => 'Mini Onigiri',
        'desc' => 'Cute, traditional Japanese hand-pressed rice triangles wrapped in crisp nori seaweed.',
        'options' => ['Plain Onigiri' => 'Rs. 550', 'Tuna and Mayo' => 'Rs. 1,380', 'Spicy Meaty' => 'Rs. 2,100']
      ],
      [
        'name' => 'Steamed Rice & Salad',
        'desc' => 'Perfect side bowls to complete your delicious meal.',
        'options' => ['Plain sushi rice' => 'Rs. 550', 'Garden Salad Bowl' => 'Rs. 800', 'Japanese Curry Cup' => 'Rs. 610']
      ],
      [
        'name' => 'Mini Corn Dog',
        'desc' => 'Popular street style crispy corn dogs made with sweet batter.',
        'options' => ['Classic Corn Dog' => 'Rs. 900']
      ]
    ],
    'addons' => [
      'Mozzarella' => 'Rs. 800',
      'Buldak Sauce' => 'Rs. 500',
      'Chicken' => 'Rs. 500',
      'Seafood' => 'Rs. 700',
      'Mayonnaise' => 'Rs. 300',
      'Kochchi' => 'Rs. 310'
    ]
  ],
  'stew_sando' => [
    'label' => 'Stew & Sando',
    'icon'  => 'flame',
    'desc'  => 'Cozy and comforting Korean tofu stews and premium Japanese-style sandwiches (Sandos).',
    'image' => 'menu_sando.png',
    'items' => [
      [
        'name' => 'Korean Soft Tofu Stew',
        'desc' => 'A fiery, bubbling red stew of silky tofu and vegetables, customize with your proteins.',
        'options' => ['Tofu/Egg' => 'Rs. 1,350', 'Chicken' => 'Rs. 1,860', 'Seafood' => 'Rs. 2,100', 'All-in-one' => 'Rs. 3,100'],
        'addons' => ['Sushi Rice' => 'Rs. 550', 'Kimchi' => 'Rs. 400']
      ],
      [
        'name' => 'Premium Sandos',
        'desc' => 'Fluffy white sandwich bread filled with satisfying sweet and savory fillings.',
        'options' => ['Mayo and Egg' => 'Rs. 1,440', 'Fried Double Katsu' => 'Rs. 2,250', 'Cheesy Coleslaw' => 'Rs. 1,100', 'Tuna and Corn' => 'Rs. 2,520'],
        'addons' => ['Mozzarella' => 'Rs. 800', 'Kochchi' => 'Rs. 300', 'Buldak Sauce' => 'Rs. 500', 'Mayonnaise' => 'Rs. 310']
      ]
    ]
  ],
  'curry' => [
    'label' => 'Japanese Curry',
    'icon'  => 'soup',
    'desc'  => 'Rich, thick, and highly aromatic golden Japanese curry served over steaming rice.',
    'image' => 'menu_curry.png',
    'items' => [
      [
        'name' => 'Japanese Curry Rice',
        'desc' => 'Slow-simmered, flavorful curry sauce served over a bed of premium rice.',
        'options' => ['Vegetable' => 'Rs. 1,390', 'Egg' => 'Rs. 1,670', 'Fried Katsu' => 'Rs. 1,850', 'Boiled Chicken' => 'Rs. 2,800', 'Seafood' => 'Rs. 3,150']
      ],
      [
        'name' => 'Kids Bento Box',
        'desc' => 'A fun, cute Bento featuring french fries, boiled egg, veggies (iceberg, red & white cabbage), sweet corn, chicken nuggets, bear-shaped sticky rice, and strawberries with Nutella.',
        'price' => 'Rs. 2,800'
      ]
    ]
  ],
  'ramyeon' => [
    'label' => 'Custom Ramyeon',
    'icon'  => 'chef-hat',
    'desc'  => 'Create your own signature bowl of steaming, comforting Korean instant ramyeon with customizable bases, spices, broth, and premium toppings.',
    'image' => 'menu_ramyeon.png',
    'custom' => true,
    'sections' => [
      'A - Select the Base' => [
        'Jjajangmyeong' => 'Rs. 1,000',
        'Buldak Black' => 'Rs. 1,200'
      ],
      'B - Select the Spice Level' => [
        'Normal' => 'Free',
        'Mild Chilli' => '+Rs. 200',
        'Spicy Kochchi' => '+Rs. 300',
        'Ultra Shinigami' => '+Rs. 500'
      ],
      'C - Select the Broth Volume' => [
        'NO Broth' => 'Free',
        'MEDIUM Broth' => 'Free',
        'FULL Broth' => 'Free'
      ],
      'D - Select ANY Add-On\'s' => [
        'Sweet Corn' => 'Rs. 300',
        'Leeks' => 'Rs. 180',
        'Cabbage' => 'Rs. 180',
        'Kimchi' => 'Rs. 420',
        'Mini Tteokbokki' => 'Rs. 650',
        'Tofu (30g)' => 'Rs. 500',
        'Boiled Egg (1 Egg)' => 'Rs. 200',
        'Chicken Katsu' => 'Rs. 650',
        'Cuttlefish (30g)' => 'Rs. 580',
        'Fish Goujons (1)' => 'Rs. 550',
        'Fried Prawns (3 PCS)' => 'Rs. 820',
        'Chicken Breast Slice (2 PCS)' => 'Rs. 970',
        'Tuna (60g)' => 'Rs. 380',
        'Mayo (1 tbsp)' => 'Rs. 400',
        'Soya Sauce' => 'Rs. 200',
        'Gochujang Paste (1 tbsp)' => 'Rs. 410'
      ]
    ]
  ],
  'beverages' => [
    'label' => 'Beverages',
    'icon'  => 'coffee',
    'desc'  => 'A complete selection of warming teas, fresh juices, creamy milkshakes, and premium, custom-roasted espresso drinks.',
    'image' => 'menu_matcha.png',
    'subsections' => [
      'Tea & Other' => [
        ['name' => 'Plain Tea', 'price' => 'Rs. 200'],
        ['name' => 'Ginger Tea', 'price' => 'Rs. 220'],
        ['name' => 'Milk Tea', 'price' => 'Rs. 280'],
        ['name' => 'Tinkiri Tea', 'price' => 'Rs. 300'],
        ['name' => 'Green Tea', 'price' => 'Rs. 200'],
        ['name' => 'Hot Chocolate', 'price' => 'Rs. 450'],
        ['name' => 'Hot Milo', 'price' => 'Rs. 480']
      ],
      'Creamy Shakes' => [
        ['name' => 'Chocolate Shake', 'price' => 'Rs. 820'],
        ['name' => 'Strawberry Shake', 'price' => 'Rs. 800'],
        ['name' => 'Vanilla Shake', 'price' => 'Rs. 750']
      ],
      'Frappes' => [
        ['name' => 'Milo Frappe', 'price' => 'Rs. 920'],
        ['name' => 'Nutella Frappe', 'price' => 'Rs. 1,100']
      ],
      'Weekly Specials' => [
        ['name' => 'Iced Tea', 'price' => 'Rs. 650'],
        ['name' => 'Mojito', 'price' => 'Rs. 550']
      ],
      'Neko Specials' => [
        ['name' => 'Dalgona Iced Kopi', 'price' => 'Rs. 650', 'desc' => 'Frothy whipped coffee over sweet chilled milk.'],
        ['name' => 'Vietnamese Iced Kopi', 'price' => 'Rs. 760', 'desc' => 'Strong dark coffee dripped over creamy condensed milk.'],
        ['name' => 'Iced Coffee Float', 'price' => 'Rs. 820', 'desc' => 'Chilled sweet coffee topped with a scoop of vanilla ice cream.'],
        ['name' => 'Earth Matcha Latte (Hot/Cold)', 'price' => 'Rs. 1,280', 'desc' => 'Ceremonial Japanese matcha layered with thick milk.'],
        ['name' => 'Milo Mocha (Hot/Cold)', 'price' => 'Rs. 1,200', 'desc' => 'Milo chocolate blended with espresso and silky steamed milk.'],
        ['name' => 'Cafe Bombom (Hot/Cold)', 'price' => 'Rs. 880', 'desc' => 'Intense espresso layered over sweet condensed milk.'],
        ['name' => 'Egg Kopi (Hot)', 'price' => 'Rs. 850', 'desc' => 'Creamy, sweet, and custardy whipped egg yolk over rich coffee.']
      ],
      'Fresh Juices' => [
        ['name' => 'Lime', 'price' => 'Rs. 650'],
        ['name' => 'Watermelon', 'price' => 'Rs. 600'],
        ['name' => 'Passion Fruit', 'price' => 'Rs. 620']
      ],
      'Detox' => [
        ['name' => 'Mint & Cucumber', 'price' => 'Rs. 680'],
        ['name' => 'Carrot & Ginger', 'price' => 'Rs. 720']
      ],
      'Soda & Floats' => [
        ['name' => 'Cola', 'price' => 'Rs. 200'],
        ['name' => 'Sprite', 'price' => 'Rs. 200'],
        ['name' => 'Coke Float', 'price' => 'Rs. 340'],
        ['name' => 'Lime Sprite', 'price' => 'Rs. 400']
      ],
      'Espresso & Coffee' => [
        ['name' => 'Single Espresso', 'hot' => 'Rs. 400', 'cold' => 'Rs. 450'],
        ['name' => 'Double Espresso', 'hot' => 'Rs. 550', 'cold' => 'Rs. 600'],
        ['name' => 'Americano', 'hot' => 'Rs. 590', 'cold' => 'Rs. 690'],
        ['name' => 'Mocha', 'hot' => 'Rs. 750', 'cold' => 'Rs. 850'],
        ['name' => 'Cappuccino', 'hot' => 'Rs. 730', 'cold' => 'Rs. 830'],
        ['name' => 'Latte', 'hot' => 'Rs. 800', 'cold' => 'Rs. 900'],
        ['name' => 'Bombom', 'hot' => 'Rs. 880', 'cold' => 'Rs. 980'],
        ['name' => 'Matcha Latte', 'hot' => 'Rs. 1,060', 'cold' => 'Rs. 1,160'],
        ['name' => 'Affogato', 'hot' => '—', 'cold' => 'Rs. 890']
      ]
    ]
  ],
  'desserts' => [
    'label' => 'Desserts',
    'icon'  => 'cake',
    'desc'  => 'Beautiful and indulgent Japanese-inspired sweets to complete your perfect café experience.',
    'image' => 'menu_dessert.png',
    'items' => [
      ['name' => 'Cookie Sando', 'desc' => 'Creamy, chilled ice cream sandwiched between two giant, freshly-baked chewy cookies.', 'price' => 'Rs. 1,000'],
      ['name' => 'Seasonal Mochi with Ice Cream (2 PCS)', 'desc' => 'Soft, sweet glutinous rice mochi filled with premium ice cream.', 'price' => 'Rs. 1,620'],
      ['name' => 'Nutella Mini Donut Platter (8 PCS)', 'desc' => 'A shareable platter of mini, warm fluffy donuts drizzled with rich hazelnut Nutella spread.', 'price' => 'Rs. 1,680'],
      ['name' => 'Chocolate Biscuit Pudding', 'desc' => 'Traditional Sri Lankan home style layered chocolate and Marie biscuit dessert.', 'price' => 'Rs. 880'],
      ['name' => 'Ichigo Sando', 'desc' => 'Beautiful Japanese fruit sandwich filled with fresh sweet strawberries and light whipped cream.', 'price' => 'Rs. 1,350']
    ]
  ]
];
?>

<!-- PAGE HEADER -->
<section class="pt-[62px] relative overflow-hidden" style="background:#FBFBFA;" id="menu-header">
  <div class="max-w-3xl mx-auto px-5 sm:px-8 py-16 text-center">
    <div class="reveal">
      <span class="badge mb-5 inline-flex">
        <i data-lucide="leaf" class="w-3.5 h-3.5 text-sage"></i>
        Fresh Daily
      </span>
    </div>
    <h1 class="reveal reveal-delay-1 section-heading mb-4">Our Menu</h1>
    <p class="reveal reveal-delay-2 section-subheading mx-auto mb-6">
      Every item is crafted with premium ingredients and served with café love.
      Order in-café or get it delivered straight to your doorstep.
    </p>

    <a href="https://www.ubereats.com" id="menu-header-uber" target="_blank" rel="noopener"
       class="reveal reveal-delay-3 btn-amber inline-flex">
      <i data-lucide="bike" class="w-4 h-4"></i>
      Order on Uber Eats
    </a>
  </div>
</section>

<!-- STICKY CATEGORY TABS -->
<div class="sticky top-[62px] z-40 tab-scroll-container" style="background:rgba(251,251,250,0.85);backdrop-filter:blur(24px);border-bottom:1px solid rgba(0,0,0,0.045);" id="menu-tabs-bar">
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
  <div class="menu-section mb-20" data-category="<?=$key?>" id="section-<?=$key?>">

    <!-- Section Header -->
    <div class="mb-10 reveal">
      <?php if (!empty($section['image'])): ?>
        <!-- Category Banner -->
        <div class="mb-8 rounded-3xl overflow-hidden h-48 md:h-64 relative shadow-sm" style="border: 1px solid rgba(196,149,106,0.15);">
          <img src="<?=$base?>/assets/images/<?=$section['image']?>" alt="<?=$section['label']?>" class="w-full h-full object-cover" loading="lazy">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/15 to-transparent flex items-end p-6 md:p-8">
            <div class="flex items-center gap-3.5">
              <div class="w-10 h-10 rounded-full flex items-center justify-center bg-white/95 text-sage shadow-md">
                <i data-lucide="<?=$section['icon']?>" class="w-5 h-5"></i>
              </div>
              <div>
                <span class="text-white/80 font-bold uppercase tracking-wider text-[10px]" style="font-family:'Nunito',sans-serif;">Category Showcase</span>
                <h2 class="font-serif text-2xl md:text-3xl text-white font-bold leading-none mt-1"><?=$section['label']?></h2>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

      <div class="flex flex-col md:flex-row md:items-center gap-4 justify-between <?= !empty($section['image']) ? 'px-2' : '' ?>">
        <?php if (empty($section['image'])): ?>
          <div class="flex items-center gap-3">
            <div class="icon-box icon-box-lg icon-box-amber">
              <i data-lucide="<?=$section['icon']?>" class="w-5 h-5"></i>
            </div>
            <div>
              <h2 class="font-serif text-2xl md:text-3xl text-text font-bold"><?=$section['label']?></h2>
              <div class="divider mt-1.5"></div>
            </div>
          </div>
        <?php endif; ?>
        <?php if (!empty($section['desc'])): ?>
          <p class="text-xs md:text-sm text-text-light max-w-xl font-sans leading-relaxed <?= empty($section['image']) ? 'max-w-md' : '' ?>">
            <?=$section['desc']?>
          </p>
        <?php endif; ?>
      </div>
    </div>

    <!-- RENDER CUSTOM RAMYEON BUILDER (CALCULATOR UI/UX) -->
    <?php if (isset($section['custom']) && $section['custom']): ?>
      <div class="reveal">
        <form id="ramyeon-form" class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
          <!-- Selection Steps -->
          <div class="lg:col-span-8 flex flex-col gap-6">
            
            <!-- Step A: Base selection card grid -->
            <div class="p-6 rounded-2xl border border-beige/60 bg-white shadow-cozy hover:shadow-warm transition-all duration-300">
              <h3 class="font-serif text-lg text-brown-dark font-semibold mb-4 flex items-center justify-between">
                <span>A - Select the Base</span>
                <span class="text-xs font-sans px-2.5 py-0.5 rounded-full bg-amber/15 text-brown font-medium">Step 1</span>
              </h3>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <label class="relative flex items-center justify-between p-4 rounded-xl border border-beige/40 bg-white hover:border-amber/40 cursor-pointer transition-all duration-200 shadow-sm group">
                  <input type="radio" name="ramyeon-base" value="Jjajangmyeong" data-price="1000" class="sr-only" checked>
                  <div class="flex flex-col">
                    <span class="font-sans text-sm font-bold text-text group-hover:text-amber transition-colors">Jjajangmyeong</span>
                    <span class="font-sans text-xs text-text-light mt-0.5">Savory black bean sauce</span>
                  </div>
                  <span class="font-sans text-sm text-amber font-bold">Rs. 1,000</span>
                  <div class="absolute inset-0 border-2 border-transparent rounded-xl pointer-events-none group-[.active]:border-amber"></div>
                </label>
                
                <label class="relative flex items-center justify-between p-4 rounded-xl border border-beige/40 bg-white hover:border-amber/40 cursor-pointer transition-all duration-200 shadow-sm group">
                  <input type="radio" name="ramyeon-base" value="Buldak Black" data-price="1200" class="sr-only">
                  <div class="flex flex-col">
                    <span class="font-sans text-sm font-bold text-text group-hover:text-amber transition-colors">Buldak Black</span>
                    <span class="font-sans text-xs text-text-light mt-0.5">Spicy stir-fried ramyeon</span>
                  </div>
                  <span class="font-sans text-sm text-amber font-bold">Rs. 1,200</span>
                  <div class="absolute inset-0 border-2 border-transparent rounded-xl pointer-events-none group-[.active]:border-amber"></div>
                </label>
              </div>
            </div>

            <!-- Step B: Spice levels -->
            <div class="p-6 rounded-2xl border border-beige/60 bg-white shadow-cozy hover:shadow-warm transition-all duration-300">
              <h3 class="font-serif text-lg text-brown-dark font-semibold mb-4 flex items-center justify-between">
                <span>B - Select the Spice Level</span>
                <span class="text-xs font-sans px-2.5 py-0.5 rounded-full bg-amber/15 text-brown font-medium">Step 2</span>
              </h3>
              <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                <label class="relative flex flex-col items-center justify-center p-3.5 rounded-xl border border-beige/40 bg-white hover:border-amber/40 cursor-pointer text-center transition-all duration-200 shadow-sm group">
                  <input type="radio" name="ramyeon-spice" value="Normal" data-price="0" class="sr-only" checked>
                  <span class="font-sans text-xs font-bold text-text">Normal</span>
                  <span class="font-sans text-[10px] text-text-light mt-0.5">Free</span>
                  <div class="absolute inset-0 border-2 border-transparent rounded-xl pointer-events-none group-[.active]:border-amber"></div>
                </label>
                
                <label class="relative flex flex-col items-center justify-center p-3.5 rounded-xl border border-beige/40 bg-white hover:border-amber/40 cursor-pointer text-center transition-all duration-200 shadow-sm group">
                  <input type="radio" name="ramyeon-spice" value="Mild Chilli" data-price="200" class="sr-only">
                  <span class="font-sans text-xs font-bold text-text">Mild Chilli</span>
                  <span class="font-sans text-[10px] text-amber font-bold mt-0.5">+Rs. 200</span>
                  <div class="absolute inset-0 border-2 border-transparent rounded-xl pointer-events-none group-[.active]:border-amber"></div>
                </label>

                <label class="relative flex flex-col items-center justify-center p-3.5 rounded-xl border border-beige/40 bg-white hover:border-amber/40 cursor-pointer text-center transition-all duration-200 shadow-sm group">
                  <input type="radio" name="ramyeon-spice" value="Spicy Kochchi" data-price="300" class="sr-only">
                  <span class="font-sans text-xs font-bold text-text">Spicy Kochchi</span>
                  <span class="font-sans text-[10px] text-amber font-bold mt-0.5">+Rs. 300</span>
                  <div class="absolute inset-0 border-2 border-transparent rounded-xl pointer-events-none group-[.active]:border-amber"></div>
                </label>

                <label class="relative flex flex-col items-center justify-center p-3.5 rounded-xl border border-beige/40 bg-white hover:border-amber/40 cursor-pointer text-center transition-all duration-200 shadow-sm group">
                  <input type="radio" name="ramyeon-spice" value="Ultra Shinigami" data-price="500" class="sr-only">
                  <span class="font-sans text-xs font-bold text-red-600">Ultra Shinigami</span>
                  <span class="font-sans text-[10px] text-amber font-bold mt-0.5">+Rs. 500</span>
                  <div class="absolute inset-0 border-2 border-transparent rounded-xl pointer-events-none group-[.active]:border-amber"></div>
                </label>
              </div>
            </div>

            <!-- Step C: Broth volume selection dropdown or radio buttons -->
            <div class="p-6 rounded-2xl border border-beige/60 bg-white shadow-cozy hover:shadow-warm transition-all duration-300">
              <h3 class="font-serif text-lg text-brown-dark font-semibold mb-4 flex items-center justify-between">
                <span>C - Select the Broth Volume</span>
                <span class="text-xs font-sans px-2.5 py-0.5 rounded-full bg-amber/15 text-brown font-medium">Step 3</span>
              </h3>
              <div class="grid grid-cols-3 gap-2.5">
                <label class="relative flex flex-col items-center justify-center p-3.5 rounded-xl border border-beige/40 bg-white hover:border-amber/40 cursor-pointer text-center transition-all duration-200 shadow-sm group">
                  <input type="radio" name="ramyeon-broth" value="NO Broth" data-price="0" class="sr-only" checked>
                  <i data-lucide="droplet-off" class="w-4 h-4 text-text-light mb-1 opacity-60"></i>
                  <span class="font-sans text-xs font-bold text-text">NO Broth</span>
                  <div class="absolute inset-0 border-2 border-transparent rounded-xl pointer-events-none group-[.active]:border-amber"></div>
                </label>
                
                <label class="relative flex flex-col items-center justify-center p-3.5 rounded-xl border border-beige/40 bg-white hover:border-amber/40 cursor-pointer text-center transition-all duration-200 shadow-sm group">
                  <input type="radio" name="ramyeon-broth" value="MEDIUM Broth" data-price="0" class="sr-only">
                  <i data-lucide="droplet" class="w-4 h-4 text-amber/80 mb-1"></i>
                  <span class="font-sans text-xs font-bold text-text">MEDIUM Broth</span>
                  <div class="absolute inset-0 border-2 border-transparent rounded-xl pointer-events-none group-[.active]:border-amber"></div>
                </label>

                <label class="relative flex flex-col items-center justify-center p-3.5 rounded-xl border border-beige/40 bg-white hover:border-amber/40 cursor-pointer text-center transition-all duration-200 shadow-sm group">
                  <input type="radio" name="ramyeon-broth" value="FULL Broth" data-price="0" class="sr-only">
                  <div class="flex gap-0.5 mb-1 text-amber">
                    <i data-lucide="droplet" class="w-3.5 h-3.5"></i>
                    <i data-lucide="droplet" class="w-3.5 h-3.5"></i>
                  </div>
                  <span class="font-sans text-xs font-bold text-text">FULL Broth</span>
                  <div class="absolute inset-0 border-2 border-transparent rounded-xl pointer-events-none group-[.active]:border-amber"></div>
                </label>
              </div>
            </div>

            <!-- Step D: Custom toppings checkbox list -->
            <div class="p-6 rounded-2xl border border-beige/60 bg-white shadow-cozy hover:shadow-warm transition-all duration-300">
              <h3 class="font-serif text-lg text-brown-dark font-semibold mb-4 flex items-center justify-between">
                <span>D - Select ANY Add-On\'s</span>
                <span class="text-xs font-sans px-2.5 py-0.5 rounded-full bg-amber/15 text-brown font-medium">Step 4</span>
              </h3>
              <div class="grid grid-cols-2 sm:grid-cols-3 gap-2">
                <?php foreach ($section['sections']['D - Select ANY Add-On\'s'] as $name => $price): 
                  $numericPrice = intval(str_replace(['Rs. ', '+', ','], '', $price));
                ?>
                  <label class="relative p-3 rounded-xl border border-beige/40 bg-white hover:border-amber/40 cursor-pointer transition-all duration-200 shadow-sm flex flex-col justify-between gap-1 group">
                    <input type="checkbox" name="ramyeon-addons[]" value="<?=$name?>" data-price="<?=$numericPrice?>" class="sr-only">
                    <span class="font-sans text-xs font-bold text-text leading-tight group-hover:text-amber transition-colors"><?=$name?></span>
                    <span class="font-sans text-[10px] text-amber font-bold mt-1">+Rs. <?=number_format($numericPrice)?></span>
                    <div class="absolute inset-0 border-2 border-transparent rounded-xl pointer-events-none group-[.active]:border-amber"></div>
                  </label>
                <?php endforeach; ?>
              </div>
            </div>

          </div>

          <!-- Price Estimator panel sticky on the right -->
          <div class="lg:col-span-4 flex flex-col gap-6">
            <div class="sticky top-[140px] p-6 rounded-3xl border border-beige/50 bg-white shadow-cozy overflow-hidden">
              <div class="absolute -top-10 -right-10 w-32 h-32 bg-amber/5 rounded-full blur-2xl"></div>
              
              <div class="flex items-center gap-3 mb-6">
                <div class="icon-box icon-box-amber">
                  <i data-lucide="receipt" class="w-5 h-5"></i>
                </div>
                <div>
                  <h4 class="font-serif text-base text-brown-dark font-bold">Your Custom Bowl</h4>
                  <p class="text-[10px] font-sans text-text-light">Real-time Estimation</p>
                </div>
              </div>

              <!-- Receipt Details -->
              <div class="flex flex-col gap-3 font-sans text-sm text-text border-b border-dashed border-beige/60 pb-6 mb-6">
                <div class="flex justify-between items-center">
                  <span class="text-text-light font-medium text-xs">Base:</span>
                  <span id="receipt-base" class="font-bold">Jjajangmyeong</span>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-text-light font-medium text-xs">Spice Level:</span>
                  <span id="receipt-spice" class="font-bold">Normal</span>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-text-light font-medium text-xs">Broth:</span>
                  <span id="receipt-broth" class="font-bold">NO Broth</span>
                </div>
                <div class="flex flex-col gap-1 mt-1">
                  <span class="text-text-light font-medium text-[10px] uppercase tracking-wider">Toppings:</span>
                  <div id="receipt-toppings" class="text-xs text-brown flex flex-wrap gap-1 mt-1">
                    <span class="opacity-60 italic text-xs">No toppings selected</span>
                  </div>
                </div>
              </div>

              <!-- Total Price -->
              <div class="flex justify-between items-center mb-6">
                <span class="font-serif text-base text-brown-dark font-bold">Total Estimate:</span>
                <span class="font-sans text-xl font-extrabold text-amber">Rs. <span id="ramyeon-total">1,000</span></span>
              </div>

              <!-- CTA Group -->
              <div class="flex flex-col gap-2.5">
                <a href="https://wa.me/94724783406" id="whatsapp-order-btn" target="_blank" rel="noopener" class="w-full btn-whatsapp btn-sm flex items-center justify-center gap-2">
                  <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                  </svg>
                  Order via WhatsApp
                </a>
                <button type="button" id="copy-recipe-btn" class="w-full btn-outline btn-sm flex items-center justify-center gap-2">
                  <i data-lucide="copy" class="w-4 h-4"></i>
                  Copy Recipe Text
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>

    <!-- RENDER BEVERAGES WITH DOTTED BISTRO LEADERS -->
    <?php elseif ($key === 'beverages'): ?>
      <div class="flex flex-col gap-14">
        <?php foreach ($section['subsections'] as $subTitle => $subItems): ?>
          <div class="reveal">
            <!-- Subsection Header -->
            <h3 class="font-serif text-lg md:text-xl text-brown font-bold mb-6 flex items-center gap-2">
              <span class="w-1.5 h-1.5 rounded-full bg-amber"></span>
              <?=$subTitle?>
            </h3>

            <?php if ($subTitle === 'Espresso & Coffee'): ?>
              <!-- Espresso Hot/Cold table layout -->
              <div class="p-6 rounded-3xl border border-beige/50 bg-white/70 shadow-cozy overflow-x-auto">
                <table class="w-full text-left font-sans text-sm">
                  <thead>
                    <tr class="border-b border-beige/40 text-text-light font-bold">
                      <th class="py-3 px-4 font-serif text-base text-text">Espresso Drink</th>
                      <th class="py-3 px-4 text-center w-28">
                        <span class="inline-flex items-center gap-1 text-red-500 bg-red-50 px-2.5 py-0.5 rounded-full text-xs">
                          <i data-lucide="flame" class="w-3 h-3"></i> Hot Price
                        </span>
                      </th>
                      <th class="py-3 px-4 text-center w-28">
                        <span class="inline-flex items-center gap-1 text-blue-500 bg-blue-50 px-2.5 py-0.5 rounded-full text-xs">
                          <i data-lucide="snowflake" class="w-3 h-3"></i> Cold Price
                        </span>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($subItems as $item): ?>
                      <tr class="border-b border-beige/10 hover:bg-cream/10 transition-colors duration-150">
                        <td class="py-4 px-4 font-semibold text-text">
                          <?=$item['name']?>
                        </td>
                        <td class="py-4 px-4 text-center font-bold text-text-light">
                          <?=$item['hot'] === '—' ? '—' : $item['hot']?>
                        </td>
                        <td class="py-4 px-4 text-center font-bold text-amber">
                          <?=$item['cold']?>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            <?php else: ?>
              <!-- Standard drink grid with classical dotted leader lines -->
              <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-1">
                <div class="card-flat px-6">
                  <?php $half = ceil(count($subItems)/2);
                        for ($i = 0; $i < $half; $i++):
                          $item = $subItems[$i]; ?>
                    <div class="menu-item flex-col items-start gap-1 py-4">
                      <div class="flex items-baseline justify-between w-full gap-2">
                        <div class="menu-item-name font-serif text-[1.05rem] text-text font-bold"><?=$item['name']?></div>
                        <div class="flex-grow border-b border-dashed border-beige/60 mx-2 self-center h-0 mb-1"></div>
                        <div class="menu-item-price font-bold text-amber font-sans"><?=$item['price']?></div>
                      </div>
                      <?php if (isset($item['desc'])): ?>
                        <div class="menu-item-desc w-full"><?=$item['desc']?></div>
                      <?php endif; ?>
                    </div>
                  <?php endfor; ?>
                </div>
                <div class="card-flat px-6">
                  <?php for ($i = $half; $i < count($subItems); $i++):
                          $item = $subItems[$i]; ?>
                    <div class="menu-item flex-col items-start gap-1 py-4">
                      <div class="flex items-baseline justify-between w-full gap-2">
                        <div class="menu-item-name font-serif text-[1.05rem] text-text font-bold"><?=$item['name']?></div>
                        <div class="flex-grow border-b border-dashed border-beige/60 mx-2 self-center h-0 mb-1"></div>
                        <div class="menu-item-price font-bold text-amber font-sans"><?=$item['price']?></div>
                      </div>
                      <?php if (isset($item['desc'])): ?>
                        <div class="menu-item-desc w-full"><?=$item['desc']?></div>
                      <?php endif; ?>
                    </div>
                  <?php endfor; ?>
                </div>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>

    <!-- RENDER GENERAL ITEMS WITH DOTTED BISTRO LEADERS -->
    <?php else: ?>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-0 reveal">
        <div class="card-flat px-6">
          <?php $items = $section['items'];
                $half  = ceil(count($items)/2);
                for ($i = 0; $i < $half; $i++):
                  $item = $items[$i]; ?>
          <div class="menu-item flex-col items-start gap-1.5 py-5">
            <div class="flex items-baseline justify-between w-full gap-2">
              <div class="menu-item-name font-serif text-[1.05rem] text-text font-bold"><?=$item['name']?></div>
              <?php if (isset($item['price'])): ?>
                <div class="flex-grow border-b border-dashed border-beige/60 mx-2 self-center h-0 mb-1"></div>
                <div class="menu-item-price font-bold text-amber font-sans"><?=$item['price']?></div>
              <?php endif; ?>
            </div>
            
            <?php if (isset($item['desc'])): ?>
              <div class="menu-item-desc w-full mb-1"><?=$item['desc']?></div>
            <?php endif; ?>

            <?php if (isset($item['options'])): ?>
              <!-- Multi options badges -->
              <div class="flex flex-wrap gap-2 mt-1">
                <?php foreach ($item['options'] as $optLabel => $optPrice): ?>
                  <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-sans font-bold bg-cream-dark text-brown border border-beige/40">
                    <span class="opacity-60 font-semibold"><?=$optLabel?>:</span>
                    <span><?=$optPrice?></span>
                  </span>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>

            <?php if (isset($item['addons'])): ?>
              <!-- Addons nested list -->
              <div class="w-full mt-2.5 p-3 rounded-xl border border-dashed border-beige/40 bg-cream/10">
                <span class="text-[10px] font-sans font-bold text-text-light tracking-wide uppercase">Custom Add-on Options:</span>
                <div class="flex flex-wrap gap-2 mt-1.5">
                  <?php foreach ($item['addons'] as $addonName => $addonPrice): ?>
                    <span class="text-xs font-sans text-text-light font-medium bg-white/70 px-2 py-0.5 rounded border border-beige/20">+ <?=$addonName?> (<?=$addonPrice?>)</span>
                  <?php endforeach; ?>
                </div>
              </div>
            <?php endif; ?>
          </div>
          <?php endfor; ?>
        </div>

        <div class="card-flat px-6">
          <?php for ($i = $half; $i < count($items); $i++):
                  $item = $items[$i]; ?>
          <div class="menu-item flex-col items-start gap-1.5 py-5">
            <div class="flex items-baseline justify-between w-full gap-2">
              <div class="menu-item-name font-serif text-[1.05rem] text-text font-bold"><?=$item['name']?></div>
              <?php if (isset($item['price'])): ?>
                <div class="flex-grow border-b border-dashed border-beige/60 mx-2 self-center h-0 mb-1"></div>
                <div class="menu-item-price font-bold text-amber font-sans"><?=$item['price']?></div>
              <?php endif; ?>
            </div>
            
            <?php if (isset($item['desc'])): ?>
              <div class="menu-item-desc w-full mb-1"><?=$item['desc']?></div>
            <?php endif; ?>

            <?php if (isset($item['options'])): ?>
              <!-- Multi options badges -->
              <div class="flex flex-wrap gap-2 mt-1">
                <?php foreach ($item['options'] as $optLabel => $optPrice): ?>
                  <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-sans font-bold bg-cream-dark text-brown border border-beige/40">
                    <span class="opacity-60 font-semibold"><?=$optLabel?>:</span>
                    <span><?=$optPrice?></span>
                  </span>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>

            <?php if (isset($item['addons'])): ?>
              <!-- Addons nested list -->
              <div class="w-full mt-2.5 p-3 rounded-xl border border-dashed border-beige/40 bg-cream/10">
                <span class="text-[10px] font-sans font-bold text-text-light tracking-wide uppercase">Custom Add-on Options:</span>
                <div class="flex flex-wrap gap-2 mt-1.5">
                  <?php foreach ($item['addons'] as $addonName => $addonPrice): ?>
                    <span class="text-xs font-sans text-text-light font-medium bg-white/70 px-2 py-0.5 rounded border border-beige/20">+ <?=$addonName?> (<?=$addonPrice?>)</span>
                  <?php endforeach; ?>
                </div>
              </div>
            <?php endif; ?>
          </div>
          <?php endfor; ?>
        </div>
      </div>

      <!-- Render Category Level Add-ons -->
      <?php if (isset($section['addons'])): ?>
        <div class="mt-8 p-6 rounded-3xl border border-dashed border-amber/30 bg-cream/20 reveal">
          <h4 class="font-serif text-sm font-bold text-brown-dark mb-3 flex items-center gap-1.5">
            <i data-lucide="plus-circle" class="w-4 h-4 text-amber"></i>
            Customize Your <?=$section['label']?> Order
          </h4>
          <div class="flex flex-wrap gap-2.5">
            <?php foreach ($section['addons'] as $addName => $addPrice): ?>
              <span class="inline-flex items-center gap-1 px-3 py-1 rounded-xl text-xs font-sans font-bold bg-white text-text border border-beige/40 shadow-sm">
                <span class="font-medium text-text-light"><?=$addName?></span>
                <span class="text-amber">+<?=$addPrice?></span>
              </span>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>
    <?php endif; ?>

  </div>
  <?php endforeach; ?>

  </div>
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

<!-- INTERACTIVE CALCULATION SCRIPT -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('ramyeon-form');
  if (!form) return;

  const totalEl = document.getElementById('ramyeon-total');
  const baseEl = document.getElementById('receipt-base');
  const spiceEl = document.getElementById('receipt-spice');
  const brothEl = document.getElementById('receipt-broth');
  const toppingsEl = document.getElementById('receipt-toppings');
  const copyBtn = document.getElementById('copy-recipe-btn');

  function updateEstimator() {
    let total = 0;
    
    // Base Selection
    const baseSelected = form.querySelector('input[name="ramyeon-base"]:checked');
    let basePrice = 0;
    let baseName = '';
    if (baseSelected) {
      basePrice = parseInt(baseSelected.dataset.price) || 0;
      baseName = baseSelected.value;
      baseEl.textContent = baseName;
      
      form.querySelectorAll('input[name="ramyeon-base"]').forEach(input => {
        input.closest('label').classList.remove('active', 'border-amber');
        input.closest('label').classList.add('border-beige/40');
      });
      baseSelected.closest('label').classList.add('active', 'border-amber');
      baseSelected.closest('label').classList.remove('border-beige/40');
    }
    total += basePrice;

    // Spice Selection
    const spiceSelected = form.querySelector('input[name="ramyeon-spice"]:checked');
    let spicePrice = 0;
    let spiceName = '';
    if (spiceSelected) {
      spicePrice = parseInt(spiceSelected.dataset.price) || 0;
      spiceName = spiceSelected.value;
      spiceEl.textContent = spiceName + (spicePrice > 0 ? ` (+Rs. ${spicePrice})` : '');
      
      form.querySelectorAll('input[name="ramyeon-spice"]').forEach(input => {
        input.closest('label').classList.remove('active', 'border-amber');
        input.closest('label').classList.add('border-beige/40');
      });
      spiceSelected.closest('label').classList.add('active', 'border-amber');
      spiceSelected.closest('label').classList.remove('border-beige/40');
    }
    total += spicePrice;

    // Broth Selection
    const brothSelected = form.querySelector('input[name="ramyeon-broth"]:checked');
    let brothName = '';
    if (brothSelected) {
      brothName = brothSelected.value;
      brothEl.textContent = brothName;
      
      form.querySelectorAll('input[name="ramyeon-broth"]').forEach(input => {
        input.closest('label').classList.remove('active', 'border-amber');
        input.closest('label').classList.add('border-beige/40');
      });
      brothSelected.closest('label').classList.add('active', 'border-amber');
      brothSelected.closest('label').classList.remove('border-beige/40');
    }

    // Addons Selection
    const addonsSelected = form.querySelectorAll('input[name="ramyeon-addons[]"]:checked');
    const selectedAddonNames = [];
    
    toppingsEl.innerHTML = '';
    
    form.querySelectorAll('input[name="ramyeon-addons[]"]').forEach(input => {
      if (input.checked) {
        const addonPrice = parseInt(input.dataset.price) || 0;
        total += addonPrice;
        selectedAddonNames.push(input.value);
        input.closest('label').classList.add('active', 'border-amber');
        input.closest('label').classList.remove('border-beige/40');
        
        const pill = document.createElement('span');
        pill.className = 'px-2 py-0.5 bg-amber/10 border border-amber/20 text-brown rounded text-[10px] font-bold';
        pill.textContent = `${input.value} (+Rs. ${addonPrice})`;
        toppingsEl.appendChild(pill);
      } else {
        input.closest('label').classList.remove('active', 'border-amber');
        input.closest('label').classList.add('border-beige/40');
      }
    });

    if (selectedAddonNames.length === 0) {
      toppingsEl.innerHTML = '<span class="opacity-60 italic text-xs">No toppings selected</span>';
    }

    totalEl.textContent = total.toLocaleString();

    // Dynamically update the WhatsApp Order Button text & link
    const whatsappBtn = document.getElementById('whatsapp-order-btn');
    if (whatsappBtn) {
      const formattedTotal = total.toLocaleString();
      const toppingsText = selectedAddonNames.length > 0 ? selectedAddonNames.join(', ') : 'None';
      
      let message = `Hello Neko and Kopi Team! I would love to order a custom Ramyeon bowl. Here are my selected choices:\n\n`;
      message += `* Base: ${baseName}\n`;
      message += `* Spice Level: ${spiceName}\n`;
      message += `* Broth Volume: ${brothName}\n`;
      message += `* Add-ons: ${toppingsText}\n\n`;
      message += `Estimated Total: Rs. ${formattedTotal}\n\n`;
      message += `Please prepare this warm and cozy bowl for me. Thank you!`;

      whatsappBtn.href = `https://wa.me/94724783406?text=${encodeURIComponent(message)}`;
    }
  }

  form.addEventListener('change', updateEstimator);
  updateEstimator();

  copyBtn?.addEventListener('click', () => {
    const baseSelected = form.querySelector('input[name="ramyeon-base"]:checked')?.value || 'Jjajangmyeong';
    const spiceSelected = form.querySelector('input[name="ramyeon-spice"]:checked')?.value || 'Normal';
    const brothSelected = form.querySelector('input[name="ramyeon-broth"]:checked')?.value || 'NO Broth';
    const addons = Array.from(form.querySelectorAll('input[name="ramyeon-addons[]"]:checked')).map(el => el.value);
    
    let recipe = `My Neko & Kopi Custom Ramyeon Recipe:\n`;
    recipe += `- Base: ${baseSelected}\n`;
    recipe += `- Spice Level: ${spiceSelected}\n`;
    recipe += `- Broth: ${brothSelected}\n`;
    if (addons.length > 0) {
      recipe += `- Toppings: ${addons.join(', ')}\n`;
    } else {
      recipe += `- Toppings: None\n`;
    }
    recipe += `Estimated Price: Rs. ${totalEl.textContent}\n`;
    recipe += `Bring this recipe to Neko & Kopi to order!`;

    navigator.clipboard.writeText(recipe).then(() => {
      const originalText = copyBtn.innerHTML;
      copyBtn.innerHTML = '<i data-lucide="check" class="w-4 h-4"></i> Recipe Copied!';
      if (typeof lucide !== 'undefined') lucide.createIcons();
      setTimeout(() => {
        copyBtn.innerHTML = originalText;
        if (typeof lucide !== 'undefined') lucide.createIcons();
      }, 2500);
    }).catch(err => {
      alert("Failed to copy recipe. Please write it down!");
    });
  });

});
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
