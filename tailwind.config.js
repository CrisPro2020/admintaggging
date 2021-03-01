const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {

        screens: {
            // sm: '640px',
            // md: '1024px',
            // lg: '1200px',
            // xl: '1600px',

            'sm': {'max': '640px'},
            'md': {'max': '1024px'},
            'lg': {'max': '1200px'},
            'xl': {'max': '1600px'},
        },

        colors: {
            primary: 'var(--primary-color)',
            secondary: 'var(--secondary-color)',

            primary20: 'var(--primary-color-20)',
            primary3: 'var(--primary-color-3)',

            primary30: 'var(--primary-color-3-30)',
            white: 'var(--white-color)',
            black: 'var(--black-color)',
        },
        fontSize: {
            'xs': '0.625rem', // 10px
            'sm': '0.8125rem', // 13px
            'tiny': '0.875rem', // 14px
            'base': '1rem', // 16px
            'lg': '1.125rem', // 18px
            'xl': '1.875rem', // 30px
        },

        spacing: {
            '1': '2px',
            '2': '4px',
            '3': '6px',
            '4': '8px',
            '5': '10px',
            '6': '12px',
            '7': '14px',
            '8': '16px',
            '9': '18px',
            '10': '20px',
        }

            
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};