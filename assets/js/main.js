/**
 * main.js — Neko & Kopi Interactions
 */
document.addEventListener('DOMContentLoaded', () => {

  /* 1. Init Lucide Icons */
  if (typeof lucide !== 'undefined') lucide.createIcons();

  /* 2. Sticky navbar */
  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', () => {
    navbar?.classList.toggle('scrolled', window.scrollY > 50);
  }, { passive: true });

  /* 3. Mobile hamburger */
  const menuBtn   = document.getElementById('menu-btn');
  const mobileNav = document.getElementById('mobile-menu');
  const iconOpen  = document.getElementById('icon-open');
  const iconClose = document.getElementById('icon-close');

  menuBtn?.addEventListener('click', () => {
    const isOpen = mobileNav?.classList.toggle('open');
    iconOpen?.classList.toggle('hidden', isOpen);
    iconClose?.classList.toggle('hidden', !isOpen);
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

  /* 5. Menu category tabs */
  const tabs     = document.querySelectorAll('.cat-tab');
  const sections = document.querySelectorAll('.menu-section');

  if (tabs.length) {
    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        const target = tab.dataset.category;
        
        // Skip for homepage tab selector, which uses switchHomeMenu inline function
        if (tab.classList.contains('home-menu-tab')) return;

        tabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        
        sections.forEach(sec => {
          const match = target === 'all' || sec.dataset.category === target;
          if (match) {
            sec.style.display = '';
            sec.style.opacity = '0';
            sec.style.transform = 'translateY(12px)';
            sec.style.transition = 'all 0.35s ease';
            // Force reflow
            sec.offsetHeight;
            sec.style.opacity = '1';
            sec.style.transform = 'translateY(0)';
          } else {
            sec.style.display = 'none';
          }
        });
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

  /* 7. Contact form */
  const contactForm = document.getElementById('contact-form');
  const formMsg     = document.getElementById('form-message');
  contactForm?.addEventListener('submit', (e) => {
    e.preventDefault();
    if (formMsg) {
      formMsg.textContent = 'Thank you for your message! We\'ll get back to you within 24 hours.';
      formMsg.classList.remove('hidden');
      setTimeout(() => formMsg.classList.add('hidden'), 6000);
    }
    contactForm.reset();
  });

  /* 8. Smooth scroll */
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', function(e) {
      const t = document.querySelector(this.getAttribute('href'));
      if (t) { e.preventDefault(); t.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
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

});
