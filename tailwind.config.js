/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['*.html'],
  theme: {
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '2xl': '1440px',
      '3xl': '1600px',
    },
    extend: {
      backgroundImage: {
        "hero": 'url("../img/hero.jpg")',
      },
      colors: {
        primary: '#c86d41',
        secondary: '#656d71',
      },
      animation: {
        popupAnimation: 'popupAnimation 0.3s ease',
      },
      keyframes: {
        popupAnimation: {
          '0%': { transform: 'scale(0.5)', opacity: 0 },
          '100%': { transform: 'scale(1)', opacity: 1 },
        },
      },
    },
    container: {
      center: true,
    },
    fontFamily: {
      'open-sans': ['"Open Sans"'],
    },
  },
  plugins: [],
};
