module.exports = {
  theme: {
    extend: {},
  },
  plugins: [
      require('@tailwindcss/line-clamp'),
  ],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
}
