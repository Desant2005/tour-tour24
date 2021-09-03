const typography = require('windicss/plugin/typography')

module.exports = {
  safelist: ['prose', 'prose-sm', 'prose-lg', 'm-auto'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  plugins: [typography],
}
