/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      keyframes: {
        bgcolorchange: {
          '0%': {
            backgroundImage: 'linear-gradient(to right top, #ff0091, #f000a8, #db1bc0, #bc32d6, #9245ea, #6b67f9, #3f7fff, #0092ff, #00b2ff, #00cfff, #00e8ff, #00ffef)',
          },
          '4.5%': {
            backgroundImage: 'linear-gradient(to right top, #f000a8, #ff0091, #f000a8, #db1bc0, #bc32d6, #9245ea, #6b67f9, #3f7fff, #0092ff, #00b2ff, #00cfff, #00e8ff)',
          },
          '9%': {
            backgroundImage: 'linear-gradient(to right top, #db1bc0, #f000a8, #ff0091, #f000a8, #db1bc0, #bc32d6, #9245ea, #6b67f9, #3f7fff, #0092ff, #00b2ff, #00cfff)',
          },
          '13.5%': {
            backgroundImage: 'linear-gradient(to right top, #bc32d6, #db1bc0, #f000a8, #ff0091, #f000a8, #db1bc0, #bc32d6, #9245ea, #6b67f9, #3f7fff, #0092ff, #00b2ff)',
          },
          '18%': {
            backgroundImage: 'linear-gradient(to right top, #9245ea, #bc32d6, #db1bc0, #f000a8, #ff0091, #f000a8, #db1bc0, #bc32d6, #9245ea, #6b67f9, #3f7fff, #0092ff)',
          },
          '22.5%': {
            backgroundImage: 'linear-gradient(to right top, #6b67f9, #9245ea, #bc32d6, #db1bc0, #f000a8, #ff0091, #f000a8, #db1bc0, #bc32d6, #9245ea, #6b67f9, #3f7fff)',
          },
          '27%': {
            backgroundImage: 'linear-gradient(to right top, #3f7fff, #6b67f9, #9245ea, #bc32d6, #db1bc0, #f000a8, #ff0091, #f000a8, #db1bc0, #bc32d6, #9245ea, #6b67f9)',
          },
          '31.5%': {
            backgroundImage: 'linear-gradient(to right top, #0092ff, #3f7fff, #6b67f9, #9245ea, #bc32d6, #db1bc0, #f000a8, #ff0091, #f000a8, #db1bc0, #bc32d6, #9245ea)',
          },
          '36%': {
            backgroundImage: 'linear-gradient(to right top, #00b2ff, #0092ff, #3f7fff, #6b67f9, #9245ea, #bc32d6, #db1bc0, #f000a8, #ff0091, #f000a8, #db1bc0, #bc32d6)',
          },
          '40.5%': {
            backgroundImage: 'linear-gradient(to right top, #00cfff, #00b2ff, #0092ff, #3f7fff, #6b67f9, #9245ea, #bc32d6, #db1bc0, #f000a8, #ff0091, #f000a8, #db1bc0)',
          },
          '45%': {
            backgroundImage: 'linear-gradient(to right top, #00e8ff, #00cfff, #00b2ff, #0092ff, #3f7fff, #6b67f9, #9245ea, #bc32d6, #db1bc0, #f000a8, #ff0091, #f000a8)',
          },
          '49.5%': {
            backgroundImage: 'linear-gradient(to right top, #00ffef, #00e8ff, #00cfff, #00b2ff, #0092ff, #3f7fff, #6b67f9, #9245ea, #bc32d6, #db1bc0, #f000a8, #ff0091)',
          },
          '54%': {
            backgroundImage: 'linear-gradient(to right top, #00e8ff, #00ffef, #00e8ff, #00cfff, #00b2ff, #0092ff, #3f7fff, #6b67f9, #9245ea, #bc32d6, #db1bc0, #f000a8)',
          },
          '58.5%': {
            backgroundImage: 'linear-gradient(to right top, #00cfff, #00e8ff, #00ffef, #00e8ff, #00cfff, #00b2ff, #0092ff, #3f7fff, #6b67f9, #9245ea, #bc32d6, #db1bc0)',
          },
          '63%': {
            backgroundImage: 'linear-gradient(to right top, #00b2ff, #00cfff, #00e8ff, #00ffef, #00e8ff, #00cfff, #00b2ff, #0092ff, #3f7fff, #6b67f9, #9245ea, #bc32d6)',
          },
          '67.5%': {
            backgroundImage: 'linear-gradient(to right top, #0092ff, #00b2ff, #00cfff, #00e8ff, #00ffef, #00e8ff, #00cfff, #00b2ff, #0092ff, #3f7fff, #6b67f9, #9245ea)',
          },
          '72%': {
            backgroundImage: 'linear-gradient(to right top, #3f7fff, #0092ff, #00b2ff, #00cfff, #00e8ff, #00ffef, #00e8ff, #00cfff, #00b2ff, #0092ff, #3f7fff, #6b67f9)',
          },
          '76.5%': {
            backgroundImage: 'linear-gradient(to right top, #6b67f9, #3f7fff, #0092ff, #00b2ff, #00cfff, #00e8ff, #00ffef, #00e8ff, #00cfff, #00b2ff, #0092ff, #3f7fff)',
          },
          '81%': {
            backgroundImage: 'linear-gradient(to right top, #9245ea, #6b67f9, #3f7fff, #0092ff, #00b2ff, #00cfff, #00e8ff, #00ffef, #00e8ff, #00cfff, #00b2ff, #0092ff)',
          },
          '85.5%': {
            backgroundImage: 'linear-gradient(to right top, #bc32d6, #9245ea, #6b67f9, #3f7fff, #0092ff, #00b2ff, #00cfff, #00e8ff, #00ffef, #00e8ff, #00cfff, #00b2ff)',
          },
          '90%': {
            backgroundImage: 'linear-gradient(to right top, #db1bc0, #bc32d6, #9245ea, #6b67f9, #3f7fff, #0092ff, #00b2ff, #00cfff, #00e8ff, #00ffef, #00e8ff, #00cfff)',
          },
          '95%': {
            backgroundImage: 'linear-gradient(to right top, #f000a8, #db1bc0, #bc32d6, #9245ea, #6b67f9, #3f7fff, #0092ff, #00b2ff, #00cfff, #00e8ff, #00ffef, #00e8ff)',
          },
          '100%': {
            backgroundImage: 'linear-gradient(to right top, #ff0091, #f000a8, #db1bc0, #bc32d6, #9245ea, #6b67f9, #3f7fff, #0092ff, #00b2ff, #00cfff, #00e8ff, #00ffef)',
          },
        },
      },
      animation: {
        'bg-pelangi': 'bgcolorchange 1.8s infinite',
      },
    },
  },
  plugins: [],
}

