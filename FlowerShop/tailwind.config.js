/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./build/*.html", "./build/js/*.js", "./build/php/*.php"],
    theme: {
        extend: {
            fontFamily: {
                Rubik: ["Rubik"],
            },

            colors: {
                customWhite: "#ffe5ec",
                customVeryLightPink: "#ffc2d1",
                customPink: "#ffb3c6",
                customDarkPink: "#ff8fab",
                customVeryDarkPink: "#fb6f92",
                customOrange: "#e5989b",
            },

            backgroundImage: {
                hero: "url('images/flowers-waffle-cones-composition.jpg')",
            },
        },
    },
    plugins: [],
};
