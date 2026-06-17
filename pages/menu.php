<?php
$page      = 'menu';
$pageTitle = 'Menu — Neko & Kopi Catfé Cat Café Colombo';
$pageDesc  = 'Explore the Neko & Kopi Catfé menu — artisan coffees, teas, signature drinks, snacks and desserts.';
require_once __DIR__ . '/../includes/base.php';
require_once __DIR__ . '/../includes/header.php';

$menuData = [
  'snacks' => [
    'label' => 'Snacks', 'icon' => 'utensils',
    'desc' => 'Street bites, crispy finger foods, and Japanese-style snacks to accompany your drinks.',
    'items' => [
      ['name' => 'Korean Fried Chicken', 'desc' => 'Crispy, double-fried chicken glazed with sweet, savory, and spicy Korean sauces.', 'options' => ['6 PCS' => 'Rs. 1,500', '12 PCS' => 'Rs. 2,540']],
      ['name' => 'Mini Tteokbokki', 'desc' => 'Chewy Korean rice cakes simmered in a sweet and spicy gochujang chili sauce.', 'options' => ['With Gochujang' => 'Rs. 1,890', 'With Half Boiled Egg' => 'Rs. 1,990']],
      ['name' => 'Spicy Fried Tofu', 'desc' => 'Golden fried tofu cubes tossed in a spicy chili seasoning and aromatic spices.', 'options' => ['6 PCS' => 'Rs. 1,200', '12 PCS' => 'Rs. 2,200']],
      ['name' => 'Battered Chili Prawns', 'desc' => 'Plump, crispy battered prawns tossed in a sweet-spicy chili glaze.', 'options' => ['6 PCS' => 'Rs. 1,890', '12 PCS' => 'Rs. 3,450']],
      ['name' => 'Chicken Katsu Bucket', 'desc' => 'Crispy, panko-breaded tender chicken strips served in a shareable bucket.', 'options' => ['3 PCS' => 'Rs. 1,720', '6 PCS' => 'Rs. 2,300', '12 PCS' => 'Rs. 3,640']],
      ['name' => 'French Fries', 'desc' => 'Perfectly golden potato fries, available plain or loaded with chicken katsu toppings.', 'options' => ['Just Fries' => 'Rs. 800', 'Loaded Katsu Fries' => 'Rs. 2,100']],
      ['name' => 'Dumplings (Steamed/Fried)', 'desc' => 'Juicy dumplings filled with fresh ingredients, served steamed or crispy fried.', 'options' => ['Vegetables (6 PCS)' => 'Rs. 1,790', 'Chicken (6 PCS)' => 'Rs. 2,600', 'Seafood (6 PCS)' => 'Rs. 3,200']],
      ['name' => 'Mini Onigiri', 'desc' => 'Traditional Japanese hand-pressed rice triangles wrapped in crisp nori seaweed.', 'options' => ['Plain Onigiri' => 'Rs. 550', 'Tuna and Mayo' => 'Rs. 1,380', 'Spicy Meaty' => 'Rs. 2,100']],
      ['name' => 'Steamed Rice & Salad', 'desc' => 'Perfect side bowls to complete your meal.', 'options' => ['Plain sushi rice' => 'Rs. 550', 'Garden Salad Bowl' => 'Rs. 800', 'Japanese Curry Cup' => 'Rs. 610']],
      ['name' => 'Mini Corn Dog', 'desc' => 'Popular street style crispy corn dogs made with sweet batter.', 'options' => ['Classic Corn Dog' => 'Rs. 900']],
    ],
    'addons' => ['Mozzarella' => 'Rs. 800', 'Buldak Sauce' => 'Rs. 500', 'Chicken' => 'Rs. 500', 'Seafood' => 'Rs. 700', 'Mayonnaise' => 'Rs. 300', 'Kochchi' => 'Rs. 310'],
  ],
  'stew_sando' => [
    'label' => 'Stew & Sando', 'icon' => 'flame',
    'desc' => 'Cozy Korean tofu stews and premium Japanese-style sandwiches.',
    'items' => [
      ['name' => 'Korean Soft Tofu Stew', 'desc' => 'A fiery, bubbling red stew of silky tofu and vegetables.', 'options' => ['Tofu/Egg' => 'Rs. 1,350', 'Chicken' => 'Rs. 1,860', 'Seafood' => 'Rs. 2,100', 'All-in-one' => 'Rs. 3,100'], 'addons' => ['Sushi Rice' => 'Rs. 550', 'Kimchi' => 'Rs. 400']],
      ['name' => 'Premium Sandos', 'desc' => 'Fluffy white sandwich bread filled with satisfying fillings.', 'options' => ['Mayo and Egg' => 'Rs. 1,440', 'Fried Double Katsu' => 'Rs. 2,250', 'Cheesy Coleslaw' => 'Rs. 1,100', 'Tuna and Corn' => 'Rs. 2,520'], 'addons' => ['Mozzarella' => 'Rs. 800', 'Kochchi' => 'Rs. 300', 'Buldak Sauce' => 'Rs. 500', 'Mayonnaise' => 'Rs. 310']],
    ],
  ],
  'curry' => [
    'label' => 'Japanese Curry', 'icon' => 'soup',
    'desc' => 'Rich, thick, and aromatic golden Japanese curry served over steaming rice.',
    'items' => [
      ['name' => 'Japanese Curry Rice', 'desc' => 'Slow-simmered curry sauce served over premium rice.', 'options' => ['Vegetable' => 'Rs. 1,390', 'Egg' => 'Rs. 1,670', 'Fried Katsu' => 'Rs. 1,850', 'Boiled Chicken' => 'Rs. 2,800', 'Seafood' => 'Rs. 3,150']],
      ['name' => 'Kids Bento Box', 'desc' => 'French fries, boiled egg, veggies, sweet corn, chicken nuggets, bear-shaped rice, and strawberries with Nutella.', 'price' => 'Rs. 2,800'],
    ],
  ],
  'ramyeon' => [
    'label' => 'Custom Ramyeon', 'icon' => 'chef-hat',
    'desc' => 'Build your own signature bowl of Korean ramyeon with customizable bases, spices, broth, and toppings.',
    'custom' => true,
    'sections' => [
      'A - Select the Base' => ['Jjajangmyeong' => 'Rs. 1,000', 'Buldak Black' => 'Rs. 1,200'],
      'B - Select the Spice Level' => ['Normal' => 'Free', 'Mild Chilli' => '+Rs. 200', 'Spicy Kochchi' => '+Rs. 300', 'Ultra Shinigami' => '+Rs. 500'],
      'C - Select the Broth Volume' => ['NO Broth' => 'Free', 'MEDIUM Broth' => 'Free', 'FULL Broth' => 'Free'],
      'D - Select ANY Add-On\'s' => ['Sweet Corn' => 'Rs. 300', 'Leeks' => 'Rs. 180', 'Cabbage' => 'Rs. 180', 'Kimchi' => 'Rs. 420', 'Mini Tteokbokki' => 'Rs. 650', 'Tofu (30g)' => 'Rs. 500', 'Boiled Egg (1 Egg)' => 'Rs. 200', 'Chicken Katsu' => 'Rs. 650', 'Cuttlefish (30g)' => 'Rs. 580', 'Fish Goujons (1)' => 'Rs. 550', 'Fried Prawns (3 PCS)' => 'Rs. 820', 'Chicken Breast Slice (2 PCS)' => 'Rs. 970', 'Tuna (60g)' => 'Rs. 380', 'Mayo (1 tbsp)' => 'Rs. 400', 'Soya Sauce' => 'Rs. 200', 'Gochujang Paste (1 tbsp)' => 'Rs. 410'],
    ],
  ],
  'beverages' => [
    'label' => 'Beverages', 'icon' => 'coffee',
    'desc' => 'Teas, fresh juices, creamy milkshakes, and premium espresso drinks.',
    'subsections' => [
      'Tea & Other' => [
        ['name' => 'Plain Tea', 'price' => 'Rs. 200'], ['name' => 'Ginger Tea', 'price' => 'Rs. 220'], ['name' => 'Milk Tea', 'price' => 'Rs. 280'], ['name' => 'Tinkiri Tea', 'price' => 'Rs. 300'], ['name' => 'Green Tea', 'price' => 'Rs. 200'], ['name' => 'Hot Chocolate', 'price' => 'Rs. 450'], ['name' => 'Hot Milo', 'price' => 'Rs. 480'],
      ],
      'Creamy Shakes' => [
        ['name' => 'Chocolate Shake', 'price' => 'Rs. 820'], ['name' => 'Strawberry Shake', 'price' => 'Rs. 800'], ['name' => 'Vanilla Shake', 'price' => 'Rs. 750'],
      ],
      'Frappes' => [
        ['name' => 'Milo Frappe', 'price' => 'Rs. 920'], ['name' => 'Nutella Frappe', 'price' => 'Rs. 1,100'],
      ],
      'Weekly Specials' => [
        ['name' => 'Iced Tea', 'price' => 'Rs. 650'], ['name' => 'Mojito', 'price' => 'Rs. 550'],
      ],
      'Neko Specials' => [
        ['name' => 'Dalgona Iced Kopi', 'price' => 'Rs. 650', 'desc' => 'Frothy whipped coffee over sweet chilled milk.'],
        ['name' => 'Vietnamese Iced Kopi', 'price' => 'Rs. 760', 'desc' => 'Strong dark coffee dripped over creamy condensed milk.'],
        ['name' => 'Iced Coffee Float', 'price' => 'Rs. 820', 'desc' => 'Chilled sweet coffee topped with vanilla ice cream.'],
        ['name' => 'Earth Matcha Latte (Hot/Cold)', 'price' => 'Rs. 1,280', 'desc' => 'Ceremonial Japanese matcha layered with thick milk.'],
        ['name' => 'Milo Mocha (Hot/Cold)', 'price' => 'Rs. 1,200', 'desc' => 'Milo chocolate blended with espresso and silky steamed milk.'],
        ['name' => 'Cafe Bombom (Hot/Cold)', 'price' => 'Rs. 880', 'desc' => 'Intense espresso layered over sweet condensed milk.'],
        ['name' => 'Egg Kopi (Hot)', 'price' => 'Rs. 850', 'desc' => 'Creamy whipped egg yolk over rich coffee.'],
      ],
      'Fresh Juices' => [
        ['name' => 'Lime', 'price' => 'Rs. 650'], ['name' => 'Watermelon', 'price' => 'Rs. 600'], ['name' => 'Passion Fruit', 'price' => 'Rs. 620'],
      ],
      'Detox' => [
        ['name' => 'Mint & Cucumber', 'price' => 'Rs. 680'], ['name' => 'Carrot & Ginger', 'price' => 'Rs. 720'],
      ],
      'Soda & Floats' => [
        ['name' => 'Cola', 'price' => 'Rs. 200'], ['name' => 'Sprite', 'price' => 'Rs. 200'], ['name' => 'Coke Float', 'price' => 'Rs. 340'], ['name' => 'Lime Sprite', 'price' => 'Rs. 400'],
      ],
      'Espresso & Coffee' => [
        ['name' => 'Single Espresso', 'hot' => 'Rs. 400', 'cold' => 'Rs. 450'], ['name' => 'Double Espresso', 'hot' => 'Rs. 550', 'cold' => 'Rs. 600'], ['name' => 'Americano', 'hot' => 'Rs. 590', 'cold' => 'Rs. 690'], ['name' => 'Mocha', 'hot' => 'Rs. 750', 'cold' => 'Rs. 850'], ['name' => 'Cappuccino', 'hot' => 'Rs. 730', 'cold' => 'Rs. 830'], ['name' => 'Latte', 'hot' => 'Rs. 800', 'cold' => 'Rs. 900'], ['name' => 'Bombom', 'hot' => 'Rs. 880', 'cold' => 'Rs. 980'], ['name' => 'Matcha Latte', 'hot' => 'Rs. 1,060', 'cold' => 'Rs. 1,160'], ['name' => 'Affogato', 'hot' => '—', 'cold' => 'Rs. 890'],
      ],
    ],
  ],
  'desserts' => [
    'label' => 'Desserts', 'icon' => 'cake',
    'desc' => 'Japanese-inspired sweets to complete your café experience.',
    'items' => [
      ['name' => 'Cookie Sando', 'desc' => 'Creamy ice cream sandwiched between two giant chewy cookies.', 'price' => 'Rs. 1,000'],
      ['name' => 'Seasonal Mochi with Ice Cream (2 PCS)', 'desc' => 'Soft glutinous rice mochi filled with premium ice cream.', 'price' => 'Rs. 1,620'],
      ['name' => 'Nutella Mini Donut Platter (8 PCS)', 'desc' => 'Warm fluffy donuts drizzled with rich Nutella spread.', 'price' => 'Rs. 1,680'],
      ['name' => 'Chocolate Biscuit Pudding', 'desc' => 'Traditional Sri Lankan layered chocolate dessert.', 'price' => 'Rs. 880'],
      ['name' => 'Ichigo Sando', 'desc' => 'Japanese fruit sandwich with fresh strawberries and whipped cream.', 'price' => 'Rs. 1,350'],
    ],
  ],
];
?>

<!-- PAGE HEADER -->
<section class="pt-24 pb-12 relative overflow-hidden" id="menu-header">
  <div class="glow-orb glow-orb-brown w-[600px] h-[600px] top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-20"></div>
  <div class="max-w-3xl mx-auto px-6 text-center relative z-10">
    <div class="reveal">
      <span class="badge mb-5 inline-flex bg-white shadow-apple-subtle text-theme-brown border border-black/5">
        <i data-lucide="leaf" class="w-3 h-3"></i>
        Fresh Daily
      </span>
    </div>
    <h1 class="reveal reveal-delay-1 section-heading mb-4">Our Menu</h1>
    <p class="reveal reveal-delay-2 section-subheading mx-auto mb-8">
      Every item is crafted with premium ingredients and served with love.
    </p>
    <a href="https://www.ubereats.com" id="menu-header-uber" target="_blank" rel="noopener"
       class="reveal reveal-delay-3 btn-outline bg-white inline-flex font-bold">
      <i data-lucide="bike" class="w-4 h-4 text-theme-brown"></i>
      Order on Uber Eats
    </a>
  </div>
</section>

<!-- STICKY SEGMENTED CONTROL -->
<div class="sticky top-[72px] z-40 tab-scroll-container py-3" style="background:rgba(245,245,247,0.85);backdrop-filter:blur(24px);" id="menu-tabs-bar">
  <div class="max-w-6xl mx-auto px-6 flex justify-center">
    <div class="segmented-control flex-nowrap overflow-x-auto scrollbar-hide" style="background:rgba(0,0,0,0.06); padding:0.25rem;">
      <button id="tab-all" class="cat-tab active text-sm px-4 py-2" data-category="all">All</button>
      <?php foreach ($menuData as $key => $section): ?>
      <button id="tab-<?=$key?>" class="cat-tab text-sm px-4 py-2" data-category="<?=$key?>"><?=$section['label']?></button>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- MENU CONTENT -->
<section id="menu-content" class="py-12">
  <div class="max-w-[1200px] mx-auto px-6">

  <?php foreach ($menuData as $key => $section): ?>
  <div class="menu-section mb-24" data-category="<?=$key?>" id="section-<?=$key?>">

    <!-- Section Header -->
    <div class="mb-10 reveal">
      <div class="flex flex-col md:flex-row md:items-end gap-4 justify-between">
        <div class="flex items-center gap-4">
          <div class="icon-box icon-box-lg shadow-apple-subtle bg-white text-theme-brown border border-black/5">
            <i data-lucide="<?=$section['icon']?>" class="w-6 h-6"></i>
          </div>
          <div>
            <h2 class="text-3xl md:text-4xl font-bold text-black tracking-tight mb-1"><?=$section['label']?></h2>
            <div class="divider mt-1.5 hidden md:block"></div>
          </div>
        </div>
        <?php if (!empty($section['desc'])): ?>
          <p class="text-sm text-gray-muted max-w-sm leading-relaxed font-medium"><?=$section['desc']?></p>
        <?php endif; ?>
      </div>
    </div>

    <!-- CUSTOM RAMYEON BUILDER -->
    <?php if (isset($section['custom']) && $section['custom']): ?>
      <div class="reveal">
        <form id="ramyeon-form" class="grid grid-cols-1 xl:grid-cols-12 gap-8 items-start">
          <div class="xl:col-span-8 flex flex-col gap-6">

            <!-- Step A: Base -->
            <div class="bento-card p-6 md:p-8">
              <h3 class="text-lg font-bold text-black mb-6 tracking-tight flex items-center justify-between border-b border-black/5 pb-4">
                <span>A — Select the Base</span>
                <span class="badge bg-theme-brown/10 text-theme-brown">Step 1</span>
              </h3>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <label class="relative flex items-center justify-between p-5 rounded-2xl border cursor-pointer transition-all duration-200 group ramyeon-option" style="border-color:rgba(0,0,0,0.08);">
                  <input type="radio" name="ramyeon-base" value="Jjajangmyeong" data-price="1000" class="sr-only" checked>
                  <div class="flex flex-col gap-1">
                    <span class="text-base font-bold text-black">Jjajangmyeong</span>
                    <span class="text-xs text-gray-muted font-medium">Savory black bean sauce</span>
                  </div>
                  <span class="text-sm font-black text-theme-brown bg-theme-brown/10 px-3 py-1 rounded-full">Rs. 1,000</span>
                </label>
                <label class="relative flex items-center justify-between p-5 rounded-2xl border cursor-pointer transition-all duration-200 group ramyeon-option" style="border-color:rgba(0,0,0,0.08);">
                  <input type="radio" name="ramyeon-base" value="Buldak Black" data-price="1200" class="sr-only">
                  <div class="flex flex-col gap-1">
                    <span class="text-base font-bold text-black">Buldak Black</span>
                    <span class="text-xs text-gray-muted font-medium">Spicy stir-fried ramyeon</span>
                  </div>
                  <span class="text-sm font-black text-theme-brown bg-theme-brown/10 px-3 py-1 rounded-full">Rs. 1,200</span>
                </label>
              </div>
            </div>

            <!-- Step B: Spice -->
            <div class="bento-card p-6 md:p-8">
              <h3 class="text-lg font-bold text-black mb-6 tracking-tight flex items-center justify-between border-b border-black/5 pb-4">
                <span>B — Spice Level</span>
                <span class="badge bg-theme-brown/10 text-theme-brown">Step 2</span>
              </h3>
              <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                <?php $spices = [['Normal','0','Free'],['Mild Chilli','200','+Rs. 200'],['Spicy Kochchi','300','+Rs. 300'],['Ultra Shinigami','500','+Rs. 500']];
                foreach ($spices as $si => $sp): ?>
                <label class="relative flex flex-col items-center justify-center p-4 rounded-2xl border text-center cursor-pointer transition-all duration-200 group ramyeon-option" style="border-color:rgba(0,0,0,0.08);">
                  <input type="radio" name="ramyeon-spice" value="<?=$sp[0]?>" data-price="<?=$sp[1]?>" class="sr-only" <?=$si===0?'checked':''?>>
                  <span class="text-sm font-bold <?=$sp[0]==='Ultra Shinigami'?'text-red-500':'text-black'?> mb-1"><?=$sp[0]?></span>
                  <span class="text-[11px] font-black text-theme-brown"><?=$sp[2]?></span>
                </label>
                <?php endforeach; ?>
              </div>
            </div>

            <!-- Step C: Broth -->
            <div class="bento-card p-6 md:p-8">
              <h3 class="text-lg font-bold text-black mb-6 tracking-tight flex items-center justify-between border-b border-black/5 pb-4">
                <span>C — Broth Volume</span>
                <span class="badge bg-theme-brown/10 text-theme-brown">Step 3</span>
              </h3>
              <div class="grid grid-cols-3 gap-3">
                <?php $broths = ['NO Broth','MEDIUM Broth','FULL Broth'];
                foreach ($broths as $bi => $b): ?>
                <label class="relative flex flex-col items-center justify-center p-4 rounded-2xl border text-center cursor-pointer transition-all duration-200 group ramyeon-option" style="border-color:rgba(0,0,0,0.08);">
                  <input type="radio" name="ramyeon-broth" value="<?=$b?>" data-price="0" class="sr-only" <?=$bi===0?'checked':''?>>
                  <span class="text-sm font-bold text-black"><?=$b?></span>
                </label>
                <?php endforeach; ?>
              </div>
            </div>

            <!-- Step D: Add-ons -->
            <div class="bento-card p-6 md:p-8">
              <h3 class="text-lg font-bold text-black mb-6 tracking-tight flex items-center justify-between border-b border-black/5 pb-4">
                <span>D — Add-Ons</span>
                <span class="badge bg-theme-brown/10 text-theme-brown">Step 4</span>
              </h3>
              <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                <?php foreach ($section['sections']['D - Select ANY Add-On\'s'] as $name => $price):
                  $numericPrice = intval(str_replace(['Rs. ', '+', ','], '', $price));
                ?>
                  <label class="relative p-4 rounded-2xl border cursor-pointer transition-all duration-200 flex flex-col justify-between gap-2 group ramyeon-option" style="border-color:rgba(0,0,0,0.08);">
                    <input type="checkbox" name="ramyeon-addons[]" value="<?=$name?>" data-price="<?=$numericPrice?>" class="sr-only">
                    <span class="text-sm font-bold text-black leading-tight"><?=$name?></span>
                    <span class="text-[11px] font-black text-theme-brown">+Rs. <?=number_format($numericPrice)?></span>
                  </label>
                <?php endforeach; ?>
              </div>
            </div>

          </div>

          <!-- Price Estimator -->
          <div class="xl:col-span-4 flex flex-col gap-6">
            <div class="sticky top-[140px] bento-card p-6 md:p-8 border-theme-brown/20 shadow-theme-glow">
              <div class="flex items-center gap-3 mb-8">
                <div class="icon-box bg-theme-brown text-white">
                  <i data-lucide="receipt" class="w-5 h-5"></i>
                </div>
                <div>
                  <h4 class="text-lg font-bold text-black tracking-tight">Your Custom Bowl</h4>
                  <p class="text-xs text-gray-muted font-medium">Real-time Estimation</p>
                </div>
              </div>

              <div class="flex flex-col gap-4 text-sm border-b border-black/5 pb-8 mb-8">
                <div class="flex justify-between items-center">
                  <span class="text-sm font-medium text-gray-muted">Base:</span>
                  <span id="receipt-base" class="font-bold text-black">Jjajangmyeong</span>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-sm font-medium text-gray-muted">Spice:</span>
                  <span id="receipt-spice" class="font-bold text-black">Normal</span>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-sm font-medium text-gray-muted">Broth:</span>
                  <span id="receipt-broth" class="font-bold text-black">NO Broth</span>
                </div>
                <div class="flex flex-col gap-2 mt-2">
                  <span class="text-[11px] uppercase tracking-wider font-bold text-gray-muted">Toppings:</span>
                  <div id="receipt-toppings" class="text-sm flex flex-wrap gap-1.5 mt-1">
                    <span class="opacity-50 italic text-xs">No toppings selected</span>
                  </div>
                </div>
              </div>

              <div class="flex justify-between items-center mb-8">
                <span class="text-lg font-bold text-black">Total:</span>
                <span class="text-2xl font-black text-theme-brown">Rs. <span id="ramyeon-total">1,000</span></span>
              </div>

              <div class="flex flex-col gap-3">
                <a href="https://wa.me/94724783406" id="whatsapp-order-btn" target="_blank" rel="noopener" class="w-full btn-whatsapp justify-center">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                  Order on WhatsApp
                </a>
                <button type="button" id="copy-recipe-btn" class="w-full btn-outline justify-center">
                  <i data-lucide="copy" class="w-5 h-5"></i>
                  Copy Recipe
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>

    <!-- BEVERAGES -->
    <?php elseif ($key === 'beverages'): ?>
      <div class="flex flex-col gap-16">
        <?php foreach ($section['subsections'] as $subTitle => $subItems): ?>
          <div class="reveal">
            <h3 class="text-xl font-bold text-black mb-6 tracking-tight flex items-center gap-3">
              <span class="w-2 h-2 rounded-full bg-theme-brown"></span>
              <?=$subTitle?>
            </h3>

            <?php if ($subTitle === 'Espresso & Coffee'): ?>
              <div class="bento-card p-6 overflow-x-auto">
                <table class="w-full text-left text-sm whitespace-nowrap min-w-[400px]">
                  <thead>
                    <tr class="border-b border-black/5">
                      <th class="py-4 px-4 font-bold text-black">Drink</th>
                      <th class="py-4 px-4 text-center w-32">
                        <span class="inline-flex items-center gap-1.5 bg-red-50 text-red-600 px-3 py-1 rounded-full text-xs font-bold">Hot</span>
                      </th>
                      <th class="py-4 px-4 text-center w-32">
                        <span class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-600 px-3 py-1 rounded-full text-xs font-bold">Cold</span>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($subItems as $item): ?>
                      <tr class="border-b border-black/5 last:border-0">
                        <td class="py-4 px-4 font-bold text-black"><?=$item['name']?></td>
                        <td class="py-4 px-4 text-center text-gray-muted font-medium"><?=$item['hot'] === '—' ? '—' : $item['hot']?></td>
                        <td class="py-4 px-4 text-center font-bold text-theme-brown"><?=$item['cold']?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            <?php else: ?>
              <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-0 bento-card px-8">
                <div class="py-2">
                  <?php $half = ceil(count($subItems)/2);
                        for ($i = 0; $i < $half; $i++): $item = $subItems[$i]; ?>
                    <div class="menu-item flex-col items-start gap-1 py-5">
                      <div class="flex items-baseline justify-between w-full gap-4">
                        <div class="menu-item-name"><?=$item['name']?></div>
                        <div class="flex-grow border-b border-dashed border-black/10 mx-2 self-center h-0 mb-1"></div>
                        <div class="menu-item-price"><?=$item['price']?></div>
                      </div>
                      <?php if (isset($item['desc'])): ?>
                        <div class="menu-item-desc w-full"><?=$item['desc']?></div>
                      <?php endif; ?>
                    </div>
                  <?php endfor; ?>
                </div>
                <div class="py-2 lg:border-l border-black/5 lg:pl-12">
                  <?php for ($i = $half; $i < count($subItems); $i++): $item = $subItems[$i]; ?>
                    <div class="menu-item flex-col items-start gap-1 py-5">
                      <div class="flex items-baseline justify-between w-full gap-4">
                        <div class="menu-item-name"><?=$item['name']?></div>
                        <div class="flex-grow border-b border-dashed border-black/10 mx-2 self-center h-0 mb-1"></div>
                        <div class="menu-item-price"><?=$item['price']?></div>
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

    <!-- GENERAL ITEMS -->
    <?php else: ?>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-0 bento-card px-8 reveal">
        <div class="py-2">
          <?php $items = $section['items']; $half = ceil(count($items)/2);
                for ($i = 0; $i < $half; $i++): $item = $items[$i]; ?>
          <div class="menu-item flex-col items-start gap-2 py-6">
            <div class="flex items-baseline justify-between w-full gap-4">
              <div class="menu-item-name"><?=$item['name']?></div>
              <?php if (isset($item['price'])): ?>
                <div class="flex-grow border-b border-dashed border-black/10 mx-2 self-center h-0 mb-1"></div>
                <div class="menu-item-price"><?=$item['price']?></div>
              <?php endif; ?>
            </div>
            <?php if (isset($item['desc'])): ?>
              <div class="menu-item-desc w-full mb-1"><?=$item['desc']?></div>
            <?php endif; ?>
            <?php if (isset($item['options'])): ?>
              <div class="flex flex-wrap gap-2 mt-2">
                <?php foreach ($item['options'] as $optLabel => $optPrice): ?>
                  <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-gray-50 text-black border border-black/5">
                    <span class="text-gray-muted"><?=$optLabel?>:</span> <?=$optPrice?>
                  </span>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
            <?php if (isset($item['addons'])): ?>
              <div class="w-full mt-3 p-4 rounded-2xl bg-gray-50 border border-black/5">
                <span class="text-[10px] font-bold uppercase tracking-wider text-gray-muted">Add-ons:</span>
                <div class="flex flex-wrap gap-2 mt-2">
                  <?php foreach ($item['addons'] as $addonName => $addonPrice): ?>
                    <span class="text-xs font-bold px-2.5 py-1 rounded-lg bg-white border border-black/5 text-gray-text">+ <?=$addonName?> <span class="text-theme-brown">(<?=$addonPrice?>)</span></span>
                  <?php endforeach; ?>
                </div>
              </div>
            <?php endif; ?>
          </div>
          <?php endfor; ?>
        </div>

        <div class="py-2 lg:border-l border-black/5 lg:pl-12">
          <?php for ($i = $half; $i < count($items); $i++): $item = $items[$i]; ?>
          <div class="menu-item flex-col items-start gap-2 py-6">
            <div class="flex items-baseline justify-between w-full gap-4">
              <div class="menu-item-name"><?=$item['name']?></div>
              <?php if (isset($item['price'])): ?>
                <div class="flex-grow border-b border-dashed border-black/10 mx-2 self-center h-0 mb-1"></div>
                <div class="menu-item-price"><?=$item['price']?></div>
              <?php endif; ?>
            </div>
            <?php if (isset($item['desc'])): ?>
              <div class="menu-item-desc w-full mb-1"><?=$item['desc']?></div>
            <?php endif; ?>
            <?php if (isset($item['options'])): ?>
              <div class="flex flex-wrap gap-2 mt-2">
                <?php foreach ($item['options'] as $optLabel => $optPrice): ?>
                  <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-gray-50 text-black border border-black/5">
                    <span class="text-gray-muted"><?=$optLabel?>:</span> <?=$optPrice?>
                  </span>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
            <?php if (isset($item['addons'])): ?>
              <div class="w-full mt-3 p-4 rounded-2xl bg-gray-50 border border-black/5">
                <span class="text-[10px] font-bold uppercase tracking-wider text-gray-muted">Add-ons:</span>
                <div class="flex flex-wrap gap-2 mt-2">
                  <?php foreach ($item['addons'] as $addonName => $addonPrice): ?>
                    <span class="text-xs font-bold px-2.5 py-1 rounded-lg bg-white border border-black/5 text-gray-text">+ <?=$addonName?> <span class="text-theme-brown">(<?=$addonPrice?>)</span></span>
                  <?php endforeach; ?>
                </div>
              </div>
            <?php endif; ?>
          </div>
          <?php endfor; ?>
        </div>
      </div>

      <?php if (isset($section['addons'])): ?>
        <div class="mt-8 p-6 rounded-2xl bg-theme-brown/5 border border-theme-brown/10 reveal">
          <h4 class="text-sm font-bold text-black mb-3 flex items-center gap-2">
            <i data-lucide="plus-circle" class="w-4 h-4 text-theme-brown"></i>
            Customize Your <?=$section['label']?>
          </h4>
          <div class="flex flex-wrap gap-3">
            <?php foreach ($section['addons'] as $addName => $addPrice): ?>
              <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-xl text-xs font-bold bg-white border border-black/5 text-gray-text shadow-sm">
                <span><?=$addName?></span>
                <span class="text-theme-brown">+<?=$addPrice?></span>
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
<section class="pb-24">
  <div class="max-w-5xl mx-auto px-6">
  <div class="bento-card overflow-hidden reveal bg-black text-white group">
    <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent pointer-events-none"></div>
    <div class="flex flex-col md:flex-row items-center gap-8 p-10 md:p-14 relative z-10">
      <div class="w-16 h-16 rounded-2xl flex items-center justify-center flex-shrink-0 bg-white/10 text-theme-brown backdrop-blur-md group-hover:scale-110 group-hover:bg-theme-brown group-hover:text-white transition-all duration-500">
        <i data-lucide="bike" class="w-8 h-8"></i>
      </div>
      <div class="flex-1 text-center md:text-left">
        <h2 class="text-2xl md:text-3xl font-bold text-white mb-2 tracking-tight">Can't make it in?</h2>
        <p class="text-sm md:text-base text-white/60 font-medium max-w-md">
          Order your favourite drinks and snacks for delivery. Same love, delivered right to your door.
        </p>
      </div>
      <a href="https://www.ubereats.com" id="uber-banner-cta" target="_blank" rel="noopener"
         class="btn-primary flex-shrink-0 px-8 py-4 text-base">
        Order Now
        <i data-lucide="arrow-right" class="w-5 h-5 ml-1"></i>
      </a>
    </div>
  </div>
  </div>
</section>

<!-- RAMYEON CALCULATOR SCRIPT -->
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

    const baseSelected = form.querySelector('input[name="ramyeon-base"]:checked');
    let basePrice = 0, baseName = '';
    if (baseSelected) {
      basePrice = parseInt(baseSelected.dataset.price) || 0;
      baseName = baseSelected.value;
      baseEl.textContent = baseName;
      form.querySelectorAll('input[name="ramyeon-base"]').forEach(input => {
        const lbl = input.closest('label');
        lbl.style.borderColor = 'rgba(0,0,0,0.08)';
        lbl.style.background = '#FFFFFF';
        lbl.style.boxShadow = 'none';
      });
      const sLbl = baseSelected.closest('label');
      sLbl.style.borderColor = '#a26840';
      sLbl.style.background = 'rgba(162, 104, 64, 0.02)';
      sLbl.style.boxShadow = '0 4px 12px rgba(162, 104, 64, 0.1)';
    }
    total += basePrice;

    const spiceSelected = form.querySelector('input[name="ramyeon-spice"]:checked');
    let spicePrice = 0, spiceName = '';
    if (spiceSelected) {
      spicePrice = parseInt(spiceSelected.dataset.price) || 0;
      spiceName = spiceSelected.value;
      spiceEl.textContent = spiceName;
      form.querySelectorAll('input[name="ramyeon-spice"]').forEach(input => {
        const lbl = input.closest('label');
        lbl.style.borderColor = 'rgba(0,0,0,0.08)';
        lbl.style.background = '#FFFFFF';
        lbl.style.boxShadow = 'none';
      });
      const sLbl = spiceSelected.closest('label');
      sLbl.style.borderColor = '#a26840';
      sLbl.style.background = 'rgba(162, 104, 64, 0.02)';
      sLbl.style.boxShadow = '0 4px 12px rgba(162, 104, 64, 0.1)';
    }
    total += spicePrice;

    const brothSelected = form.querySelector('input[name="ramyeon-broth"]:checked');
    let brothName = '';
    if (brothSelected) {
      brothName = brothSelected.value;
      brothEl.textContent = brothName;
      form.querySelectorAll('input[name="ramyeon-broth"]').forEach(input => {
        const lbl = input.closest('label');
        lbl.style.borderColor = 'rgba(0,0,0,0.08)';
        lbl.style.background = '#FFFFFF';
        lbl.style.boxShadow = 'none';
      });
      const sLbl = brothSelected.closest('label');
      sLbl.style.borderColor = '#a26840';
      sLbl.style.background = 'rgba(162, 104, 64, 0.02)';
      sLbl.style.boxShadow = '0 4px 12px rgba(162, 104, 64, 0.1)';
    }

    const selectedAddonNames = [];
    toppingsEl.innerHTML = '';
    form.querySelectorAll('input[name="ramyeon-addons[]"]').forEach(input => {
      const lbl = input.closest('label');
      if (input.checked) {
        const addonPrice = parseInt(input.dataset.price) || 0;
        total += addonPrice;
        selectedAddonNames.push(input.value);
        lbl.style.borderColor = '#a26840';
        lbl.style.background = 'rgba(162, 104, 64, 0.02)';
        lbl.style.boxShadow = '0 4px 12px rgba(162, 104, 64, 0.1)';
        const pill = document.createElement('span');
        pill.className = 'px-2.5 py-1 rounded-lg text-[10px] font-bold bg-theme-brown/10 text-theme-brown';
        pill.textContent = `${input.value} (+Rs. ${addonPrice})`;
        toppingsEl.appendChild(pill);
      } else {
        lbl.style.borderColor = 'rgba(0,0,0,0.08)';
        lbl.style.background = '#FFFFFF';
        lbl.style.boxShadow = 'none';
      }
    });

    if (selectedAddonNames.length === 0) {
      toppingsEl.innerHTML = '<span class="opacity-50 italic text-sm text-gray-muted">No toppings selected</span>';
    }

    totalEl.textContent = total.toLocaleString();

    const whatsappBtn = document.getElementById('whatsapp-order-btn');
    if (whatsappBtn) {
      const toppingsText = selectedAddonNames.length > 0 ? selectedAddonNames.join(', ') : 'None';
      let message = `Hello Neko and Kopi! I'd like to order a custom Ramyeon:\n\n`;
      message += `* Base: ${baseName}\n* Spice: ${spiceName}\n* Broth: ${brothName}\n* Add-ons: ${toppingsText}\n\n`;
      message += `Estimated Total: Rs. ${total.toLocaleString()}\n\nThank you!`;
      whatsappBtn.href = `https://wa.me/94724783406?text=${encodeURIComponent(message)}`;
    }
  }

  form.addEventListener('change', updateEstimator);
  updateEstimator();

  copyBtn?.addEventListener('click', () => {
    const base = form.querySelector('input[name="ramyeon-base"]:checked')?.value || 'Jjajangmyeong';
    const spice = form.querySelector('input[name="ramyeon-spice"]:checked')?.value || 'Normal';
    const broth = form.querySelector('input[name="ramyeon-broth"]:checked')?.value || 'NO Broth';
    const addons = Array.from(form.querySelectorAll('input[name="ramyeon-addons[]"]:checked')).map(el => el.value);

    let recipe = `My Neko & Kopi Catfé Custom Ramyeon:\n- Base: ${base}\n- Spice: ${spice}\n- Broth: ${broth}\n`;
    recipe += `- Toppings: ${addons.length > 0 ? addons.join(', ') : 'None'}\n`;
    recipe += `Estimated: Rs. ${totalEl.textContent}`;

    navigator.clipboard.writeText(recipe).then(() => {
      const orig = copyBtn.innerHTML;
      copyBtn.innerHTML = '<i data-lucide="check" class="w-5 h-5"></i> Copied!';
      if (typeof lucide !== 'undefined') lucide.createIcons();
      setTimeout(() => { copyBtn.innerHTML = orig; if (typeof lucide !== 'undefined') lucide.createIcons(); }, 2500);
    }).catch(() => alert("Failed to copy."));
  });
});
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
