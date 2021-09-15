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
        screens: {
            'xs': '425px',
            // => @media (min-width: 425px) { ... }
      
            'sm': '640px',
            // => @media (min-width: 640px) { ... }
      
            'md': '768px',
            // => @media (min-width: 768px) { ... }
      
            'lg': '1024px',
            // => @media (min-width: 1024px) { ... }
      
            'xl': '1280px',
            // => @media (min-width: 1280px) { ... }
      
            '2xl': '1536px',
            // => @media (min-width: 1536px) { ... }
          }
    },
    variants: {
        extend: {},
    },
    plugins: [],
}