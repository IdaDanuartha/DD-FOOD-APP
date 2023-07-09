/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    screens: {
      '2xs': '375px',
      'xs': '450px',
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    },
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

