const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                'dancing': ['Dancing Script'],
                'comic':['Comic Neue'],
                'korn':['Vollkorn']
            },
            colors:{
                vino: '#722f37',
                vinoclaro:'#9e6f74',
                vinoclarisimo:'#edebeb',
                brun:'#e3e0b1'
              },
            backgroundImage: theme => ({
                'amarillo': "url('/storage/img/3.jpg')",
                'azul': "url('/storage/img/2.jpg')",
                'sac':"url(/storage/img/9.jpg)"
               })
        
        },
        
    },

    variants: {
        extend: {
            opacity: ['responsive', 'hover', 'focus', 'disabled'],
            fontWeight: ['hover', 'focus'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
    corePlugins: {
        // ...
       container: false,
      },
      experimental: {
        applyComplexClasses: true,
      },
      outline: false,
};
