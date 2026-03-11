import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.tsx',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            borderColor: {
                'border': '#e5e7eb',
            },
            colors: {
                background: 'var(--background)',
                foreground: 'var(--foreground)',
                card: 'var(--card)',
                primary: 'var(--primary)',
                secondary: 'var(--secondary)',
                muted: 'var(--muted)',
                accent: 'var(--accent)',
                destructive: 'var(--destructive)',
                border: 'var(--border)',
                input: 'var(--input)',
                ring: 'var(--ring)',
            },
        },
    },

    plugins: [forms],
};
