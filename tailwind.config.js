const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    darkMode: "class",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
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
    },

    plugins: [require("@tailwindcss/forms")],
};
