/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./build/*.html", "./build/js/*.js"],
  theme: {
    extend: {
      fontFamily: {
        Poppins: ["Poppins"],
      },

      colors: {
        customDarkBlue: "#0d1b2a",
        customNavyBlue: "#1b263b",
        customLightBlue: "#415a77",
        customGrey: "#778da9",
        customWhite: "#e0e1dd",
      },
    },
  },
  plugins: [],
};
