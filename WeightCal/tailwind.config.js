/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./build/*.html"],
    theme: {
        extend: {
            fontFamily: {
                Poppins: ["Poppins"],
            },

            colors: {
                customDarkBlue: "#022b3a",
                customBlue: "#1f7a8c",
                customLightBlue: "#bfdbf7",
                customGrey: "#e1e5f2",
                customWhite: "#ffffff",
            },
        },
    },
    plugins: [],
};
