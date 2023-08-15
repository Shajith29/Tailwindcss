/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./build/*.html", "./build/js/*.js"],
    theme: {
        extend: {
            fontFamily: {
                Poppins: ["Poppins"],
            },

            colors: {
                customWhite: "#F6F4EB",
                customBlue: "#91C8E4",
                customGreyBlue: "#749BC2",
                customDarkBlue: "#4682A9",
            },
        },
    },
    plugins: [],
};
