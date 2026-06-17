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
        // Core Apple-like palette
        'apple-bg':   '#FAF8F5', // Oat milk / Warm paper
        'apple-card': '#FFFFFF',
        black:        '#2C2C2E', // Softer black
        white:        '#FFFFFF',
        
        // Cafe Theme Palette (Apple-tier elegance)
        theme: {
          brown: '#a26840', // Base Theme Color
          accent: '#c58356', // Lighter Accent Color
          glow:   'rgba(162, 104, 64, 0.2)',
          glowAccent: 'rgba(197, 131, 86, 0.2)'
        },

        // Neutrals
        gray: {
          light:  '#E5E5EA',
          muted:  '#8E8E93',
          dark:   '#1C1C1E',
          text:   '#3A3A3C'
        },
        border: 'rgba(0,0,0,0.05)',
      },
      fontFamily: {
        sans:  ['Inter', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'sans-serif'],
        serif: ['Inter', 'system-ui', 'sans-serif'], 
      },
      borderRadius: {
        '2xl': '1rem',
        '3xl': '1.5rem',
        '4xl': '2rem',
        '5xl': '2.5rem',
        'bento': '2rem',
      },
      boxShadow: {
        'apple-subtle': '0 2px 8px rgba(0,0,0,0.04)',
        'apple-card':   '0 8px 32px rgba(0,0,0,0.05)',
        'theme-glow': '0 8px 32px rgba(162, 104, 64, 0.15)',
      },
      animation: {
        'fade-up':  'fadeUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards',
        'fade-in':  'fadeIn 0.5s ease forwards',
        'float':    'float 6s ease-in-out infinite',
        'glow-pulse': 'glowPulse 3s infinite alternate',
      },
      keyframes: {
        fadeUp: {
          '0%':   { opacity: '0', transform: 'translateY(24px) scale(0.98)' },
          '100%': { opacity: '1', transform: 'translateY(0) scale(1)' },
        },
        fadeIn: {
          '0%':   { opacity: '0' },
          '100%': { opacity: '1' },
        },
        float: {
          '0%, 100%': { transform: 'translateY(0)' },
          '50%':      { transform: 'translateY(-10px)' },
        },
        glowPulse: {
          '0%':   { opacity: '0.3', transform: 'scale(1)' },
          '100%': { opacity: '0.6', transform: 'scale(1.05)' },
        }
      },
    },
  },
  plugins: [],
}
