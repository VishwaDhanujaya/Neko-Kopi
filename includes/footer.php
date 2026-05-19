<?php
/**
 * footer.php — Neko & Kopi Global Footer
 */
$base = '/NekoCafe';
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
        <a href="<?= $base ?>/pages/home.php" id="footer-logo" class="flex items-center gap-2.5">
          <img src="<?= $base ?>/assets/images/logo.png" alt="Neko &amp; Kopi" class="w-9 h-9 rounded-full object-cover border border-white/10 shadow-sm">
          <span class="font-serif text-base tracking-tight font-semibold text-white">Neko &amp; <span class="text-amber">Kopi</span></span>
        </a>

        <p style="font-family:'Nunito',sans-serif;font-size:0.855rem;color:rgba(237,224,204,0.60);line-height:1.65;">
          A cozy cat café in the heart of Colombo — where every cup is brewed with love and every corner has a purring companion.
        </p>

        <!-- Social -->
        <div class="flex items-center gap-3 mt-1">
          <a href="https://instagram.com" id="footer-instagram" target="_blank" rel="noopener"
             aria-label="Instagram" class="footer-icon-btn">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
              <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
            </svg>
          </a>
          <a href="https://facebook.com" id="footer-facebook" target="_blank" rel="noopener"
             aria-label="Facebook" class="footer-icon-btn">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
            </svg>
          </a>
          <a href="https://wa.me/94724783406" id="footer-whatsapp-icon" target="_blank" rel="noopener"
             aria-label="WhatsApp" class="footer-icon-btn">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- Links -->
      <div>
        <p style="font-family:'Playfair Display',serif;font-size:1rem;color:#EDE0CC;margin-bottom:1.25rem;">Quick Links</p>
        <ul class="flex flex-col gap-2.5">
          <?php $navItems = [
            ['Home',           "$base/pages/home.php",    'home'],
            ['Menu',           "$base/pages/menu.php",    'utensils'],
            ['Gallery',        "$base/pages/gallery.php", 'image'],
            ['Events',         "$base/pages/events.php",  'calendar'],
            ['Contact Us',     "$base/pages/contact.php", 'mail'],
            ['Order on Uber Eats', 'https://www.ubereats.com', 'bike'],
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

        <a href="https://wa.me/94724783406?text=Hello%20Neko%20%26%20Kopi!%20I%20have%20an%20enquiry."
           id="footer-whatsapp-btn"
           target="_blank" rel="noopener"
           class="btn-whatsapp btn-sm mt-5">
          <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
          </svg>
          WhatsApp Us
        </a>
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

<script src="/NekoCafe/assets/js/main.js"></script>
</body>
</html>
