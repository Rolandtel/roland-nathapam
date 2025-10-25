/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./vendor/livewire/flux/**/*.blade.php",
    "./vendor/livewire/flux-pro/**/*.blade.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        'montserrat': ['Montserrat', 'sans-serif'],
        'inter': ['Inter', 'sans-serif'],
      },
      colors: {
        primary: {
          DEFAULT: '#004AAD',
          dark: '#003580',
        },
        secondary: '#D4AF37',
        accent: '#4DB7FE',
        navy: '#1E2A38',
        'light-gray': '#F5F6FA',
      },
    },
  },
  plugins: [],
}