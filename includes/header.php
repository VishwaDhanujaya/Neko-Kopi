<?php
/**
 * header.php — Neko & Kopi Global Navigation
 */
$current = $page ?? 'home';
require __DIR__ . '/base.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= $pageTitle ?? 'Neko &amp; Kopi — Cozy Cat Café in Colombo, Sri Lanka' ?></title>
  <meta name="description"
    content="<?= $pageDesc ?? 'Neko &amp; Kopi is Colombo\'s most cozy cat café — a warm, Ghibli-inspired sanctuary with artisan coffee, resident cats, and a home-like creative atmosphere.' ?>">
  <meta name="keywords"
    content="cat café Colombo, Neko Kopi, cozy café Sri Lanka, artisan coffee Nawala, cat adoption Colombo">
  <meta name="author" content="Neko &amp; Kopi">
  <meta property="og:title" content="Neko &amp; Kopi — Cozy Cat Café">
  <meta property="og:description" content="A warm, Ghibli-inspired cat café in the heart of Colombo.">
  <meta property="og:image" content="<?= $base ?>/assets/images/hero.png">
  <meta property="og:type" content="website">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?= $base ?>/assets/images/logo.png">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Nunito:wght@400;500;600;700;800&display=swap"
    rel="stylesheet">

  <!-- Tailwind CSS -->
  <link rel="stylesheet" href="<?= $base ?>/assets/css/style.css">

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js" defer></script>
</head>

<body>

  <!-- NAVBAR -->
  <header id="navbar" class="nav-glass fixed top-0 left-0 right-0 z-50">
    <nav class="max-w-6xl mx-auto px-5 sm:px-8 h-[62px] flex items-center justify-between gap-6">

      <!-- Logo -->
      <!-- Logo -->
      <a href="<?= $base ?>/home" id="logo-link" class="flex items-center gap-2.5 group flex-shrink-0">
        <img src="<?= $base ?>/assets/images/logo.png" alt="Neko &amp; Kopi"
          class="w-9 h-9 rounded-full object-cover border border-black/5 shadow-sm transition-transform duration-300 group-hover:scale-105">
        <span class="font-serif text-base tracking-tight font-semibold" style="color:#2C1E15;">Neko &amp; <span
            style="color:#72987C;">Kopi</span></span>
      </a>

      <!-- Desktop Nav -->
      <ul class="hidden md:flex items-center gap-7" role="list">
        <?php
        $links = [
          'home' => ['Home', "$base/home"],
          'menu' => ['Menu', "$base/menu"],
          'gallery' => ['Gallery', "$base/gallery"],
          'events' => ['Events', "$base/events"],
          'contact' => ['Contact', "$base/contact"],
        ];
        foreach ($links as $key => [$label, $href]):
          $isActive = $current === $key;
          ?>
          <li>
            <a href="<?= $href ?>" id="nav-<?= $key ?>"
              class="nav-link <?= $isActive ? 'active' : '' ?>"><?= $label ?></a>
          </li>
        <?php endforeach; ?>
      </ul>

      <!-- Desktop CTA -->
      <a href="<?= $base ?>/menu" id="nav-cta-menu" class="btn-primary btn-sm hidden md:inline-flex">
        <i data-lucide="coffee" class="w-3.5 h-3.5"></i>
        View Menu
      </a>

      <!-- Mobile Hamburger -->
      <button id="menu-btn" aria-label="Toggle navigation menu"
        class="md:hidden p-1.5 rounded-lg transition-colors duration-200" style="color:#7A5533;">
        <svg id="icon-open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <svg id="icon-close" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>

    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" role="navigation" aria-label="Mobile navigation">
      <div class="max-w-6xl mx-auto px-5 sm:px-8 pb-4 pt-2 flex flex-col gap-0.5"
        style="border-top:1px solid rgba(196,149,106,0.15);">
        <?php foreach ($links as $key => [$label, $href]):
          $isActive = $current === $key;
          ?>
          <a href="<?= $href ?>" id="mobile-nav-<?= $key ?>"
            class="py-2.5 text-sm font-semibold border-b transition-colors duration-200" style="font-family:'Nunito',sans-serif;
                  color:<?= $isActive ? '#3A2A1E' : '#7A5533' ?>;
                  border-color:rgba(196,149,106,0.12);">
            <?= $label ?>
          </a>
        <?php endforeach; ?>
        <a href="<?= $base ?>/menu" id="mobile-nav-cta" class="btn-primary mt-3 justify-center">
          <i data-lucide="coffee" class="w-4 h-4"></i>
          View Menu
        </a>
      </div>
    </div>

  </header>

  <main class="pt-[62px]">
