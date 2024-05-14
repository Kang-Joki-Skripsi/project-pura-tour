/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['*.html'],
  theme: {
    screens: {
      "sm": '640px',
      "md": '768px',
      "lg": '1024px',
      "xl": '1280px',
      "2xl": '1440px',
      "3xl": '1600px',
    },
    extend: {},
    container: {
      center: true,
    },
  },
  plugins: [],
};
