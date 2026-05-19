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
        cream:      '#FAF6F0',
        'cream-dark': '#F3ECE0',
        beige:      '#E6DCD2',
        sage:       '#72997C',
        'sage-dark':'#53735B',
        'sage-light':'#EAF1EC',
        brown:      '#3A2A1E',
        'brown-dark':'#271C14',
        amber:      '#C4956A',
        'amber-light':'#F7EFE5',
        text:       '#3A2A1E',
        'text-light':'#8B6850',
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
        'cozy':   '0 8px 30px rgba(0,0,0,0.04)',
        'cozy-lg':'0 20px 50px rgba(0,0,0,0.08)',
        'warm':   '0 4px 20px rgba(0,0,0,0.03)',
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
