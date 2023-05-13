const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: "var(--font-sans)",
                serif: "var(--font-serif)",
            },
            colors: {
                primary: {
                    DEFAULT: "#0AA884",
                },
                gray: {
                    DEFAULT: "#F5F5F5",
                    light: "#FAFBFC",
                    dark: "rgba(30, 30, 30, 0.7)",
                },
            },
        },
        container: {
            padding: {
                DEFAULT: "1rem",
                sm: "2rem",
                lg: "4rem",
                xl: "5rem",
                "2xl": "6rem",
            },
            center: true,
        },
    },
};
