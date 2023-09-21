/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./build/*.html", "./build/js/*.js"],
  theme: {
    extend: {
      fontFamily: {
        Poppins: ["Poppins"],
      },

      colors: {
        customDarkPurple: "#22223b",
        customLightPurple: "#4a4e69",
        customVeryLightPurple: "#9a8c98",
        customBrown: "#c9ada7",
        customSandal: "#f2e9e4",
      },
    },
  },
  plugins: [],
};
