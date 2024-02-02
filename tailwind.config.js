/** @type {import('tailwindcss').Config} */
const plugin = require("tailwindcss/plugin");
module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.{js,jsx}"],
    theme: {
        extend: {
            colors: {
                dark: "#212341",
            },
        },
    },
    plugins: [
        plugin(function ({ addBase, addComponents, addUtilities, theme }) {
            addComponents({
                ".center": {
                  "display": "flex",
                  "justify-content": "center",
                  "align-items": "center",
                },
            });
        }),
    ],
    prefix: "tw-",
};
