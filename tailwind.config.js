/** @type {import('tailwindcss').Config} */
const plugin = require("tailwindcss/plugin");
module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.{js,jsx}"],
    theme: {
        extend: {
            colors: {
                dark: "#212341",
                "brand": {
                    50:"var(--bs-brand_50)",
                    100:"var(--bs-brand_100)",
                    200:"var(--bs-brand_200)",
                    300:"var(--bs-brand_300)",
                    400:"var(--bs-brand_400)",
                    500:"var(--bs-brand_500)",
                    600:"var(--bs-brand_600)",
                    700:"var(--bs-brand_700)",
                    800:"var(--bs-brand_800)",
                    900:"var(--bs-brand_900)",
                    950:"var(--bs-brand_950)",
                  }
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
            },
            {
                ".center-between": {
                    "display": "flex",
                    "justify-content": "space-between",
                    "align-items": "center",
                }
            }
            );
        }),
    ],
    prefix: "tw-",
};
