<?php
$page      = 'contact';
$pageTitle = 'Contact — Neko & Kopi Catfé Cat Café Colombo';
$pageDesc  = 'Get in touch with Neko & Kopi Catfé. Find our location on Nawala Road, book a table, or ask us any questions.';
require_once __DIR__ . '/../includes/base.php';
require_once __DIR__ . '/../includes/header.php';
?>

<!-- PAGE HEADER -->
<section class="pt-24 pb-12 relative overflow-hidden" id="contact-header">
  <div class="glow-orb glow-orb-brown w-[500px] h-[500px] top-0 right-0 translate-x-1/3 -translate-y-1/3 opacity-20"></div>
  <div class="max-w-3xl mx-auto px-6 text-center relative z-10">
    <div class="reveal">
      <span class="badge mb-5 inline-flex bg-white shadow-apple-subtle text-theme-brown border border-black/5">
        <i data-lucide="mail" class="w-3 h-3"></i>
        Get in Touch
      </span>
    </div>
    <h1 class="reveal reveal-delay-1 section-heading mb-4">Contact Us</h1>
    <p class="reveal reveal-delay-2 section-subheading mx-auto">
      Have a question or want to host an event? We'd love to hear from you.
    </p>
  </div>
</section>

<!-- CONTACT CONTENT -->
<section class="pb-24 relative z-10">
  <div class="max-w-[1100px] mx-auto px-6">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

      <!-- Contact Info Box -->
      <div class="lg:col-span-5 flex flex-col gap-6 reveal">
        
        <div class="bento-card p-8 bg-black text-white relative overflow-hidden group">
          <div class="absolute right-0 bottom-0 w-64 h-64 bg-theme-brown/20 rounded-full blur-3xl translate-y-1/3 translate-x-1/3 pointer-events-none"></div>
          <div class="relative z-10">
            <h3 class="text-2xl font-bold text-white mb-6 tracking-tight">Visit Our Sanctuary</h3>
            
            <div class="flex flex-col gap-6">
              <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0 text-theme-brown">
                  <i data-lucide="map-pin" class="w-5 h-5"></i>
                </div>
                <div>
                  <p class="text-xs font-bold uppercase tracking-widest text-white/50 mb-1">Address</p>
                  <p class="text-base font-medium text-white/90">319/4, 05 Nawala Rd,<br>Colombo 00500</p>
                </div>
              </div>

              <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0 text-theme-brown">
                  <i data-lucide="clock" class="w-5 h-5"></i>
                </div>
                <div>
                  <p class="text-xs font-bold uppercase tracking-widest text-white/50 mb-1">Hours</p>
                  <p class="text-base font-medium text-white/90">Wednesday – Sunday<br>9:00 AM – 9:00 PM</p>
                  <p class="text-xs text-white/50 mt-1">Closed Mon & Tue</p>
                </div>
              </div>

              <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0 text-theme-brown">
                  <i data-lucide="phone" class="w-5 h-5"></i>
                </div>
                <div>
                  <p class="text-xs font-bold uppercase tracking-widest text-white/50 mb-1">Contact</p>
                  <a href="tel:+94724783406" class="text-base font-medium text-white/90 hover:text-theme-brown transition-colors block">+94 72 478 3406</a>
                  <a href="mailto:nekoteammarketing@gmail.com" class="text-base font-medium text-white/90 hover:text-theme-brown transition-colors block">nekoteammarketing@gmail.com</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Mini map/directions card -->
        <a href="https://maps.app.goo.gl/qPYiibj1WKDyJf3J6" target="_blank" rel="noopener" class="bento-card p-6 flex items-center justify-between group hover:bg-theme-brown/5">
          <div class="flex items-center gap-4">
            <div class="w-10 h-10 rounded-full bg-theme-brown/10 flex items-center justify-center text-theme-brown group-hover:bg-theme-brown group-hover:text-white transition-colors">
              <i data-lucide="navigation" class="w-5 h-5"></i>
            </div>
            <div>
              <p class="text-sm font-bold text-black">Get Directions</p>
              <p class="text-xs text-gray-muted font-medium">Open in Google Maps</p>
            </div>
          </div>
          <i data-lucide="arrow-right" class="w-5 h-5 text-gray-muted group-hover:text-theme-brown transition-transform group-hover:translate-x-1"></i>
        </a>

      </div>

      <!-- Contact Form -->
      <div class="lg:col-span-7 reveal reveal-delay-1">
        <div class="bento-card p-8 md:p-10">
          <h2 class="text-2xl font-bold text-black mb-2 tracking-tight">Drop us a message</h2>
          <p class="text-sm text-gray-muted mb-8 font-medium">We usually reply within 24 hours.</p>

          <form id="contact-form" action="<?= $base ?>/pages/send_email.php" method="POST" class="flex flex-col gap-6">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" required class="form-input" placeholder="Jane Doe">
              </div>
              <div>
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" id="phone" name="phone" required class="form-input" placeholder="+94 77 123 4567">
              </div>
            </div>

            <div>
              <label for="email" class="form-label">Email Address</label>
              <input type="email" id="email" name="email" required class="form-input" placeholder="jane@example.com">
            </div>

            <div>
              <label for="message" class="form-label">Your Message</label>
              <textarea id="message" name="message" rows="5" required class="form-input resize-none" placeholder="How can we help you?"></textarea>
            </div>

            <div id="form-message" class="hidden text-sm font-bold text-theme-brown p-4 rounded-xl bg-theme-brown/10 border border-theme-brown/20 text-center"></div>

            <button type="submit" id="contact-submit" class="btn-primary w-full justify-center py-4 text-base mt-2">
              Send Message
            </button>
            <p class="text-center text-[11px] text-gray-muted font-medium uppercase tracking-wider">
              Protected by reCAPTCHA
            </p>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- SUCCESS MODAL (Hidden by default) -->
<div id="success-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300">
  <div class="bg-white rounded-[2rem] p-8 md:p-12 max-w-sm w-full text-center shadow-apple-card transform scale-95 transition-transform duration-300">
    <div class="w-16 h-16 rounded-full bg-green-50 flex items-center justify-center mx-auto mb-6">
      <i data-lucide="check-circle-2" class="w-8 h-8 text-green-500"></i>
    </div>
    <h3 class="text-2xl font-bold text-black tracking-tight mb-2">Message Sent</h3>
    <p class="text-sm text-gray-muted mb-8 font-medium leading-relaxed">Thank you for reaching out! We've received your message and will get back to you shortly.</p>
    <button id="close-success-btn" class="btn-primary w-full justify-center">
      Return to Site
    </button>
  </div>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
