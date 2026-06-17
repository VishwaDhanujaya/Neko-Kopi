<?php
$page = 'gallery';
$pageTitle = 'Gallery — Neko & Kopi Catfé Cat Café Colombo';
$pageDesc = 'Take a look inside Neko & Kopi Catfé. Browse photos of our cozy interior, delicious menu items, and adorable resident cats.';
require_once __DIR__ . '/../includes/base.php';
require_once __DIR__ . '/../includes/header.php';

$galleryItems = [
  ['src' => 'hero.webp', 'alt' => 'Neko & Kopi Catfé Interior', 'title' => 'The Main Café', 'desc' => 'Warm wooden textures and trailing plants create our peaceful sanctuary.', 'type' => 'tall'],
  ['src' => 'cats.webp', 'alt' => 'Our Resident Cats', 'title' => 'Feline Friends', 'desc' => 'One of our resident cats enjoying a quiet afternoon nap.', 'type' => 'wide'],
  ['src' => 'caramel-latte.webp', 'alt' => 'Salted Caramel Latte', 'title' => 'Caramel Latte', 'desc' => 'Sweet, buttery caramel syrup combined with rich espresso and milk.', 'type' => 'square'],
  ['src' => 'matcha-latte.webp', 'alt' => 'Ceremonial Matcha Latte', 'title' => 'Matcha Latte', 'desc' => 'Artisan ceremonial Uji matcha layered over creamy milk.', 'type' => 'square'],
  ['src' => 'ramen.webp', 'alt' => 'Steaming Hakata Ramen', 'title' => 'Hakata Ramen', 'desc' => 'Authentic, rich broth with fresh wheat noodles and seasoned egg.', 'type' => 'tall'],
  ['src' => 'katsu-curry.webp', 'alt' => 'Chicken Katsu Curry', 'title' => 'Katsu Curry', 'desc' => 'Crispy chicken katsu served with rich, aromatic Japanese curry.', 'type' => 'wide'],
  ['src' => 'latte.webp', 'alt' => 'Classic Cafe Latte', 'title' => 'Cafe Latte', 'desc' => 'Smooth double shot of espresso with silky, velvety microfoam.', 'type' => 'square'],
  ['src' => 'gyoza.webp', 'alt' => 'Crispy Chicken Gyoza', 'title' => 'Chicken Gyoza', 'desc' => 'Pan-fried Japanese dumplings with a savory chicken and veggie filling.', 'type' => 'square'],
];
?>

<!-- PAGE HEADER -->
<section class="pt-24 pb-12 relative overflow-hidden" id="gallery-header">
  <div class="glow-orb bg-theme-brown w-[500px] h-[500px] top-0 right-0 translate-x-1/3 -translate-y-1/3 opacity-20"></div>
  <div class="max-w-3xl mx-auto px-6 text-center relative z-10">
    <div class="reveal">
      <span class="badge mb-5 inline-flex bg-white shadow-apple-subtle text-theme-brown border border-black/5">
        <i data-lucide="image" class="w-3 h-3"></i>
        Visual Tour
      </span>
    </div>
    <h1 class="reveal reveal-delay-1 section-heading mb-4">Our Gallery</h1>
    <p class="reveal reveal-delay-2 section-subheading mx-auto">
      Glimpses of everyday magic at Neko & Kopi Catfé.
    </p>
  </div>
</section>

<!-- MASONRY / BENTO GALLERY GRID -->
<section class="pb-24">
  <div class="max-w-[1400px] mx-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 auto-rows-[250px]">
      
      <?php foreach ($galleryItems as $index => $item): 
        $colSpan = 'col-span-1';
        $rowSpan = 'row-span-1';
        
        if ($item['type'] === 'wide') {
            $colSpan = 'md:col-span-2';
        } elseif ($item['type'] === 'tall') {
            $rowSpan = 'row-span-2';
        }
      ?>
      <div class="gallery-item-card <?= $colSpan ?> <?= $rowSpan ?> bento-card reveal group cursor-pointer" style="transition-delay: <?= $index * 50 ?>ms">
        <img src="<?= neko_image_url($item['src'], $item['title'], 800, 800) ?>" alt="<?= $item['alt'] ?>" 
             class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">
        
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        
        <div class="absolute inset-x-0 bottom-0 p-6 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">
          <h3 class="text-white font-bold text-lg mb-1 tracking-tight"><?= $item['title'] ?></h3>
          <p class="text-white/70 text-sm font-medium leading-tight"><?= $item['desc'] ?></p>
        </div>

        <div class="absolute top-4 right-4 w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 shadow-apple-subtle">
          <i data-lucide="maximize-2" class="w-4 h-4"></i>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
