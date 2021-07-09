const colors = require('tailwindcss/colors');

module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      black: colors.black,
      white: colors.white,
      gray: colors.trueGray,
      green: colors.green, 
      indigo: colors.indigo,
      purple: colors.purple,
      pink: colors.pink,
      red: colors.rose,
      yellow: colors.amber,      
      cyan: colors.cyan,
      primary: {
        "500" : "#0EE8E1",
        "700" : "#18D1CB",
        "900" : "#0B9590",        
      },
    },
    extend: {
    },
  },
  variants: {
    extend: {
      backgroundColor: ['active']
    },
  },
  plugins: [],
}
