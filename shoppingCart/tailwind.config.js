/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./build/*.html", "./build/js/script.js"],
  theme: {
    extend: {
      fontFamily: {
        Poppins: ["Poppins"],
      },

      colors: {
        customRed: "#e63946",
        customWhite: "#f1faee",
        customLightBlue: "#a8dadc",
        customSkyBlue: "#457b9d",
        customDarkBlue: "#1d3557",
      },
    },
  },
  plugins: [],
};
