<?php
$page      = 'events';
$pageTitle = 'Events — Neko & Kopi Catfé Cat Café Colombo';
$pageDesc  = 'Join us for acoustic evenings, cat adoption drives, and art workshops at Neko & Kopi Catfé.';
require_once __DIR__ . '/../includes/base.php';
require_once __DIR__ . '/../includes/header.php';

$events = [
  ['title' => 'Acoustic Sunset Sessions', 'date' => 'Every Friday', 'time' => '5:30 PM — 8:00 PM', 'desc' => 'Wind down your week with live acoustic music, ambient lighting, and half-priced Neko Specials.', 'tag' => 'Weekly'],
  ['title' => 'Feline Friends Adoption Day', 'date' => 'Last Sunday of the Month', 'time' => '10:00 AM — 4:00 PM', 'desc' => 'Looking for a furry companion? Meet rescued cats ready for their forever homes. Partnered with local shelters.', 'tag' => 'Community'],
  ['title' => 'Canvas & Cats Workshop', 'date' => 'Upcoming: Nov 15', 'time' => '3:00 PM — 6:00 PM', 'desc' => 'A guided painting session. All materials provided, plus a complimentary iced coffee or tea. Limited seats!', 'tag' => 'Workshop'],
];
?>

<!-- PAGE HEADER -->
<section class="pt-24 pb-12 relative overflow-hidden" id="events-header">
  <div class="glow-orb glow-orb-brown w-[500px] h-[500px] top-0 left-0 -translate-x-1/3 -translate-y-1/3 opacity-20"></div>
  <div class="max-w-3xl mx-auto px-6 text-center relative z-10">
    <div class="reveal">
      <span class="badge mb-5 inline-flex bg-white shadow-apple-subtle text-theme-brown border border-black/5">
        <i data-lucide="calendar" class="w-3 h-3"></i>
        Community
      </span>
    </div>
    <h1 class="reveal reveal-delay-1 section-heading mb-4">What's On</h1>
    <p class="reveal reveal-delay-2 section-subheading mx-auto">
      There is always a reason to gather at Neko & Kopi Catfé.
    </p>
  </div>
</section>

<!-- EVENTS LIST -->
<section class="pb-24">
  <div class="max-w-[1000px] mx-auto px-6">
    <div class="flex flex-col gap-6">

      <?php foreach ($events as $index => $event): ?>
      <div class="bento-card p-8 md:p-10 reveal group flex flex-col md:flex-row md:items-center gap-8 relative overflow-hidden">
        
        <!-- Subtle hover glow background -->
        <div class="absolute inset-0 bg-gradient-to-r from-theme-brown/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>

        <div class="relative z-10 flex-shrink-0 w-full md:w-56 pb-6 md:pb-0 md:border-r border-black/5 md:pr-8">
          <span class="eyebrow mb-2"><?= $event['tag'] ?></span>
          <h3 class="text-3xl font-black text-theme-brown tracking-tight leading-none mb-2"><?= $event['date'] ?></h3>
          <p class="text-sm font-bold text-black flex items-center gap-1.5">
            <i data-lucide="clock" class="w-3.5 h-3.5 text-gray-muted"></i>
            <?= $event['time'] ?>
          </p>
        </div>

        <div class="relative z-10 flex-grow">
          <h2 class="text-2xl font-bold text-black mb-3 tracking-tight group-hover:text-theme-brown transition-colors duration-300"><?= $event['title'] ?></h2>
          <p class="text-gray-muted text-base leading-relaxed font-medium mb-6"><?= $event['desc'] ?></p>
          <a href="<?= neko_page_url('contact') ?>" class="inline-flex items-center gap-2 text-sm font-bold text-black hover:text-theme-brown transition-colors">
            Inquire or RSVP <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
        </div>

      </div>
      <?php endforeach; ?>

    </div>

    <div class="mt-16 reveal bento-card bg-black text-white p-10 md:p-14 text-center relative overflow-hidden group">
      <div class="absolute inset-0 bg-cover bg-center opacity-50 group-hover:scale-105 transition-transform duration-1000" style="background-image: url('<?= neko_image_url('event-banner.webp', 'Event Banner', 1200, 600) ?>');"></div>
      <div class="absolute inset-0 bg-black/60"></div>
      
      <div class="relative z-10 max-w-2xl mx-auto">
        <h2 class="text-3xl font-bold text-white mb-4 tracking-tight">Host Your Own Private Event</h2>
        <p class="text-white/70 font-medium mb-8">Looking for a unique space for a birthday, casual meetup, or corporate retreat? Rent our space and enjoy custom catering options.</p>
        <a href="<?= neko_page_url('contact') ?>" class="btn-primary">
          Contact Us for Details
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
