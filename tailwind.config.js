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
                sangre: {      
                    50: 'var(--color-sangre-50)',
                    100: 'var(--color-sangre-100)',
                    200: 'var(--color-sangre-200)',
                    300: 'var(--color-sangre-300)',
                    400: 'var(--color-sangre-400)',
                    500: 'var(--color-sangre-500)',
                    600: 'var(--color-sangre-600)',
                    700: 'var(--color-sangre-700)',
                    800: 'var(--color-sangre-800)',
                    900: 'var(--color-sangre-900)', 
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
