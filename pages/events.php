<?php
$page      = 'events';
$pageTitle = 'Events — Neko & Kopi Cat Café Colombo';
$pageDesc  = 'Join us for cat adoption days, live acoustic nights, art workshops and more at Neko & Kopi — Colombo\'s cosiest cat café.';
$base      = '/NekoCafe';
require_once '../includes/header.php';

$events = [
  [
    'title'  => 'Cat Adoption Day',
    'date'   => '7 June 2026',
    'time'   => '10:00 AM – 4:00 PM',
    'tag'    => 'Community',
    'spots'  => 'Open Admission',
    'icon'   => 'heart',
    'img'    => 'event-cats.png',
    'desc'   => 'Partnering with the BARC Shelter, we bring in adorable rescue cats looking for forever homes. Come meet them, play, and if you feel the spark — adopt! Complimentary tea for all visitors.',
  ],
  [
    'title'  => 'Live Acoustic Night',
    'date'   => '20 June 2026',
    'time'   => '6:30 PM – 9:30 PM',
    'tag'    => 'Music',
    'spots'  => 'Limited Seats',
    'icon'   => 'music',
    'img'    => 'event-music.png',
    'desc'   => 'Unwind with soulful live acoustic sets from local artists in our candlelit café. Sip your favourite brew and let the music wash over you.',
  ],
  [
    'title'  => 'Art & Coffee Workshop',
    'date'   => '29 June 2026',
    'time'   => '2:00 PM – 5:00 PM',
    'tag'    => 'Workshop',
    'spots'  => '16 Spots Only',
    'icon'   => 'palette',
    'img'    => null,
    'desc'   => 'A relaxed watercolour session guided by local artist Dilini Perera. All materials provided. Paint your favourite cat, your coffee cup, or whatever the afternoon inspires.',
  ],
  [
    'title'  => 'Latte Art Masterclass',
    'date'   => '12 July 2026',
    'time'   => '11:00 AM – 1:00 PM',
    'tag'    => 'Workshop',
    'spots'  => '12 Spots Only',
    'icon'   => 'coffee',
    'img'    => null,
    'desc'   => 'Learn the craft from our barista champion Kasun. You\'ll go home knowing how to pour hearts, rosettas, and of course — a perfect cat paw.',
  ],
  [
    'title'  => 'Cat Movie Night',
    'date'   => '25 July 2026',
    'time'   => '7:00 PM – 10:00 PM',
    'tag'    => 'Social',
    'spots'  => 'Open Entry',
    'icon'   => 'film',
    'img'    => 'event-music.png',
    'desc'   => 'Cozy up with a blanket, a warm drink, and our café cats as we screen a beloved Ghibli classic. Bean bags, candlelight, and popcorn provided.',
  ],
  [
    'title'  => 'Plant & Paws Market',
    'date'   => '3 August 2026',
    'time'   => '9:00 AM – 2:00 PM',
    'tag'    => 'Market',
    'spots'  => 'Free Entry',
    'icon'   => 'sprout',
    'img'    => null,
    'desc'   => 'A curated outdoor market with local plant sellers, handmade goods, and artisan food stalls — all in our garden area with the cats roaming free.',
  ],
];
?>

<!-- PAGE HEADER -->
<section class="pt-[62px] relative overflow-hidden" style="background:#FBFBFA;" id="events-header">
  <div class="max-w-3xl mx-auto px-5 sm:px-8 py-16 text-center">
    <div class="reveal">
      <span class="badge mb-5 inline-flex">
        <i data-lucide="calendar" class="w-3.5 h-3.5 text-sage"></i>
        What's On
      </span>
    </div>
    <h1 class="reveal reveal-delay-1 section-heading mb-4">Events &amp; Happenings</h1>
    <p class="reveal reveal-delay-2 section-subheading mx-auto">
      From adoption days to live music, art workshops to cozy film nights —
      there's always something warm happening at Neko &amp; Kopi.
    </p>
  </div>
</section>

<!-- EVENTS GRID -->
<section class="section-pad" style="background:#FBFBFA;" id="events-list">
  <div class="max-w-6xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

      <?php foreach ($events as $i => $event): ?>
      <article class="card flex flex-col reveal reveal-delay-<?=($i%3)+1?>">

        <!-- Image / Placeholder -->
        <div class="relative h-44 overflow-hidden rounded-t-[1.25rem]"
             style="background:#EDE0CC;">
          <?php if ($event['img']): ?>
            <img src="<?=$base?>/assets/images/<?=$event['img']?>"
                 alt="<?=$event['title']?>"
                 class="w-full h-full object-cover">
          <?php else: ?>
            <div class="w-full h-full flex items-center justify-center"
                 style="background:linear-gradient(135deg,#EDE0CC,#F5EFE6);">
              <div class="icon-box icon-box-lg icon-box-amber" style="width:4rem;height:4rem;border-radius:1.25rem;">
                <i data-lucide="<?=$event['icon']?>" class="w-7 h-7"></i>
              </div>
            </div>
          <?php endif; ?>

          <!-- Badges overlay -->
          <div class="absolute top-3 left-3">
            <span class="badge"><?=$event['tag']?></span>
          </div>
          <div class="absolute top-3 right-3">
            <span class="badge badge-dark"><?=$event['spots']?></span>
          </div>
        </div>

        <!-- Card Body -->
        <div class="p-6 flex flex-col flex-1 gap-3">
          <!-- Date & Time -->
          <div class="flex flex-wrap gap-x-4 gap-y-1">
            <div class="flex items-center gap-1.5">
              <i data-lucide="calendar" class="w-3.5 h-3.5 flex-shrink-0" style="color:#A07850;"></i>
              <span style="font-family:'Nunito',sans-serif;font-size:0.78rem;font-weight:700;color:#A07850;"><?=$event['date']?></span>
            </div>
            <div class="flex items-center gap-1.5">
              <i data-lucide="clock" class="w-3.5 h-3.5 flex-shrink-0" style="color:#8B6850;opacity:0.7;"></i>
              <span style="font-family:'Nunito',sans-serif;font-size:0.78rem;color:#8B6850;"><?=$event['time']?></span>
            </div>
          </div>

          <h2 style="font-family:'Playfair Display',serif;font-size:1.15rem;color:#3A2A1E;line-height:1.3;"><?=$event['title']?></h2>

          <p style="font-family:'Nunito',sans-serif;font-size:0.855rem;color:#8B6850;line-height:1.65;flex:1;"><?=$event['desc']?></p>
        </div>
      </article>
      <?php endforeach; ?>

    </div>

    <!-- Follow CTA -->
    <div class="mt-16 reveal">
      <div class="rounded-3xl p-10 text-center" style="background:#ffffff;border:1px solid rgba(0,0,0,0.04);box-shadow:0 4px 30px rgba(0,0,0,0.015);">
        <div class="icon-box icon-box-lg mx-auto mb-4">
          <i data-lucide="bell" class="w-5 h-5"></i>
        </div>
        <h2 style="font-family:'Playfair Display',serif;font-size:1.75rem;color:#3A2A1E;margin-bottom:0.75rem;">Stay in the Loop</h2>
        <p style="font-family:'Nunito',sans-serif;font-size:0.9rem;color:#8B6850;max-width:400px;margin:0 auto 1.75rem;line-height:1.65;">
          Follow us on social media to hear about upcoming events, new menu additions, and our cats' daily adventures.
        </p>
        <div class="flex justify-center gap-3">
          <a href="https://instagram.com" id="events-instagram" target="_blank" rel="noopener" class="btn-outline btn-sm">
            <i data-lucide="instagram" class="w-4 h-4"></i>
            Instagram
          </a>
          <a href="https://facebook.com" id="events-facebook" target="_blank" rel="noopener" class="btn-primary btn-sm">
            <i data-lucide="facebook" class="w-4 h-4"></i>
            Facebook
          </a>
        </div>
      </div>
    </div>

  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
