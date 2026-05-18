/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./pages/**/*.php",
    "./includes/**/*.php",
    "./assets/js/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        cream:      '#FDF6EC',
        'cream-dark': '#F5EAD7',
        beige:      '#EDE0CC',
        sage:       '#8FAF8A',
        'sage-dark':'#6A8C65',
        'sage-light':'#B8D4B4',
        brown:      '#8B6347',
        'brown-dark':'#5C3D2E',
        amber:      '#D4A96A',
        'amber-light':'#E8C99A',
        text:       '#3D2B1F',
        'text-light':'#7A5C4A',
      },
      fontFamily: {
        serif:  ['Playfair Display', 'Georgia', 'serif'],
        sans:   ['Nunito', 'system-ui', 'sans-serif'],
      },
      borderRadius: {
        '2xl': '1rem',
        '3xl': '1.5rem',
        '4xl': '2rem',
      },
      boxShadow: {
        'cozy':   '0 4px 24px rgba(139,99,71,0.12)',
        'cozy-lg':'0 12px 48px rgba(139,99,71,0.18)',
        'warm':   '0 2px 12px rgba(212,169,106,0.25)',
      },
      backgroundImage: {
        'hero-pattern': "url('../images/hero.png')",
      },
      animation: {
        'fade-up':   'fadeUp 0.8s ease forwards',
        'fade-in':   'fadeIn 0.6s ease forwards',
        'float':     'float 3s ease-in-out infinite',
        'paw-bounce':'pawBounce 1.2s ease-in-out infinite',
      },
      keyframes: {
        fadeUp: {
          '0%':   { opacity: '0', transform: 'translateY(30px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        fadeIn: {
          '0%':   { opacity: '0' },
          '100%': { opacity: '1' },
        },
        float: {
          '0%, 100%': { transform: 'translateY(0px)' },
          '50%':      { transform: 'translateY(-8px)' },
        },
        pawBounce: {
          '0%, 100%': { transform: 'scale(1)' },
          '50%':      { transform: 'scale(1.15)' },
        },
      },
    },
  },
  plugins: [],
}
