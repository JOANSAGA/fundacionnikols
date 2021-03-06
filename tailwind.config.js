const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                primary: '#004899',
                secondary: '#FCEE60',
                whatsapp: '#00BFA5',
                resaltar: '#FAB545',
                morado: '#9731B0',
            },
            fontFamily: {
                'sans': ['"Century Gothic"']
            },
        },

    },
    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },
    plugins: [require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp'),
        require('@tailwindcss/aspect-ratio')
    ],
};
