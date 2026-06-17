<?php
/**
 * header.php — Neko & Kopi Catfé Global Navigation
 */
$current = $page ?? 'home';
require_once __DIR__ . '/base.php';
?>
<!DOCTYPE html>
<html lang="en" class="lg:snap-y lg:snap-proximity scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= $pageTitle ?? 'Neko &amp; Kopi Catfé — Cat Café in Colombo, Sri Lanka' ?></title>
  <meta name="description"
    content="<?= $pageDesc ?? 'Neko &amp; Kopi Catfé is Colombo\'s cat café — artisan coffee, resident cats, and a creative sanctuary on Nawala Road.' ?>">
  <meta name="keywords"
    content="cat café Colombo, Neko Kopi, cozy café Sri Lanka, artisan coffee Nawala, cat adoption Colombo">
  <meta name="author" content="Neko &amp; Kopi Catfé">
  <meta property="og:title" content="Neko &amp; Kopi Catfé — Cat Café">
  <meta property="og:description" content="Artisan coffee and resident cats in the heart of Colombo.">
  <meta property="og:image" content="<?= $base ?>/assets/images/hero.webp">
  <meta property="og:type" content="website">

  <!-- Favicon -->
  <link rel="icon" type="image/jpeg" href="<?= $base ?>/assets/images/logo.jpeg">

  <!-- Google Fonts — Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  
  <!-- Tailwind CSS -->
  <link rel="stylesheet" href="<?= $base ?>/assets/css/style.css">

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js" defer></script>
</head>

<body class="bg-apple-bg selection:bg-theme-brown/20 selection:text-theme-brown">

  <!-- NAVBAR -->
  <header id="navbar" class="nav-glass fixed top-0 left-0 right-0 z-50">
    <nav class="max-w-[1200px] mx-auto px-6 h-[72px] flex items-center justify-between gap-6">

      <!-- Logo -->
      <a href="<?= neko_page_url('home') ?>" id="logo-link" class="flex items-center gap-3 group flex-shrink-0">
        <img src="<?= $base ?>/assets/images/logo.jpeg" alt="Neko &amp; Kopi Catfé"
          class="w-9 h-9 rounded-full object-cover shadow-sm transition-transform duration-400 group-hover:scale-105 group-hover:shadow-md">
        <span class="text-lg font-bold tracking-tight text-black transition-colors duration-300 group-hover:text-theme-brown">Neko &amp; Kopi Catfé</span>
      </a>

      <!-- Desktop Nav -->
      <ul class="hidden md:flex items-center gap-8" role="list">
        <?php
        $links = [
          'home' => ['Home', neko_page_url('home')],
          'menu' => ['Menu', neko_page_url('menu')],
          'gallery' => ['Gallery', neko_page_url('gallery')],
          'events' => ['Events', neko_page_url('events')],
          'contact' => ['Contact', neko_page_url('contact')],
        ];
        foreach ($links as $key => [$label, $href]):
          $isActive = $current === $key;
          ?>
          <li>
            <a href="<?= $href ?>" id="nav-<?= $key ?>"
              class="nav-link <?= $isActive ? 'active' : '' ?> relative overflow-hidden group">
              <?= $label ?>
              <?php if($isActive): ?>
                <span class="absolute -bottom-1 left-1/2 w-1 h-1 bg-theme-brown rounded-full -translate-x-1/2"></span>
              <?php endif; ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>

      <!-- Desktop CTA -->
      <a href="<?= neko_page_url('menu') ?>" id="nav-cta-menu" class="btn-primary btn-sm hidden md:inline-flex shadow-theme-glow">
        View Menu
      </a>

      <!-- Mobile Hamburger -->
      <button id="menu-btn" aria-label="Toggle navigation menu"
        class="md:hidden p-2 rounded-full transition-colors duration-200 text-black hover:bg-black/5 active:scale-95">
        <svg id="icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <svg id="icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>

    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" role="navigation" aria-label="Mobile navigation" class="bg-white/80 backdrop-blur-3xl">
      <div class="max-w-[1200px] mx-auto px-6 pb-6 pt-2 flex flex-col gap-1"
        style="border-top:1px solid rgba(0,0,0,0.05);">
        <?php foreach ($links as $key => [$label, $href]):
          $isActive = $current === $key;
          ?>
          <a href="<?= $href ?>" id="mobile-nav-<?= $key ?>"
            class="py-3 text-base font-semibold border-b transition-colors duration-200"
            style="color:<?= $isActive ? '#a26840' : '#1C1C1E' ?>; border-color:rgba(0,0,0,0.04);">
            <?= $label ?>
          </a>
        <?php endforeach; ?>
        <a href="<?= neko_page_url('menu') ?>" id="mobile-nav-cta" class="btn-primary mt-5 justify-center shadow-theme-glow">
          View Menu
        </a>
      </div>
    </div>

  </header>

  <main class="pt-[72px]">
