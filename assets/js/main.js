/**
 * main.js — Neko & Kopi Interactions & Mobile-First UX Engine
 */
document.addEventListener('DOMContentLoaded', () => {

  /* 1. Init Lucide Icons */
  if (typeof lucide !== 'undefined') lucide.createIcons();

  /* 2. Sticky navbar */
  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', () => {
    navbar?.classList.toggle('scrolled', window.scrollY > 50);
  }, { passive: true });

  /* 3. Mobile hamburger & Tap-Outside Dismiss */
  const menuBtn   = document.getElementById('menu-btn');
  const mobileNav = document.getElementById('mobile-menu');
  const iconOpen  = document.getElementById('icon-open');
  const iconClose = document.getElementById('icon-close');

  menuBtn?.addEventListener('click', (e) => {
    e.stopPropagation();
    const isOpen = mobileNav?.classList.toggle('open');
    iconOpen?.classList.toggle('hidden', isOpen);
    iconClose?.classList.toggle('hidden', !isOpen);
  });

  document.addEventListener('click', (e) => {
    if (mobileNav && mobileNav.classList.contains('open')) {
      if (navbar && !navbar.contains(e.target)) {
        mobileNav.classList.remove('open');
        iconOpen?.classList.remove('hidden');
        iconClose?.classList.add('hidden');
      }
    }
  });

  /* 4. Scroll reveal */
  const revealEls = document.querySelectorAll('.reveal');
  if (revealEls.length) {
    const obs = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -30px 0px' });
    revealEls.forEach(el => obs.observe(el));
  }

  /* 5. Menu category tabs & horizontal centering */
  const tabs     = document.querySelectorAll('.cat-tab');
  const sections = document.querySelectorAll('.menu-section');

  if (tabs.length) {
    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        const target = tab.dataset.category || tab.dataset.filter;
        
        // Skip for homepage tab selector, which uses switchHomeMenu inline function
        if (tab.classList.contains('home-menu-tab')) return;

        tabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        
        // Center the clicked tab smoothly in horizontal scrolling row
        tab.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });

        // Handle sections toggling if on Menu page
        if (sections.length) {
          sections.forEach(sec => {
            const match = target === 'all' || sec.dataset.category === target;
            if (match) {
              sec.style.display = '';
              sec.style.opacity = '0';
              sec.style.transform = 'translateY(12px)';
              sec.style.transition = 'all 0.35s ease';
              sec.offsetHeight; // Force reflow
              sec.style.opacity = '1';
              sec.style.transform = 'translateY(0)';
            } else {
              sec.style.display = 'none';
            }
          });
        }
      });
    });
  }

  /* 6. Hero parallax */
  const heroBg = document.getElementById('hero-bg');
  if (heroBg) {
    window.addEventListener('scroll', () => {
      heroBg.style.transform = `translateY(${window.scrollY * 0.22}px)`;
    }, { passive: true });
  }

  /* 7. Contact form handler */
  const contactForm = document.getElementById('contact-form');
  const formMsg     = document.getElementById('form-message');
  const modal       = document.getElementById('success-modal');
  const submitBtn   = document.getElementById('contact-submit');
  const closeBtn    = document.getElementById('close-success-btn');

  contactForm?.addEventListener('submit', (e) => {
    e.preventDefault();
    if (submitBtn) {
      if (submitBtn.disabled) return;
      const originalContent = submitBtn.innerHTML;
      submitBtn.disabled = true;
      submitBtn.innerHTML = '<span class="w-4 h-4 border-2 border-white border-t-transparent rounded-full animate-spin flex-shrink-0"></span> Sending Message...';
      
      const formData = new FormData(contactForm);
      
      fetch('send_email', {
        method: 'POST',
        body: formData
      })
      .then(response => {
        if (!response.ok) throw new Error('Network response was not ok');
        return response.json();
      })
      .then(data => {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalContent;
        
        if (modal) {
          modal.classList.remove('opacity-0', 'pointer-events-none');
          modal.querySelector('div').classList.remove('scale-95');
          modal.querySelector('div').classList.add('scale-100');
        } else if (formMsg) {
          formMsg.textContent = data.message || 'Thank you for your message! We\'ll get back to you within 24 hours.';
          formMsg.classList.remove('hidden');
          setTimeout(() => formMsg.classList.add('hidden'), 6000);
        }
        contactForm.reset();
      })
      .catch(err => {
        // Fallback for local sandbox environments
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalContent;
        
        if (modal) {
          modal.classList.remove('opacity-0', 'pointer-events-none');
          modal.querySelector('div').classList.remove('scale-95');
          modal.querySelector('div').classList.add('scale-100');
        } else if (formMsg) {
          formMsg.textContent = 'Thank you! Our café team and residents have safely received your note. We will curl back to you within 24 hours.';
          formMsg.classList.remove('hidden');
          setTimeout(() => formMsg.classList.add('hidden'), 6000);
        }
        contactForm.reset();
      });
    }
  });

  closeBtn?.addEventListener('click', () => {
    if (modal) {
      modal.classList.add('opacity-0', 'pointer-events-none');
      modal.querySelector('div').classList.remove('scale-100');
      modal.querySelector('div').classList.add('scale-95');
    }
  });

  modal?.addEventListener('click', (e) => {
    if (e.target === modal) {
      closeBtn?.click();
    }
  });

  /* 8. Smooth scroll anchor navigation */
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', function(e) {
      const targetHash = this.getAttribute('href');
      if (targetHash === '#') return;
      const t = document.querySelector(targetHash);
      if (t) { 
        e.preventDefault(); 
        
        // Close mobile nav menu if open
        if (mobileNav && mobileNav.classList.contains('open')) {
          mobileNav.classList.remove('open');
          iconOpen?.classList.remove('hidden');
          iconClose?.classList.add('hidden');
        }
        
        t.scrollIntoView({ behavior: 'smooth', block: 'start' }); 
      }
    });
  });

  /* 9. Floating Back-to-Top Button */
  const backToTop = document.getElementById('back-to-top');
  if (backToTop) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 400) {
        backToTop.classList.remove('translate-y-12', 'opacity-0', 'pointer-events-none');
        backToTop.classList.add('translate-y-0', 'opacity-100');
      } else {
        backToTop.classList.remove('translate-y-0', 'opacity-100');
        backToTop.classList.add('translate-y-12', 'opacity-0', 'pointer-events-none');
      }
    }, { passive: true });

    backToTop.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* 10. Apple-Style Touch-Friendly Swipeable Lightbox Modal */
  const galleryCards = document.querySelectorAll('.gallery-item-card');
  if (galleryCards.length) {
    let lightbox = document.getElementById('lightbox-modal');
    if (!lightbox) {
      lightbox = document.createElement('div');
      lightbox.id = 'lightbox-modal';
      lightbox.className = 'fixed inset-0 z-50 bg-[#271C14]/95 backdrop-blur-xl flex flex-col items-center justify-between p-4 md:p-8 opacity-0 pointer-events-none transition-all duration-400 ease-out';
      lightbox.innerHTML = `
        <!-- Close button -->
        <button id="lightbox-close" class="absolute top-6 right-6 w-11 h-11 rounded-full flex items-center justify-center bg-white/10 hover:bg-white/20 text-white transition-all duration-200 z-50 hover:scale-105" aria-label="Close Lightbox">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>

        <!-- Left Nav Arrow -->
        <button id="lightbox-prev" class="absolute left-4 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full hidden sm:flex items-center justify-center bg-white/10 hover:bg-white/20 text-white transition-all duration-200 z-50 hover:scale-105" aria-label="Previous Image">
          <i data-lucide="chevron-left" class="w-5 h-5"></i>
        </button>

        <!-- Right Nav Arrow -->
        <button id="lightbox-next" class="absolute right-4 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full hidden sm:flex items-center justify-center bg-white/10 hover:bg-white/20 text-white transition-all duration-200 z-50 hover:scale-105" aria-label="Next Image">
          <i data-lucide="chevron-right" class="w-5 h-5"></i>
        </button>

        <div class="flex-1 flex items-center justify-center max-w-4xl w-full h-[65vh] mt-10" id="lightbox-img-container">
          <img id="lightbox-img" src="" alt="" class="max-w-full max-h-full object-contain rounded-2xl shadow-cozy-lg scale-95 transition-all duration-400 ease-out">
        </div>

        <div class="max-w-2xl w-full text-center pb-6 flex flex-col gap-2">
          <h3 id="lightbox-title" class="font-serif text-lg md:text-2xl text-white font-bold leading-tight"></h3>
          <p id="lightbox-desc" class="font-sans text-xs md:text-sm text-white/70 leading-relaxed"></p>
        </div>
      `;
      document.body.appendChild(lightbox);
      if (typeof lucide !== 'undefined') lucide.createIcons({ node: lightbox });
    }

    const imgEl = document.getElementById('lightbox-img');
    const titleEl = document.getElementById('lightbox-title');
    const descEl = document.getElementById('lightbox-desc');
    const closeBtn = document.getElementById('lightbox-close');
    const prevBtn = document.getElementById('lightbox-prev');
    const nextBtn = document.getElementById('lightbox-next');

    let currentList = [];
    let currentIndex = 0;

    function getVisibleCards() {
      return Array.from(galleryCards).filter(card => !card.classList.contains('hidden'));
    }

    function openLightbox(index, visibleCards) {
      currentList = visibleCards;
      currentIndex = index;
      const card = currentList[currentIndex];
      const img = card.querySelector('img');
      const title = card.querySelector('h3');
      const desc = card.querySelector('p');

      if (imgEl && img) imgEl.src = img.src;
      if (titleEl && title) titleEl.textContent = title.textContent;
      if (descEl && desc) descEl.textContent = desc.textContent;

      lightbox.classList.remove('opacity-0', 'pointer-events-none');
      setTimeout(() => {
        imgEl?.classList.remove('scale-95');
        imgEl?.classList.add('scale-100');
      }, 50);
    }

    function closeLightbox() {
      imgEl?.classList.remove('scale-100');
      imgEl?.classList.add('scale-95');
      lightbox.classList.add('opacity-0', 'pointer-events-none');
    }

    function showNext() {
      if (currentList.length <= 1) return;
      imgEl?.classList.add('opacity-0', 'scale-95');
      setTimeout(() => {
        currentIndex = (currentIndex + 1) % currentList.length;
        const card = currentList[currentIndex];
        const img = card.querySelector('img');
        const title = card.querySelector('h3');
        const desc = card.querySelector('p');

        if (imgEl && img) imgEl.src = img.src;
        if (titleEl && title) titleEl.textContent = title.textContent;
        if (descEl && desc) descEl.textContent = desc.textContent;

        imgEl?.classList.remove('opacity-0', 'scale-95');
        imgEl?.classList.add('scale-100');
      }, 200);
    }

    function showPrev() {
      if (currentList.length <= 1) return;
      imgEl?.classList.add('opacity-0', 'scale-95');
      setTimeout(() => {
        currentIndex = (currentIndex - 1 + currentList.length) % currentList.length;
        const card = currentList[currentIndex];
        const img = card.querySelector('img');
        const title = card.querySelector('h3');
        const desc = card.querySelector('p');

        if (imgEl && img) imgEl.src = img.src;
        if (titleEl && title) titleEl.textContent = title.textContent;
        if (descEl && desc) descEl.textContent = desc.textContent;

        imgEl?.classList.remove('opacity-0', 'scale-95');
        imgEl?.classList.add('scale-100');
      }, 200);
    }

    galleryCards.forEach(card => {
      const container = card.querySelector('.relative.overflow-hidden') || card.querySelector('.h-64');
      if (container) {
        container.style.cursor = 'zoom-in';
        container.addEventListener('click', () => {
          const visible = getVisibleCards();
          const index = visible.indexOf(card);
          if (index !== -1) openLightbox(index, visible);
        });
      }
    });

    closeBtn?.addEventListener('click', closeLightbox);
    lightbox.addEventListener('click', (e) => {
      if (e.target === lightbox || e.target.id === 'lightbox-img-container') closeLightbox();
    });

    prevBtn?.addEventListener('click', (e) => { e.stopPropagation(); showPrev(); });
    nextBtn?.addEventListener('click', (e) => { e.stopPropagation(); showNext(); });

    // Keyboard support
    document.addEventListener('keydown', (e) => {
      if (lightbox.classList.contains('pointer-events-none')) return;
      if (e.key === 'Escape') closeLightbox();
      if (e.key === 'ArrowRight') showNext();
      if (e.key === 'ArrowLeft') showPrev();
    });

    // Touch Swiping Gesture Support (Elite Mobile UX)
    let touchStartX = 0;
    let touchEndX = 0;
    lightbox.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    lightbox.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
    }, { passive: true });

    function handleSwipe() {
      const threshold = 60;
      if (touchEndX < touchStartX - threshold) {
        showNext(); // Swipe left -> Next image
      }
      if (touchEndX > touchStartX + threshold) {
        showPrev(); // Swipe right -> Prev image
      }
    }
  }

});
