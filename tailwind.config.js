module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                'concert': "url('/assets/concert.jpg')",
              }
        },
    },
    plugins: [
        require('@tailwindcss/line-clamp'),
    ],
}
