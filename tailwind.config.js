/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php', // Scan all PHP files in your theme
    './**/*.html', // Scan all HTML files
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('daisyui'),
  ],
}

