<?php
/**
 * footer.php — Neko & Kopi Catfé Global Footer
 */
require_once __DIR__ . '/base.php';
?>
</main>

<!-- FOOTER -->
<footer class="bg-gray-dark text-white relative overflow-hidden">

  <!-- Subtle glow in footer -->
  <div class="absolute top-0 right-0 w-96 h-96 bg-theme-brown/10 rounded-full blur-[100px] pointer-events-none -translate-y-1/2 translate-x-1/3"></div>

  <div class="max-w-[1200px] mx-auto px-6 py-20 relative z-10">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-12 md:gap-8">

      <!-- Brand -->
      <div class="flex flex-col gap-6">
        <a href="<?= neko_page_url('home') ?>" id="footer-logo" class="flex items-center gap-3 group">
          <img src="<?= $base ?>/assets/images/logo.jpeg" alt="Neko &amp; Kopi Catfé" class="w-10 h-10 rounded-full object-cover shadow-sm transition-transform duration-300 group-hover:scale-105">
          <span class="text-xl tracking-tight font-bold text-white transition-colors duration-300 group-hover:text-theme-brown">Neko &amp; Kopi Catfé</span>
        </a>

        <p class="text-sm text-gray-muted leading-relaxed">
          A creative sanctuary in the heart of Colombo. Sip artisan coffee, find inspiration, and relax with our companions.
        </p>

        <!-- Social -->
        <div class="flex items-center gap-3 mt-2">
          <a href="https://www.instagram.com/nekocafelk/?hl=en" id="footer-instagram" target="_blank" rel="noopener"
             aria-label="Instagram" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-white/60 transition-all duration-300 hover:bg-theme-brown hover:text-white hover:-translate-y-1 hover:shadow-theme-glow">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
              <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
            </svg>
          </a>
          <a href="https://www.tiktok.com/@nekoandkopi" id="footer-tiktok" target="_blank" rel="noopener"
             aria-label="TikTok" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-white/60 transition-all duration-300 hover:bg-theme-brown hover:text-white hover:-translate-y-1 hover:shadow-theme-glow">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"></path>
            </svg>
          </a>
          <a href="https://www.facebook.com/profile.php?id=61552857654553" id="footer-facebook" target="_blank" rel="noopener"
             aria-label="Facebook" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-white/60 transition-all duration-300 hover:bg-theme-brown hover:text-white hover:-translate-y-1 hover:shadow-theme-glow">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
            </svg>
          </a>
        </div>
      </div>

      <!-- Links -->
      <div>
        <h4 class="text-[0.65rem] font-bold tracking-widest uppercase text-white/40 mb-5">Navigation</h4>
        <ul class="flex flex-col gap-3">
          <?php $navItems = [
            ['Home',           neko_page_url('home')],
            ['Menu',           neko_page_url('menu')],
            ['Gallery',        neko_page_url('gallery')],
            ['Events',         neko_page_url('events')],
            ['Contact Us',     neko_page_url('contact')],
          ];
          foreach ($navItems as [$label, $href]): ?>
          <li>
            <a href="<?= $href ?>" id="footer-link-<?= strtolower(str_replace(' ', '-', $label)) ?>"
               class="text-sm text-white/60 hover:text-theme-brown transition-colors duration-200">
               <?= $label ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Contact -->
      <div>
        <h4 class="text-[0.65rem] font-bold tracking-widest uppercase text-white/40 mb-5">Find Us</h4>
        <address class="not-italic flex flex-col gap-4">
          <div>
            <p class="text-sm font-semibold text-white/90 mb-1">Colombo</p>
            <p class="text-xs text-white/50 leading-relaxed">319/4, 05 Nawala Rd,<br>Colombo 00500</p>
          </div>
          <div>
            <p class="text-sm font-semibold text-white/90 mb-1">Get in Touch</p>
            <a href="tel:+94724783406" class="text-xs text-white/50 hover:text-theme-brown transition-colors block mb-1">+94 72 478 3406</a>
            <a href="mailto:nekoteammarketing@gmail.com" class="text-xs text-white/50 hover:text-theme-brown transition-colors block">nekoteammarketing@gmail.com</a>
          </div>
        </address>
      </div>

      <!-- Hours -->
      <div>
        <h4 class="text-[0.65rem] font-bold tracking-widest uppercase text-white/40 mb-5">Opening Hours</h4>
        <div class="flex flex-col gap-2">
          <p class="text-sm font-semibold text-white/90">Wednesday – Sunday</p>
          <p class="text-xs text-white/50">9:00 AM – 9:00 PM</p>
          <p class="text-[10px] text-white/30 font-bold uppercase tracking-wider mt-1">Closed Mon & Tue</p>
        </div>
      </div>

    </div>

    <div class="mt-16 pt-8 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-4">
      <p class="text-xs text-white/30 font-medium tracking-wide">
        &copy; <?= date('Y') ?> Neko &amp; Kopi Catfé. All rights reserved.
      </p>
      <div class="flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-theme-brown animate-pulse"></span>
        <p class="text-xs text-white/30 font-medium tracking-wide">Brewing in Colombo</p>
      </div>
    </div>
  </div>
</footer>

<!-- BACK TO TOP BUTTON -->
<button id="back-to-top" aria-label="Back to top" class="fixed bottom-6 right-6 w-12 h-12 rounded-full flex items-center justify-center bg-white/80 backdrop-blur text-black shadow-sm transition-all duration-300 translate-y-12 opacity-0 pointer-events-none hover:scale-105 hover:bg-white z-40 border border-black/5">
  <i data-lucide="arrow-up" class="w-5 h-5"></i>
</button>

<script src="<?= $base ?>/assets/js/main.js"></script>
</body>
</html>
