import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        colors: {
            'regal_violet': '#01021D',
            'regal_blue': '#3828c7',
            'regal_blue_light': '#3826c6',
            'regal_yellow': '#efdf0a',
            'regal_pink': '#f579f3',
        },
    },
  },
    plugins: [
        require("@tailwindcss/typography"),
        require("daisyui")
    ],
    daisyui: {
        themes: ["light", "dark", "cupcake"],
    },
}




/**export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**//***.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};**/
