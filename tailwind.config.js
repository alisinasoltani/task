/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
  daisyui: {
    themes: false,
    darkTheme: false,
    base: false,
    styled: true,
    utils: true,
    rtl: false,
    prefix: "",
    logs: true,
  },
}

