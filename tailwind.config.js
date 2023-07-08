/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        "main-color": "#1A5D1A"
      },
      fontFamily: {
        "light": ["montserrat-light", 'arial', 'sans-serif'],
        "regular": ["montserrat-regular", 'arial', 'sans-serif'],
        "medium": ["montserrat-medium", 'arial', 'sans-serif'],
        "semibold": ["montserrat-semibold", 'arial', 'sans-serif'],
        "bold": ["montserrat-bold", 'arial', 'sans-serif']
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

