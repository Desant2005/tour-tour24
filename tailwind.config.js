const colors = require('tailwindcss/colors')
module.exports = {
    mode: 'jit',
    // purge: {
    //   enabled: true,
    //   content:['./*.html']
    // },
    purge: ['./*.html'],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: colors,
            colors: {
                blue: colors.sky,
                orange: colors.orange
            },
            container: {
                center: true,
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}