<?php
/**
 * footer.php — Neko & Kopi Global Footer
 */
require_once __DIR__ . '/base.php';
?>
</main>

<!-- FOOTER -->
<footer style="background:#1D1D1F; color:#EDE0CC;">

  <!-- Wave -->
  <div class="overflow-hidden" style="margin-bottom:-2px; line-height:0;">
    <svg viewBox="0 0 1440 56" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="width:100%;height:56px;display:block;">
      <path d="M0 40 C360 70 1080 10 1440 40 L1440 0 L0 0 Z" fill="#FBFBFA"/>
    </svg>
  </div>

  <div class="max-w-6xl mx-auto px-5 sm:px-8 py-14">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-8">

      <!-- Brand -->
      <div class="flex flex-col gap-4">
        <a href="<?= $base ?>/" id="footer-logo" class="flex items-center gap-2.5">
          <img src="<?= $base ?>/assets/images/logo.png" alt="Neko &amp; Kopi" class="w-9 h-9 rounded-full object-cover border border-white/10 shadow-sm">
          <span class="font-serif text-base tracking-tight font-semibold text-white">Neko &amp; <span class="text-amber">Kopi</span></span>
        </a>

        <p style="font-family:'Nunito',sans-serif;font-size:0.855rem;color:rgba(237,224,204,0.60);line-height:1.65;">
          A cozy cat café in the heart of Colombo — where every cup is brewed with love and every corner has a purring companion.
        </p>

        <!-- Social -->
        <div class="flex items-center gap-3 mt-1">
          <a href="https://www.instagram.com/nekocafelk/?hl=en" id="footer-instagram" target="_blank" rel="noopener"
             aria-label="Instagram" class="footer-icon-btn">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
              <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
            </svg>
          </a>
          <a href="https://www.tiktok.com/@nekoandkopi" id="footer-tiktok" target="_blank" rel="noopener"
             aria-label="TikTok" class="footer-icon-btn">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"></path>
            </svg>
          </a>
          <a href="https://www.facebook.com/profile.php?id=61552857654553" id="footer-facebook" target="_blank" rel="noopener"
             aria-label="Facebook" class="footer-icon-btn">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
            </svg>
          </a>
        </div>
      </div>

      <!-- Links -->
      <div class="hidden md:block">
        <p style="font-family:'Playfair Display',serif;font-size:1rem;color:#EDE0CC;margin-bottom:1.25rem;">Quick Links</p>
        <ul class="flex flex-col gap-2.5">
          <?php $navItems = [
            ['Home',           neko_page_url('home'),     'home'],
            ['Menu',           neko_page_url('menu'),     'utensils'],
            ['Gallery',        neko_page_url('gallery'),  'image'],
            ['Events',         neko_page_url('events'),   'calendar'],
            ['Contact Us',     neko_page_url('contact'),  'mail'],
          ];
          foreach ($navItems as [$label, $href, $icon]): ?>
          <li>
            <a href="<?= $href ?>" id="footer-link-<?= strtolower(str_replace(' ', '-', $label)) ?>"
               class="footer-link flex items-center gap-2">
              <i data-lucide="<?= $icon ?>" class="w-3.5 h-3.5 flex-shrink-0" style="opacity:0.55;"></i>
              <?= $label ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Contact -->
      <div>
        <p style="font-family:'Playfair Display',serif;font-size:1rem;color:#EDE0CC;margin-bottom:1.25rem;">Find Us</p>
        <address class="not-italic flex flex-col gap-3">
          <?php $contactItems = [
            ['map-pin',   '319/4, 05 Nawala Rd, Colombo 00500, Sri Lanka', null, 'footer-address'],
            ['phone',     '+94 72 478 3406', 'tel:+94724783406', 'footer-phone'],
            ['mail',      'nekoteammarketing@gmail.com', 'mailto:nekoteammarketing@gmail.com', 'footer-email'],
            ['clock',     'Wed – Sun: 9:00 AM – 9:00 PM (Closed Mon & Tue)', null, 'footer-hours'],
          ];
          foreach ($contactItems as [$icon, $text, $href, $id]): ?>
          <div class="flex items-start gap-2.5">
            <i data-lucide="<?= $icon ?>" class="w-3.5 h-3.5 flex-shrink-0 mt-0.5" style="color:rgba(196,149,106,0.75);"></i>
            <?php if ($href): ?>
              <a href="<?= $href ?>" id="<?= $id ?>" class="footer-link text-sm leading-snug"><?= $text ?></a>
            <?php else: ?>
              <span id="<?= $id ?>" style="font-family:'Nunito',sans-serif;font-size:0.855rem;color:rgba(237,224,204,0.60);line-height:1.45;"><?= $text ?></span>
            <?php endif; ?>
          </div>
          <?php endforeach; ?>
        </address>
      </div>

    </div>

    <div class="mt-12 pt-7 flex flex-col sm:flex-row items-center justify-between gap-3"
         style="border-top:1px solid rgba(237,224,204,0.10);">
      <p style="font-family:'Nunito',sans-serif;font-size:0.8rem;color:rgba(237,224,204,0.40);">
        &copy; <?= date('Y') ?> Neko &amp; Kopi. All rights reserved.
      </p>
      <p style="font-family:'Nunito',sans-serif;font-size:0.8rem;color:rgba(237,224,204,0.30);">
        319/4 Nawala Rd, Colombo 00500
      </p>
    </div>
  </div>
</footer>

<!-- BACK TO TOP BUTTON -->
<button id="back-to-top" aria-label="Back to top" class="fixed bottom-6 right-6 w-11 h-11 rounded-full flex items-center justify-center shadow-lg transition-all duration-300 translate-y-12 opacity-0 pointer-events-none hover:scale-105 z-40" style="background:#72997C; color:#fff; border:1px solid rgba(255,255,255,0.1);">
  <i data-lucide="arrow-up" class="w-5 h-5"></i>
</button>

<script src="<?= $base ?>/assets/js/main.js"></script>
</body>
</html>
