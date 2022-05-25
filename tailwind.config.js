const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    darkMode: "class",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],

    theme: {
        container: {
            center: true,
        },
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                "navigation-before-white": "35px 35px 0 10px #f1f5f9",
                "navigation-before-black": "35px 35px 0 10px #081724",
                "navigation-after-white": "35px -35px 0 10px #f1f5f9",
                "navigation-after-black": "35px -35px 0 10px #081724",
            },
        },
        screens: {
            sm: { min: "640px", max: "767px" },
            // => @media (min-width: 640px and max-width: 767px) { ... }

            md: { min: "768px", max: "1023px" },
            // => @media (min-width: 768px and max-width: 1023px) { ... }

            lg: { min: "1024px", max: "1279px" },
            // => @media (min-width: 1024px and max-width: 1279px) { ... }

            xl: { min: "1280px", max: "1535px" },
            // => @media (min-width: 1280px and max-width: 1535px) { ... }

            "2xl": { min: "1536px" },
            // => @media (min-width: 1536px) { ... }
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("flowbite/plugin"),
        require("tw-elements/dist/plugin"),
    ],
};
