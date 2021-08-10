const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                aguacate: {      
                    50: 'var(--color-aguacate-50)',
                    100: 'var(--color-aguacate-100)',
                    200: 'var(--color-aguacate-200)',
                    300: 'var(--color-aguacate-300)',
                    400: 'var(--color-aguacate-400)',
                    500: 'var(--color-aguacate-500)',
                    600: 'var(--color-aguacate-600)',
                    700: 'var(--color-aguacate-700)',
                    800: 'var(--color-aguacate-800)',
                    900: 'var(--color-aguacate-900)',
                },
            }   
        },
        container: {
            center: true,   
        },    
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), require('@tailwindcss/line-clamp')],
};
