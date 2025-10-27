import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                navBlue1: "#588CD4",
                navBlue2: "#B2CAEB",
                navBlue3: "#588CD4",
                navBlue4: "#8CB0E2",
                navIndigo: "#2F18AA",
                footerVioletLight: "#7C3AED4D",
                footerVioletDark: "#7C3AED26",
                subBannerBg: "#797497",
                bgViolet: "#29205b",
                infoCardBg: "#777295B3",
                tableHead: "#a89cee", 
                grayDark:"#46484b",
                grayLight:"#757b83"
            },
        },
    },

    plugins: [forms],
};
