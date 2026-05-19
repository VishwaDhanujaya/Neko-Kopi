<?php
$page      = 'contact';
$pageTitle = 'Contact Us — Neko & Kopi Cat Café Colombo';
$pageDesc  = 'Get in touch with Neko & Kopi — find us at 319/4 Nawala Rd, Colombo or reach us via WhatsApp, email, or our contact form.';
$base      = '/NekoCafe';
require_once '../includes/header.php';
?>

<!-- PAGE HEADER -->
<section class="pt-[62px] relative overflow-hidden" style="background:#FBFBFA;" id="contact-header">
  <div class="max-w-3xl mx-auto px-5 sm:px-8 py-16 text-center">
    <div class="reveal">
      <span class="badge mb-5 inline-flex">
        <i data-lucide="mail" class="w-3.5 h-3.5 text-sage"></i>
        Get In Touch
      </span>
    </div>
    <h1 class="reveal reveal-delay-1 section-heading mb-4">Always Happy to Chat</h1>
    <p class="reveal reveal-delay-2 section-subheading mx-auto">
      Questions, reservations, event enquiries, or just want to say hello —
      we'd love to hear from you.
    </p>
  </div>
</section>

<!-- MAIN CONTENT -->
<section class="section-pad" style="background:#FBFBFA;" id="contact-main">
  <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-5 gap-10 md:gap-14">

    <!-- LEFT: Contact Info (2 Cols) -->
    <div class="lg:col-span-2 flex flex-col gap-8">

      <!-- Info Card -->
      <div class="card p-6 sm:p-8 reveal">
        <h2 style="font-family:'Playfair Display',serif;font-size:1.45rem;color:#3A2A1E;margin-bottom:1.5rem;">Visit &amp; Reach Us</h2>

        <div class="flex flex-col gap-6">
          <!-- Address -->
          <div class="flex items-start gap-4">
            <div class="icon-box">
              <i data-lucide="map-pin" class="w-4 h-4"></i>
            </div>
            <div>
              <p style="font-family:'Nunito',sans-serif;font-size:0.75rem;font-weight:800;letter-spacing:0.04em;text-transform:uppercase;color:#A07850;margin-bottom:0.15rem;">Address</p>
              <address class="not-italic font-sans text-sm leading-relaxed" style="color:#5C3D2E;">
                319/4, 05 Nawala Rd,<br>Colombo 00500, Sri Lanka
              </address>
            </div>
          </div>

          <!-- Phone -->
          <div class="flex items-start gap-4">
            <div class="icon-box">
              <i data-lucide="phone" class="w-4 h-4"></i>
            </div>
            <div>
              <p style="font-family:'Nunito',sans-serif;font-size:0.75rem;font-weight:800;letter-spacing:0.04em;text-transform:uppercase;color:#A07850;margin-bottom:0.15rem;">Phone</p>
              <a href="tel:+94724783406" id="contact-phone" class="text-sm font-semibold hover:underline" style="color:#5C3D2E;">+94 72 478 3406</a>
            </div>
          </div>

          <!-- Email -->
          <div class="flex items-start gap-4">
            <div class="icon-box">
              <i data-lucide="mail" class="w-4 h-4"></i>
            </div>
            <div>
              <p style="font-family:'Nunito',sans-serif;font-size:0.75rem;font-weight:800;letter-spacing:0.04em;text-transform:uppercase;color:#A07850;margin-bottom:0.15rem;">Email</p>
              <a href="mailto:nekoteammarketing@gmail.com" id="contact-email" class="text-sm font-semibold hover:underline break-all" style="color:#5C3D2E;">nekoteammarketing@gmail.com</a>
            </div>
          </div>

          <!-- Hours -->
          <div class="flex items-start gap-4">
            <div class="icon-box">
              <i data-lucide="clock" class="w-4 h-4"></i>
            </div>
            <div>
              <p style="font-family:'Nunito',sans-serif;font-size:0.75rem;font-weight:800;letter-spacing:0.04em;text-transform:uppercase;color:#A07850;margin-bottom:0.15rem;">Opening Hours</p>
              <p class="text-sm font-semibold" style="color:#5C3D2E;">Wed – Sun: 9:00 AM – 9:00 PM (Closed Mon & Tue)</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Quick Action Buttons -->
      <div class="flex flex-col gap-3 reveal reveal-delay-1">
        <h3 style="font-family:'Playfair Display',serif;font-size:1.2rem;color:#3A2A1E;margin-bottom:0.25rem;">Quick Actions</h3>

        <a href="https://wa.me/94724783406?text=Hello%20Neko%20%26%20Kopi!"
           id="contact-whatsapp-btn" target="_blank" rel="noopener"
           class="btn-whatsapp justify-center">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
          </svg>
          Chat on WhatsApp
        </a>

        <a href="https://www.ubereats.com" id="contact-uber-btn" target="_blank" rel="noopener" class="btn-amber justify-center">
          <i data-lucide="bike" class="w-4 h-4"></i>
          Order on Uber Eats
        </a>

        <a href="https://maps.app.goo.gl/qPYiibj1WKDyJf3J6" id="contact-maps-btn" target="_blank" rel="noopener" class="btn-outline justify-center">
          <i data-lucide="map" class="w-4 h-4"></i>
          Open in Google Maps
        </a>
      </div>

      <!-- Social Links -->
      <div class="card p-6 reveal reveal-delay-2">
        <h3 style="font-family:'Playfair Display',serif;font-size:1.15rem;color:#3A2A1E;margin-bottom:1rem;">Follow Our Cats</h3>
        <div class="grid grid-cols-3 gap-2">
          <a href="https://instagram.com" id="contact-instagram" target="_blank" rel="noopener"
             class="flex flex-col items-center gap-1.5 py-3.5 rounded-2xl bg-black/[0.03] hover:bg-black/[0.06] transition-all duration-250 hover:-translate-y-0.5 hover:shadow-sm">
            <svg class="w-5 h-5 text-brown" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
              <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
            </svg>
            <span style="font-family:'Nunito',sans-serif;font-size:0.7rem;font-weight:700;color:#7A5533;">Instagram</span>
          </a>
          <a href="https://tiktok.com" id="contact-tiktok" target="_blank" rel="noopener"
             class="flex flex-col items-center gap-1.5 py-3.5 rounded-2xl bg-black/[0.03] hover:bg-black/[0.06] transition-all duration-250 hover:-translate-y-0.5 hover:shadow-sm">
            <svg class="w-5 h-5 text-brown" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"></path>
            </svg>
            <span style="font-family:'Nunito',sans-serif;font-size:0.7rem;font-weight:700;color:#7A5533;">TikTok</span>
          </a>
          <a href="https://facebook.com" id="contact-facebook" target="_blank" rel="noopener"
             class="flex flex-col items-center gap-1.5 py-3.5 rounded-2xl bg-black/[0.03] hover:bg-black/[0.06] transition-all duration-250 hover:-translate-y-0.5 hover:shadow-sm">
            <svg class="w-5 h-5 text-brown" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
            </svg>
            <span style="font-family:'Nunito',sans-serif;font-size:0.7rem;font-weight:700;color:#7A5533;">Facebook</span>
          </a>
        </div>
      </div>

    </div>

    <!-- RIGHT: Contact Form + Map (3 Cols) -->
    <div class="lg:col-span-3 flex flex-col gap-10">

      <!-- Form Card -->
      <div class="card p-6 sm:p-8 reveal reveal-delay-1">
        <h2 style="font-family:'Playfair Display',serif;font-size:1.45rem;color:#3A2A1E;margin-bottom:0.35rem;">Send Us a Message</h2>
        <p style="font-family:'Nunito',sans-serif;font-size:0.85rem;color:#8B6850;margin-bottom:1.75rem;">We typically reply within 24 hours.</p>

        <!-- Feedback Alert -->
        <div id="form-message" class="hidden mb-5 px-4 py-3 bg-sage/10 border border-sage/30 rounded-xl text-sm font-semibold text-sage-dark" style="font-family:'Nunito',sans-serif;"></div>

        <form id="contact-form" action="#" method="POST" class="flex flex-col gap-5">
          <!-- Name + Email Row -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <label for="contact-name" class="form-label">Your Name</label>
              <input type="text" id="contact-name" name="name" required placeholder="e.g. Kasun Perera" class="form-input">
            </div>
            <div>
              <label for="contact-email-field" class="form-label">Email Address</label>
              <input type="email" id="contact-email-field" name="email" required placeholder="your@email.com" class="form-input">
            </div>
          </div>

          <!-- Subject -->
          <div>
            <label for="contact-subject" class="form-label">Subject</label>
            <select id="contact-subject" name="subject" class="form-input cursor-pointer">
              <option value="">Select a topic…</option>
              <option value="reservation">Table Reservation</option>
              <option value="event">Event Enquiry</option>
              <option value="feedback">Feedback</option>
              <option value="other">Something Else</option>
            </select>
          </div>

          <!-- Message -->
          <div>
            <label for="contact-message" class="form-label">Your Message</label>
            <textarea id="contact-message" name="message" required rows="4" placeholder="Write your message here…" class="form-input resize-none"></textarea>
          </div>

          <button type="submit" id="contact-submit" class="btn-primary justify-center mt-2">
            <i data-lucide="send" class="w-4 h-4"></i>
            Send Message
          </button>
        </form>
      </div>

      <!-- Map Card -->
      <div class="reveal reveal-delay-2">
        <h2 style="font-family:'Playfair Display',serif;font-size:1.45rem;color:#3A2A1E;margin-bottom:1rem;">Find Our Café</h2>
        <div class="rounded-3xl overflow-hidden shadow-sm" style="border:1px solid rgba(196,149,106,0.18);">
          <iframe
            id="contact-map"
            title="Neko & Kopi location on Google Maps"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0148043707204!2d79.88710209999999!3d6.8888296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bb7481a2109%3A0x2368f512f0089250!2sNeko%20and%20Kopi!5e0!3m2!1sen!2slk!4v1779166252915!5m2!1sen!2slk"
            width="100%"
            height="320"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

    </div>

  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
